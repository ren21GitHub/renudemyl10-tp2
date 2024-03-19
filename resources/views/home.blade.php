@extends('layouts.master')

@section('content')
<main role="main" class="container">
  {{-- <div class="row mt-3">
    @foreach ($blogs as $blog) --}}
      {{-- @if ($blog->status == 1) --}}
      {{-- <div class="col-md-3 mt-3">
        <div class="card">
          <div class="card-body">
            <h1 class="btn-danger">{{$blog->user_id}}</h1>
            <h2>{{$blog->title}}</h2>
            <p>{{$blog->description}}</p>
            <div class="btn-sm btn-success">Process</div>
          </div>
        </div>
      </div>        --}}
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
    {{-- @endforeach
  </div> --}}

  {{-- ONE TO ONE RELATIONSHIP --}}
    {{-- userAddress is a method added in User model --}}
    {{-- <div class="row">
      @foreach ($users as $user)
      <div class="col-md-4 mt-5">
        <div class="card">
          <div class="card-body">
            <h4>{{$user->name}}</h4>
            <p>{{$user->email}}</p>
            <p>{{$user->userAddress->address}}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div> --}}

  {{-- ONE TO ONE INVERSE RELATIONSHIP --}}
    {{-- <div class="row">
      @foreach ($addresses as $address)
      <div class="col-md-4 mt-5">
        <div class="card">
          <div class="card-body">
            <h4>{{$address->user->name}}</h4>
            <p>{{$address->user->email}}</p>
            <p>{{$address->address}}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div> --}}

  {{-- ONE TO MANY RELATIONSHIP --}}
  {{-- <div class="row">
    @foreach ($categories as $category)
    <div class="col-md-4 mt-5 mb-5">
      <div class="card">
        <div class="card-body">
          <h4>{{$category->title}}</h4>
          <p>{{$category->description}}</p>
          <p>{{$category->category_id}}</p>
          <p>{{$category->category->name}}</p>
        </div>
      </div>
    </div>
    @endforeach
  </div> --}}

  {{-- MANY TO MANY RELATIONSHIP --}}
  {{-- <div class="row">
    @foreach ($posts as $post)
    <div class="col-md-4 mt-5 mb-5">
      <div class="card">
        <div class="card-body">
          <h4>{{$post->title}}</h4>
          <p>{{$post->description}}</p>
          <ul>
          @foreach ($post->tags as $tag)
            <li>{{$tag->name}}</li>
          @endforeach
          </ul>
        </div>
      </div>
    </div>
    @endforeach
  </div> --}}

  {{-- STORAGE LINK --}}
  <img src="{{asset('/storage/images/new_image.jpg')}}" alt="">

  {{-- UPLOADING FILES IN STORAGE PART 1&2--}}
  <div class="col-md-4 mt-5">

    {{-- VALIDATING UPLOADED FILES --}}
  @if ($errors->any())
    @foreach ($errors->all() as $error)
      <div class="alert alert-danger">{{$error}}</div>
    @endforeach 
  @endif

    <div class="card">
      <div class="card-body">
        <form action="{{route('upload-file')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="" class="">Upload</label>
            <input type="file" name="image" class="form-control">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-success mt-2">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>
@endsection


