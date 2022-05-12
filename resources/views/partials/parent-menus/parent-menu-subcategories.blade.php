<li class="nav-item has-submenu">
    <a class="nav-link overlay" href="/listing-category/{{ $sub_items->slug }}" title="{{ $sub_items->name }}">
        <span class="text-sm cat-wrap">
            {{ $sub_items->name }}
        </span>
    </a>
    @if(count($sub_items->items) > 0)
        <a class="nav-link submenu-button menu-open">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
    @endif
    @if ($sub_items->items)
        <ul class="submenu collapse menu-open show">
            @if(count($sub_items->items) > 0)
                @foreach ($sub_items->items as $childItems)
                    @include('partials.sub_categories', ['sub_items' => $childItems])
                @endforeach
            @endif
        </ul>
    @endif
</li>

