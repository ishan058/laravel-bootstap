@extends('layout.app')

@section('content')
    <div class="container">
        <form method="get" action="{{route('logout')}}">
            <button type="submit" class="btn btn-primary">Logout</button>
        </form>
    </div>
    <table class=""table>
        <thead>
            <th>Article Title</th>
            <th>Created By</th>
        </thead>

        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->user->name}}</td>

                @if(auth()->user()->id == $post->user->id)
                <td><button>Delete</button></td>
                @endif

            </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection