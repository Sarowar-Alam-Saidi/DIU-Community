<nav id="js-primary-nav" class="primary-nav" role="navigation">
                        <div class="nav-filter">
                            <div class="position-relative">
                                <input type="text" id="nav_filter_input" placeholder="Filter menu" class="form-control" tabindex="0">
                                <a href="#" onclick="return false;" class="btn-primary btn-search-close js-waves-off" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar">
                                    <i class="fal fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="info-card">
                            <img src="{{asset('frontend/img/demo/avatars/avatar-admin.jpg')}}" class="profile-image rounded-circle" alt="Dr. Codex Lantern">
                            <div class="info-card-text">
                                <a href="{{ url('/profile') }}" class="d-flex align-items-center text-white">
                                    <span class="text-truncate text-truncate-sm d-inline-block">
                                        {{Auth::user()->name}}
                                    </span>
                                </a>
                                <span class="d-inline-block text-truncate text-truncate-sm">উত্তরবঙ্গ, মঙ্গলগ্রহ </span>
                            </div>
                            <img src="{{asset('frontend/img/card-backgrounds/cover-2-lg.png')}}" class="cover" alt="cover">
                            <a href="#" onclick="return false;" class="pull-trigger-btn" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar" data-focus="nav_filter_input">
                                <i class="fal fa-angle-down"></i>
                            </a>
                        </div>

                        <ul id="js-nav-menu" class="nav-menu">
                            <!-- <li class="active open">
                                <a href="#" title="Application Intel" data-filter-tags="application intel">
                                    <i class="fal fa-info-circle"></i>
                                    <span class="nav-link-text" data-i18n="nav.application_intel">Application Intel</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="intel_analytics_dashboard.html" title="Analytics Dashboard" data-filter-tags="application intel analytics dashboard">
                                            <span class="nav-link-text" data-i18n="nav.application_intel_analytics_dashboard">Analytics Dashboard</span>
                                        </a>
                                    </li>
                                </ul>
                            </li> -->

                            <li class="active open">
                                <a href="{{ url('/') }}" title="Community" data-filter-tags="community">
                                    <i class="fal fa-info-circle"></i>
                                    <span class="nav-link-text">Community</span>
                                </a>
                            </li>

                            <li class="active open">
                                <a href="{{ url('/events') }}" title="Events" data-filter-tags="events">
                                    <i class="fal fa-info-circle"></i>
                                    <span class="nav-link-text">Events</span>
                                </a>
                            </li>

                            <li class="active open">
                                <a href="{{ url('/jobs') }}" title="Jobs" data-filter-tags="jobs">
                                    <i class="fal fa-info-circle"></i>
                                    <span class="nav-link-text">Jobs</span>
                                </a>
                            </li>

                            <li class="active open">
                                <a href="{{ url('/bloods') }}" title="Blood" data-filter-tags="blood">
                                    <i class="fal fa-info-circle"></i>
                                    <span class="nav-link-text">Blood</span>
                                </a>
                            </li>


                            <li class="active open">
                                <a href="{{ url('/messages') }}" title="Messages" data-filter-tags="messages">
                                    <i class="fal fa-info-circle"></i>
                                    <span class="nav-link-text">Messages</span>
                                </a>
                            </li>
                           <!--  <li class="nav-title">Tools & Components</li> -->
                        </ul>
                        <div class="filter-message js-filter-message bg-success-600"></div>
                    </nav>