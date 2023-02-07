<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="product-area section-two-space">
        <div class="container custom-container">
            <h2 class="text-center mb-4 mt-n2 mb-10">Hot Products</h2>
            <div class="row">
                @foreach ($products as $product)
                    @php
                        $product = (object) $product;           
                    @endphp
                    {{-- @livewire('product', ['product' => $product]) --}}
                    @include('livewire.components.product',  [
                        'product' => $product,
                        'class' => "col-md-3"
                    ])
                    {{-- ('product', ['product' => $product]) --}}
                @endforeach
    
                <div class="col-12">
                    <div class="text-center">
                        <div onclick="Livewire.emit('loadMore')" type="button" class="btn btn-primary">Load more</div>
                    </div>
                </div>
            </div>
        </div>
       
    </div> 
</div>
