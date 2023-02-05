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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>
