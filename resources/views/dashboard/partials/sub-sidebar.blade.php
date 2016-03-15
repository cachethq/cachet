<div class="sub-sidebar">
    <div class="sidebar-toggler visible-xs">
        <i class="ion ion-navicon"></i>
    </div>
    <h3>{{ $sub_title }}</h3>
    <ul class="menu">
        @foreach($sub_menu as $key => $item)
        <li><a href="{{ $item['url'] }}" class="{{ $item['active'] ? 'active' : null }}"><i class="ion {{ $item['icon'] }}"></i> {{ $item['title'] }}</a></li>
        @endforeach
    </ul>
</div>
