<!-- Sidebar  -->
<nav id="sidebar">
    <div class="sidebar_blog_1">
        <div class="sidebar-header">
            <div class="logo_section">
                <a href="index.html"><img class="logo_icon img-responsive" src="{{ asset('images/logo/logo_icon.png') }}"
                        alt="#" /></a>
            </div>
        </div>
        <div class="sidebar_user_info">
            <div class="icon_setting"></div>
            <div class="user_profle_side">
                <div class="user_img"><img class="img-responsive" src="{{ asset('images/layout_img/user_img.jpg') }}"
                        alt="#" />
                </div>
                <div class="user_info">
                    @if (Session::has('user') && isset(Session::get('user')['name']))
                        <h6>{{ Session::get('user')['name'] }}</h6>
                    @endif
                    <p><span class="online_animation"></span> Online</p>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar_blog_2">
        <h4>General</h4>
        <ul class="list-unstyled components">
            <li class="active">
                <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                        class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                <ul class="collapse list-unstyled" id="dashboard">
                    <li>

                        <a href="{{ route('index') }}">> <span>Default
                                Dashboard</span></a>
                    </li>
                    <li>
                        <a href="{{ route('dashboard') }}">><span>Dashboard style 2</span></a>
                    </li>
                </ul>
            </li>
            <li><a href="{{ route('widgets') }}"><i class="fa fa-clock-o orange_color"></i> <span>Widgets</span></a>
            </li>
            <li>
                <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                        class="fa fa-diamond purple_color"></i> <span>Elements</span></a>
                <ul class="collapse list-unstyled" id="element">
                    <li><a href="{{ route('genral-element') }}">> <span>General Elements</span></a></li>
                    <li><a href="{{ route('media-gallery') }}">> <span>Media Gallery</span></a></li>
                    <li><a href="{{ route('icons') }}">> <span>Icons</span></a></li>
                    <li><a href="{{ route('invoice') }}">> <span>Invoice</span></a></li>
                </ul>
            </li>
            <li><a href="{{ route('tables') }}"><i class="fa fa-table purple_color2"></i> <span>Tables</span></a></li>
            <li>
                <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                        class="fa fa-object-group blue2_color"></i> <span>Apps</span></a>
                <ul class="collapse list-unstyled" id="apps">
                    <li><a href="{{ route('email') }}">> <span>Email</span></a></li>
                    <li><a href="{{ route('calender') }}">> <span>Calendar</span></a></li>
                    <li><a href="{{ route('media-gallery') }}">> <span>Media Gallery</span></a></li>
                </ul>
            </li>
            <li><a href="{{ route('pricing-table') }}"><i class="fa fa-briefcase blue1_color"></i> <span>Pricing
                        Tables</span></a></li>
            <li>
                <a href="{{ route('contact') }}">
                    <i class="fa fa-paper-plane red_color"></i> <span>Contact</span></a>
            </li>
            <li class="active">
                <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                        class="fa fa-clone yellow_color"></i> <span>Additional
                        Pages</span></a>
                <ul class="collapse list-unstyled" id="additional_page">
                    <li>
                        <a href="{{ route('profile') }}">> <span>Profile</span></a>
                    </li>
                    <li>
                        <a href="{{ route('projects') }}">> <span>Projects</span></a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}">> <span>Login</span></a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}">> <span>Sign up</span></a>
                    </li>
                    <li>
                        <a href="{{ route('404_error') }}">> <span>404 Error</span></a>
                    </li>
                </ul>
            </li>
            <li><a href="{{ route('map') }}"><i class="fa fa-map purple_color2"></i> <span>Map</span></a></li>
            <li><a href="{{ route('charts') }}"><i class="fa fa-bar-chart-o green_color"></i> <span>Charts</span></a>
            </li>
            <li><a href="{{ route('setting') }}"><i class="fa fa-cog yellow_color"></i> <span>Settings</span></a>
            </li>
        </ul>
    </div>
</nav>

<!-- end sidebar -->
