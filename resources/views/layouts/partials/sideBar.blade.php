 {{-- <li>
                        <a href="javascript:;" class="side-menu side-menu--active side-menu--open">
                            <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                            <div class="side-menu__title">
                                Dashboard 
                                <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="side-menu__sub-open">
                            <li>
                                <a href="index.html" class="side-menu side-menu--active side-menu--open">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Overview 1 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-dashboard-overview-2.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Overview 2 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-dashboard-overview-3.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Overview 3 </div>
                                </a>
                            </li>
                        </ul>
                    </li>
    --}}
                    <li>
                        <a href="{{ route('backend.dashboard') }}" class="side-menu {{ request()->routeIs('backend.dashboard') ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                            <div class="side-menu__title"> Dashboard </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('backend.category.index') }}" class="side-menu {{ request()->routeIs('backend.category.*') ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon"> <i class="fa-solid fa-list fa-lg"></i> </div>
                            <div class="side-menu__title"> Category </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('backend.banner.banner_index') }}" class="side-menu {{ request()->routeIs('backend.banner.*') ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon"> <i class="fa-solid fa-image fa-lg"></i> </div>
                            <div class="side-menu__title"> Banner </div>
                        </a>
                    </li>
                   