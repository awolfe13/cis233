@extends('dashboard')

@section('content')

<h1>Users</h1>
<a class="btn btn-primary" href="{{ route('users.create')}}">New User</a>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th><a href="{{route('users.index', ['sortBy' => 'first_name', 'order' => 'asc'])}}">Name
            </th>
            <th>Email</th>
            <th><a href="{{route('users.index', ['sortBy' => 'instrument', 'order' => 'asc'])}}">Role</a></th>
            <th>Details</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>

    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->role}}</td>
            <td><a href="{{ route('users.show', $user->id)}}">Show Detail</td>
            <td><a href="{{ route('users.edit', $user->id)}}">Edit</td>
            <td>
                <form action="{{route('users.destroy', $user->id)}}" method="POST"
                    onSubmit="return confirm('Are you sure you want to delete?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-error" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$users->links('pagination::bootstrap-4')}}

@endsection