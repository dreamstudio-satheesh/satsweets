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
                                    <li><a href="{{ url('saleslist') }}">Sales List</a></li>
                                    <li><a href="{{ url('pos') }}">New Sales</a></li>
                                    <li><a href="{{ url('salesreturnlist') }}">Sales Return List</a></li>
                                    <li><a href="{{ url('newsalesreturn') }}">New Sales Return</a></li>
                                </ul>
                            </li>
                            @role('admin')
                            <li class="submenu">
                                <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/purchase1.svg') }}" alt="img"><span> Purchase</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="{{ url('purchaselist') }}">Purchase List</a></li>
                                    <li><a href="{{ url('addpurchase') }}">Add Purchase</a></li>
                                    <li><a href="{{ url('importpurchase') }}">Import Purchase</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/expense1.svg') }}" alt="img"><span> Expense</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="{{ url('expenselist') }}">Expense List</a></li>
                                    <li><a href="{{ url('addexpense') }}">Add Expense</a></li>
                                    <li><a href="{{ url('expensecategory') }}">Expense Category</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/quotation1.svg') }}" alt="img"><span> Quotation</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="{{ url('quotationlist') }}">Quotation List</a></li>
                                    <li><a href="{{ url('addquotation') }}">Add Quotation</a></li>
                                </ul>
                            </li>
                           
                            <li class="submenu">
                                <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/return1.svg') }}" alt="img"><span> Return</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="{{ url('salesreturnlist') }}">Sales Return List</a></li>
                                    <li><a href="{{ url('addsalesreturn') }}">Add Sales Return </a></li>
                                    <li><a href="{{ url('purchasereturnlist') }}">Purchase Return List</a></li>
                                    <li><a href="{{ url('addpurchasereturn') }}">Add Purchase Return </a></li>
                                </ul>
                            </li>
                            @endrole
                            <li class="submenu">
                                <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/users1.svg') }}" alt="img"><span> People</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a class="{{ (request()->is('customers')) ? 'active' : '' }}" href="{{ url('customers') }}">Store List</a></li>
                                    <li><a class="{{ (request()->is('customers/create')) ? 'active' : '' }}" href="{{ url('customers/create') }}">Add Store</a></li>
                                    <li><a class="{{ (request()->is('supplierlist')) ? 'active' : '' }}" href="{{ url('supplierlist') }}">Supplier List</a></li>
                                    <li><a class="{{ (request()->is('addsupplier')) ? 'active' : '' }}" href="{{ url('addsupplier') }}">Add Supplier </a></li>
                                    @role('admin')
                                    <li><a class="{{ (request()->is('admin/users')) ? 'active' : '' }}" href="{{ url('admin/users') }}">User List</a></li>
                                    <li><a class="{{ (request()->is('admin/users/create')) ? 'active' : '' }}" href="{{ url('admin/users/create') }}">Add User</a></li>
                                    @endrole
                                </ul>
                            </li>
                            @role('admin')													
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
                                    <li><a href="{{ url('purchaseorderreport') }}">Purchase order report</a></li>
                                    <li><a href="{{ url('inventoryreport') }}">Inventory Report</a></li>
                                    <li><a href="{{ url('salesreport') }}">Sales Report</a></li>
                                    <li><a href="{{ url('invoicereport') }}">Invoice Report</a></li>
                                    <li><a href="{{ url('purchasereport') }}">Purchase Report</a></li>
                                    <li><a href="{{ url('supplierreport') }}">Supplier Report</a></li>
                                    <li><a href="{{ url('customerreport') }}">Customer Report</a></li>
                                </ul>
                            </li>
                          
                            <li class="submenu">
                                <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/settings.svg') }}" alt="img"><span> Settings</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="{{ url('generalsettings') }}">General Settings</a></li>
                                    <li><a href="{{ url('grouppermissions') }}">Group Permissions</a></li>
                                    <li><a href="{{ url('taxrates') }}">Tax Rates</a></li>
                                </ul>
                            </li>

                            @endrole

                            @role('user')
                            <li class="submenu">
                                <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/settings.svg') }}" alt="img"><span> Settings</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="{{ url('user/line') }}">Line Settings</a></li>
                                </ul>
                            </li>
                            @endrole
                        </ul>
                    </div>
                </div>
            </div>