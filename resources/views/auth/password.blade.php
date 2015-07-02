@extends('master')
@section('main')
<div class="col-md-4 col-md-offset-4">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Password Reset</h3>
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
            @elseif(Session::has('status'))
                <div class="alert alert-success">
                    <ul><li>{{ Session::get('status') }}</li></ul>
                </div>
            @endif
            <form method="POST" action="/password/email">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Send Password Reset Link</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop