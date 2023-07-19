@extends('layouts.main')
<br><br>
@section('container')
  <body>
    <main class="container">
      <div class="p-4 p-md-5 mb-4 rounded text-bg-dark" style="background-color: black">
        <div class="col-md-6 px-0">
          <h1 class="display-4 fst-italic text-white">Good News</h1>
          <p class="lead my-3 text-white">A trusted news platform, providing the latest and most popular news that is currently being discussed.</p>
          <p class="lead mb-0"><a href="/news/posts/create" class="text-white fw-bold">Add News</a></p>
        </div>
      </div>
        
        <div class="row mb-2">
            @foreach ($posts as $post)
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">News</strong>
                        <h3 class="mb-0">{{ $post->title }}</h3>
                        <div class="mb-1 text-muted">{{ $post->created_at->diffForHumans() }}</div>
                        <div><p class="card-text mb-auto"  >{{ $post->excerpt }}</p></div>
                        <a href="/news/posts/{{ $post->slug }}" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                      @if ($post->image)
                          <img class="bd-placeholder-img" width="297" height="220" src="{{ asset('storage/'.$post->image) }}">
                      @else
                      <div style="height: 190px; width:297px;">
                          <img src="https://source.unsplash.com/500x400?{{ $post->title }}">
                      </div>
                      @endif
                    </div>
                </div>
            </div>
        @endforeach
      </div>
    </main>
    <br>
</body>
</html>
@endsection


{{-- <footer class="blog-footer">
    <div class="container">
        <div class="row align-items-center mb-10">
            <div class="col-lg-4 text-lg-start">Copyright &copy; Good News 2023</div>
                <div class="col-lg-4 text-lg-center">
                    <a class="link-dark text-decoration-none me-3" href="#">Back to top</a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="/about">About Us</a>
                </div>
            </div>
        </div>
    </footer> --}}
