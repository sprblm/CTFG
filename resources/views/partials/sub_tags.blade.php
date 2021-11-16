<li class="nav-item has-subtag <?php if(@$activeTag->name == $sub_tags->name ) { echo 'active'; } ?>">
    <a class="nav-link overlay" href="/listing-tag/{{ $sub_tags->name }}" title="{{ $sub_tags->name }}">
        <span class="text-sm cat-wrap <?php if(@$activeGrandParent == $sub_tags->name ) { echo 'text-white-600'; } ?>">
            {{ $sub_tags->name }}
        </span>
    </a>
    @if(count($sub_tags->items) > 0)
        <a class="nav-link subtag-button">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
    @endif
    @if ($sub_tags->items)
        <ul class="subtag collapse <?php if(@$activeParentTag->name == $sub_tags->name ) { echo 'show'; } ?>">
            @if(count($sub_tags->items) > 0)
                @foreach($sub_tags->items as $childItems)
                    @include('partials.sub_menus', ['sub_tags' => $childItems])
                @endforeach
            @endif
        </ul>
    @endif
</li>
