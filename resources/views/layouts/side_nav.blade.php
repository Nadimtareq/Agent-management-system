<aside id="sidebar_main">

    <div class="sidebar_main_header">
        <div class="sidebar_logo">
            <a href="{!! route('home') !!}" class="sSidebar_hide sidebar_logo_large">
                <img class="logo_regular" src="{{ asset('assets/img/logo_main.png') }}" alt="" height="15" width="71"/>
                <img class="logo_light" src="{{ asset('assets/img/logo_main_white.png') }}" alt="" height="15" width="71"/>
            </a>
            <a href="{!! route('home') !!}" class="sSidebar_show sidebar_logo_small">
                <img class="logo_regular" src="{{ asset('assets/img/logo_main_small.png') }}" alt="" height="32" width="32"/>
                <img class="logo_light" src="{{ asset('assets/img/logo_main_small_light.png') }}" alt="" height="32" width="32"/>
            </a>
        </div>

    </div>

    <div class="menu_section">
        <ul>

            @if (Auth::user()->type === 1)
            <li title="Kendo UI Widgets">
                <a href="{!! route('supperadmin') !!}">
                    <span class="menu_icon"><i class="material-icons">&#xE7FD;</i></span>
                    <span class="menu_title"> Super Admin</span>
                </a>

            </li>
            @endif

            @if (Auth::user()->type === 0)
            <li title="Kendo UI Widgets">
                <a href="{!! route('agent') !!}">
                    <span class="menu_icon"><i class="material-icons">&#xE536;</i></span>
                    <span class="menu_title"> Agent Dashboard </span>
                </a>

            </li>
                @endif

            <li title="Kendo UI Widgets">
                <a href="#">
                    <span class="menu_icon"><i class="material-icons">&#xE85E;</i></span>

                    <span class="menu_title">Prospects</span>
                </a>
                <ul>
                    <li><a href="{{ route('prospect') }}">Prospects</a></li>

                    <li><a href="{{ route('prospect_create') }}">Add New</a></li>

                </ul>
            </li>
                @if (Auth::user()->type === 1)
            <li title="Kendo UI Widgets">
                <a href="#">
                    <span class="menu_icon"><i class="material-icons">&#xE192;</i></span>
                    <span class="menu_title">Time Block</span>
                </a>
                <ul>
                    <li><a href="{{ route('block_time') }}">Block Time</a></li>
                    <li><a href="{{ route('block_time_create') }}">Add New</a></li>

                </ul>
            </li>
             @endif



            <li title="Kendo UI Widgets">
                <a href="#">

                    <span class="menu_icon"><i class="material-icons">&#xE1BD;</i></span>
                    <span class="menu_title"> Phase </span>

                </a>
                <ul>

                    <li><a href="{{ route('phase') }}">Phase</a></li>
                    <li><a href="{{ route('phase_create') }}">Add New</a></li>

                </ul>
            </li>
                @if (Auth::user()->type === 1)
            <li title="Kendo UI Widgets">
                <a href="#">

                    <span class="menu_icon"><i class="material-icons">&#xE536;</i></span>

                    <span class="menu_title"> Agent Account </span>

                </a>
                <ul>

                    <li><a href="{{ route('agent_account') }}">Agent</a></li>
                    <li><a href="{{ route('agent_account_create') }}">Add New</a></li>

                </ul>
            </li>




           @endif
                <li title="Kendo UI Widgets">
                    <a href="{!! route('meeting') !!}">
                        <span class="menu_icon"><i class="material-icons">&#xE914;</i></span>
                        <span class="menu_title"> Meeting View </span>
                    </a>

                </li>


        </ul>
    </div>
</aside><!-- main sidebar end -->