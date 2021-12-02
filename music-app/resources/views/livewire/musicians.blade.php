@section('title')
Musicians
@endsection
@section('content')
<div>
    <input type="text" wire:model="search" placeholder="Search Musicians" size="50">
    <table class="table table-striped table-hover border">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Instrument</th>
                <th>Website</th>
            </tr>
        </thead>
        <tbody>
            @foreach($musicians as $musician)
            <tr>
                <td>{{$musician->first_name}}</td>
                <td>{{$musician->last_name}}</td>
                <td>{{$musician->instrument}}</td>
                <td>{{$musician->website}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
