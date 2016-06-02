@extends('layouts.master')

@section('content')
  <h3 class="text-center">{{ trans('admin.all_book') }}</h3>
  <table class="table">
    <thead>
      <tr>
        <th>{{ trans('admin.book.id') }}</th>
        <th>{{ trans('admin.book.title') }}</th>
        <th>{{ trans('admin.book.publish_date') }}</th>
        <th>{{ trans('admin.book.author') }}</th>
        <th>{{ trans('admin.book.number_page') }}</th>
        <th>{{ trans('admin.book.rate') }}</th>
        <th>{{ trans('admin.book.category') }}</th>
      </tr>
    </thead>
    <tbody>
      @each('book', $books, 'book')
    </tbody>
  </table>
@endsection
