<div>
    <div>
        <div class="account-area section-space">
            <div class="container">
                <div class="myaccount-page-wrapper">
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                            <nav class="myaccount-tab-menu nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="myaccount-nav-link active" id="dashboad-tab" data-bs-toggle="tab" data-bs-target="#dashboad" type="button" role="tab" aria-controls="dashboad" aria-selected="true">Dashboard</button>
                                <button class="myaccount-nav-link" id="orders-tab" data-bs-toggle="tab" data-bs-target="#orders" type="button" role="tab" aria-controls="orders" aria-selected="false">Orders</button>
                                <button class="myaccount-nav-link" id="download-tab" data-bs-toggle="tab" data-bs-target="#download" type="button" role="tab" aria-controls="download" aria-selected="false">Reviews</button>
                                <button class="myaccount-nav-link" id="payment-method-tab" data-bs-toggle="tab" data-bs-target="#payment-method" type="button" role="tab" aria-controls="payment-method" aria-selected="false">Payment Method</button>
                                <button class="myaccount-nav-link" id="address-edit-tab" data-bs-toggle="tab" data-bs-target="#address-edit" type="button" role="tab" aria-controls="address-edit" aria-selected="false">address</button>
                                <button class="myaccount-nav-link" id="account-info-tab" data-bs-toggle="tab" data-bs-target="#account-info" type="button" role="tab" aria-controls="account-info" aria-selected="false">Account Details</button>
                                <a class="myaccount-nav-link" href="javascript:void(0)"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                </a>
                            </nav>
                        </div>
                        <div class="col-lg-9 col-md-8">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade active show" id="dashboad" role="tabpanel" aria-labelledby="dashboad-tab">
                                    <div class="myaccount-content">
                                        <h3>Dashboard</h3>
                                        <div class="welcome">
                                            <p>Hello, <strong>{{ $user->first_name }} {{ $user->last_name }}</strong> (If Not <strong>{{ $user->first_name }} {{ $user->last_name }}</strong>
                                                <a href="javascript:void(0)" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}</a>)
                                            </p>
                                        </div>
                                        <p class="mb-0">From your account dashboard. you can easily check &amp; view your recent orders, manage your shipping and billing addresses and edit your password and account details.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                    <div class="myaccount-content">
                                        @include('livewire.orders',  [
                                            'orders' => $orders
                                        ])
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="download" role="tabpanel" aria-labelledby="download-tab">
                                    <div class="myaccount-content">
                                        @include('livewire.review',  [
                                            'reviews' => $reviews
                                        ])
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="payment-method" role="tabpanel" aria-labelledby="payment-method-tab">
                                    <div class="myaccount-content">
                                        <h3>Payment Method</h3>
                                        <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="address-edit" role="tabpanel" aria-labelledby="address-edit-tab">
                                    <div class="myaccount-content">
                                        <h3>Billing Address</h3>
                                        <address>
                                            <p><strong>Alex Tuntuni</strong></p>
                                            <p>
                                                1355 Market St, Suite 900 <br />
                                                San Francisco, CA 94103
                                            </p>
                                            <p>Mobile: (123) 456-7890</p>
                                        </address>
                                        <a href="index.html" class="check-btn sqr-btn"><i class="fa fa-edit"></i> Edit Address</a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="account-info" role="tabpanel" aria-labelledby="account-info-tab">
                                    <div class="myaccount-content">
                                        @livewire('account-details')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>
