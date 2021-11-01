@extends('dashboard')

@section('content')
<h1>Musicians</h1>
<p>PAGE: {{$url}}</p>
<a class="btn btn-primary" href="{{ route('musicians.create')}}">New Musician</a>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th><a href="{{route('musicians.index', ['sortBy' => 'first_name', 'order' => 'asc'])}}">First Name</a>
            </th>
            <th><a href="{{route('musicians.index', ['sortBy' => 'last_name', 'order' => 'asc'])}}">Last Name</a>
            </th>
            <th><a href="{{route('musicians.index', ['sortBy' => 'instrument', 'order' => 'desc'])}}">Instrument</a></th>
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
{{-- {{$musicians->links('pagination::bootstrap-4')}} --}}
{{-- {{$musicians->appends(Request::query())->render()}} --}}
{{$musicians->withQueryString()->links()}}

@endsection

