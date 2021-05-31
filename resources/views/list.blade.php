<table border="1">
  @foreach ($member as $element)
  <tr>
    <td>{{ $element['name'] }}</td>
    <td>{{ $element->email }}</td>
    <td>{{ $element->address }}</td>
  </tr>
      
  @endforeach
</table>