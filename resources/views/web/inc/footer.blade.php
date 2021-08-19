  <!-- footer Start -->
  <footer class="footer section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="widget">
                    <h4 class="text-capitalize mb-4">Company</h4>

                    <ul class="list-unstyled footer-menu lh-35">
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="widget">
                    <h4 class="text-capitalize mb-4">Quick Links</h4>

                    <ul class="list-unstyled footer-menu lh-35">
                        <li><a href="/">Anasayfa</a></li>
                        <li><a href="{{route('web-hakkimizda')}}">Hakkımızda</a></li>
                        <li><a href="{{route('web-servisler')}}">Hizmetler</a></li>
                        <li><a href="{{route('web-galeri')}}">Galeri</a></li>
                        <li><a href="{{route('web-blog')}}">Blog</a></li>
                        <li><a href="{{route('web-iletisim')}}">İletişim</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="widget">
                    <h4 class="text-capitalize mb-4">Subscribe Us</h4>
                    <p>Subscribe to get latest news article and resources </p>

                    <form action="#" class="sub-form">
                        <input type="text" class="form-control mb-3" placeholder="Subscribe Now ...">
                        <a href="#" class="btn btn-main btn-small">subscribe</a>
                    </form>
                </div>
            </div>

            <div class="col-lg-3 ml-auto col-sm-6">
                <div class="widget">
                    <div class="logo mb-4">
                        <h3>Mega<span>kit.</span></h3>
                    </div>
                    <h6><a href="mailto:{{$data->email}}" >{{$data->email}}</a></h6>
                    <a href="tel:{{$data->telefon}}"><span class="text-color h4">{{$data->telefon}}</span></a>
                </div>
            </div>
        </div>

        <div class="footer-btm pt-4">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright">
                        &copy; Copyright Reserved to <span class="text-color">ceppatron.</span> by <a
                            href="#" target="_blank">Sezer Bölük</a>
                    </div>
                </div>
                <div class="col-lg-6 text-left text-lg-right">
                    <ul class="list-inline footer-socials">
                        <li class="list-inline-item"><a href="{{$data->facebook}}"><i
                                    class="ti-facebook mr-2"></i>Facebook</a></li>
                        <li class="list-inline-item"><a href="{{$data->twitter}}"><i
                                    class="ti-twitter mr-2"></i>Twitter</a></li>
                        <li class="list-inline-item"><a href="{{$data->instagram}}"><i
                                    class="ti-instagram mr-2 "></i>Instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>

<!--
Essential Scripts
=====================================-->


<!-- Main jQuery -->
<script src="plugins/jquery/jquery.js"></script>
<script src="js/contact.js"></script>
<!-- Bootstrap 4.3.1 -->
<script src="plugins/bootstrap/js/popper.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<!--  Magnific Popup-->
<script src="plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
<!-- Slick Slider -->
<script src="plugins/slick-carousel/slick/slick.min.js"></script>
<!-- Counterup -->
<script src="plugins/counterup/jquery.waypoints.min.js"></script>
<script src="plugins/counterup/jquery.counterup.min.js"></script>

<!-- Google Map -->
<script src="plugins/google-map/map.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap">
</script>

<script src="js/script.js"></script>
