<nav class="myaccount-tab-menu nav nav-tabs" id="nav-tab" role="tablist">
    <a class="myaccount-nav-link {{Route::is('frontend.profile') ? 'active' : ''}}" href="{{ route("frontend.profile") }}" id="dashboad-tab" aria-controls="dashboad" aria-selected="true">Dashboard</a>
    <a class="myaccount-nav-link {{Route::is('frontend.orders') ? 'active' : ''}}" href="{{ route("frontend.orders") }}" id="orders-tab" aria-controls="orders" aria-selected="false">Orders</a>
    <a class="myaccount-nav-link {{Route::is('frontend.reviews') ? 'active' : ''}}" href="{{ route("frontend.reviews") }}" id="download-tab" data-bs-target="#download" aria-controls="download" aria-selected="false">Reviews</a>
    <a class="myaccount-nav-link {{Route::is('frontend.address') ? 'active' : ''}}" href="{{ route("frontend.address") }}" id="address-edit-tab" data-bs-target="#address-edit" aria-controls="address-edit" aria-selected="false">address</a>
    <a class="myaccount-nav-link {{Route::is('frontend.account_details') ? 'active' : ''}}" href="{{ route("frontend.account_details") }}" id="account-info-tab" data-bs-target="#account-info" aria-controls="account-info" aria-selected="false">Account Details</a>
    <a class="myaccount-nav-link" href="javascript:void(0)"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </a>
</nav>


