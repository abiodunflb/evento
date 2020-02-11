@extends('layouts.app')

@section('content')

<!-- Page Content -->
<div class="container">

<div align="right">
      
    <a href="{{ route('shows.create')}}" class="btn btn-outline-success btn-sm"><span class="fa fa-plus-circle"> Create Event</span></a>
      

      
    </div>

    


<div class="row my-5 border bg-light shadow">
            <div class="col-md-12" style="background-image: url(https://source.unsplash.com/user/a_myth); background-size: cover; background-position: center center; opacity: 1; min-height:300px;">
            </div>
            <div class="col-md-12 align-self-center p-4 ">
                <h3 class="font-weight-light text-success">{{ $show->title }} <h6 class="text-muted">by {{$show->user->name}} {{ $show->created_at->diffForHumans() }}</h6></h3>
                <p>{{ $show->description }}</p>
                <p>Venue: {{$show->venue}}</p>
                <p>Ticket: &#8358;{{$show->price}}</p>

                @auth
                @if(Auth::user()->id == $show->user_id)
                
                <form action="{{ route('shows.destroy', $show->id)}}" method="POST" >
                <a href="{{ route('shows.edit', $show->id)}}" class="btn btn-outline-success btn-sm"> <span class="fa fa-pencil"> Edit</span></a>
                

                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline-danger btn-sm"><span class="fa fa-trash"> Delete</span></button>
                @endif
                @endauth
                <a href="{{ action('ShowController@downloadPDF', $show->id)}}" class="btn btn-outline-info btn-sm"> <span class="fa fa-download"> Download ticket(pdf)</span></a>
                </form>
                
                
                
                
                
            </div>
        </div>
</div>
<!-- /.container -->

@include ('layouts.footer')

@endsection
