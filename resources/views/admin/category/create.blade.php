@extends('layouts.master')

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h2 class="text-center">{{ trans('admin.category.create_new') }}</h2>
      @include('layouts.error')
      <form method="POST" action="{{ route('admin.category.store') }}">
        {!! csrf_field() !!}
        <div>
          <input type="text" name="name" value="{{ old('name') }}" class="form-control"><br>
        </div>
        <div>
          <input type="text" name="content" value="{{ old('content') }}" class="form-control"><br>
        </div>
        <div>
          <button type="submit" class="btn btn-primary btn-block">{{ trans('action.create') }}</button>
        </div>
      </form>
      <a href="{{ route('admin.category.index') }}">{{ trans('action.back') }}</a>
    </div>
  </div>
@endsection
