<h1>User LogIn </h1>

<form action="users" method="POST">
@csrf
<input type="text" name="userName" placeholder="enter user id" /> <br> <br>
<input type="text" name="password" placeholder="enter user password" /> <br> <br>
<button type="submit">Sign In</button>
</form>