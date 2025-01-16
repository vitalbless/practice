<header class="header" data-js-header>
    @include('features.header.promo.promo')
    <div class="header__body">
        <div class="header__body-inner container-no-tailwind">
            @include('features.header.logo.logo')
            <div class="header__overlay" data-js-header-overlay>
                @include('features.header.menu.menu')
            </div>
            @include('features.header.burger-button.burger-button')
        </div>
    </div>
</header>
