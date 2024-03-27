@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Login</h2>
            @if(Session::has('success'))
            <span class="alert alert-success">{{ Session::get('success') }}</span>
            @endif

            <form action="{{ route('login.post') }}" method="post">
                @csrf
                <div class="form-group row">
                    <label for="" class="col-md-3">Email</label>
                    <div class="col-md-3">
                        <input type="text" class="form-control" placeholder="Enter your email" name="email">
                    </div>
                    @if($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <div class="form-group row">
                    <label for="" class="col-md-3">Password</label>
                    <div class="col-md-3">
                        <input type="password" class="form-control" placeholder="Enter your password" name="password"> 
                    </div>
                    @if($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <div class="form-group row">
                    <div class="col-md-6">
                        <input type="submit" name="submit" class="btn btn-success" value="Submit">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
