<!doctype html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Rachid Rethmani</title>
<meta name="description" content>
<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/icon/favicon.png')}}">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/slicknav.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<link rel="stylesheet" href="{{asset('assets/css/modal.css')}}">  
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>
    .goog-te-banner-frame.skiptranslate {
        display: none !important;
    }

    body {
        top: 0 !important;
    }
</style>

</head>
<body>
@include('translate.header.header')      
<main>

<div class="slider-area position-relative">
<div class="slider-active">

<div class="single-slider hero-overly slider-height slider-bg1 d-flex align-items-center">
<div class="container">
<div class="row">
<div class="col-xxl-6 col-xl-7 col-lg-8 col-md-8 col-sm-10">
<div class="hero-caption">
<h1 data-animation="fadeInUp" data-delay=".2s">مكتب المحاماة الأستاذ رشيد رثماني </h1>
<P data-animation="fadeInUp" data-delay=".4s">مقبول لدى محكمة النقض</P>

<div>
<a href="#" id="appointmentBtn" class="btn hero-btn" style="background: red; padding: 10px; border-radius: 5px;">تحديد موعد</a>
</div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div id="modal" class="modal text-center">
    <div class="modal-content">
        <span class="close">&times;</span>
        <form class="form-contact contact_form" action="{{url('/')}}" method="post" id="" >
            @csrf
        <div class="row">
        <div class="col-12">
        <div class="form-group">
        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" أدخل رسالة"></textarea>
        </div>
        </div>
        <div class="col-sm-6">
        <div class="form-group">
        <input class="form-control valid" name="username" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="أدخل أسمك">
        </div>
        </div>
        <div class="form-group">
        <input class="form-control valid" name="phone" id="phone" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'رقم الهاتف'" placeholder="رقم الهاتف">
        </div>

        <div class="col-sm-6">
        <div class="form-group">
        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="بريد إلكتروني">
        </div>
        </div>
        <div class="col-12">
        <div class="form-group">
        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="أدخل الموضوع">
        </div>
        </div>
        </div>
        <div class="form-group mt-3">
        <button type="submit" class="button button-contactForm boxed-btn">ارسل</button>
        </div>
        </form>
    </div>
</div>


<section class="about-low-area section-padding">
<div class="container">
<div class="row justify-content-between align-items-center">
<div class="offset-xl-1 col-xl-5 col-lg-5 col-md-9 col-sm-11">
<div class="about-right-cap">
<div class="about-right-img">
<img src="{{asset('assets/img/gallery/about1.jpg')}}" alt>
</div>
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-6 text-center">
        <div class="bg-danger rounded p-3">
          <p class="text-white font-weight-bold mb-0" style="font-size: 30px;">منذ</p>
          <span class="text-white font-weight-bold" style="font-size: 25px;">1989</span>
        </div>
      </div>
    </div>
  </div>
  
  <style>
    @keyframes moveLeftRight {
      0% {
        transform: translateX(0);
      }
      50% {
        transform: translateX(10px);
      }
      100% {
        transform: translateX(0);
      }
    }
  
    .bg-danger {
      animation: moveLeftRight 2s infinite;
    }
  </style>

</div>
</div>
<div class="offset-xl-1  col-xl-5 col-lg-6 col-md-10">
<div class="about-caption">

<div class="section-tittle mb-35">
<h2>مكتب المحاماة الأستاذ رشيد رثماني</h2>
<h3>"تأسس مكتب المحامي رثماني في عام 1989، وهو ينتمي لهيئة طنجة وهو مقبول لدى محكمة النقض"</h3>
</div>
<p>
مكتب المحاماة رشيد رثماني يضع رهن اشارة زبائنه خدمات الاستشارة والمنازعات في مجالات قانونية مختلفة ،وبهذا التنوع فاننا نتمكن من مواكبة كافة القضايا مع زبنائنا وتكوين رؤية مشتركة لحلول ناجعة لكافة القضايا المتنوعة .
اسس هذا المكتب سنة 1989 ويتكون من محامين وطاقم اداري يسمح له من تقديم خدمات قانونية جيدة مع متابعة يسودها الحرص والمسؤولية ،كما ان المكتب منفتح على المجال الرقمي ومنخرط في المنصة الالكترونية منذ مدة ليست بيسيرة والتي توفر العجلة والنجاعة.
يتوفر المكتب على خبرة طويلة في مجالات قانونية وقضائية متعددة كالقانون التجاري والقانون الاداري وقانون الاعمال وقانون الشغل والقانون المدني والقانون العقاري وانشاءالشركات وايضا مساطر صعوبات المقاولات وذلك بمنح الاستشارة والنصح وايجاد حلول بديلة التي يضمنها القانون لانقاذ المقاولة كما ان المكتب يتوفر على مسار تم من خلاله انقاذ المقاولات وذلك بوضع مخطط الاستمرارية وقفل مسطرة التسوية القضائية وغيرها.
</p>
</div>
</div>
</div>
</div>
</section>

