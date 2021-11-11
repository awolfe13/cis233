@extends('users.formLayout')

@section('form')

<form method="POST" action="{{ route('users.update', $user->id)}}">
    @csrf
    @method('PUT')
  
    @include('users.form')

    <div class="flex items-center justify-end mt-4">
    <x-button type="submit" class="ml-2 btn">Update User</x-button>
    <a class="ml-2 btn btn-error rounded" href="{{ route('users.index') }}">Cancel</a>
    </div>
</form>

@endsection