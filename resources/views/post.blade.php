

@extends('layouts.main')

@section('container')

    <div class="contain">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2 class="mb-3 ">{{ $post->title }}</h2>

                <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category=/{{ $post->category->slug }}">{{ $post->category->nama }}</a></p>

                @if ($post->image) 
                <div style="max-height: 350px; overflow: hidden;">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->nama }}" class="img-fluid ">
                    <article class="my-4 fs-5"> 
                </div>
              @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid ">
                    <article class="my-4 fs-5">
              @endif<article class="my-4 fs-5">
                    {!! $post->body !!}
                </article>
                
                <a href="/posts" class="d-block mt-3"> Back to Post</a>  

            </div>
        </div>
    </div>

    




     @endsection
     
     {{-- 
         Gunakan tanda "{{  }}" Untuk menjalankan tanpa mengeksekusi syntax html didalamnya
         Gunakan tanda "{!!  !!}" untul menjalankan dengan mengeksekusi syntax html didalmanya     
     --}}

