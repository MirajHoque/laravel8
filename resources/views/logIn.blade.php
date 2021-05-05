<h1>User LogIn</h1>

<form action="user" method="POST">
  @csrf
  <input type="text" name="userName" placeholder="Enter your name"> <br> <br>
  <input type="password" name="password" placeholder="Enter your password"> <br> <br>
  <button type="submit">LogIn</button>
</form>