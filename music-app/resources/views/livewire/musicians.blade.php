@section('title')
Musicians
@endsection
<div>

    <input wire:model="search" type="text" placeholder="Search Musicians" size="50"/>
 
    <label for="numOfMus" class="ml-5">How Many Musicians Per Page:</label>
    <select wire:model="numOfMusicians" name="numOfMus">
        <option value="10">10</option>
        <option value="25">25</option>
        <option value="50">50</option>
    </select>


    <table class="table table-striped table-hover border">
        <thead>
            <tr>
                <th>
                    <a href="#" wire:click="doSort('first_name', 'asc')">&uarr;</a>
                    First Name
                    <a href="#" wire:click="doSort('first_name', 'desc')">&darr;</a>
                </th>
                <th>
                    <a href="#" wire:click="doSort('last_name', 'asc')">&uarr;</a>
                    Last Name
                    <a href="#" wire:click="doSort('last_name', 'desc')">&darr;</a>
                </th>
                <th>
                    <a href="#" wire:click="doSort('instrument', 'asc')">&uarr;</a>
                    Instrument
                    <a href="#" wire:click="doSort('instrument', 'desc')">&darr;</a>
                </th>
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
    {{$musicians->links()}}
</div>

