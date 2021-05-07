<h1>Add Member</h1>

@if( session('user') )
<h3 style="color: green">{{ session('user') }} has been added</h3>
@endif

<form action="addMember" method="POST">
  @csrf
  <input type="text" name="userName" placeholder="Enter your user name"> <br> <br>
  <input type="password" name="password" placeholder="Enter your password"> <br> <br>
  <input type="text" name="email" placeholder="Enter your email"> <br> <br>
  <button type="submit">Add Member</button>
</form>

