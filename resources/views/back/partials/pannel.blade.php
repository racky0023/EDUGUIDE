<div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-{{ $pannel->color }}">
        <div class="inner">
            <h3>{{ $pannel->nbr }}</h3>

            <p>{{ $pannel->name }}</p>
        </div>
        <div class="icon">
            <span class="fa fa-{{ $pannel->icon }}"></span>
        </div>
        <a href="{{ $pannel->url }}" class="small-box-footer">
            @lang('More info') <span class="fa fa-arrow-circle-right"></span>
        </a>
    </div>
</div>

<li class="treeview">
    <a href="#"><i class="fa fa-fw fa-{{ $icon }}"></i> <span>@lang('admin.menu.' . $type . 's')</span>
        <span class="pull-right-container">
            <span class="fa fa-angle-left pull-right"></span>
        </span>
    </a>
    <ul class="treeview-menu">
        @foreach ($items as $item)
            <li><a href="{{ $item['route'] }}"><span class="fa fa-fw fa-circle-o text-{{ $item['color'] }}"></span> <span>@lang('admin.menu.' . $item['command'])</span></a></li>
        @endforeach
    </ul>
</li>
