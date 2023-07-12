<div>
    <header class="header_area">
        <div class="header_area_content">
            <!-- logo_area start -->
            <!-- <div class="col-2"> -->
            <div class="logo_area">
                <a href="/">
                    <img src="{{ asset('contents/frontend') }}/assets/images/logo.png" alt="logo">
                </a>
            </div>
            <!-- </div> -->
            <!-- logo_area end -->
            <!-- search_area start -->
            <div class="search_area">
                <!-- <div class="search_content"> -->
                <form class="d-none d-md-block w-100" wire:submit.prevent="submitSearchPage">
                    <input wire:model="searchQuery" wire:keyup="search_product" class="form-control" type="text" id="search" placeholder="Search Products" />

                    <button type="submit" class="search_icon">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
                @if ($search_products)
                    <div class="search_result">
                        <div class="list-group list-group-flush">
                            @foreach ($search_products as $item)
                                @php
                                    $data = [
                                        "id" => $item->id,
                                        "product_name" => str_replace(' ', '-', strtolower($item->product_name))
                                    ];
                                @endphp
                                <a href="{{ route('product_details', $data) }}" class="list-group-item list-group-item-action">
                                    <img src="{{ env('PHOTO_URL') . '/' . $item->related_images[0]['image'] }}" width="80" height="80" alt="Image-Ctgcomputer">
                                    {{ $item->product_name }}
                                </a>
                            @endforeach
                                <a href="{{ route('search_product', $searchQuery) }}" class="my-5 list-group-item list-group-item-action active text-center">View more</a>
                        </div>
                    </div>
                @endif
                <!-- </div> -->
            </div>
            <!-- search_area end-->
            <!-- item_area start-->
            <div class="item_area">
                <!--item_1 start -->
                <div class="item offers">
                    <span href="#">
                        <div class="icon">
                            <i class="fa fa-gift"></i>
                        </div>
                        <div class="title_and_discription">
                            <div class="title">
                                <h2>offers</h2>
                            </div>
                            <div class="discription">
                                <p>latest offers</p>
                            </div>
                        </div>
                    </span>
                </div>
                <!--item_1 end -->

                <!--item_2 start -->
                {{-- <div class="item other">
                    <a href="#">
                        <div class="icon">
                            <i class="fa fa-bolt"></i>
                        </div>
                        <div class="title_and_discription">
                            <div class="title">
                                <h2>item 2</h2>
                            </div>
                            <div class="discription">
                                <p>latest item 2</p>
                            </div>
                        </div>
                    </a>
                </div> --}}
                <!--item_2 end -->

                <!--item_3 start -->
                <div class="item account">
                    <span href="#">
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="title_and_discription">
                            <div class="title">
                                <h2>account</h2>
                            </div>
                            <div class="discription">
                                <div class="register_and_login">
                                    <p>
                                        <a href="/register" class="register">register</a>
                                        or
                                        <a href="/login" class="login">login</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </span>
                </div>
                <!--item_3 end -->
                <!-- button_area start -->
                <div class="button_area">
                    <a href="#">
                        PC Builder
                    </a>
                </div>
                <!-- button_area end-->
            </div>
            <!-- item_area end-->

            <!-- responsive_header_manu start -->
            <div class="responsive_header_manu">
                <!-- menu_bar start-->
                <a href="#" class="menu_bar" onclick="event.preventDefault() ;document.getElementById('active_class').classList.toggle('add_nav_list')">
                    <i class="fa fa-align-left"></i>
                </a>
                <!-- menu_bar end-->
                <!-- logo start-->
                <div class="logo">
                    <a href="/">
                        <img src="{{ asset('contents/frontend') }}/assets/images/logo.png" alt="logo">
                    </a>
                </div>
                <!-- logo end-->
                <!-- search_and_card start -->
                <div class="search_and_card">
                    {{-- <a href="#" class="search_icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a> --}}

                    <a href="/cart" class="card_icon">
                        <i class="fa fa-shopping-cart"></i>
                        <span class="count">
                            <span class="cart-count">{{ $cart_count }}</span>
                        </span>
                    </a>
                </div>
                <!-- search_and_card end -->
            </div>
            <!--responsive_header_manu end -->
        </div>
    </header>

    <nav id="active_class" class="nav_area">
        <div class="nav_area_content">
            <!-- main_nav ul-->
            <ul>
                @php
                    function cats($category)
                    {
                        $data = [
                            "id" => $category['id'],
                            "category_name" => str_replace(' ', '-', strtolower($category['name']))
                        ];
                        echo " <li><a href=\"".route('category_product', $data)."\">". $category['name'];
                        if(count($category['child'])){
                            echo "<i class=\"fa fa-caret-down\"></i>";
                        }
                        echo "</a>";

                        if(count($category['child'])){
                            echo "<ul>";
                                foreach ($category['child'] as $category){
                                    cats($category);
                                }
                            echo "</ul>";
                        }
                        echo "</li> ";
                    }
                @endphp
                @foreach ($categories as $category)
                    @php
                        cats($category);
                    @endphp
                @endforeach
            </ul>
        </div>
    </nav>

    <div class="responsive_header_bottom">
        <div class="responsive_header_bottom_content">

            <a href="#" class="bottom_item gifi">
                <div class="icon">
                    <i class="fa fa-gift"></i>
                </div>
                <div class="icon_title">
                    <p>offers</p>
                </div>
            </a>

            <a href="/login" class="bottom_item user">
                <div class="icon">
                    <i class="fa fa-user"></i>
                </div>
                <div class="icon_title">
                    <p>account</p>
                </div>
            </a>
        </div>
    </div>
</div>
