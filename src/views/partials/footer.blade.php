<footer id="footer" class="_widget _widget_footer" data-widget="footer">
    <div class="container">
        <div class="col-md-3">
            <div class="panel panel-primary">
                <header class="panel-heading clearfix">
                    <span>{{ \Config::get('walis-t-buyandsell::template.categories.name') }}</span>
                    <button data-toggle="collapse" data-target="#category_item_nav" class="visible-xs visible-sm btn-info btn fa fa-navicon pull-right"></button>
                </header>
                <div id="category_item_nav" class="panel-collapse collapse in">
                    <ul class="list-group">
                        @foreach( \Config::get('walis-t-buyandsell::template.categories.categories') as $key => $value )
                        <li class="list-group-item ">{{ $value['name'] }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
        <div class="col-md-5">
            <div class="panel panel-primary">
                <header class="panel-heading clearfix">
                    <span>ABOUT</span>
                    <button data-toggle="collapse" data-target="#info_footer_nav" class="visible-xs visible-sm btn-info btn fa fa-navicon pull-right"></button>
                </header>
                <div id="info_footer_nav" class="panel-collapse collapse in">
                    <ul class="list-group">
                        <li class="list-group-item clearfix">

                            <div class="col-xs-2 text-center icon">
                                <i class="fa fa-3x fa-map-marker"></i>
                            </div>
                            <div class="col-xs-10 description">
                                <small class="text-danger">OUR LOCATION:</small><br />
                                <a href="{{ route('map') }}" target="_blank">
                                    {{ \Config::get('app.address') }}
                                </a>
                            </div>

                        </li>
                        <li class="list-group-item clearfix">
                            <div class="col-xs-2 text-center">
                                <i class="fa fa-3x fa-phone"></i>
                            </div>
                            <div class="col-xs-10">
                                <small class="text-danger">CALL US:</small><br />
                                {{ \Config::get('app.contact') }}
                            </div>
                        </li>
                        <li class="list-group-item clearfix">
                            <div class="col-xs-2 text-center">
                                <i class="fa fa-3x fa-envelope"></i>
                            </div>
                            <div class="col-xs-10">
                                <small class="text-danger">EMAIL US:</small><br />
                                <a href="mailto:{{ \Config::get('mail.username') }}">{{ \Config::get('mail.username') }}</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-primary">
                <header class="panel-heading clearfix">
                    <span>NAVIGATION</span>
                    <button data-toggle="collapse" data-target="#navigation_footer_nav" class="visible-xs visible-sm btn-info btn fa fa-navicon pull-right"></button>
                </header>
                <div id="navigation_footer_nav" class="panel-collapse collapse in">
                    <ul class="list-group">
                        @foreach( \Config::get('walis-t-buyandsell::template.navigations') as $key => $value )
                        <li class="list-group-item">
                            @if( $navigation === $value )
                            <a href="javascript:$('body').scrollTo(0)">
                            @else
                            <a href="{{ route( $value .'.index') }}">
                            @endif
                                {{ $value }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <hr class="container" />
    <div class="text-center copyright text-success">
        <a href="javascript:$('body').scrollTo(0)">&copy; {{ \Config::get('app.title') }} - 2014 <span class="label label-info">BETA</span></a><br />
        <a href="#walis_calling_card" data-toggle="modal" data-target="#walis_calling_card">Created and Developed by Walis Philippines</a>
    </div>
</footer>