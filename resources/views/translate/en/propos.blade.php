<x-app-layout>
  @include('translate.en.header.header')
  <main>
  
  <div class="slider-area">
  <div class="slider-height2 slider-bg6 hero-overly02 d-flex align-items-center">
  <div class="container">
  <div class="row">
  <div class="col-xl-5 col-lg-6 col-md-8">
  <div class="hero-caption hero-caption2">
  <h2>About Us</h2>
  <p>Maître Rachid Rethmani law firm.</p>
  </div>
  </div>
  </div>
  </div>
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
            <p class="text-white font-weight-bold mb-0" style="font-size: 30px;">From</p>
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
  <h2>Law Firm of Maître Rachid Rethmani</h2>
  <h3>"Founded in 1989, the law firm of Maître Rachid Rethmani, accredited by the Court of Cassation, is a distinguished member of the Tangier Bar Association."</h3>
  </div>
  <p>
  Over the years, our firm has built a solid reputation and recognized expertise in the legal field. With a
  team composed of several experienced lawyers and competent administrative staff, we offer a wide
  range of services, enabling us to effectively address various legal issues, whether they are civil,
  criminal, commercial, or administrative in nature. Operating on a national scale, the firm diligently
  represents the interests of its clients while providing sound legal advice and attentive follow-up. This
  client-centered approach ensures comprehensive support at every stage of the legal process. In sum,
  Maître Rethmani and his team are known for their commitment to service quality and their ability to
  meet the diverse needs of their clients with professionalism and impartiality.
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
  <img src="{{asset('assets/img/gallery/user.png')}}" style="border-radius: 100%; weight: 5%; height: 5%;" alt>
  </blockquote>
  <div class="wantToWork-caption wantToWork-caption2">
  <h2>Law Firm</h2>
  <p>Law Firm of Maître Rachid Rethmani</p>
  </div>
  </div>
  </div>
  <div class="col-xl-7 col-lg-7 col-md-12">
      <div class="contact-now d-flex align-items-center justify-content-end flex-wrap">
          <span>Contact Us</span>
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
  @include('translate.en.footer.footer')
  
  <div id="back-top">
  <a title="Go to Top" href="about.html#"> <i class="fas fa-level-up-alt"></i></a>
  </div>
  
</x-app-layout>