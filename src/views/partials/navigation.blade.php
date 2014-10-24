<nav class="_widget _widget_navigation" data-widget-name="navigation">
    <div class="_widget_container container-fluid _widget_container_padding clearfix">
        @foreach( \Config::get('walis-t-buyandsell::template.navigations') as $key => $value )
        <div class="text-center col-xs-6 col-md-3 nav_1" data-nav="{{ $value }}">
            @if( $navigation === $value )
            <a href="#" class="active content">
            @else
            <a href="{{ route( $value .'.index') }}" class="content">
            @endif
                {{ $value }}
            </a>
        </div>
        @endforeach
    </div>
</nav>
