@extends('users.formLayout')

@section('form')

        <form method="POST" action="{{ route('users.store') }}">
            @csrf

        @include('users.form')
            
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button type="submit" class="ml-2 btn">Save User</x-button>
                <a class="ml-2 btn btn-error rounded" href="{{ route('users.index') }}">Cancel</a>
            </div>
        </form>

@endsection