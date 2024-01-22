            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">
                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            <li class="menu-title">Admin</li>
                            <li>
                                <a href="{{ route('admin.dashboard') }}" class="waves-effect {{ (request()->is('users')) || (request()->is('admin/dashboard/*')) ? 'active' : '' }}">
                                    <span> Dashboard </span>
                                </a>
                            </li>
                            <!-- Has sub menu -->
{{--                            {{ dd(render_sidebar_by_role());  }}--}}
                            <li>
                                <a href="javascript:void(0);" class="waves-effect {{ (request()->is('users')) || (request()->is('admin/customer/*')) || (request()->is('admin/roles/*')) || (request()->is('admin/boards/*')) || (request()->is('admin/companies/*')) || (request()->is('admin/common/*')) || (request()->is('admin/partner/*')) || (request()->is('admin/supplier/*')) ? 'active' : '' }}"><span>Cấu hình chung <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li>
                                        <a href="{{ route('admin.commons.list') }}" style="white-space: nowrap;letter-spacing: -0.9px" class="waves-effect {{ (request()->is('users')) || (request()->is('admin/common/*')) ? 'active' : '' }}">
                                            <span> Cấu hình các thông tin chung </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.companies.list') }}" class="waves-effect {{ (request()->is('companies')) || (request()->is('admin/companies/*')) ? 'active' : '' }}">
                                            <span> Quản lý công ty </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.boards.list') }}" class="waves-effect {{ (request()->is('users')) || (request()->is('admin/boards/*')) ? 'active' : '' }}">
                                            <span> Quản lý phòng ban </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.roles.list') }}" style="white-space: nowrap;" class="waves-effect {{ (request()->is('users')) || (request()->is('admin/roles/*')) ? 'active' : '' }}">
                                            <span> Quản lý nhóm phân quyền </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="waves-effect {{ (request()->is('users')) || (request()->is('admin/export/*')) || (request()->is('admin/import/*')) ? 'active' : '' }}"><span>Quản lý lương <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li>
                                        <a href="{{ route('admin.export.salary') }}" class="waves-effect {{ (request()->is('users')) || (request()->is('admin/export/*')) ? 'active' : '' }}">
                                            <span> Quản lý lương cơ bản</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.salary_product.show') }}" style="white-space: nowrap;letter-spacing: -0.9px" class="waves-effect {{ (request()->is('users')) || (request()->is('admin/salary-product/*')) ? 'active' : '' }}">
                                            <span> Quản lý lương sản phẩm </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="{{ route('admin.users.list') }}" class="waves-effect {{ (request()->is('users')) || (request()->is('admin/users/*')) ? 'active' : '' }}">
                                    <span> Quản lý nhân viên </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.orders.list') }}" class="waves-effect {{ (request()->is('users')) || (request()->is('admin/orders/*')) ? 'active' : '' }}">
                                    <span> Quản lý sản đơn hàng </span>
                                </a>
                            </li>

                            <!-- Has sub menu -->
                            <li>
                                <a href="javascript:void(0);" class="waves-effect {{ (request()->is('users')) || (request()->is('admin/products-/*')) || (request()->is('admin/product-steps/*')) ? 'active' : '' }}"><span>Quản lý sản phẩm <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li>
                                        <a href="{{ route('admin.products.list') }}" class="waves-effect {{ (request()->is('users')) || (request()->is('admin/products/*')) ? 'active' : '' }}">
                                            <span> Cấu hình sản phẩm </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.productSteps.list') }}" style="white-space: nowrap;letter-spacing: -0.9px" class="waves-effect {{ (request()->is('users')) || (request()->is('admin/product-steps/*')) ? 'active' : '' }}">
                                            <span> Quản lý công đoạn cho sản phẩm </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="waves-effect {{ (request()->is('users')) || (request()->is('admin/warehouse-/*')) ? 'active' : '' }}"><span>Quản lý kho <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="{{ route('admin.wDevices.list')  }}" class="{{ (request()->is('users')) || (request()->is('admin/warehouse-device/*')) ? 'active' : '' }}">Quản lý kho thiết bị</a></li>
                                    <li><a href="{{ route('admin.wTools.list')  }}" class="{{ (request()->is('users')) || (request()->is('admin/warehouse-tool/*')) ? 'active' : '' }}">Quản lý kho dụng cụ</a></li>
                                    <li><a href="{{ route('admin.wMaterials.list')  }}" style="white-space: nowrap" class="{{ (request()->is('users')) || (request()->is('admin/warehouse-material/*')) ? 'active' : '' }}">Quản lý kho nguyên vật liệu</a></li>
                                    <li><a href="{{ route('admin.wSemiProduct.list')  }}" style="white-space: nowrap" class="{{ (request()->is('users')) || (request()->is('admin/warehouse-semi-product/*')) ? 'active' : '' }}">Quản lý kho bán thành phẩm</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="waves-effect {{ (request()->is('users')) || (request()->is('admin/customer/*')) || (request()->is('admin/partner/*')) || (request()->is('admin/supplier/*')) ? 'active' : '' }}"><span>Quản lý đối tác <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="{{ route('admin.customers.list')  }}" class="{{ (request()->is('users')) || (request()->is('admin/customer/*')) ? 'active' : '' }}">Quản lý khách hàng</a></li>
                                    <li><a href="{{ route('admin.suppliers.list')  }}" class="{{ (request()->is('users')) || (request()->is('admin/supplier/*')) ? 'active' : '' }}">Quản lý nhà cung cấp</a></li>
                                    <li><a href="{{ route('admin.partners.list')  }}" style="white-space: nowrap" class="{{ (request()->is('users')) || (request()->is('admin/partner/*')) ? 'active' : '' }}">Quản lý đối tác</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="waves-effect {{ (request()->is('users')) || (request()->is('admin/cuts-/*')) || (request()->is('admin/cut-configs/*')) || (request()->is('admin/cut-orders/*')) ? 'active' : '' }}"><span>Quản lý cắt<span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="{{ route('admin.cut_configs.list')  }}" class="{{ (request()->is('users')) || (request()->is('admin/cut-configs/*')) ? 'active' : '' }}">Cấu hình sơ đồ cắt</a></li>
                                    <li><a href="{{ route('admin.process-cut_orders.list')  }}" style="white-space: nowrap" class="{{ (request()->is('users')) || (request()->is('admin/cut-orders/*')) ? 'active' : '' }}">Quản lý tiến độ cắt</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>
                </div>
                <!-- Sidebar -left -->
            </div>
            <!-- Left Sidebar End -->
