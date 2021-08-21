@extends('layout.app')

@section('content')
    @if (session()->has('success'))
        <div class="mt-3 alert alert-success" role="alert">
            <strong>{{ session()->get('success') }}</strong>
        </div>
    @endif
    <a href="{{ Route('home') }}">
        <button class="text-center btn btn-success">click to Continue</button>
    </a>

@endsection
