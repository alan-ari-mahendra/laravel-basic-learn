@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Posts Categories</h1>
  </div>

  @if (session()->has('success'))
      <div class="alert alert-success col-lg-6" role="alert">
        {{ session('success') }}
      </div>
  @endif


  <div class="table-responsive col-lg-6">
    <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create New Category</a>

    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Category Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $category)         
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $category->nama }}</td>
          <td class="">
            <a class="badge bg-info" href="/dashboard/categories/{{ $category->slug }}"><span data-feather="eye"></span></a>
            <a class="badge bg-warning" href="/dashboard/categories/{{ $category->slug }}/edit"><span data-feather="edit" ></span></a>
            <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline"`>
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0"  onclick="return confirm('Yakin dek?')"><span data-feather="x-circle"></span></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection