<h1>users page</h1>
{{--
  {{ 10+10 }}
  <h2>total number of registered users are {{ count($registerdUsers) }}</h2>
  --}}

{{--using condition statement--}}

{{--

@if($userName=='Mita')
<h3>Hi {{ $userName }}</h3>
@elseif($userName=='Mila')
<h3>Hello {{ $userName }}</h3>
@else
<h3>unknown user</h3>
@endif  

--}}

{{--using loops--}}

@for($i=0; $i<10; $i++)
<span>{{ $i }}</span>
@endfor

@foreach ($registeredUsers as $element)
<h3>{{ $element }}</h3>
    
@endforeach
