@extends('layouts.master')

@section('content')
<main role="main" class="container">
  <div class="row mt-3">
    @foreach ($blogs as $blog)
      {{-- @if ($blog->status == 1) --}}
      <div class="col-md-3 mt-3">
        <div class="card">
          <div class="card-body">
            <h1 class="btn-danger">{{$blog->user_id}}</h1>
            <h2>{{$blog->title}}</h2>
            <p>{{$blog->description}}</p>
            <div class="btn-sm btn-success">Process</div>
          </div>
        </div>
      </div>       
      {{-- @else
      <div class="col-md-3 mt-3">
        <div class="card">
          <div class="card-body">
            <h2>{{$blog->title}}</h2>
            <p>{{$blog->description}}</p>
            <div class="btn-sm btn-warning">Pending</div>
          </div>
        </div>
      </div>
      @endif --}}
    @endforeach
  </div>
</main>
@endsection


