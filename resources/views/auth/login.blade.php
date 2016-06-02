@extends('layouts.master')

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h2 class="text-center">@lang('staticpage.log_in')</h2>
      @include('layouts.error')
      <form method="POST" action="/auth/login">
        {!! csrf_field() !!}
        <div>
          <input type="email" name="email" value="{{ old('email') }}"
            placeholder="{{ trans('auth.email') }}" class="form-control"><br>
        </div>
        <div>
          <input type="password" name="password" id="password"
            placeholder="{{ trans('auth.password') }}" class="form-control"><br>
        </div>
        <div>
          <button type="submit" class="btn btn-primary btn-block">@lang('staticpage.log_in')</button>
        </div>
      </form>
      <a href="/auth/register">@lang('auth.register')</a>
    </div>
  </div>
@endsection
