<h1>Update Member</h1>
<form action="/edit" method="POST">
  @csrf
  <input type="hidden" name="id" value="{{ $member['id'] }}"> <br> <br>
  <input type="text" name="name" value="{{ $member['name'] }}"> <br> <br>
  <input type="text" name="email" value="{{ $member['email'] }}"> <br> <br>
  <input type="text" name="address" value="{{ $member['address'] }}"> <br> <br>
  <button type="submit">Update</button>
</form>