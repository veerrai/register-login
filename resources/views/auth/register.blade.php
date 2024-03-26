@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Registaion</h2>
            @if(Session::has('success'))
            <span class="alert alert-sucess">{{Session::get('success')}}</span>
            @endif

            <form action="{{route('register.post')}}" method="post">
                @csrf
<div class="form-group row">
<label for="" class="col-md-3">Name</label>
<div class="col-md-3">
    <input type="text" class="form-control" placeholder="enter your name" name="name">
</div>
@if($errors->has('name'))
<span class="text-danger">{{@errors->first('name')}}</span>
@endif
</div>

<div class="form-group row">
    <label for="" class="col-md-3">Email</label>
    <div class="col-md-3">
        <input type="text" class="form-control" placeholder="enter your email" name="email">
    </div>
    @if($errors->has('name'))
<span class="text-danger">{{@errors->first('name')}}</span>
@endif
    </div>

    <div class="form-group row">
        <label for="" class="col-md-3">Passowrd</label>
        <div class="col-md-3">
            <input type="text" class="form-control" placeholder="enter your password" name="password"> 
        </div>
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