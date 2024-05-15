<header>
    <div class="header-area">
    <div class="main-header ">
    <div class="header-top d-none d-sm-block">
    <div class="container-fluid">
    <div class="row">
    <div class="col-xl-12">
    <div class="d-flex justify-content-between flex-wrap align-items-center">
    <div class="header-info-left">
    <ul>
    <li>العنوان: 44 شارع أنطاكي، عمارة الأمم 2، رقم 19، ساحة الأمم، طنجة المغرب</li>
    <li>أرسل لنا البريد : <a href="../../cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2b474a5c524e591c1d6b4c464a424705484446" style="color: blue;">cabinetrethmani@gmail.com</a></li>
    </ul>
    </div>
    <div class="header-info-right">
    <ul class="header-social">
    <li><a href="{{url('/')}}"><i class="fab fa-facebook"></i></a></li>
    <li><a href="{{url('/')}}"><i class="fab fa-linkedin-in"></i></a></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="header-bottom  header-sticky">
    <div class="container-fluid">
    <div class="d-flex align-items-center justify-content-between flex-wrap position-relative">
    
    <div class="left-side d-flex align-items-center">
    <div class="logo">
    <a href="{{url('/')}}"><img src="assets/img/logo/logo.png" alt></a>
    </div>
    
    <div class="main-menu d-none d-lg-block">
    <nav>
    <ul id="navigation">
        <li><a href="{{ route('lang.switch', ['locale' => 'ar']) }}">الصفحة الرئيسية </a></li>
        <li><a href="{{ route('lang.switch.practices', ['locale' => 'ar']) }}">مجالات الخبرة</a></li>
    <li><a href="{{ route('lang.switch.propos', ['locale' => 'ar']) }}">من نحن</a></li>
    <li><a href="{{ route('lang.switch.recente', ['locale' => 'ar']) }}">أخبار حديثة</a>
    </li>
    <li><a href="{{ route('lang.switch.contact', ['locale' => 'ar']) }}">اتصل بنا</a></li>
    
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            اختر اللغة
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{ route('lang.switch', 'ar') }}">Arabic</a>
            <a class="dropdown-item" href="{{ route('lang.switch', 'en') }}">English</a>
        </div>
    </div>
        
    
    </ul>
    </nav>
    </div>
    </div>
    <div class="col-12">
    <div class="mobile_menu d-block d-lg-none"></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </header>