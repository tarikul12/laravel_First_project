@include('common.header')


<h1>Hello World</h1>
<h1>{{$users[2]}}</h1>
<br>
<h1>{{rand()}}</h1>

@if($users[0] == 'Tarikul')
<h1>Welcome Tarikul</h1>

@elseif($users[1] =! 'Jane Doe')
<h1>Welcome to other</h1>

@else
<h1>Welcome to the world</h1>

@endif

@foreach($users as $user)
<h1>{{$user}}</h1>
@endforeach
<br>

@for($i=0; $i<10; $i++)
<h1>{{$i}}</h1>
@endfor

@include('common.footer')