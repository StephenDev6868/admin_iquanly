            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            <li class="menu-title">Admin</li>
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
{{--                                    <li><a href="{{ route('admin.wMaterial.list')  }}">Quản lý kho bán thành phẩm</a></li>--}}
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
{{--                            <li class="menu-title">Main</li>--}}
{{--                            <li>--}}
{{--                                <a href="index" class="waves-effect">--}}
{{--                                    <i class="mdi mdi-view-dashboard"></i><span class="badge badge-primary badge-pill float-right">2</span> <span> Dashboard </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="calendar" class="waves-effect"><i class="mdi mdi-calendar-check"></i><span> Calendar </span></a>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-email-outline"></i><span> Email <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>--}}
{{--                                <ul class="submenu">--}}
{{--                                    <li><a href="email-inbox">Inbox</a></li>--}}
{{--                                    <li><a href="email-read">Email Read</a></li>--}}
{{--                                    <li><a href="email-compose">Email Compose</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}

{{--                            <li class="menu-title">Components</li>--}}

{{--                            <li>--}}
{{--                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-buffer"></i> <span> UI Elements <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span> </a>--}}
{{--                                <ul class="submenu">--}}
{{--                                    <li><a href="ui-alerts">Alerts</a></li>--}}
{{--                                    <li><a href="ui-buttons">Buttons</a></li>--}}
{{--                                    <li><a href="ui-badge">Badge</a></li>--}}
{{--                                    <li><a href="ui-cards">Cards</a></li>--}}
{{--                                    <li><a href="ui-carousel">Carousel</a></li>--}}
{{--                                    <li><a href="ui-dropdowns">Dropdowns</a></li>--}}
{{--                                    <li><a href="ui-grid">Grid</a></li>--}}
{{--                                    <li><a href="ui-images">Images</a></li>--}}
{{--                                    <li><a href="ui-lightbox">Lightbox</a></li>--}}
{{--                                    <li><a href="ui-modals">Modals</a></li>--}}
{{--                                    <li><a href="ui-pagination">Pagination</a></li>--}}
{{--                                    <li><a href="ui-popover-tooltips">Popover & Tooltips</a></li>--}}
{{--                                    <li><a href="ui-rangeslider">Range Slider</a></li>--}}
{{--                                    <li><a href="ui-session-timeout">Session Timeout</a></li>--}}
{{--                                    <li><a href="ui-progressbars">Progress Bars</a></li>--}}
{{--                                    <li><a href="ui-sweet-alert">Sweet-Alert</a></li>--}}
{{--                                    <li><a href="ui-tabs-accordions">Tabs & Accordions</a></li>--}}
{{--                                    <li><a href="ui-typography">Typography</a></li>--}}
{{--                                    <li><a href="ui-video">Video</a></li>--}}


{{--                                </ul>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-clipboard-outline"></i><span> Forms <span class="badge badge-pill badge-success float-right">6</span> </span></a>--}}
{{--                                <ul class="submenu">--}}
{{--                                    <li><a href="form-elements">Form Elements</a></li>--}}
{{--                                    <li><a href="form-validation">Form Validation</a></li>--}}
{{--                                    <li><a href="form-advanced">Form Advanced</a></li>--}}
{{--                                    <li><a href="form-editors">Form Editors</a></li>--}}
{{--                                    <li><a href="form-uploads">Form File Upload</a></li>--}}
{{--                                    <li><a href="form-xeditable">Form Xeditable</a></li>--}}

{{--                                </ul>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-chart-line"></i><span> Charts <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>--}}
{{--                                <ul class="submenu">--}}
{{--                                    <li><a href="charts-morris">Morris Chart</a></li>--}}
{{--                                    <li><a href="charts-chartist">Chartist Chart</a></li>--}}
{{--                                    <li><a href="charts-chartjs">Chartjs Chart</a></li>--}}
{{--                                    <li><a href="charts-flot">Flot Chart</a></li>--}}
{{--                                    <li><a href="charts-c3">C3 Chart</a></li>--}}
{{--                                    <li><a href="charts-other">Jquery Knob Chart</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted-type"></i><span> Tables <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>--}}
{{--                                <ul class="submenu">--}}
{{--                                    <li><a href="tables-basic">Basic Tables</a></li>--}}
{{--                                    <li><a href="tables-datatable">Data Table</a></li>--}}
{{--                                    <li><a href="tables-responsive">Responsive Table</a></li>--}}
{{--                                    <li><a href="tables-editable">Editable Table</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-album"></i> <span> Icons  <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span> </a>--}}
{{--                                <ul class="submenu">--}}
{{--                                    <li><a href="icons-material">Material Design</a></li>--}}
{{--                                    <li><a href="icons-ion">Ion Icons</a></li>--}}
{{--                                    <li><a href="icons-fontawesome">Font Awesome</a></li>--}}
{{--                                    <li><a href="icons-themify">Themify Icons</a></li>--}}
{{--                                    <li><a href="icons-dripicons">Dripicons</a></li>--}}
{{--                                    <li><a href="icons-typicons">Typicons Icons</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-maps"></i><span> Maps <span class="badge badge-pill badge-danger float-right">2</span> </span></a>--}}
{{--                                <ul class="submenu">--}}
{{--                                    <li><a href="maps-google"> Google Map</a></li>--}}
{{--                                    <li><a href="maps-vector"> Vector Map</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}

{{--                            <li class="menu-title">Extras</li>--}}

{{--                            <li>--}}
{{--                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-location"></i><span> Authentication <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>--}}
{{--                                <ul class="submenu">--}}
{{--                                    <li><a href="pages-login">Login</a></li>--}}
{{--                                    <li><a href="pages-register">Register</a></li>--}}
{{--                                    <li><a href="pages-recoverpw">Recover Password</a></li>--}}
{{--                                    <li><a href="pages-lock-screen">Lock Screen</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> Extra Pages <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>--}}
{{--                                <ul class="submenu">--}}
{{--                                    <li><a href="pages-timeline">Timeline</a></li>--}}
{{--                                    <li><a href="pages-invoice">Invoice</a></li>--}}
{{--                                    <li><a href="pages-directory">Directory</a></li>--}}
{{--                                    <li><a href="pages-blank">Blank Page</a></li>--}}
{{--                                    <li><a href="pages-404">Error 404</a></li>--}}
{{--                                    <li><a href="pages-500">Error 500</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}

                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
