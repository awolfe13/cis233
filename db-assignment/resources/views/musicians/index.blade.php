<h1>Musicians</h1>

<ul>
    @foreach($musicians as $musician)
    <li>{{$musician->first_name}} {{$musician->last_name}} - {{$musician->instrument}} - {{$musician->website}}</li>
    @endforeach
</ul>