<!-- BEGIN: Mobile Menu -->
<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar" style="background-color:#426f7f">
        <a href="" class="flex mr-auto">
            <img alt="Midone - HTML Admin Template" class="w-6" src="/path/to/your/logo.png">
        </a>
        <a href="javascript:;" class="mobile-menu-toggler">
            <i data-lucide="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i>
        </a>
    </div>
    <div class="scrollable">
        <a href="javascript:;" class="mobile-menu-toggler">
            <i data-lucide="x-circle" class="w-8 h-8 text-white transform -rotate-90"></i>
        </a>
        <ul class="scrollable__content py-2">
            <li class="menu__devider my-6"></li>
            <li>
                <a href="/static-route-1" class="menu menu--active">
                    <div class="menu__icon">
                        <i data-lucide="home"></i>
                    </div>
                    <div class="menu__title">
                        Home
                        <i data-lucide="chevron-down" class="menu__sub-icon transform rotate-180"></i>
                    </div>
                </a>
                <ul class="menu__sub-open">
                    <li>
                        <a href="/static-route-1-1" class="menu">
                            <div class="menu__icon">
                                <i data-lucide="activity"></i>
                            </div>
                            <div class="menu__title">Sub-item 1</div>
                        </a>
                    </li>
                    <li>
                        <a href="/static-route-1-2" class="menu">
                            <div class="menu__icon">
                                <i data-lucide="activity"></i>
                            </div>
                            <div class="menu__title">Sub-item 2</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="/static-route-2" class="menu">
                    <div class="menu__icon">
                        <i data-lucide="file"></i>
                    </div>
                    <div class="menu__title">Reports</div>
                </a>
            </li>
            <li>
                <a href="/static-route-3" class="menu">
                    <div class="menu__icon">
                        <i data-lucide="settings"></i>
                    </div>
                    <div class="menu__title">
                        Settings
                        <i data-lucide="chevron-down" class="menu__sub-icon"></i>
                    </div>
                </a>
                <ul>
                    <li>
                        <a href="/static-route-3-1" class="menu">
                            <div class="menu__icon">
                                <i data-lucide="activity"></i>
                            </div>
                            <div class="menu__title">Sub-item 1</div>
                        </a>
                    </li>
                    <li>
                        <a href="/static-route-3-2" class="menu">
                            <div class="menu__icon">
                                <i data-lucide="activity"></i>
                            </div>
                            <div class="menu__title">Sub-item 2</div>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- END: Mobile Menu -->
