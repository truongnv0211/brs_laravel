<tr>
  <td>{{ $book->id }}</td>
  <td>{{ $book->title }}</td>
  <td>{{ $book->publish_date }}</td>
  <td>{{ $book->author }}</td>
  <td>{{ $book->number_page }}</td>
  <td>{{ $book->rate }}</td>
  <td>{{ $book->category()->name }}</td>
</tr>
