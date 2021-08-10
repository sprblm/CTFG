<ul>
    @if(count($items) > 0)
        @foreach ($items as $item)
            <li>{{ $item->name }}</li>
            <ul>
                @if(count($item->childItems))
                    @foreach ($item->childItems as $childItems)
                        @include('partials.sub_categories', ['sub_items' => $childItems])
                    @endforeach
                @endif
            </ul>
        @endforeach
    @endif
</ul>