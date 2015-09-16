@extends('layouts.master')

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h2 class="text-center">{{ trans('admin.category.edit_category') }}</h2>
      @include('layouts.error')
      <form method="POST" action="{{ route('admin.category.update', ['category' => $category]) }}">
        {!! csrf_field() !!}
        <input type="hidden" name="_method" value="PUT">
        <div>
          <input type="text" name="name" value="{{ $category->name }}" class="form-control"><br>
        </div>
        <div>
          <input type="text" name="content" value="{{ $category->content }}" class="form-control"><br>
        </div>
        <div>
          <button type="submit" class="btn btn-primary btn-block">{{ trans('action.update') }}</button>
        </div>
      </form>
      <a href="{{ route('admin.category.index') }}">{{ trans('action.back') }}</a>
    </div>
  </div>
@endsection
