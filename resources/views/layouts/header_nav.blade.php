<nav class="uk-navbar">

    <!-- main sidebar switch -->
    <a href="#" id="sidebar_main_toggle" class="sSwitch sSwitch_left">
        <span class="sSwitchIcon"></span>
    </a>

    <div class="uk-navbar-flip">
        <ul class="uk-navbar-nav user_actions">
            <li><a href="#" id="full_screen_toggle" class="user_action_icon uk-visible-large"><i class="material-icons md-24 md-light">&#xE5D0;</i></a></li>
            <li data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                <a href="#" class="user_action_image"><img class="md-user-image" src="{{ asset('assets/img/avatars/avatar_11_tn.png')  }}" alt=""/></a>
                <div class="uk-dropdown uk-dropdown-small">
                    <ul class="uk-nav js-uk-prevent">
                        <li><a href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>