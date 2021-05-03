<h1>Log In</h1>

<form action="user" method="POST">
  {{--
   
    {{ method_field('PUT')}}
  //FOR PUT request
    --}}
{{ method_field('DELETE')}}
  @csrf
  <input type="text" name="userName" placeholder="Enter Your User Name"> <br> <br>
  <input type="password" name="password" placeholder="Enter Your Password"> <br> <br>
  <button type="submit">Log In</button>
</form>