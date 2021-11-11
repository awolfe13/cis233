@extends('dashboard')

@section('content')

<h1>User Details</h1>
<p>{{$user->role}} : {{$user->name}}</p>
<p>{{$user->email}}</p>
<a href={{ route('users.index')}}>All Users</a>

@endsection