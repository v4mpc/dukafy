@if ($paginator->hasPages())
    <ul class="list-inline list-unstyled">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled"><span>@lang('pagination.previous')</span></li>
        @else
            <li class="prev" ><a href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="fa fa-angle-left">@lang('pagination.previous')</a></li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="next"><a href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="fa fa-angle-right"></i>@lang('pagination.next')</a></li>
        @else
            <li class="disabled"><span>@lang('pagination.next')</span></li>
        @endif
    </ul>
@endif
