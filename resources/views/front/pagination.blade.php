@if ($paginator->onFirstPage())
    <span class="page-numbers prev inactive">@lang('pagination.previous')</span>
@else
    <a href="{{ $paginator->previousPageUrl() }}" class="page-numbers prev" rel="prev">@lang('pagination.previous')</a>
@endif