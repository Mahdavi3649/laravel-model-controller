@extends('layouts.app')

@section('content')

<div class="container bg-success mt-2 pb-3 rounded">
    <h1 class="text-center p-4 fw-bolder">Welcome,<br>
        The world’s best movies,and more… <br>
        Explore now.
    </h1>

    <div class="row gy-3">

        @forelse($movies as $movie)
           <div class="col-3">
               <div class="card">
                   <div class="card-body">
                       <h4 class="fw-bold">Title: {{$movie->title}}</h4>
                       <h6>Original Title: {{$movie->original_title}}</h6>
                       <p>{{$movie->nationality}}</p>
                       <p>{{$movie->date}}</p>
                       <p>Vote: {{$movie->vote}}</p>
                   </div>
               </div>
           </div>
        
            @empty
            <p>there is no movie</p>
            @endforelse

    </div>
    

</div>
@endsection