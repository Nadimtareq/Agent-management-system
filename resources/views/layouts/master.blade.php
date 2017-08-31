@include('layouts.head')
<body class="sidebar_main_open sidebar_main_swipe">


<header id="header_main">
    <div class="header_main_content">
     @include('layouts.header_nav')
    </div>
    @include('layouts.search')
</header>
<!-- main header end -->
<!-- main sidebar -->
@include('layouts.side_nav')

<div id="page_content">

    <div id="page_content_inner">
        <div class="uk-width-large-10-10">


            @yield('content')


        </div>
    </div>
</div>

@include('layouts.js_script')
</body>
</html>