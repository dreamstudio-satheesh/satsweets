            <div class="header">
                        
                <!-- Logo -->
                <div class="header-left active">
                    <a href="{{ url('home') }}" class="logo">
                        <img src="{{ asset('assets/img/logo.png') }}"  alt="">
                    </a>
                    <a href="index.html" class="logo-small">
                        <img src="{{ asset('assets/img/logo-small.png') }}"  alt="">
                    </a>
                    <a id="toggle_btn" href="javascript:void(0);">
                    </a>
                </div>
                <!-- /Logo -->
                
                <a id="mobile_btn" class="mobile_btn" href="#sidebar">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                
                <!-- Header Menu -->
                <ul class="nav user-menu">
                

                
                    <!-- Flag -->
                   
                    <!-- /Flag -->
                
                    <!-- Shopping Cart -->
                    <li class="nav-item dropdown">
                        <a href="{{ url('/cart') }}" class="av-link">
                            <i class="fa fa-shopping-cart" data-bs-toggle="tooltip" title="" data-bs-original-title="fa fa-shopping-cart" aria-label="fa fa-shopping-cart" aria-describedby="tooltip883272"></i>
                             <span class="badge rounded-pill">4</span>
                        </a>
                        
                    </li>
                    <!-- /Shopping Cart -->
                    
                    <li class="nav-item dropdown has-arrow main-drop">
                        <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                            <span class="user-img"><img src="{{ asset('assets/img/profiles/avator1.jpg') }}" alt="">
                            <span class="status online"></span></span>
                        </a>
                        <div class="dropdown-menu menu-drop-user">
                            <div class="profilename">
                                <div class="profileset">
                                    <span class="user-img"><img src="{{ asset('assets/img/profiles/avator1.jpg') }}" alt="">
                                    <span class="status online"></span></span>
                                    <div class="profilesets">
                                        <h6>John Doe</h6>
                                        <h5>Admin</h5>
                                    </div>
                                </div>
                                <hr class="m-0">
                                <a class="dropdown-item" href=""> <i class="me-2"  data-feather="user"></i> My Profile</a>
                                <a class="dropdown-item" href=""><i class="me-2" data-feather="settings"></i>Settings</a>
                                <hr class="m-0">
                                <a class="dropdown-item logout pb-0" href="{{ url('/logout') }}"><img src="{{ asset('assets/img/icons/log-out.svg') }}" class="me-2" alt="img">Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- /Header Menu -->
                
                <!-- Mobile Menu -->
                <div class="dropdown mobile-user-menu">
                 
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">

                        <a href="{{ url('/cart') }}" class="dropdown-item"> <img src="http://localhost:8000/assets/img/icons/sales1.svg" alt=""> View Cart </a>
                        <a class="dropdown-item" href="">My Profile</a>
                        <a class="dropdown-item" href="">Settings</a>
                        <a class="dropdown-item" href="{{ url('/logout') }}">Logout</a>

                        
                    </div>
                </div>
                <!-- /Mobile Menu -->
            </div>