@extends('layout.app')
@section('pages')

    <!-- dashboard inner -->
    <div class="midde_cont">
        <div class="container-fluid">
            <div class="row column_title">
                <div class="col-md-12">
                    <div class="page_title">
                        <h2>Widgets</h2>
                    </div>
                </div>
            </div>
            <!-- row -->
            <div class="row column1">
                <div class="col-md-6 col-lg-4">
                    <div class="full white_shd margin_bottom_30">
                        <div class="info_people">
                            <div class="p_info_img">
                                <img src="{{asset('images/layout_img/msg2.png')}}" alt="#" />
                            </div>
                            <div class="user_info_cont">
                                <h4>Smith</h4>
                                <p>developer@gmail.com</p>
                                <p class="p_status">Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="full white_shd margin_bottom_30">
                        <div class="info_people">
                            <div class="p_info_img">
                                <img src="{{asset('images/layout_img/msg3.png')}}" alt="#" />
                            </div>
                            <div class="user_info_cont">
                                <h4>David</h4>
                                <p>developer@gmail.com</p>
                                <p class="p_status">Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="full white_shd margin_bottom_30">
                        <div class="info_people">
                            <div class="p_info_img">
                                <img src="{{asset('images/layout_img/msg4.png')}}" alt="#" />
                            </div>
                            <div class="user_info_cont">
                                <h4>John</h4>
                                <p>developer@gmail.com</p>
                                <p class="p_status">Tester</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <!-- row -->
            <div class="row margin_bottom_30">
                <div class="col-md-12 col-lg-4 widget_progress_section margin_bottom_30">
                    <div class="white_shd full">
                        <div class="widget_progress_bar">
                            <p class="progress_no">73%</p>
                            <p class="progress_head">Sed ut perspi ciatis unde</p>
                            <div class="progress_bar">
                                <!-- Skill Bars -->
                                <span class="skill" style="width:73%;">Lorem ipsum dolor sit amet <span
                                        class="info_valume">73%</span></span>
                                <div class="progress skill-bar ">
                                    <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar"
                                        aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 widget_progress_section margin_bottom_30">
                    <div class="white_shd full">
                        <div class="widget_progress_bar">
                            <p class="progress_no">90%</p>
                            <p class="progress_head">Sed ut perspi ciatis unde</p>
                            <div class="progress_bar">
                                <!-- Skill Bars -->
                                <span class="skill" style="width:90%;">Lorem ipsum dolor sit amet <span
                                        class="info_valume">90%</span></span>
                                <div class="progress skill-bar ">
                                    <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar"
                                        aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 widget_progress_section margin_bottom_30">
                    <div class="white_shd full">
                        <div class="widget_progress_bar">
                            <p class="progress_no">85%</p>
                            <p class="progress_head">Sed ut perspi ciatis unde</p>
                            <div class="progress_bar">
                                <!-- Skill Bars -->
                                <span class="skill" style="width:85%;">Lorem ipsum dolor sit amet <span
                                        class="info_valume">85%</span></span>
                                <div class="progress skill-bar ">
                                    <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar"
                                        aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <!-- row -->
            <div class="row column1 social_media_section">
                <div class="col-md-6 col-lg-3">
                    <div class="full socile_icons fb margin_bottom_30">
                        <div class="social_icon">
                            <i class="fa fa-facebook"></i>
                        </div>
                        <div class="social_cont">
                            <ul>
                                <li>
                                    <span><strong>35k</strong></span>
                                    <span>Friends</span>
                                </li>
                                <li>
                                    <span><strong>128</strong></span>
                                    <span>Feeds</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="full socile_icons tw margin_bottom_30">
                        <div class="social_icon">
                            <i class="fa fa-twitter"></i>
                        </div>
                        <div class="social_cont">
                            <ul>
                                <li>
                                    <span><strong>584k</strong></span>
                                    <span>Followers</span>
                                </li>
                                <li>
                                    <span><strong>978</strong></span>
                                    <span>Tweets</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="full socile_icons linked margin_bottom_30">
                        <div class="social_icon">
                            <i class="fa fa-linkedin"></i>
                        </div>
                        <div class="social_cont">
                            <ul>
                                <li>
                                    <span><strong>758+</strong></span>
                                    <span>Contacts</span>
                                </li>
                                <li>
                                    <span><strong>365</strong></span>
                                    <span>Feeds</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="full socile_icons google_p margin_bottom_30">
                        <div class="social_icon">
                            <i class="fa fa-google-plus"></i>
                        </div>
                        <div class="social_cont">
                            <ul>
                                <li>
                                    <span><strong>450</strong></span>
                                    <span>Followers</span>
                                </li>
                                <li>
                                    <span><strong>57</strong></span>
                                    <span>Circles</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row column4 graph">
                <div class="col-md-4">
                    <div class="white_shd full margin_bottom_30">
                        <div class="full graph_head">
                            <div class="heading1 margin_0">
                                <h2>Message</h2>
                            </div>
                        </div>
                        <div class="full progress_bar_inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="msg_section">
                                        <div class="msg_list_main">
                                            <ul class="msg_list">
                                                <li>
                                                    <span><img src="{{asset('images/layout_img/msg2.png')}}" class="img-responsive"
                                                            alt="#" /></span>
                                                    <span>
                                                        <span class="name_user">John Smith</span>
                                                        <span class="msg_user">Sed ut perspiciatis unde omnis.</span>
                                                        <span class="time_ago">12 min ago</span>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span><img src="{{asset('images/layout_img/msg3.png')}}" class="img-responsive"
                                                            alt="#" /></span>
                                                    <span>
                                                        <span class="name_user">John Smith</span>
                                                        <span class="msg_user">On the other hand, we denounce.</span>
                                                        <span class="time_ago">12 min ago</span>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span><img src="{{asset('images/layout_img/msg2.png')}}" class="img-responsive"
                                                            alt="#" /></span>
                                                    <span>
                                                        <span class="name_user">John Smith</span>
                                                        <span class="msg_user">Sed ut perspiciatis unde omnis.</span>
                                                        <span class="time_ago">12 min ago</span>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span><img src="{{asset('images/layout_img/msg3.png')}}" class="img-responsive"
                                                            alt="#" /></span>
                                                    <span>
                                                        <span class="name_user">John Smith</span>
                                                        <span class="msg_user">On the other hand, we denounce.</span>
                                                        <span class="time_ago">12 min ago</span>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="white_shd full margin_bottom_30">
                        <div class="full graph_head">
                            <div class="heading1 margin_0">
                                <h2>Calendar</h2>
                            </div>
                        </div>
                        <div class="full progress_bar_inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="full">
                                        <div class="ui calendar" id="example14"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="white_shd full margin_bottom_30">
                        <div class="full graph_head">
                            <div class="heading1 margin_0">
                                <h2>Update</h2>
                            </div>
                        </div>
                        <div class="full progress_bar_inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="msg_list_main">
                                        <ul class="msg_list">
                                            <li>
                                                <span>
                                                    <span class="name_user">Herman Beck</span>
                                                    <span class="msg_user">Sed ut perspiciatis unde omnis.</span>
                                                    <span class="time_ago">12 min ago</span>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <span class="name_user">John Smith</span>
                                                    <span class="msg_user">On the other hand, we denounce.</span>
                                                    <span class="time_ago">12 min ago</span>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <span class="name_user">John Smith</span>
                                                    <span class="msg_user">Sed ut perspiciatis unde omnis.</span>
                                                    <span class="time_ago">12 min ago</span>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <span class="name_user">John Smith</span>
                                                    <span class="msg_user">On the other hand, we denounce.</span>
                                                    <span class="time_ago">12 min ago</span>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="white_shd full margin_bottom_30">
                        <div class="full graph_head">
                            <div class="heading1 margin_0">
                                <h2>Daily feed</h2>
                            </div>
                        </div>
                        <div class="full progress_bar_inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="msg_list_main">
                                        <ul class="msg_list">
                                            <li>
                                                <span>
                                                    <span class="name_user">Herman Beck</span>
                                                    <span class="msg_user">Sed ut perspiciatis unde omnis.</span>
                                                    <span class="time_ago">12 min ago</span>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <span class="name_user">John Smith</span>
                                                    <span class="msg_user">On the other hand, we denounce.</span>
                                                    <span class="time_ago">12 min ago</span>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <span class="name_user">John Smith</span>
                                                    <span class="msg_user">Sed ut perspiciatis unde omnis.</span>
                                                    <span class="time_ago">12 min ago</span>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <span class="name_user">Sales</span>
                                                    <span class="msg_user">On the other hand, we denounce.</span>
                                                    <span class="time_ago">12 min ago</span>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="white_shd full margin_bottom_30">
                        <div class="full graph_head">
                            <div class="heading1 margin_0">
                                <h2>Last Comments</h2>
                            </div>
                        </div>
                        <div class="full progress_bar_inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="msg_list_main">
                                        <ul class="msg_list">
                                            <li>
                                                <span>
                                                    <span class="name_user">Herman Beck</span>
                                                    <span class="msg_user">Sed ut perspiciatis unde omnis.</span>
                                                    <span class="time_ago">12 min ago</span>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <span class="name_user">John Smith</span>
                                                    <span class="msg_user">On the other hand, we denounce.</span>
                                                    <span class="time_ago">12 min ago</span>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <span class="name_user">John Smith</span>
                                                    <span class="msg_user">Sed ut perspiciatis unde omnis.</span>
                                                    <span class="time_ago">12 min ago</span>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <span class="name_user">John Smith</span>
                                                    <span class="msg_user">On the other hand, we denounce.</span>
                                                    <span class="time_ago">12 min ago</span>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer -->
        <div class="container-fluid">
            <div class="footer">
                <p>Copyright © 2018 Designed by html.design. All rights reserved.</p>
            </div>
        </div>
    </div>
    <!-- end dashboard inner -->
@endsection
