@extends('layout.layout')

@section('title', 'Home')

@section('content')

    @forelse ($films as $film)
    <div class="card" style="width: 18rem;">        
        <div class="card-body">
            <h1 class="card-title">{{$film['title']}}</h1>
            <h4 class="card-text">{{$film['original_title']}}<h4>
            <h6 class="card-text">{{$film['nationality']}}<h6>
            <h6 class="card-text">{{$film['date']}}<h6>
            <h6 class="card-text">{{$film['vote']}}<h6>
            {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
        </div>
    </div>

    @empty
    <p>Un bel casino se compaio</p>
    @endforelse

    

@endsection