<x-layout>
    <div class="container">
        <div class="single-product">
            <div class="single-product__img">
                @php
                    $img = explode(",",$data[0]->images);
                @endphp
                <div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                    @foreach($img as $key => $image)
                      <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
                        @if($image)
                        <img src={{$image}} class="d-block w-100" alt="...">
                        @endif
                      </div>
                    @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
               
            </div>
            <div class="single-product__info">
                <h2 class="single-product__info_title">{{$data[0]->name}}</h2>
                <div class="single-product__info_size">{{$data[0]->size}}</div>
                <div class="single-product__info_price">{{$data[0]->price}} zł</div>
                <button class="single-product__info_btn">ADD TO CART</button>
                <p class="single-product__info_description">{{$data[0]->description}}</p>
            </div> 
        </div>
    </div>
</x-layout>