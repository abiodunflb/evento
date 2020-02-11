@extends('layouts.app')

@section('content')
<section>
    <div class="container">

    @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br>
        @endif

        @if(session()->get('error'))
            <div class="alert alert-danger">
                {{ session()->get('error') }}
            </div>
        @endif
    
    <div align="right">
      @auth
    <a href="{{ route('shows.create')}}" class="btn btn-outline-success btn-sm"><span class="fa fa-plus-circle"> Create Event</span></a>
      @endauth

      
    </div>

    @guest
      <div class="alert alert-danger">
        <h6>Please login to create events</h6>
      </div>
      @endguest
    @forelse($shows as $show)
        <div class="row my-5 border bg-light shadow">
            <div class="col-md-6" style="background-image: url(https://source.unsplash.com/user/a_myth); background-size: cover; background-position: center center; opacity: 1; min-height:300px;">
            </div>
            <div class="col-md-6 align-self-center p-4 ">
                <h3 class="font-weight-light text-success">{{ $show->title }} <h6 class="text-muted">by {{$show->user->name}} {{ $show->created_at->diffForHumans() }}</h6></h3>
                <p>{{ $show->description }}</p>
                <p>Ticket: &#8358;{{$show->price}}</p>
                <a href="{{ route('shows.show', $show->id)}}" class="btn btn-outline-success btn-sm"> <span class="fa fa-eye"> View</span></a>
                <a href="{{ action('ShowController@downloadPDF', $show->id)}}" class="btn btn-outline-danger btn-sm"> <span class="fa fa-eye"> Download ticket(pdf)</span></a>
            </div>
        </div>

        @empty

        <div class="alert alert-danger">
        <h3>No Events for now</h3>
        @guest

        <p>Please login to create your events</p>
        <a href="#" class="btn btn-success">Login</a>
        @endguest

        @auth

        <a href="#" class="btn btn-success">Create an event</a>
        @endauth
        </div>

        @endforelse
    </div>
</section>

@endsection