<h1>user lists</h1> <br>

<table border="1">

  <tr>
    <td>Id</td>
    <td>Name</td>
    <td>Email</td>
    <td>Profile Photo</td>
  </tr>

  @foreach ($collection as $element)
  
  <tr>
    <td>{{ $element['id'] }}</td>
    <td>{{ $element['first_name'] }}</td>
    <td>{{ $element['email']}}</td>
    <td><img src="{{ $element['avatar'] }}" alt=""></td>
  </tr>
      
  @endforeach
  

</table>