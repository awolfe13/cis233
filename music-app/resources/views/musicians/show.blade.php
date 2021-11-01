@extends('dashboard')

@section('content')

<h1>Musican Details</h1>
<p>{{$musician->first_name}} {{$musician->last_name}} : {{$musician->instrument}}</p>
<p>{{$musician->website}}</p>
<p><a href={{ route('musicians.index') }}>All Musicians</a></p>

@endsection