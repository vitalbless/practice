<div class="footer__body">
    <nav class="footer__menu">
        @foreach ($menuItems as $menuItem)
            <div class="footer__menu-column">
                <a class="footer__menu-main-link h6" href="{{ $menuItem['url'] }}">{{ $menuItem['name'] }}</a>
                @if (!empty($menuItem['subItems']))
                    <ul class="footer__menu-list">
                        @foreach ($menuItem['subItems'] as $subItem)
                            <li class="footer__menu-item">
                                <a href="{{ $subItem['url'] }}"
                                    class="footer_menu-link @if ($menuItem['name'] === 'Resources') button @endif">
                                    @if ($menuItem['name'] === 'Resources')
                                        <span class="icon icon--yellow-arrow footer__icon ">{{ $subItem['name'] }}</span>
                                    @else
                                        {{ $subItem['name'] }}
                                    @endif
                                </a>
                                {{-- @include('components.span-new') --}}
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        @endforeach
    </nav>
</div>
