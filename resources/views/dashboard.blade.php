@extends('layout.app')

@section('content')
    <h1>Welcome to Dashboard</h1>
    <!-- <button type="button" class="btn btn-primary">Primary</button>
    <button type="button" class="btn btn-secondary">Secondary</button>
    <button type="button" class="btn btn-success">Success</button> -->
    <div class="container">
        <form method="get" action="{{route('logout')}}">
            <button type="submit" class="btn btn-primary">Logout</button>
        </form>
    </div>
@endsection