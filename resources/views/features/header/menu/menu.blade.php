<nav class="header__menu">
    <ul class="header__menu-list">
        @foreach ($menuItems as $menuItem)
            <li class="header__menu-item">
                <a href="{{ $menuItem['url'] }}" class="header__menu-link is-active">{{ $menuItem['name'] }}</a>
            </li>
        @endforeach
    </ul>
</nav>
<a href="{{ route('home') }}" class="header__contact-us-link button button-accent">Contact Us</a>