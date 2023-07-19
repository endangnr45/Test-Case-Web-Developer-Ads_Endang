@extends('layouts.main')
<br>
@section('container')
<div class="mt-3 container">
    <center>
        <div class="row">
            <div class="mt-5 col-md-15"></div>
            <article>
                <h2 class="mt-20">{{ $post->title }}</h2>
                @if ($post->image)
                <div style="height: 190px; width:297px; overflow:hidden; align-content: center;">
                    <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->title }}" class="img-fluid mt-3"/>  
                </div>
                @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->title }}"
                @endif
                <div class="mb-1 text-muted " style="text-align:center">{{ $post->updated_at }}</div>
                <article class="my-3" style="text-align: center">
                {!! $post->body !!}
            </article><br>
            <a href="/news "class="btn btn-secondary">Back</a>
            <a href="/news/posts/{{ $post->slug }}/edit" class="btn btn-success">Update</a>
            <form action="/news/posts/{{ $post->slug }}" method="post" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
        </form>
        </div>
    </center>
</div>
<br>
@endsection