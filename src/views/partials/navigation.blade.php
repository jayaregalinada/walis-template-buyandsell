<nav class="_widget _widget_navigation" data-widget-name="navigation">
    <div class="_widget_container row clearfix">
        @foreach( \Config::get('walis-t-buyandsell::template.navigations') as $key => $value )
        <div class="text-center column col-xs-6 col-md-3" data-nav="{{ $value }}">
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
