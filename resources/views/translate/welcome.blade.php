<x-app-layout>
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

</x-app-layout>