<!-- sidebar @s -->
<div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-menu-trigger">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                        <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                    </div>
                    <div class="nk-sidebar-brand">
                        <a href="{{ url('/') }}" class="logo-link nk-sidebar-logo">
                            <img class="logo-light logo-img" src="{{asset('images/bbs.png')}}" srcset="./images/logo2x.png 2x" alt="logo">
                            <img class="logo-dark logo-img" src="{{asset('images/bbs.png')}}" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                        </a>
                    </div>
                </div><!-- .nk-sidebar-element -->
                <div class="nk-sidebar-element nk-sidebar-body">
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar>
                            <ul class="nk-menu">
                              <li class="nk-menu-item has-sub">
                               <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                    <span class="nk-menu-text"> Academic courses</span>
                                </a> 
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="{{ route('users.services') }}" class="nk-menu-link"><span class="nk-menu-text"> My Academic courses List</span></a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                    <span class="nk-menu-text"> skill development courses</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="{{ route('users.trainings') }}" class="nk-menu-link"><span class="nk-menu-text"> My skill development courses List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        {{-- <a href="{{ route('training.create') }}" class="nk-menu-link"><span class="nk-menu-text">Join skill development courses</span></a> --}}
                                    </li>
                                </ul>
                            </li>
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                    <span class="nk-menu-text"> Seminars</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="{{ route('users.seminars.index') }}" class="nk-menu-link"><span class="nk-menu-text"> My Seminar List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        {{-- <a href="{{ route('users.seminars.create') }}" class="nk-menu-link"><span class="nk-menu-text">Join Seminar</span></a> --}}
                                    </li>
                                </ul>
                            </li>
                     
                            </ul><!-- .nk-menu -->
                        </div><!-- .nk-sidebar-menu -->
                    </div><!-- .nk-sidebar-content -->
                </div><!-- .nk-sidebar-element -->
            </div>
            <!-- sidebar @e -->
