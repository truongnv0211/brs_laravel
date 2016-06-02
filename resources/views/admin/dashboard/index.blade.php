@extends('layouts.master')

@section('content')
  <ul>
    <li><a href="{{ route('admin.category.index') }}">{{ trans('admin.manager_category') }}</a></li>
    <li><a href="{{ route('admin.book.index') }}">{{ trans('admin.manager_book') }}</a></li>
  </ul>
@endsection
