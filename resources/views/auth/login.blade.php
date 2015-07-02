@extends('master')
@section('main')
<div class="col-md-4 col-md-offset-4">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Login</h3>
        </div>
        <div class="panel-body">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="/auth/login">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="form-group checkbox">
                    <label><input type="checkbox" name="remember">Remember Me</label>
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-success">Login</button>
                </div>
                <div class="form-group">
                    <a href="/password/email">Reset password</a>
                </div>
            </form>
        </div>
    </div>
</div>
@stop