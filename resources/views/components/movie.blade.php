
<div class="card-block-wrapper">

    <div class="card-block-image">
        <img id="img" src="{{$movie['preview']}}" alt="матрица">
       
    </div>
    <div class="card-block-description">
        <h2 id="title">{{$movie['name']}}</h2>
        <h3>О фильме</h3>
        <p id="description">{{$movie['description']}}</p>
        <p>Год производства</p>
        <p>Страна</p>
        <p>Жанр</p>
        
        
    </div>
    <div class="card-block-rating">
    <p class="card-text">Оценка <span class="badge bg-warning warn__badge">{{$movie['rating']}}</span></p>
        <p id="rating"></p>
    @auth
        <form action="{{route('rating')}}" method="post">
            @csrf
            <input type="hidden" name="userId" value="{{auth()->id()}}">
            <input type="hidden" name="movieId" value="{{$movie['id']}}">
            <li class="dropdown">
                <a class="btn btn-warning dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Оценить фильм
                </a>
    
                <ul class="dropdown-menu">
                    <li>
                        <div class="ratingform" >
                           
                            <div>
                                <input type="radio" name="rating" id="one" value="1">
                                <label for="one">1</label>
                            </div>
                            <div>
                                <input type="radio" name="rating" id="two" value="2">
                                <label for="two">2</label>
                            </div>
                            <div>
                                <input type="radio" name="rating" id="three" value="3">
                                <label for="three">3</label>
                            </div>
                            <div>
                                <input type="radio" name="rating" id="for" value="4">
                                <label for="for">4</label>
                            </div>
                            <div>
                                <input type="radio" name="rating" id="five" value="5">
                                <label for="five">5</label>
                            </div>
                            <div>
                                <input type="radio" name="rating" id="six" value="6">
                                <label for="six">6</label>
                            </div>
                            <div>
                                <input type="radio" name="rating" id="seven" value="7">
                                <label for="seven">7</label>
                            </div>
                            <div>
                                <input type="radio" name="rating" id="eith" value="8">
                                <label for="eith">8</label>
                            </div>
                            <div>
                                <input type="radio" name="rating" id="nine" value="9">
                                <label for="nine">9</label>
                            </div>
                            <div>
                                <input type="radio" name="rating" id="then" value="10">
                                <label for="then">10</label>
                            </div>
                            <button type="submit" class="btn btn-warning">Оценить</button>
    
                        </div>
                    </li>
                    
    
                </ul>
            </li>
        </form>
     @endauth

                   
    </div>

</div>

@if(auth()->guest()){
    <p style="color: red">Видео доступно только зарегистрированным пользователям</p>
}@else{
    <div class="video">
        <iframe  id="iframe" src="{{$movie['srcvideo']}}" width="640" height="360" frameborder="0" allowfullscreen="1" allow="autoplay; encrypted-media; fullscreen; picture-in-picture"></iframe>
    </div>
}
@endif


    
