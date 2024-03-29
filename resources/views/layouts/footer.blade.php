@section('footer')
<?php
if (auth()->check() == true) {
  $user_id = auth()->user()->id;
} else {
  $user_id = null;
}
?>
<footer id="footer" style="position: relative; width: 100%;height: auto;background: grey; margin-top: 100px">
        <div class="container">
            <h3>Vehiauto.com</h3>
            <p>vehiauto is a emerging web marketplace for your vehicle needs.</p>
            <div class="social-links">
                <a href="https://twitter.com" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/kasunclement/" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instergram.com" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://google-plus.com" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="https://www.linkedin.com" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                <strong>Copyright &copy; <?php echo date("Y"); ?> <a href="./">Vehiauto.com</a></strong><br>
                <strong style="font-size: 18px; font-family:'Courier New', Courier, monospace">Designed by: Clementechs</strong>
            </div>
        </div>
        <!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->
    </footer>
    <!--End Footer-->
    <div class="user-event-section">
    <!-- Start User Event Area -->
    <div class="col pos-relative">

        <div class="user-event-area sticky">
            <div class="user-event user-event--left">
                <a area-label="event link icon" href="{{ asset('/') }}" class="event-btn-link"><i class="icon icon-carce-home" title="home"></i></a>
                <a area-label="wishlist icon" href="{{ ($user_id != null) ? asset('/user-favourite-page/id/'.$user_id) : asset('/login_cust'); }}" class="event-btn-link"><i class="icon icon-carce-heart" title="favourite items"></i></a>
            </div>
            <div class="user-event user-event--center" title="create post">
                <a area-label="cart icon" href="{{ asset('/create-post') }}" class="event-btn-link"><i class="fa fa-plus" aria-hidden="true"></i></a>
            </div>
            <div class="user-event user-event--right">
                <a area-label="order icon" href="{{ asset('/user-notifications') }}" class="event-btn-link"><i class="fa fa-bell" aria-hidden="true" title="notifications"></i><span class="sr-only">notifications</span></a>
                <a area-label="chat icon" href="{{ asset('/user-messeges') }}" class="event-btn-link"><i class="icon icon-carce-bubbles2" title="messages"></i></a>
            </div>
        </div>
    </div>
    <!-- End User Event Area -->
</div>
@endsection