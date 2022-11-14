<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\Post;
use Illuminate\Support\Carbon;
use App\Notifications\PendingExpiredPostsNotification;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {

            $pending_expired_posts = Post::where('expire_date', Carbon::now()->addMonth()->format('Y-m-d'))
                ->With('User');

            foreach ($pending_expired_posts->get() as $pending_expired_post) {
                $post_title = $pending_expired_post->post_title;
                $expire_date = $pending_expired_post->expire_date;
                $user = $pending_expired_post->User;
                $user->notify(new PendingExpiredPostsNotification($user, $expire_date, $post_title));
            }

            $expired_posts = Post::where('expire_date', now()->format('Y-m-d'));

            foreach ($expired_posts->get() as $expired_post) {
                ($expired_post->post_type == 'VEHI') ? $file_id = $expired_post->vehicle_id : $file_id = $expired_post->spare_part_id;
                $path = public_path('/storage/post_images/' . $file_id . '/');
                // \File::deleteDirectory($path);
            }

            $expired_posts->delete();
        })->monthlyOn(31, '12:01');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
