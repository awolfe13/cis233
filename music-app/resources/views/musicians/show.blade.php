@extends('layout')

@section('content')

<h1>Show Musician Detail</h1>
<p>{{$musician->first_name}}</p>
<p><a href={{ route('musicians.index') }}>All Musicians</a></p>

@endsection