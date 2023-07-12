<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="product-area section-two-space">
        <div class="container custom-container">
            <h2 class="text-center mb-4 mt-n2 mb-10">Hot Products</h2>
            <style>
                .product_row{
                    display: grid;
                    grid-template-columns: repeat(5, 1fr);
                    gap: 10px;
                }
            </style>
            <div class="product_row">
                @foreach ($products as $product)
                    @php
                        $product = (object) $product;
                    @endphp
                    {{-- @livewire('product', ['product' => $product]) --}}
                    @include('livewire.components.product',  [
                        'product' => $product,
                        'class' => ""
                    ])
                    {{-- ('product', ['product' => $product]) --}}
                @endforeach
            </div>

            <div class="col-12">
                <div class="text-center mt-5">
                    <div onclick="Livewire.emit('loadMore')" type="button" class="btn btn-primary">Load more</div>
                </div>
            </div>
            
            <div class="mt-3 mb-2 about_website_section">
                <h1 class="fs-2"><b><a href="/">Chittagong Computer</a></b> is Largest & Trusted Retail Computer Shop in Bangladesh</h1>
                <p><b><a href="/">Chittagong Computer</a></b> provides customer service, with thousands of customers connected with the organization.
                We think differently. We don’t just sell computers, we create them. Our team of experts hand-pick each
                and every component to ensure that your new computer is perfect for you. Plus, we backs all our products 
                with a one-year warranty so you can be sure you’re getting the best possible value for your money. Come see
                us today and experience the <b><a href="/">Chittagong Computer</a></b> difference!</p>
                
                <h3>Best PC Component & Accessories Shop in Bangladesh</h3>
                <p>We are the best PC Component and Accessories shop in Bangladesh, and we have the best prices around. We have everything you need to build
                or upgrade your PC, including motherboards, processors, graphics cards, Desktop Ram, Laptop Ram, cases and more.
                We also carry a wide range of peripherals, from gaming mouse and keyboards to monitors and routers. 
                And don’t forget our unbeatable selection of software and games! So if you’re looking for the best deals on PCs
                and computer parts, shop at <b><a href="/">Chittagong Computer</a></b> today!</p>


                <h3>Top Laptop & Notebook Shop in Bangladesh</h3>
                <p><b><a href="/">Chittagong Computer</a></b> is a large and trusted laptop brand shop in Bangladesh.
                It doesn’t matter if you want a gaming laptop, an Intel laptop or an AMD Ryzen laptop for your work,
                gaming, freelancing or study. We have covered all range of budgets for laptops. You can also buy a genuine
                official Apple Macbook Air or Macbook Pro laptop from our store. <b><a href="/">Chittagong Computer</a></b> currently sells the latest
                high quality computer brand laptops like Razer, HP, Dell, Apple Macbook, Asus, Acer, Lenovo, Microsoft Surface,
                MSI, Gigabyte, Walton, Xiaomi MI, Huawei. Some laptops are based on Intel processors and include Pentium, Core i3,
                Core i5, Core i7, and Core i9 processors. On the other hand, some laptops are AMD processor-based and have processors
                like Ryzen 3, Ryzen 5, Ryzen 7, Ryzen 9, etc. <b><a href="/">Chittagong Computer</a></b> has a 2 years warranty on the laptop.</p>

                <h3>INTEL 13TH GEN PROCESSOR PRICE IN BANGLADESH</h3>
                <p>
                    Intel’s 13th-Gen Raptor Lake processors will bring more cores, more connectivity, a revamped core architecture, 
                    support for PCIe 5.0 SSDs, and even an officialy-verified 6.0 GHz peak boost clock to bear. Intel claims that Raptor
                    Lake will have a 15% gain in single-threaded performance and a 41% gain in multi-threaded compared to Alder Lake, and
                    an overall ‘40% performance scaling.’ These chips will arrive in October to square off with AMD’s Zen 4 Ryzen 7000 
                    processors, setting the stage for a fierce battle for desktop PC supremacy – particularly for the crown of the best
                     CPU for gaming as the Intel vs AMD rivalry enters a new stage.
                </p>


                <h3>RTX 4090 SERIES (Gigabyte, Asus, Msi, Galax, Colorful) GPU Price in Bangladesh</h3>
                <p>
                    The NVIDIA GeForce RTX 4090 is the ultimate GeForce GPU. It brings an enormous leap in performance,
                    efficiency, and AI-powered graphics. Experience ultra-high performance gaming, incredibly detailed virtual worlds,
                    unprecedented productivity, and new ways to create. It’s powered by the NVIDIA Ada Lovelace architecture and comes 
                    with 24 GB of G6X memory to deliver the ultimate experience for gamers and creators.
                </p>

                <h3>BEST OFFICE EQUIPMENT SHOP IN BANGLADESH</h3>
                <p>
                    Office equipment has always been a crucial part of our ever-growing Office Eco-System. Modern Day offices are largely
                    based on Technology in almost every aspect of their operations. Every smaller, medium or large organization needs office 
                    equipment to maintain its operations on a day-to-day basis. So naturally, they utilize Office equipment like Signage,
                    printers, Scanners, Photocopiers, consumable supplies, and Conference systems. <b><a href="/">Chittagong Computer</a></b> is one of the biggest
                    Office Equipment retail and online shop in Bangladesh. Visit <b><a href="/">Chittagong Computer</a></b> shop to buy your required Office Equipment
                    at the best price.
                </p>

                <h3>THE BEST E-COMMERCE SHOP TO ORDER THE PRODUCT OF YOUR CHOICE</h3>
                <p>
                    <b><a href="/">Chittagong Computer</a></b> has always prioritized its customers and has launched e-commerce shops in addition to physical stores
                    to ensure better customer service. The goal was to meet the needs of more customers in the shortest possible time. Since
                    then, we have topped the list as the best e-commerce shop in Bangladesh. Our website has a comprehensive search option 
                    to find the desired product. Our website features a unique PC maker so you can create a custom PC with your desired 
                    components.
                </p>

                <h3>Build PC with Best Price, Hassale free Product & After-Sales Service</h3>
                <p>
                    We <b><a href="/">Chittagong Computer</a></b> are the best choice for your home or office computing needs. We have the lowest prices around, 
                    and our quality and service are unbeatable. Plus, we offer after-sales support that is second to none. We also offers a 
                    cash-on-delivery option & EMI facility. We have online delivery available in all 64 districts in
                </p>
            </div>

            <div class="mt-3 btns_section">
                <div class="row">
                    <div class="col-2">
                        <button class="btn_box">
                            <div class="d-block">
                                <i class="fa fa-phone"></i>
                            </div>
                            <span style="display: inline-block;line-height: 1.6;">
                                <b><p>DESKTOP</p></b>
                                <b><p>01733-080350</p></b>
                            </span>
                        </button>
                    </div>

                    <div class="col-2">
                        <button class="btn_box">
                            <div class="d-block">
                                <i class="fa fa-phone"></i>
                            </div>
                            <span style="display: inline-block;line-height: 1.6;">
                                <b><p>LAPTOP</p></b>
                                <b><p>01733-080350</p></b>
                            </span>
                        </button>
                    </div>

                    <div class="col-2">
                        <button class="btn_box">
                            <div class="d-block">
                                <i class="fa fa-phone"></i>
                            </div>
                            <span style="display: inline-block;line-height: 1.6;">
                                <b><p>SERVICE</p></b>
                                <b><p>01733-080350</p></b>
                            </span>
                        </button>
                    </div>

                    <div class="col-2">
                        <button class="btn_box">
                            <div class="d-block">
                                <i class="fa fa-phone"></i>
                            </div>
                            <span style="display: inline-block;line-height: 1.6;">
                                <b><p>ACCESSORIES</p></b>
                                <b><p>01733-080350</p></b>
                            </span>
                        </button>
                    </div>
                    
                    <div class="col-2">
                        <button class="btn_box">
                            <div class="d-block">
                                <i class="fa fa-phone"></i>
                            </div>
                            <span style="display: inline-block;line-height: 1.6;">
                                <b><p>HELPLINE</p></b>
                                <b><p>01733-080350</p></b>
                            </span>
                        </button>
                    </div>

                    <div class="col-2">
                        <button class="btn_box">
                            <div class="d-block">
                                <i class="fa fa-phone"></i>
                            </div>
                            <span style="display: inline-block;line-height: 1.6;">
                                <b><p>RMA</p></b>
                                <b><p>01733-080350</p></b>
                            </span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="section-two-space">
                <h2 class="text-center">Gallery</h2>
                <h4 class="text-center mb-5">Our Happy Customers & Activities</h4>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <img src="/blog1.jpg" class="card-img-top" alt="/blog1.jpg">
                            <div class="card-body">
                              <h3 class="card-title">Gaming pc build</h3>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <img src="/blog2.jpg" class="card-img-top" alt="/blog2.jpg">
                            <div class="card-body">
                              <h3 class="card-title">PC Build Under 50k</h3>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <img src="/blog3.jpg" class="card-img-top" alt="/blog3.jpg">
                            <div class="card-body">
                              <h3 class="card-title">Gaming laptop</h3>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        
    </div>
</div>
