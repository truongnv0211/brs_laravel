<tr>
  <td>{{ $category->id }}</td>
  <td>{{ $category->name }}</td>
  <td>{{ $category->content }}</td>
  <td>
    <a href="{{ route('admin.category.edit', ['id' => $category->id]) }}" class="btn btn-sm btn-primary">
      {{ trans('action.edit') }}
    </a>
    <form action="{{ route('admin.category.destroy', ['id' =>$category->id]) }}" method="POST">
      {!! csrf_field() !!}
      <input type="hidden" name="_method" value="DELETE">
      <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('{{ trans('action.confirm') }}');">
        {{ trans('action.delete') }}
      </button>
    </form>
  </td>
</tr>
