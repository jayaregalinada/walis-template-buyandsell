<header class="_widget _widget_top top-phone">
    <div class="container text-right">
        <p><i class="fa fa-phone"></i>
            {{ \Config::get('app.contact') }} -
            <a href="{{ route('map') }}" target="_blank">
                {{ \Config::get('app.address') }}
            </a>
        </p>
    </div>
</header>
