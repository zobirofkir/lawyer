<x-app-layout>
    @include('translate.en.header.header')
    <main>
    
    <div class="slider-area">
    <div class="slider-height2 slider-bg6 hero-overly02 d-flex align-items-center">
    <div class="container">
    <div class="row">
    <div class="col-xl-5 col-lg-6 col-md-8">
    <div class="hero-caption hero-caption2">
    <h2>Publications</h2>
    <p>In this section, we highlight the publications of Maître Rachid Rethmani as well as other relevant legal articles and books on a national and international scale
    </p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    

    <section class="blog_area section-padding" style="display: flex; justify-content: center; align-items: center;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="blog_left_sidebar d-flex flex-wrap justify-content-between">
                        @foreach ($pdfs as $pdf)
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <a href="{{asset('storage/'.$pdf->pdf)}}">
                                        <img class="card-img rounded-0" src="{{asset('storage/'.$pdf->images[0])}}" alt="">
                                    </a>
                                    <a href="{{asset('storage/'.$pdf->pdf)}}" class="blog_item_date">
                                        <h3>{{$pdf->created_at->format('d')}}</h3>
                                        <p>{{$pdf->created_at->format('M')}}</p>
                                    </a>
                                </div>
                                <div class="blog_details">
                                    <a class="d-inline-block" href="{{asset('storage/'.$pdf->pdf)}}">
                                        <h2 class="blog-head">{{$pdf->title}}</h2>
                                    </a>
                                    <p>{{$pdf->description}}</p>
                                    <ul class="blog-info-link">
                                    </ul>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <!-- Right Sidebar Content Goes Here -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    </main>
    @include('translate.en.footer.footer')
    
    <div id="back-top">
    <a title="Go to Top" href="{{url('Jurisprudence')}}"> <i class="fas fa-level-up-alt"></i></a>
    </div>
    
</x-app-layout>