@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <h1>Home page</h1>
        <a href="{{ route('dashboard.index') }}" class="btn btn-lg btn-warning me-2">Goto Dashboard</a>
        @endauth

        @guest
        <h1>Home page</h1>
        <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
        @endguest
    </div>
@endsection
