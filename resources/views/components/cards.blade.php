<div class="card border-0 shadow rounded-5 nav-bg text-white">
    <div class="row">
        <div class="col-md-7 bg-card p-5 d-flex align-items-center">
            <div id="carouselExample-{{ $id }}" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ $carousel[0] }}" class="img-fluid w-100 d-block" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ $carousel[1] }}" class="img-fluid w-100 d-block" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ $carousel[2] }}" class="img-fluid w-100 d-block" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample-{{ $id }}" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample-{{ $id }}" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-md-5 p-3 d-flex flex-column align-items-center justify-content-center">
            <img src="{{$img}}" class="img-fluid" alt="..." style="width: 30vh;">
            <h5 class="card-title py-3">{{ $title }}</h5>
            <p class="card-text text-center">{{$desc}}</p>
            <p class="card-text">{{$price}}</p>
            <p class="card-text">{{$date}}</p>
            <a href="{{route('contatti')}}" class="btn my-button-bg text-white">Acquista Ora!</a>
        </div>
    </div>
</div>