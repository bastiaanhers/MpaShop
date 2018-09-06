@extends('layout.app')

@section('content')

<h2>Login</h2>
@if(count($errors) > 0)
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    </div>
@endif
<form method="post" action="{{route('user.postLogin')}}">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>

    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>

        <button style="cursor:pointer" type="submit" class="btn btn-primary">Login</button>
    
</form>

@endsection
