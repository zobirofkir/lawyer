<x-app-layout>
    @include('header.header')

    <div class="container my-5">

        <div class="row mb-5">
            <div class="col-12">
                <h1 class="display-4 font-weight-bold text-center mb-3">Our Blog</h1>
            </div>
        </div>

        <div class="row">
            @foreach ($blogs as $index => $item)
            <div class="col-md-6 mb-4">
                <div class="card shadow-lg border-0 rounded-3">
                    <div class="card-img-top" style="background-image: url('{{asset('storage/'.$item->images[0])}}'); height: 250px; background-size: cover; background-position: center;"></div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->title }}</h5>
                        <p class="card-text text-muted">
                            {{ Str::limit($item->description, 80) }}
                        </p>
                        <a href="{{ route('blogs.show', $item->slug) }}" class="btn btn-outline-primary text-dark px-4 py-2 rounded-3 shadow-sm border-2 hover-btn">Read more</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>

    @include('footer.footer')

    <div id="back-top" class="position-fixed bottom-0 end-0 mb-4 me-4">
        <a title="Back to top" href="{{url('/')}}" class="btn btn-primary rounded-circle">
            <i class="fas fa-level-up-alt"></i>
        </a>
    </div>

</x-app-layout>
