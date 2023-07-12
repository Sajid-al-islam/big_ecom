
<div class="{{ isset($class)? $class : "col-md-3" }} mb-4" :wire:key="{{ $product->id }}">
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <style>
        .stock_alert {
            line-height: 22px;
            font-size: 17px;
            font-weight: 600;
            color: #ef4a23;
        }
    </style>
    @if (isset($product))    
    @php
        $data = [
            "id" => $product->id,
            "product_name" => \Illuminate\Support\Str::slug($product->product_name)
        ];
    @endphp
    
    <div class="product-item product-item-border border custom-product-item">
        <a class="product-item-thumb" href="{{ route('product_details', $data) }}">
            @if (count($product->related_images) > 0)
                <img src="{{ $product->related_images[0]['image_link'] }}" width="228" height="228" alt="Image-Ctgcomputer">
            @endif
        </a>
        @if ($product->discounts)
            <span class="badges">-{{ $product->discounts['discount_percent'] }}%</span>
        @endif
        <div class="product-item-action">
            
            <button type="button" type="button" onclick="showQuickView({{ $product->id }})" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal" class="product-action-btn action-btn-quick-view">
                <i class="icon-magnifier"></i>
            </button>
        </div>
        <div>
            <div class="product-item-info text-center pb-2">
                <h5 class="product-item-title mb-2"><a href="{{ route('product_details', $data) }}">{{ $product->product_name }}</a></h5>
                @if(!is_null($product->product_brand))
                <h5 class="product-item-title mb"><a href="#">{{ $product->product_brand['name'] }}</a></h5>
                {{-- <div class="product-item-price mb-0">{{ $product->default_price }}<span class="price-old">{{ $product->default_price }}</span></div> --}}
                @endif
            </div>
            <div class="d-flex justify-content-center">
                <div class="product-item-price mb-4">
                    @if ($product->discounts && $product->discounts['discount_last_date'] > Carbon\Carbon::now())
                        <div class="d-block">
                            <span class="price-old">{{ number_format($product->default_price) }} ৳</span>
                        </div>
                        <div class="d-block">
                            <b>{{ number_format($product->default_price-$product->discounts['discount_amount']) }} ৳</b>
                        </div>
                    @else
                        @if (is_numeric($product->default_price))
                            {{ number_format($product->default_price) }} ৳
                        @else
                            {{ $product->default_price }}
                        @endif
                    @endif
                    <div class="stock_status mt-2">
                        @if ($product->stocks_sum_qty - $product->sales_sum_qty <= $product->track_inventory_on_the_variant_level_low_stock)
                            {{-- <span class=" mb-4 stock_alert">Out of stock</span> --}}
                            <h5 class="text-danger">Out of stock</h5>
                        @else
                            <h5 class="text-success">In stock</h5>
                        @endif
                    </div>
                </div>
                
                
                {{-- <button type="button" onclick="Livewire.emitTo('components.cart-count', 'cartAdded', {{$product->id}})" class="info-btn-cart me-4 mb-4"><i class="icon-handbag"></i></button> --}}
            </div>

            <div class="d-flex justify-content-center">
                @if ($product->stocks_sum_qty - $product->sales_sum_qty <= $product->track_inventory_on_the_variant_level_low_stock)
                    {{-- <span class=" mb-4 stock_alert">Out of stock</span> --}}
                    <button type="button" disabled class="btn_add_to_cart btn_add_to_cart mb-4">Out of stock</button>
                @else
                    <button type="button" onclick="Livewire.emitTo('components.cart-count', 'cartAdded', {{$product->id}})" class="btn_add_to_cart btn_add_to_cart mb-4">Add to cart</button>
                @endif
            </div>
        </div>
    </div>
    
    @endif
</div>
    

