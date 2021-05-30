<h1>member list</h1>

<table border="1">
  
  <tr>
    <td>Id</td>
    <td>Name</td>
    <td>email</td>
    <td>Address</td>
    <td>Operation</td>
  </tr>

  @foreach ($members as $element)
  <tr>
    <td>{{ $element['id'] }}</td>
    <td>{{ $element['name'] }}</td>
    <td>{{ $element['email'] }}</td>
    <td>{{ $element['address'] }}</td>
    <td><a href={{ 'delete/'. $element['id'] }}>Delete</a></td>
    
  </tr>
      
  @endforeach
</table>