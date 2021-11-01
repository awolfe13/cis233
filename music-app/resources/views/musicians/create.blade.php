@extends('dashboard')

@section('content')
<div class="column col-3">
    <h3>Add a New Musician</h3>

    @include('errors')

    <form method="POST" action="{{ route('musicians.store')}}">
        @csrf
        <div class="form-group">
            @include('musicians.form')
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save Musician</button>
            <a class="btn btn-error" href="{{ route('musicians.index')}}">Cancel</a>
        </div>
    </form>
</div>
@endsection