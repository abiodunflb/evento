<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>EVENTO</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
            body{
  background-image: url("https://images.unsplash.com/photo-1501281668745-f7f57925c3b4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=4048&h=3036");
  background-size: cover;
  font-family: lato;
  color: #fff;
  background-color: #333;
  height: 800px;
  width: 100%;
  background-repeat: no-repeat;
}

/* Content */

#landing{
  text-align: center;
  padding-top: 10%;
  text-shadow: 0px 4px 3px #333;
}

h1{
  font-weight: 700;
  font-size: 5em;
}

/* .btn{
  background-color: #fff;
  font-weight: 700;
} */

hr{
  border-color: #fff;
  width: 400px;
  border-top: 1px solid #f8f8f8;
  border-bottom: 1px solid rgba(0,0,0,0.2);
}

/* Content */
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
           

            <div class="content">
                <!-- Landing Page -->
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div id="landing">
        <h1>EVENTO</h1>
        <h3>EVENT PDF TICKET GENERATOR</h3>
        <small>By Afolabi Abiodun</small>
        <hr class="hr">
        <!-- <button type="button" class="btn btn-outline-secondary"><i class="fas fa-paw"></i>View Events</button> -->
        <a href="{{route('shows.index')}}" class="btn btn-success">View Events</a>
      </div>
    </div>
  </div>
</div>


                
            </div>
        </div>
    </body>
</html>
