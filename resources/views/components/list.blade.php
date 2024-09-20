@foreach ($movies as $movie)
<div>
    <a href="{{route('movieID',['id'=>$movie['id']])}}" class="card text-decoration-none movies__item">

        <div class="movies-image-body">

            <img src="{{$movie->preview ?? NULL }}" height="200px" class="card-img-top" alt="image">
        </div>

        <h5 class="card-title">{{ $movie['name'] }}</h5>
        <div class="movies-title-body">
            <p class="card-text">Оценка <span class="badge bg-warning warn__badge">{{$movie['rating'] }}</span></p>
        </div>
        <div class="rating-mini">
            @for ($i = 1; $i <= 10; $i++)
                @if ($movie['rating'] >= $i)
                <span class="active"> </span>
                @else
                <span> </span>    
                @endif	 	 
                
            @endfor
        </div>

    </a>

</div>
    
@endforeach