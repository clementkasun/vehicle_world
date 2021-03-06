<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <!-- <img style="width: 240px; height: 85px;" src="./dist/img/vehicle_logos.png"> -->
            <h2 class="logo me-auto" style="font-size: 30px;margin: 0;padding: 0;line-height: 1;font-weight: 700;letter-spacing: 1px;text-transform: uppercase;">VEHIAUTO.COM</h2>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-center mt-4">
                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif
                <x-jet-button class="ml-4">
                    {{ __('Login') }}
                </x-jet-button>
                <a href="./register_customer" class="ml-4" role="button">Register</a>
            </div>
        </form>
        <script>
            //            alert();
            //            var xhr = new XMLHttpRequest();
            //// we defined the xhr
            //
            //            xhr.onreadystatechange = function () {
            //                if (this.readyState != 4)
            //                    return;
            //
            //                if (this.status == 200) {
            //                    var data = JSON.parse(this.responseText);
            //
            //                    // we get the returned data
            //                }
            //
            //                // end of state change: it can be after some time (async)
            //            };
            //
            //            xhr.open('GET', '/sanctum/csrf-cookie', true);
            //            xhr.send();
        </script>
    </x-jet-authentication-card>
</x-guest-layout>