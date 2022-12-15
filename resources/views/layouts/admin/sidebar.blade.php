<div class="iq-sidebar  sidebar-default ">
    <div class="iq-sidebar-logo d-flex align-items-center">
        <a href="" class="header-logo">
            {{-- <img src="{{ asset('webkit/assets/images/logo.svg') }}" alt="logo"> --}}
            <h3 class="logo-title light-logo text-capitalize">{{ config('app.name') }}</h3>
        </a>
        <div class="iq-menu-bt-sidebar ml-0">
            <i class="las la-bars wrapper-menu"></i>
        </div>
    </div>
    <div class="data-scrollbar" data-scroll="1">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li class="">
                    <a href="{{ route('home') }}" class="svg-icon">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <span class="ml-4">Home</span>
                    </a>
                </li>


                <li class="">
                    <a href="{{ url('invoices') }}" class="svg-icon">
                        <i class="fa fa-file" aria-hidden="true"></i>
                        <span class="ml-4">Invoices</span>
                    </a>
                </li>


                <li class="">
                    <a href="{{ url('products') }}" class="svg-icon">
                        <i class="fa fa-file" aria-hidden="true"></i>
                        <span class="ml-4">Products</span>
                    </a>
                </li>



                <li class="">
                    <a href="{{ url('customers') }}" class="svg-icon">
                        <i class="fa fa-file" aria-hidden="true"></i>
                        <span class="ml-4">Customers</span>
                    </a>
                </li>

                
                <li class="">
                    <a href="{{ url('categories') }}" class="svg-icon">
                        <i class="fa fa-file" aria-hidden="true"></i>
                        <span class="ml-4">Categories</span>
                    </a>
                </li>

                <li class="">
                    <a href="{{ url('lines') }}" class="svg-icon">
                        <i class="fa fa-file" aria-hidden="true"></i>
                        <span class="ml-4">Lines</span>
                    </a>
                </li>


             




                @role('ADMIN')
                    

                    <li class=" ">
                        <a href="#admin" class="collapsed" data-toggle="collapse" aria-expanded="false">
                            <svg class="svg-icon" id="p-dash10" width="20" height="20"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="8.5" cy="7" r="4"></circle>
                                <polyline points="17 11 19 13 23 9"></polyline>
                            </svg>
                            <span class="ml-4">Administration</span>
                            <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                            <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                        </a>
                        <ul id="admin" class="iq-submenu collapse" data-parent="#admin">

                            <li class="">
                                <a href="{{ route('admin.roles.index') }}">
                                    <i class="las la-minus"></i><span>Role List</span>
                                </a>
                            </li>

                            <li class="">
                                <a href="{{ route('admin.permissions.index') }}">
                                    <i class="las la-minus"></i><span>Permission List</span>
                                </a>
                            </li>

                            <li class="">
                                <a href="{{ route('admin.users.index') }}">
                                    <i class="las la-minus"></i><span>User List</span>
                                </a>
                            </li>
                        </ul>
                    </li>

          
                @endrole

               


                <li class="">
                    <a href="{{ route('profile.show', auth()->user()->id) }}" class="svg-icon text-danger">
                        <i class="fas fa-sign-out-alt fa-rotate-180 svg-icon"></i>
                        <span class="ml-4">Log out</span>
                    </a>
                </li>
            </ul>
        </nav>



        <div class="pt-5 pb-2"></div>
    </div>
</div>
