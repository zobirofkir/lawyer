<!doctype html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Rachid Rethmani</title>
<meta name="description" content>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/icon/favicon.png')}}">

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
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

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

<div class="slider-area">
<div class="slider-height2 slider-bg6 hero-overly02 d-flex align-items-center">
<div class="container">
<div class="row">
<div class="col-xl-5 col-lg-6 col-md-8">
<div class="hero-caption hero-caption2">
<h2>اتصال</h2>
<p>مكتب المحامي الأستاذ رشيد الرثماني.</p>
</div>
</div>
</div>
</div>
</div>
</div>



<section class="contact-section">
<div class="container">
<div class="d-none d-sm-block mb-5 pb-4" style="text-align: center">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3236.9067776526485!2d-5.807041723598143!3d35.777666224669524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0c7f5784cbc3bf%3A0xcc121fc7459a067c!2sPlace%20des%20Nations%2C%2044%20Rue%20Antaki%2C%20Tangier%2090000!5e0!3m2!1sfr!2sma!4v1715350058226!5m2!1sfr!2sma" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</div>
<div class="row">
<div class="col-12">
<h2 class="contact-title">ابقى على تواصل</h2>
</div>
<div class="col-lg-8">

<form class="form-contact contact_form" action="{{url('/contacts')}}" method="post" id="" >
    @csrf
<div class="row">
<div class="col-12">
<div class="form-group">
<textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'أدخل رسالة'" placeholder=" أدخل رسالة"></textarea>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<input class="form-control valid" name="username" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'أدخل أسمك'" placeholder="أدخل أسمك">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'أدخل عنوان البريد الالكتروني'" placeholder="أدخل عنوان البريد الالكتروني">
</div>
</div>
<div class="col-12">
<div class="form-group">
<input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'أدخل الموضوع'" placeholder="أدخل الموضوع">
</div>
</div>
</div>
<div class="form-group mt-3">
<button type="submit" class="button button-contactForm boxed-btn">إرسال</button>
</div>
</form>
</div>
<div class="col-lg-3 offset-lg-1">
<div class="media contact-info">
<span class="contact-info__icon"></span>
<div class="media-body">
<h3>طنجة المغرب.</h3>
<p>44 شارع أنطاكي، عمارة الأمم 2، رقم 19، ساحة الأمم، طنجة المغرب </p>
</div>
</div>
<div class="media contact-info">
<span class="contact-info__icon"></span>
<div class="media-body">
<h3>0539946181</h3>
</div>
<div class="media-body" style="margin-left: 20px;">
<h3>+212 661296017</h3>
</div>
</div>
<div class="media contact-info">
<span class="contact-info__icon"></span>
<div class="media-body">
<h3><a href="../../cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3b484e4b4b54494f7b585457544957525915585456">cabinetrethmani@gmail.com</a></h3>
</div>
<div style="margin-left: 20px;" class="media-body">
<h3><a href="../../cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3b484e4b4b54494f7b585457544957525915585456">contact@avocatrethmani.com</a></h3>
</div>
</div>
</div>
</div>
</div>
</section>

</main>
@include('translate.footer.footer')
<div id="back-top">
<a title="Go to Top" href="contact.html#"> <i class="fas fa-level-up-alt"></i></a>
</div>

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
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
    function initMap() {
        var uluru = {
            lat: -25.363,
            lng: 131.044
        };
        var grayStyles = [{
            featureType: "all",
            stylers: [{
                saturation: -90
            },
            {
                lightness: 50
            }
            ]
        },
        {
            elementType: 'labels.text.fill',
            stylers: [{
                color: '#ccdee9'
            }]
        }
        ];
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {
                lat: -31.197,
                lng: 150.744
            },
            zoom: 9,
            styles: grayStyles,
            scrollwheel: false
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&amp;callback=initMap"></script>

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