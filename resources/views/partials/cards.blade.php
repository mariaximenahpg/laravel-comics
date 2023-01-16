<section class="card-section">
    @foreach($comics as $comic)
    <div class="card">
        <div>
            <img class="card-img" src="{{$comic['thumb']}}" alt="">
        </div>
        <div>
            <h6>{{$comic['series']}}</h6>
        </div>
    </div>
    @endforeach
    <div>
        <button>LOAD MORE</button>
    </div>
</section>