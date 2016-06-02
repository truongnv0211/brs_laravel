@extends('layouts.master')

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h3 class="text-center">@lang('auth.register')</h3>
      @include('layouts.error')
      <form method="POST" action="/auth/register">
        {!! csrf_field() !!}
        <div>
          @lang('auth.name')
          <input type="tetx" name="name" value="{{ old('name') }}" class="form-control">
        </div>
        <div>
          @lang('auth.email')
          <input type="email" name="email" value="{{ old('email') }}" class="form-control">
        </div>
        <div>
          @lang('auth.password')
          <input type="password" name="password" class="form-control">
        </div>
        <div>
          @lang('auth.password_confirmation')
          <input type="password" name="password_confirmation" class="form-control"><br>
        </div>
        <div>
          <button type="submit" class="btn btn-primary btn-block">@lang('auth.register')</button>
        </div>
      </form>
    </div>
  </div>
@endsection