{{-- 
<div class="our-practice-area section-bg " style="text-align: center; overflow: hidden; padding: 50px;">
<div class="" style="text-align: center">
<div class="row justify-content-center mb-25" style=>
<div class="col-xl-12">

<div class="section-tittle text-center">
<h2>Domaine Avocat Rethmani</h2>
</div>
</div>
</div>
<div>
<div class="" style="text-align: center;">
<div class="row">

<div class="col-lg-6 col-md-6 col-sm-6 p-0">
<div class="single-services1 text-center">
<div class="services-ion">
    <i class="fa-solid fa-building fa-beat-fade fa-2xl" style="color: #ff0000;"></i>
</div>
<div class="services-cap">
<h5><a href="{{url('/')}}">Difficulté des entreprises</a></h5>
</div>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-6 p-0">
<div class="single-services1 text-center">
<div class="services-ion">
    <i class="fa-solid fa-scale-balanced fa-beat-fade fa-2xl" style="color: #ff0000;"></i>
</div>
<div class="services-cap">
<h5><a href="{{url('/')}}">Droit commercial</a></h5>
</div>
</div>
</div>



<div class="col-lg-6 col-md-6 col-sm-6 p-0">
<div class="single-services1 text-center">
<div class="services-ion">
    <i class="fa-brands fa-vaadin fa-beat-fade fa-2xl" style="color: #ff0000;"></i>
</div>
<div class="services-cap">
<h5><a href="{{url('/')}}">Droit administratif </a></h5>
</div>
</div>
</div>



<div class="col-lg-6 col-md-6 col-sm-6 p-0">
<div class="single-services1 text-center">
<div class="services-ion">
    <i class="fa-solid fa-business-time fa-beat-fade fa-2xl" style="color: #ff0000;"></i>
</div>
<div class="services-cap">
<h5><a href="{{url('/')}}">Droit des affaires</a></h5>
</div>
</div>
</div>


<div class="col-lg-6 col-md-6 col-sm-6 p-0">
<div class="single-services1 text-center">
<div class="services-ion">
    <i class="fa-solid fa-person-military-to-person fa-beat-fade fa-2xl" style="color: #ff0000;"></i>
</div>
<div class="services-cap">
<h5><a href="{{url('/')}}">Droit civil </a></h5>
</div>
</div>
</div>
                    
<div class="col-lg-6 col-md-6 col-sm-6 p-0">
<div class="single-services1 text-center">
<div class="services-ion">
    <i class="fa-solid fa-sign-hanging fa-beat-fade fa-2xl" style="color: #ff0000;"></i>
</div>
<div class="services-cap">
<h5><a href="{{url('/')}}">Droit immobilier </a></h5>
</div>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-6 p-0">
<div class="single-services1 text-center">
<div class="services-ion">
    <i class="fa-solid fa-car-burst fa-beat-fade fa-2xl" style="color: #ff0000;"></i>
</div>
<div class="services-cap">
<h5><a href="{{url('/')}}">Droit des assurances </a></h5>
</div>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-6 p-0">
<div class="single-services1 text-center">
<div class="services-ion">
    <i class="fa-solid fa-people-roof fa-beat-fade fa-2xl" style="color: #ff0000;"></i>
</div>
<div class="services-cap">
<h5><a href="{{url('/')}}">Droit de la famille et social </a></h5>
</div>
</div>
</div>
    
<div class="col-lg-6 col-md-6 col-sm-6 p-0">
<div class="single-services1 text-center">
<div class="services-ion">
    <i class="fa-solid fa-car fa-beat-fade fa-2xl" style="color: #ff0000;"></i>
</div>
<div class="services-cap">
<h5><a href="{{url('/')}}">Droit transport </a></h5>
</div>
</div>
</div>
        
<div class="col-lg-6 col-md-6 col-sm-6 p-0">
<div class="single-services1 text-center">
<div class="services-ion">
    <i class="fa-solid fa-coins fa-beat-fade fa-2xl" style="color: #ff0000;"></i>
</div>
<div class="services-cap">
<h5><a href="{{url('/')}}">Droit finance</a></h5>
</div>
</div>
</div>
      
<div class="col-lg-6 col-md-6 col-sm-6 p-0">
<div class="single-services1 text-center">
<div class="services-ion">
    <i class="fa-solid fa-user-tie fa-beat-fade fa-2xl" style="color: #ff0000;"></i>
</div>
<div class="services-cap">
<h5><a href="{{url('/')}}">Contentieux administratif</a></h5>
</div>
</div>
</div>
                                    
<div class="col-lg-6 col-md-6 col-sm-6 p-0">
<div class="single-services1 text-center">
<div class="services-ion">
    <i class="fa-solid fa-phone-volume fa-beat-fade fa-2xl" style="color: #ff0000;"></i>
</div>
<div class="services-cap">
<h5><a href="{{url('/')}}">Arbitrage</a></h5>
</div>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-6 p-0">
<div class="single-services1 text-center">
<div class="services-ion">
    <i class="fa-solid fa-briefcase fa-beat-fade fa-2xl" style="color: #ff0000;"></i>
</div>
<div class="services-cap">
<h5><a href="{{url('/')}}">Création entreprise</a></h5>
</div>
</div>
</div>    
                                            
</div>
</div>
</div>
</div>
</div> --}}

{{-- <div class="brand-area border-top">
<div class="container">
<div class="row justify-content-center align-items-end">
<div class="col-xl-8">
<div class="brand-active  pt-50 pb-40">
<div class="single-brand">
<img src="assets/img/gallery/brand1.png" alt>
</div>
<div class="single-brand">
<img src="assets/img/gallery/brand2.png" alt>
</div>
<div class="single-brand">
<img src="assets/img/gallery/brand3.png" alt>
</div>
<div class="single-brand">
<img src="assets/img/gallery/brand4.png" alt>
</div>
<div class="single-brand">
<img src="assets/img/gallery/brand2.png" alt>
</div>
<div class="single-brand">
<img src="assets/img/gallery/brand3.png" alt>
</div>
</div>
</div>
</div>
</div>
</div> --}}


<div class="want-wrapper">
<div class="container">
<section class="wantToWork-area">
<div class="row align-items-center justify-content-between">
<div class="col-xl-5 col-lg-5 col-md-12">
<div class="wants-wrapper">
<blockquote>
<img src="{{asset('assets/img/gallery/user.png')}}" style="border-radius: 100%; weight: 5%; height: 5%;" alt>
</blockquote>
<div class="wantToWork-caption wantToWork-caption2">
<h2>مكتب المحاماة</h2>
<p>مكتب الأستاذ رشيد رثماني</p>
</div>
</div>
</div>
<div class="col-xl-7 col-lg-7 col-md-12">
    <div class="contact-now d-flex align-items-center justify-content-end flex-wrap">
        <span>اتصل بنا</span>
        <a href="{{url('/')}}" class="btn2 wantToWork-btn"><i class="fas fa-phone-alt"></i>0661296017</a>

        <a href="{{url('/')}}" class="btn2 wantToWork-btn"><i class="fas fa-phone-alt"></i>0539946181</a>
        {{-- <a href="{{url('/')}}" class="btn2 wantToWork-btn"><i class="fas fa-phone-alt"></i>0661296017</a> --}}
    </div>    
</div>
</div>
</section>
</div>
</div>

</main>
@include('translate.footer.footer')
<div id="back-top">
<a title="Go to Top" href="{{url('/')}}"> <i class="fas fa-level-up-alt"></i></a>
</div>



<!-- Bootstrap JS (jQuery and Popper.js are required dependencies) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="{{asset('assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/slick.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.slicknav.min.js')}}"></script>

<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/waypoints.min.js')}}"></script>

<script src="{{asset('assets/js/contact.js')}}"></script>
<script src="{{asset('assets/js/jquery.form.js')}}"></script>
<script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/js/mail-script.js')}}"></script>
<script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>

<script src="{{asset('assets/js/plugins.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
<script src="{{asset('assets/js/modal.js')}}"></script>

<!-- Google Translate Widget -->
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'fr', // Default language (English)
            includedLanguages: 'ar,en,fr,es', // Languages to be included (Arabic, English, French, Spanish)
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
        }, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>
</html>