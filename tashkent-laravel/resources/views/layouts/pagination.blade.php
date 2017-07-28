@if ($paginator->hasPages())
    <nav class="pagination">

      {{-- Previous Page Link --}}
      @if ($paginator->onFirstPage())
          <a class="pagination-previous" disabled>@lang('messages.previous')</a>
      @else
          <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="pagination-previous">@lang('messages.previous')</a>
      @endif

      {{-- Next Page Link --}}
      @if ($paginator->hasMorePages())
          <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="pagination-next">@lang('messages.next_page')</a>
      @else
          <a class="pagination-next" disabled>@lang('messages.next_page')</a>
      @endif

      <ul class="pagination-list">

          {{-- Pagination Elements --}}
          @foreach ($elements as $element)
              {{-- "Three Dots" Separator --}}
              @if (is_string($element))
                  <li class="disabled"><a class="pagination-link" disabled>{{ $element }}</a></li>
              @endif

              {{-- Array Of Links --}}
              @if (is_array($element))
                  @foreach ($element as $page => $url)
                      @if ($page == $paginator->currentPage())
                          <li>
                            <a href="#" class="pagination-link is-current">{{ $page }}</a>
                          </li>
                      @else
                          <li>
                            <a href="{{ $url }}" class="pagination-link">{{ $page }}</a>
                          </li>
                      @endif
                  @endforeach
              @endif
          @endforeach

      </ul>
    </nav>
@endif
