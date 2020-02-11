@extends('layouts.app')

@section('content')

<style>
        .container{
            padding:0.5%;
        }
    </style>
<div class="container">
    <h2 class="alert alert-success text-center color:red">UPDATE YOUR EVENT</h2>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <form method="post" action="{{ route('shows.update', $show->id) }}" enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <!-- Extended default form grid -->
                <form>
                    <!-- Grid row -->
                    <div class="form-row">
                        <!-- Default input -->
                        <div class="form-group col-md-6">
                        <label for="title">Show's Title</label>
                        <input mdbInput type="text" class="form-control" name="title" id="title" value="{{$show->title}}">
                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <!-- Default input -->
                        <div class="form-group col-md-6">
                        <label for="venue">Venue</label>
                        <input mdbInput type="text" class="form-control" name="venue" id="venue"  value="{{$show->venue}}">

                        @error('venue')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>

                    <!-- Default input -->
                    <div class="form-group col-md-6">
                    <label for="price">Ticket Price(&#8358;)</label>
                        <input mdbInput type="number" class="form-control" name="price" id="price" value="{{$show->price}}">
                        @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Default input -->
                    <div class="form-group col-md-6">
                    <label for="date">Date</label>
                        <input mdbInput type="date" class="form-control" name="date" id="date"  value="{{$show->date}}">
                        @error('date')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                        
                        <div class="form-group col-md-12">
                        <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control" cols="30" rows="10" value="{{$show->description}}">{{$show->description}}</textarea>
                            @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!-- Grid row -->
                    <a href="{{ route('shows.show', $show->id) }}" class="btn btn-danger">Cancel</a>
                    <button type="submit"  name="add" class="btn btn-success input-lg">Update Event</button>
                </form>
                <!-- Extended default form grid -->
                </div>
                </div>
            </form>
        </div>
    </div>
</div>
@include ('layouts.footer')


@endsection