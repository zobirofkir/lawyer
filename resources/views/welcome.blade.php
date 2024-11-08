<x-app-layout>

    @include('header.header')
    <main>

    <div class="slider-area position-relative">
    <div class="slider-active">

    <div class="single-slider hero-overly slider-height slider-bg1 d-flex align-items-center">
    <div class="container">
    <div class="row">
    <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-8 col-sm-10">
    <div class="hero-caption">
    <h1 data-animation="fadeInUp" data-delay=".2s">Cabinet d´avocat Maître Rachid Rethmani </h1>
    <P data-animation="fadeInUp" data-delay=".4s">Agréé auprès de la cour de cassation.</P>

    <div>
    <a href="#" id="appointmentBtn" class="btn hero-btn" style="background: red; padding: 10px; border-radius: 5px;">Prendre rendez-vous</a>
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
            <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Votre Message'" placeholder="Ecrire Votre Message"></textarea>
            </div>
            </div>
            <div class="col-sm-6">
            <div class="form-group">
            <input class="form-control valid" name="username" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nom et prénom'" placeholder="Nom et prénom">
            </div>
            <div class="form-group">
            <input class="form-control valid" name="phone" id="phone" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Numéro de telephone'" placeholder="Numéro de telephone">
            </div>
            </div>
            <div class="col-sm-6">
            <div class="form-group">
            <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" placeholder="Email">
            </div>
            </div>
            <div class="col-12">
            <div class="form-group">
            <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Sujet'" placeholder="Sujet">
            </div>
            </div>
            </div>
            <div class="form-group mt-3">
            <button type="submit" class="button button-contactForm boxed-btn">envoyer</button>
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
    <img src="assets/img/gallery/about1.jpg" alt>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
        <div class="col-6 text-center">
            <div class="bg-danger rounded p-3">
            <p class="text-white font-weight-bold mb-0" style="font-size: 30px;">Depuis</p>
            <span class="text-white font-weight-bold" style="font-size: 25px;">1989</span>
            </div>
        </div>
        </div>
    </div>
    
    </div>
    </div>
    <div class="offset-xl-1  col-xl-5 col-lg-6 col-md-10">
    <div class="about-caption">

    <div class="section-tittle mb-35">
    <h2>Cabinet d´avocat Maître Rachid Rethmani</h2>
    <h3>"Fondé en 1989, le cabinet de Maître RETHMANI, agréé par la Cour de Cassation, fait partie du Barreau de Tanger."</h3>
    </div>
    <p>Au fil des années, notre cabinet s'est forgé une réputation solide et une expertise reconnue dans le domaine juridique. Avec une équipe composée de plusieurs avocats expérimentés et d'un personnel administratif compétent, nous offrons une gamme étendue de compétences, nous permettant de répondre efficacement à diverses problématiques juridiques, qu'elles soient de nature civile, pénale, commerciale ou administrative. 

        Travaillant à l'échelle nationale, le cabinet assure une représentation diligente des intérêts de ses clients tout en offrant des conseils juridiques avisés et un suivi attentif. Cette approche centrée sur le client assure un accompagnement complet à chaque étape du processus juridique. 
        
        En somme, Maître RETHMANI et son équipe sont reconnus pour leur engagement envers la qualité du service et leur capacité à répondre aux besoins variés de leurs clients avec professionnalisme et impartialité.
    </p>
    </div>
    <div class="about-bottom">
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
    <img src="assets/img/gallery/user.png" style="border-radius: 100%; weight: 5%; height: 5%;" alt>
    </blockquote>
    <div class="wantToWork-caption wantToWork-caption2">
    <h2>Cabinet d´avocat</h2>
    <p>Cabinet du Maître Rachid Rethmani</p>
    </div>
    </div>
    </div>
    <div class="col-xl-7 col-lg-7 col-md-12">
        <div class="contact-now d-flex align-items-center justify-content-end flex-wrap">
            <span>Nous contacter</span>
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
    @include('footer.footer')

    <div id="back-top">
    <a title="Go to Top" href="{{url('/')}}"> <i class="fas fa-level-up-alt"></i></a>
    </div>

</x-app-layout>