<div class="product-quick-view-content">
    <button type="button" class="btn-close" data-bs-dismiss="modal"><span>×</span></button>
    <div class="row row-gutter-0">
        <div class="col-lg-6">
            <div class="single-product-slider">
                <div class="single-product-thumb">
                    <div class="swiper single-product-quick-view-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="thumb-item">
                                    <img src="/{{ $product->related_images[0]['image'] }}" alt="Image" width="640" height="710">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="product-detail-content mt-6 mt-lg-0">
                <h2 class="product-detail-title mt-n1 me-10">{{ $product->product_name; }}</h2>
                <div class="product-detail-price">{{ $product->default_price }}</div>

                <div class="mb-3">
                    <button class="product-detail-cart-btn" wire:click="addToCart({!! $product->id !!})" type="button">Add to cart</button>
                </div>
                
                <ul class="product-detail-meta pt-6">
                    <li><span>Categories:</span> Home, Electronic</li>
                    <li><span>Tag</span> Electronic</li>
                </ul>

                <div class="product-detail-desc">
                    {!! $product->description  !!}
                </div>
                
            </div>
        </div>
    </div>
</div>

