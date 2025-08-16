        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html"><img src="{{asset('assets/images/logo/logo.png')}}" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item {{request ()->is('/') ? 'active' :'' }} ">
                            <a href="/" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item  {{request ()->is('1') ? 'active' :'' }}">
                            <a href="/1" class='sidebar-link'>
                                <i class="bi bi-map-fill"></i>
                                <span>nomor 1</span>
                            </a>
                        </li>

                        <li class="sidebar-item  {{request ()->is('2') ? 'active' :'' }}">
                            <a href="/2" class='sidebar-link'>
                                <i class="bi bi-map-fill"></i>
                                <span>nomor 2</span>
                            </a>
                        </li>

                        <li class="sidebar-item  {{request ()->is('3') ? 'active' :'' }}">
                            <a href="/3" class='sidebar-link'>
                                <i class="bi bi-map-fill"></i>
                                <span>nomor 3</span>
                            </a>
                        </li>

                        <li class="sidebar-item  {{request ()->is('4') ? 'active' :'' }}">
                            <a href="/4" class='sidebar-link'>
                                <i class="bi bi-map-fill"></i>
                                <span>nomor 4</span>
                            </a>
                        </li>

                        <li class="sidebar-item  {{request ()->is('5') ? 'active' :'' }}">
                            <a href="/5" class='sidebar-link'>
                                <i class="bi bi-map-fill"></i>
                                <span>nomor 5</span>
                            </a>
                        </li>
                        
                        <li class="sidebar-item  {{request ()->is('6') ? 'active' :'' }}">
                            <a href="/6" class='sidebar-link'>
                                <i class="bi bi-map-fill"></i>
                                <span>nomor 6</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>