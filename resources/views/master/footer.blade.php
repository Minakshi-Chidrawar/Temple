<!-- Footer -->
<footer class="page-footer font-small mdb-color lighten-3">

    <hr class="clearfix w-100">
    <!-- Footer Links -->
    <div class="container text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-0">
          <!-- Content -->
          <img src="{{ asset('images/MatajiMain.jpg') }}" width="100%" height="100%" alt="">
        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">
        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mb-8">About</h5>

          <ul class="list-unstyled">
            <li>
                <a href="{{route('aboutTemple')}}">About Temple</a>
            </li>
            <li>
                <a href="{{route('horoscope')}}">Horoscope</a>
            </li>
            <li>
                <a href="{{route('donation')}}">Donations</a>
            </li>
            <li>
                <a href="{{route('contact')}}">Contact us</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

          <!-- Contact details -->
          <h5 class="font-weight-bold text-uppercase mb-8">Visit us</h5>

          <ul class="list-unstyled">
            <li>
                Adhya Shakti Mataji Temple
            </li>
            <li>
                55, High Street, Cowley, Uxbridge
            </li>
            <li>
                Middlesex UB8 2DZ
            </li>
            <li>
                078 8225 3540
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-3 my-4">
          <!-- Social buttons -->
          <h5 class="font-weight-bold text-uppercase">Follow Us</h5>
          <ul class="list-unstyled">
            <li>              
              <a href="https://www.facebook.com/adhyashakti.mataji" class="facebook">
                <i class="fa fa-facebook-square"></i>
              </a>
              <a href="https://twitter.com/Matajitempleuk" class="twitter">
                <i class="fa fa-twitter-square"></i>
              </a>
              <a href="https://adhyashaktimatajitemple.wordpress.com" class="wordpress">
                <i class="fa fa-wordpress"></i>
              </a>
            </li>
            <li>
                <a href="{{ route('subscribe') }}" data-toggle="modal" data-target="#modalSubscriptionForm">
                  <button class="btn btn-danger btn-rounded ml-4"  type="submit">Subscribe</button>
                </a>
            </li>
          </ul>
        </div>
        <!-- Grid column -->

        @include('subscribe.modal')
        
      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center" style="margin-top: 0em;">
      © Shree Adhya Shakti Mataji Temple. All Rights Reserved. Registered Charity No. 1089024
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->