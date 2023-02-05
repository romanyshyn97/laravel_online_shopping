<x-layout>
    <main class="main">
        <div class="container">
            <h1 class="main__title">ALL</h1>
            <div class="products">
                @foreach ($data as $el)
                <div class="products__card">
                    <div class="products__card_img">
                        @php
                            $img = explode(",",$el->images);
                        @endphp
                        <img src={{$img[0]}} alt="">
                    </div>
                    <div class="products__card_name">{{$el->name}}</div>
                    <div class="products__card_price">{{$el->price}} zł</div>
                </div>
                @endforeach
                
            </div>
        </div>
    </main>
    
    
    
</x-layout>
    

