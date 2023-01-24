@extends('dashboard.layouts.main')

@section('container')
<div class="contain">
    <div class="row  my-3">
        <div class="col-lg-8`">
            <h2 class="mb-3 ">{{ $post->title }}</h2>

            <a href="/dashboard/posts" class="btn btn-success">Back to All My Post</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning">Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline"`>
                @method('delete')
                @csrf
                <button class="btn btn-danger"  onclick="return confirm('Yakin dek?')"><span data-feather="x-circle"></span>Delete</button>
              </form>
              @if ($post->image) 
                <div style="max-height: 350px; overflow: hidden;">
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->nama }}" class="img-fluid mt-3">
                </div>
              @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
              @endif
          
            <article class="my-4 fs-5">
                {!! $post->body !!}
            </article>
            
            <a href="/posts" class="d-block mt-3"> Back to Post</a>  

        </div>
    </div>
</div>

@endsection