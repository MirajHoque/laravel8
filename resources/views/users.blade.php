@include('header')
<h1>users page</h1>
@include('inner')
@foreach ($registeredUsers as $element)
<h3>{{ $element }}</h3>
    
@endforeach

@csrf
<script>
  var data=@json($registeredUsers);
  console.log(data[0]);
</script>
