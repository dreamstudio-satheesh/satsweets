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
                                    <li><a href="productlist.html">Product List</a></li>
                                    <li><a href="addproduct.html">Add Product</a></li>
                                    <li><a href="categorylist.html">Category List</a></li>
                                    <li><a href="addcategory.html">Add Category</a></li>
                                    <li><a href="SubCategorylist.html">Sub Category List</a></li>
                                    <li><a href="subaddcategory.html">Add Sub Category</a></li>
                                    <li><a href="brandlist.html">Brand List</a></li>
                                    <li><a href="addbrand.html">Add Brand</a></li>
                                    <li><a href="importproduct.html">Import Products</a></li>
                                    <li><a href="barcode.html">Print Barcode</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/sales1.svg') }}" alt="img"><span> Sales</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="saleslist.html">Sales List</a></li>
                                    <li><a href="pos.html">POS</a></li>
                                    <li><a href="pos.html">New Sales</a></li>
                                    <li><a href="salesreturnlists.html">Sales Return List</a></li>
                                    <li><a href="createsalesreturns.html">New Sales Return</a></li>
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
                                    <li><a href="expenselist.html">Expense List</a></li>
                                    <li><a href="createexpense.html">Add Expense</a></li>
                                    <li><a href="expensecategory.html">Expense Category</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/quotation1.svg') }}" alt="img"><span> Quotation</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="quotationList.html">Quotation List</a></li>
                                    <li><a href="addquotation.html">Add Quotation</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/return1.svg') }}" alt="img"><span> Return</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="salesreturnlist.html">Sales Return List</a></li>
                                    <li><a href="createsalesreturn.html">Add Sales Return </a></li>
                                    <li><a href="purchasereturnlist.html">Purchase Return List</a></li>
                                    <li><a href="createpurchasereturn.html">Add Purchase Return </a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/users1.svg') }}" alt="img"><span> People</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="customerlist.html">Customer List</a></li>
                                    <li><a href="addcustomer.html">Add Customer  </a></li>
                                    <li><a href="supplierlist.html">Supplier List</a></li>
                                    <li><a href="addsupplier.html">Add Supplier </a></li>
                                    <li><a href="userlist.html">User List</a></li>
                                    <li><a href="adduser.html">Add User</a></li>
                                    <li><a href="storelist.html">Store List</a></li>
                                    <li><a href="addstore.html">Add Store</a></li>
                                </ul>
                            </li>														
                            <li class="submenu">
                                <a href="javascript:void(0);" class="{{ (request()->segment(1) =='lines') ? 'active subdrop' : '' }}"><img src="{{ asset('assets/img/icons/places.svg') }}" alt="img"><span> Places</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a class="{{ (request()->is('lines')) ? 'active' : '' }}" href="{{ url('lines') }}">Lines</a></li>
                                    <li><a class="{{ (request()->is('lines/create')) ? 'active' : '' }}"" href="{{ url('lines/create') }}">New Line</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/time.svg') }}" alt="img"><span> Report</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="purchaseorderreport.html">Purchase order report</a></li>
                                    <li><a href="inventoryreport.html">Inventory Report</a></li>
                                    <li><a href="salesreport.html">Sales Report</a></li>
                                    <li><a href="invoicereport.html">Invoice Report</a></li>
                                    <li><a href="purchasereport.html">Purchase Report</a></li>
                                    <li><a href="supplierreport.html">Supplier Report</a></li>
                                    <li><a href="customerreport.html">Customer Report</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/users1.svg') }}" alt="img"><span> Users</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="newuser.html">New User </a></li>
                                    <li><a href="userlists.html">Users List</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/settings.svg') }}" alt="img"><span> Settings</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="generalsettings.html">General Settings</a></li>
                                    <li><a href="emailsettings.html">Email Settings</a></li>
                                    <li><a href="paymentsettings.html">Payment Settings</a></li>
                                    <li><a href="currencysettings.html">Currency Settings</a></li>
                                    <li><a href="grouppermissions.html">Group Permissions</a></li>
                                    <li><a href="taxrates.html">Tax Rates</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>