<div>
    <div>
        <div class="account-area section-space">
            <div class="container">
                <div class="myaccount-page-wrapper">
                    <div class="row">
                        @include("livewire.account-sidebar")
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
