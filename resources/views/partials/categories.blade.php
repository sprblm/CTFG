<style type="text/css">
    a{background-color:transparent;}
    ul{margin:0;padding:0;}
    ul{list-style:none;}
    *,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0;}
    a{color:inherit;text-decoration:inherit;}
    .bg-gray-300{--bg-opacity:1;background-color:#e2e8f0;background-color:rgba(226,232,240,var(--bg-opacity));}
    .border-gray-300{--border-opacity:1;border-color:#e2e8f0;border-color:rgba(226,232,240,var(--border-opacity));}
    .rounded{border-radius:.25rem;}
    .border{border-width:1px;}
    .inline-block{display:inline-block;}
    .font-sans{font-family:Roboto,system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;}
    .text-xs{font-size:1rem;}
    .text-sm{font-size:1.5rem;}
    .leading-snug{line-height:1.375;}
    .my-1{margin-top:.25rem;margin-bottom:.25rem;}
    .pl-1{padding-left:.25rem;}
    .pr-2{padding-right:.5rem;}
    .text-gray-100{--text-opacity:1;color:#f7fafc;color:rgba(247,250,252,var(--text-opacity));}
    .text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity));}
    .text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity));}
    .text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity));}
    .no-underline{text-decoration:none;}
    .truncate{overflow:hidden;text-overflow:ellipsis;white-space:nowrap;}

</style>
<ul>
    @foreach($categories->take(50) as $cat)
        <li class="font-sans my-1">
            {{-- <a aria-current="page" class="" href="/categories/the-tech">
                <div class="no-underline inline-block truncate leading-snug text-gray-700 rounded border border-gray-300 bg-gray-300" style="padding: 1px 8px;"><span class="text-sm">{{ $cat->name }}</span></div>
            </a> --}}
            <a href="/category/projects/{{ $cat->name }}">
                <div class="no-underline inline-block truncate leading-snug text-gray-700 rounded border border-gray-300 <?php if(@$activeCat == $cat->name ) { echo 'bg-gray-300'; } ?> " style="padding: 1px 8px; border-radius: 20px;">
                    <span class="text-sm cat-wrap">
                        {{ $cat->name }}
                    </span>
                </div>
            </a>
        </li>
    @endforeach
</ul>