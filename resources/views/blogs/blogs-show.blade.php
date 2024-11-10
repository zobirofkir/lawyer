<x-app-layout>
    @include('header.header')

    <div class="container my-5">

        <div class="row mb-5">
            <div class="col-12">
                <h1 class="display-4 font-weight-bold text-center mb-3">{{ $blog->title }}</h1>
                <p class="lead text-muted text-center">Publié le {{ $blog->created_at->format('d F, Y') }} par <strong>{{ $blog->user->name }}</strong></p>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card shadow-lg border-0 rounded-3">
                    <div class="card-img-top" style="background-image: url('{{ asset('storage/' . $blog->images[0]) }}'); height: 400px; background-size: cover; background-position: center;"></div>
                    <div class="card-body">
                        <p class="card-text text-muted lead">{{ $blog->description }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <h3 class="font-weight-bold">Commentaires ({{ $blog->comments->count() }})</h3>
                
                @foreach($blog->comments->sortByDesc('created_at') as $comment)
                    <div class="card mb-3">
                        <div class="card-body">
                            <p><strong>{{ $comment->name }}</strong> a commenté :</p>
                            <p class="card-text">{{ $comment->comment }}</p>
                            <p class="text-muted">Publié le {{ $comment->created_at->format('d F, Y') }}</p>
                        </div>
                    </div>
                @endforeach
            
                <h4>Laissez un commentaire</h4>
                <form action="{{ route('comments.store', ['slug' => $blog->slug]) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nom</label>
                        <input type="text" class="form-control" name="name" id="name" required>
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="comment" class="form-label">Commentaire</label>
                        <textarea class="form-control" name="comment" id="comment" rows="4" required></textarea>
                        @error('comment')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-secondary">Publier le commentaire</button>
                </form>
            </div>
        </div>
    </div>

    @include('footer.footer')

    <div id="back-top" class="position-fixed bottom-0 end-0 mb-4 me-4">
        <a title="Retour en haut" href="{{ url('/') }}" class="btn btn-primary rounded-circle">
            <i class="fas fa-level-up-alt"></i>
        </a>
    </div>

</x-app-layout>
