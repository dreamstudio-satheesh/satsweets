            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
                    <div id="sidebar-menu" class="sidebar-menu">
                        <ul>
                            <li class="{{ (request()->is('home')) ? 'active' : '' }}">
                                <a href="{{ url('home') }}" ><img src="{{ asset('assets/img/icons/dashboard.svg') }}" alt="img"><span> Dashboard</span> </a>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/product.svg') }}" alt="img"><span> Product</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a class="{{ (request()->is('products')) ? 'active' : '' }}" href="{{ url('products') }}">Product List</a></li>
                                    <li><a class="{{ (request()->is('products/create')) ? 'active' : '' }}" href="{{ url('products/create') }}">Add Product</a></li>
                                    <li><a class="{{ (request()->is('categories')) ? 'active' : '' }}" href="{{ url('categories') }}">Category List</a></li>
                                    <li><a class="{{ (request()->is('categories/create')) ? 'active' : '' }}" href="{{ url('categories/create') }}">Add Category</a></li>
                                    <li><a href="javascript:void(0);">Import Products</a></li>
                                    <li><a href="javascript:void(0);">Print Barcode</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/sales1.svg') }}" alt="img"><span> Sales</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="">Sales List</a></li>
                                    <li><a href="">New Sales</a></li>
                                    <li><a href="">Sales Return List</a></li>
                                    <li><a href="">New Sales Return</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/purchase1.svg') }}" alt="img"><span> Purchase</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="purchaselist.html">Purchase List</a></li>
                                    <li><a href="addpurchase.html">Add Purchase</a></li>
                                    <li><a href="importpurchase.html">Import Purchase</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/expense1.svg') }}" alt="img"><span> Expense</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="">Expense List</a></li>
                                    <li><a href="">Add Expense</a></li>
                                    <li><a href="">Expense Category</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/quotation1.svg') }}" alt="img"><span> Quotation</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="">Quotation List</a></li>
                                    <li><a href="">Add Quotation</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/return1.svg') }}" alt="img"><span> Return</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="">Sales Return List</a></li>
                                    <li><a href="">Add Sales Return </a></li>
                                    <li><a href="">Purchase Return List</a></li>
                                    <li><a href="">Add Purchase Return </a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/users1.svg') }}" alt="img"><span> People</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a class="{{ (request()->is('customers')) ? 'active' : '' }}" href="{{ url('customers') }}">Store List</a></li>
                                    <li><a class="{{ (request()->is('customers/create')) ? 'active' : '' }}" href="{{ url('customers/create') }}">Add Store</a></li>
                                    <li><a class="{{ (request()->is('suppliers')) ? 'active' : '' }}" href="{{ url('suppliers') }}">Supplier List</a></li>
                                    <li><a class="{{ (request()->is('suppliers/create')) ? 'active' : '' }}" href="{{ url('suppliers/create') }}">Add Supplier </a></li>
                                    <li><a class="{{ (request()->is('admin/users')) ? 'active' : '' }}" href="{{ url('admin/users') }}">User List</a></li>
                                    <li><a class="{{ (request()->is('admin/users/create')) ? 'active' : '' }}" href="{{ url('admin/users/create') }}">Add User</a></li>
                                   
                                </ul>
                            </li>														
                            <li class="submenu">
                                <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/places.svg') }}" alt="img"><span> Places</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a class="{{ (request()->is('lines')) ? 'active' : '' }}" href="{{ url('lines') }}">Lines</a></li>
                                    <li><a class="{{ (request()->is('lines/create')) ? 'active' : '' }}"" href="{{ url('lines/create') }}">New Line</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/time.svg') }}" alt="img"><span> Report</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="">Purchase order report</a></li>
                                    <li><a href="">Inventory Report</a></li>
                                    <li><a href="">Sales Report</a></li>
                                    <li><a href="">Invoice Report</a></li>
                                    <li><a href="">Purchase Report</a></li>
                                    <li><a href="">Supplier Report</a></li>
                                    <li><a href="">Customer Report</a></li>
                                </ul>
                            </li>
                          
                            <li class="submenu">
                                <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/settings.svg') }}" alt="img"><span> Settings</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="">General Settings</a></li>
                                    <li><a href="">Group Permissions</a></li>
                                    <li><a href="">Tax Rates</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>