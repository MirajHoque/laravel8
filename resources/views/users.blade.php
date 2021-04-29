<h1>User LogIn </h1>
{{--
@if($errors->any())
any(): boolean method return true if there is any error or return false if error not found.

@foreach ($errors->all() as $element)
all(): return an array of message for all fields.
<li>{{ $element }}</li>
    
@endforeach

@endif
--}}
{{-- 
  $errors: instance of Illuminate\Support\MessageBag
--}}
<form action="users" method="POST">
@csrf
<input type="text" name="userName" placeholder="enter user id" /> <br> 
<span style="color: red;">
  @error('userName') {{ $message }} 
  <!-- here userName is the name of the attribute-->
  @enderror
</span>
<br>
<input type="text" name="password" placeholder="enter user password" /> <br>
<span style="color: red;">
  @error('password') {{ $message }}
  <!-- here password is the name of the attribute-->
  @enderror
</span>
<br>
<button type="submit">Sign In</button>
</form>