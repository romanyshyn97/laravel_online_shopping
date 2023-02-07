<x-layout>
        <div class="container">
            <h1 class="main__title">{{$category}}</h1>
            <div class="products">
                @foreach ($data as $el)
                <a href="/{{$el->id}}">
                <div class="products__card" >
                    
                    <div class="products__card_img">
                        @php
                            $img = explode(",",$el->images);
                        @endphp
                        <img src={{$img[0]}} alt="">
                    </div>
                    <div class="products__card_name">{{$el->name}}</div>
                    <div class="products__card_price">{{$el->price}} zł</div>
                </div>
                </a>
                @endforeach
                
            </div>
        </div>
    
    
    
</x-layout>
    

