@if ($paginator->hasPages())

<ul class='pagination'>
    @if($paginator->onFirstPage())
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    @else
    <li><a href="{{ $paginator->previousPageUrl() }}"><i class="material-icons">chevron_left</i></a></li>
    @endif

    @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
            <span aria-disabled="true">
                <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 cursor-default leading-5">{{ $element }}</span>
            </span>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                <li class="active"><a href="#!">{{ $page }}</a></li>
                @else
                <li class="waves-effect"><a href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach

    @if ($paginator->hasMorePages())
    <li class="waves-effect"><a href="{{ $paginator->nextPageUrl() }}"><i class="material-icons">chevron_right</i></a></li>
    @else
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
    @endif

</ul>
@endif
