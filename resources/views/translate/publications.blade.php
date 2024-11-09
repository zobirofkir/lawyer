<x-app-layout>
    @include('translate.header.header')
    <main>

    <div class="slider-area">
    <div class="slider-height2 slider-bg6 hero-overly02 d-flex align-items-center">
    <div class="container">
    <div class="row">
    <div class="col-xl-5 col-lg-6 col-md-8">
    <div class="hero-caption hero-caption2">
    <h2>المنشورات</h2>
            <p>في  هذا الفضاء سنسلط الضوء على مقالات واجتهادات قضائية صادرة عن المكتب او منشورة بمجلات قانونية وطنية او دولية</p>
    </div>
    </div> 
    </div>
    </div>
    </div>
    </div>
    
    <section class="blog_area section-padding py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row g-4">
                        @foreach ($pdfs as $pdf)
                            <div class="col-md-6">
                                <article class="blog_item card h-100">
                                    <div class="blog_item_img position-relative">
                                        <a href="{{ asset('storage/' . $pdf->pdf) }}">
                                            <img class="card-img-top rounded" src="{{ asset('storage/' . $pdf->images[0]) }}" alt="Blog Image">
                                        </a>
                                        <div class="blog_item_date position-absolute top-0 start-0 bg-danger text-white p-2 rounded">
                                            <h3 class="m-0">{{ $pdf->created_at->format('d') }}</h3>
                                            <p class="m-0">{{ $pdf->created_at->format('M') }}</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <a class="text-decoration-none" href="{{ asset('storage/' . $pdf->pdf) }}">
                                            <h2 class="blog-head h5">{{ $pdf->title }}</h2>
                                        </a>
                                        <p class="card-text">{{ $pdf->description }}</p>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    </main>

    @include('translate.footer.footer')

    <div id="back-top">
    <a title="Go to Top" href="{{url('Jurisprudence')}}"> <i class="fas fa-level-up-alt"></i></a>
    </div>

</x-app-layout>