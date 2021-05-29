<h1>Member list</h1>

<table border="1">

  <tr>
    <td>Id</td>
    <td>Name</td>
    <td>Email</td>
    <td>Address</td>
  </tr>

  @foreach ($members as $element)

  <tr>
    <td>{{ $element['id'] }}</td>
    <td>{{ $element['name'] }}</td>
    <td>{{ $element['email'] }}</td>
    <td>{{ $element['address'] }}</td>
  </tr>
      
  @endforeach
</table>

<span>
  {{ $members->links() }}
</span>

<style>
  .w-5{
    display: none;
  }
</style>
