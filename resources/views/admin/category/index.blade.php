@extends('layouts.master')

@section('content')
  <h3 class="text-center">{{ trans('admin.all_category') }}</h3>
  <a href="{{ route('admin.category.create') }}" class="btn btn-primary btn-sm">{{ trans('admin.category.create_new') }}</a>
  <table class="table">
    <thead>
      <tr>
        <th>{{ trans('admin.category.id') }}</th>
        <th>{{ trans('admin.category.name') }}</th>
        <th>{{ trans('admin.category.content') }}</th>
        <th colspan="2">{{ trans('action.action') }}</th>
      </tr>
    </thead>
    <tbody>
      @each('admin.category.category', $categories, 'category')
    </tbody>
  </table>
@endsection
