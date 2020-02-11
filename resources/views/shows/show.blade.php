@extends('layouts.app')

@section('content')

<!-- Page Content -->
<div class="container">


<div class="row my-5 border bg-light shadow">
            <div class="col-md-12" style="background-image: url(https://source.unsplash.com/user/a_myth); background-size: cover; background-position: center center; opacity: 1; min-height:300px;">
            </div>
            <div class="col-md-12 align-self-center p-4 ">
                <h3 class="font-weight-light text-success">{{ $show->title }} <h6 class="text-muted">by {{$show->user->name}} {{ $show->created_at->diffForHumans() }}</h6></h3>
                <p>{{ $show->description }}</p>
                <p>Venue: {{$show->venue}}</p>
                <p>Ticket: &#8358;{{$show->price}}</p>
                <a href="{{ route('shows.show', $show->id)}}" class="btn btn-outline-success btn-sm"> <span class="fa fa-eye"> Edit</span></a>
                <a href="{{ route('shows.show', $show->id)}}" class="btn btn-outline-success btn-sm"> <span class="fa fa-eye"> Delete</span></a>
                <a href="#" class="btn btn-outline-success btn-sm"> <span class="fa fa-eye"> Download ticket(pdf)</span></a>
                
            </div>
        </div>
</div>
<!-- /.container -->



@endsection
