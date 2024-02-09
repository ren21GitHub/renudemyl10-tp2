@extends('layouts.master')

@section('content')
<div class="row mt-5 justify-content-center">
    <div class="col-md-6">
        <h2 class="mb-4">Login</h2>
        @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error )
                {{$error}}<br>
            @endforeach
        </div>
        @endif
        <div class="card">
            <div class="card-body">
                <form action="{{route('login.submit')}}" class="" method="POST">
                    @csrf
                    <div class="mb-2">
                        <label for="" class="form-label">User Name</label>
                        <input type="text" class="form-control" name="userName">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">User Email</label>
                        <input type="email" class="form-control" name="userEmail">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">User Password</label>
                        <input type="password" class="form-control" name="userPassword">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection