

@extends('layouts.main')

@section('container')
    <h2>{{ $post->title }}</h2>

    <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->nama }}</a></p>

     {!! $post->body !!}

     <a href="/blog" class="d-block mt-3"> Back to Post</a>



     @endsection
     
     {{-- 
         Gunakan tanda "{{  }}" Untuk menjalankan tanpa mengeksekusi syntax html didalamnya
         Gunakan tanda "{!!  !!}" untul menjalankan dengan mengeksekusi syntax html didalmanya     
     --}}

