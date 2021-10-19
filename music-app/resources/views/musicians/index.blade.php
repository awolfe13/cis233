@extends('layout')

@section('content')
<h1>Musicians</h1>
<a class="btn btn-primary" href="{{ route('musicians.create')}}">New Musician</a>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Instrument</th>
            <th>Website</th>
            <th>Details</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($musicians as $musician)
        <tr>
            <td>{{$musician->first_name}}</td>
            <td>{{$musician->last_name}}</td>
            <td>{{$musician->instrument}}</td>
            <td>{{$musician->website}}</td>
            <td><a href="{{ route('musicians.show', $musician->id)}}">Show Detail</td>
            <td><a href="{{ route('musicians.edit', $musician->id)}}">Edit</td>
            <td>
                <form action="{{route('musicians.destroy', $musician->id)}}" method="POST"
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
{{$musicians->links('pagination::bootstrap-4')}}
@endsection