@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/signin.css') }}">
@endsection

@section('content')
<div class="logo">
    <h1>Recentri <span>for Spotify</span></h1> 
</div>
<form action="{{ route('') }}" method="POST">
    <button>
        <h1>Sign In</h1>
    </button>
</form>
@endsection
