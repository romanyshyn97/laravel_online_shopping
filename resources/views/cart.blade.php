<x-layout>
    <div class="container px-6 mx-auto">
        <div class="flex justify-center my-6 cart">
            <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                <h3 class="text-3xl font-bold py-2 text-center">Your Shopping Cart</h3>
              <div >
                <table  class="table table-hover align-middle text-center">
                  <thead>
                    <tr >
                      <th ></th>
                      <th >Name</th>
                      <th >
                        <span class="lg:hidden" title="Quantity">Quantity</span>
            
                      </th>
                      <th class="hidden text-right md:table-cell"> Price</th>
                      <th class="hidden text-right md:table-cell"> Remove </th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($cartItems as $item)
                    <tr>
                      <td class="hidden pb-4 md:table-cell cart__image">
                        @php
                            $img = explode(",",$item->attributes->image);
                        @endphp
                        <a href="#">
                          <img src="{{ $img[0] }}" class="w-20 rounded" alt="Thumbnail">
                        </a>
                      </td>
                      <td>
                        <a href="/{{$item->id}}">
                          <p class="mb-2 md:ml-4 text-purple-600 font-bold">{{ $item->name }}</p>
                          
                        </a>
                      </td>
                      <td class="justify-center mt-6 md:justify-end md:flex">
                        <div class="h-10 w-28">
                          <div class="relative flex flex-row w-full h-8">
                            
                            <form action="{{ route('cart.update') }}" method="POST">
                              @csrf
                              <input type="hidden" name="id" value="{{ $item->id}}" >
                            <input type="text" name="quantity" value="{{ $item->quantity }}" 
                            class="w-16 text-center h-6 text-gray-800 outline-none rounded border border-blue-600" />
                            <button class="cart__btn">Change</button>
                            </form>
                          </div>
                        </div>
                      </td>
                      <td class="hidden text-right md:table-cell">
                        <span class="text-sm font-medium lg:text-base">
                            {{ $item->price }} zł
                        </span>
                      </td>
                      <td class="hidden text-right md:table-cell">
                        <form action="{{ route('cart.remove') }}" method="POST">
                          @csrf
                          <input type="hidden" value="{{ $item->id }}" name="id">
                          <button class="cart__btn lh-1 font-bold" style="width: 30px; height: 30px">x</button>
                      </form>
                        
                      </td>
                    </tr>
                    @endforeach
                     
                  </tbody>
                </table>
                <div>
                 Total: {{ Cart::getTotal() }} zł
                </div>
                <div>
                  <form action="{{ route('cart.clear') }}" method="POST">
                    @csrf
                    <button class="cart__btn-clear">Clear Carts</button>
                  </form>
                </div>


              </div>
            </div>
          </div>
    </div>
</x-layout>