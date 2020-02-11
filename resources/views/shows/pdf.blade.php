<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
  </head>
  <body>

  <div align="right">
  <p>Ticket id: <?= rand() ?> </p>
  </div>
    <div align="center">
    
    <h2 >This is your pass to the show</h2>
    <h3>{{$show->title}}</h3>
    <h4>Venue: {{ $show->venue }}</h4>
    <h4>Date: {{ $show->date }}</h4>
    <h4>Price: {{ $show->price }}</h4>
    <p>{{$show->description}}</p>
    
    </div>
    


    


  </body>
</html>