<div>
    {{-- Success is as dangerous as failure. --}}
    <main class="main-content">
        <!--== Start Hero Area Wrapper ==-->
        @livewire('components.banner')
        <!--== End Hero Area Wrapper ==-->

        <!--== Start Features Area Wrapper ==-->
        @include('frontend.include.categories')
        <!--== End Features Area Wrapper ==-->

        @livewire('home-page-product')
        
        {{-- @include('frontend.include.hot_product') --}}

    </main>
</div>
