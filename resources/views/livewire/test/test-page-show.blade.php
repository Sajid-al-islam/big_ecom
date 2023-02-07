<div class="p-5 border border-5">
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <h5>product details</h5>
    <p>{{$product->product_name??''}}</p>
    <p>{{$product->default_price??''}}</p>
    <button wire:click="$emitTo('test.test-counter', 'increment',{{$product->id}})">add to cart</button>

</div>
