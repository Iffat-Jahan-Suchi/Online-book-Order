
@extends('master.public')

@section('page-title')
  About Us
@endsection

@section('addition-styles')
  <link rel="stylesheet" href="{{asset('css/custom/about_us.css')}}" type="text/css">
  <style media="screen">
    .aboutus-image-baner {
      /* background:  linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.7)), url("{{ asset('public_user/images/aboutus-baner.jpeg') }}"); */
      background: url("{{ asset('public_user/images/aboutus-baner.jpeg') }}");
      min-height: 320px;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      padding-top: 110px;
      padding-bottom:110px;
    }
  </style>
@endsection




@section('main-content')
  <div class="bg m-0" style="background: white !important">

      <!-- Top baner -->
    <div class="aboutus-image-baner pl-5 text-primary">
      <h2 class="font-weight-bold display-4">About Us</h2>
      <p>To know the details more about us see the information below</p>
    </div>

    <!-- Breadcrumb Page Director -->
    <ol class="breadcrumb pl-5">
        <li class="breadcrumb-item ml-5" aria-current="page"><a href="#" class="font-weight-bold" style="color: #723B00 !important">Home</a> </li>
        <li class="breadcrumb-item active" aria-current="page">About Us</li>
    </ol>

    <div class="container">
      <div class="row p-3">
        <div class="left-description col-md-6 px-5">
          <h1 class="text-center font-weight-bold display-4">Our Service</h1>
          <div class="text-justify" style="font-size: 18px;">
            We provide book service throw online. If you want be our customer, you have to buy book from our website. You will more flexibility to get the books. You can get your ordered book from our were house. Or you can collect your ordered books throw home delivery. If you want to collect the book by home delivery you have to pay delivery charge. The delivery charge  is minor. One more think you can pay in two ways. One is mobile banking <span class="text-danger">(paymen by bkash)</span> and another is cash on delivery. If you want to pay by cash at first you have to pay delivery charge.
          </div>
        </div>
        <div class="left-description col-md-6 p-3 text-justify">
          <h2 class="font-weight-bold pb-3">Our Marketplace</h2>
          <p>Soptoborno is an online marketplace for books. Thousand of brand new books, rare books, and out-of-print books are offered for sale through the Soptoborno websites. Collectors can find rare books, students can find new textbooks, and treasure hunters can find long-lost books.</p>
          <p>Our mission is help people to find and buy any book and our business stretches around the county. Thousand of signed books, thousand of used copies, a vast selection of college textbooks and new books too.</p>
          <p>Soptoborno remains a company with a passion for books. Booksellers love Soptoborno for helping them to sell books to buyers around the globe ??? 24 hours a day, 365 days a year.  Buyers love Soptoborno for helping them to find and purchase books from the vast online inventory.</p>
        </div>
      </div>
    </div>

    <div class="mt-5">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <h1 class="text-center font-weight-bold display-4">Our Team</h1>
          <div class="text-justify">
            <p class="text-center">Our team is always ready to take the order and deliver your necessary books to your mailing address after checking all requirements.</p>
            <hr class="px-5">
          </div>
        </div>
      </div>
    </div>



    <!-- Profile Card Section -->
    <div class="row mt-5">
      <div class="col-md-10 mx-auto">
        <div class="row">
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-xs-12 mx-auto mb-2">
            <div class="card">
              <img class="card-img mx-auto mt-2" src="{{ asset('public_user/Images/team/Suchi.jpg') }}" alt="" style="height: 250px; width: 90%">
              <div class="card-body pt-1 text-center">
                <h5 class="font-weight-bold text-primary pt-2">Iffat Jahan Suchi</h5>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>

                <!-- Add font awesome icons -->
                <a target="_blank" href="https://www.facebook.com/iffat.jahan.564" class="social fa fa-facebook fa-facebooks"></a>
                <a href="#" class="social fa fa-twitter"></a>
                <a href="#" class="social fa fa-google"></a>
                <a href="#" class="social fa fa-envelope"></a>
                </div>
              </div>
          </div>


          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-xs-12 mx-auto mb-2">
            <div class="card">
              <img class="card-img mx-auto mt-2" src="{{ asset('public_user/Images/team/Akash.jpg') }}" alt="" style="height: 250px; width: 90%">
              <div class="card-body pt-1 text-center">
                <h5 class="font-weight-bold text-primary pt-2">ASM Akash</h5>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                <!-- Add font awesome icons -->
                <a target="_blank" href="https://www.facebook.com/faster.resam" class="social fa fa-facebook fa-facebooks"></a>
                <a href="#" class="social fa fa-twitter"></a>
                <a href="#" class="social fa fa-google"></a>
                <a href="#" class="social fa fa-envelope"></a>
                </div>
              </div>
          </div>


          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-xs-12 mx-auto mb-2">
            <div class="card">
              <img class="card-img mx-auto mt-2" src="{{ asset('public_user/Images/team/Shathi.jpg') }}" alt="" style="height: 250px; width: 90%">
              <div class="card-body pt-1 text-center">
                <h5 class="font-weight-bold text-primary pt-2">Sharmin Jahan Shathi</h5>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                <!-- Add font awesome icons -->
                <a target="_blank" href="https://www.facebook.com/mhasfia.shathi" class="social fa fa-facebook fa-facebooks"></a>
                <a href="#" class="social fa fa-twitter"></a>
                <a href="#" class="social fa fa-google"></a>
                <a href="#" class="social fa fa-envelope"></a>
                </div>
              </div>
          </div>


          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-xs-12 mx-auto mb-2">
            <div class="card">
              <img class="card-img mx-auto mt-2" src="{{ asset('public_user/Images/team/Imran.jpg') }}" alt="" style="height: 250px; width: 90%">
              <div class="card-body pt-1 text-center">
                <h5 class="font-weight-bold text-primary pt-2">Ahmed Imran</h5>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                <!-- Add font awesome icons -->
                <a target="_blank" href="www.facebook.com/pavel.136" class="social fa fa-facebook fa-facebooks"></a>
                <a href="#" class="social fa fa-twitter"></a>
                <a href="#" class="social fa fa-google"></a>
                <a href="#" class="social fa fa-envelope"></a>
                </div>
              </div>
          </div>

        </div>


      </div>
    </div>



  </div>

@endsection
