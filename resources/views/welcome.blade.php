<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard HTML Template</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="../fast.fonts.net/cssapi/175a63a1-3f26-476a-ab32-4e21cbdb8be2.css" rel="stylesheet">
    <link href="bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="bower_components/datatables/media/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
</head>

<body>
    <div class="all-wrapper">
        <div class="layout-w">
            <div class="menu-w menu-activated-on-click">
                <div class="logo-w">
                    <a class="logo" href="index-2.html"><img src="img/logo.png"><span>Clean Admin</span></a>
                    <div class="mobile-menu-trigger">
                        <div class="os-icon os-icon-hamburger-menu-1"></div>
                    </div>
                </div>
                <div class="menu-and-user">
                    <div class="logged-user-w">
                        <div class="avatar-w"><img alt="" src="img/avatar1.jpg"></div>
                        <div class="logged-user-info-w">
                            <div class="logged-user-name">Maria Gomez</div>
                            <div class="logged-user-role">Administrator</div>
                        </div>
                    </div>
                    <ul class="main-menu">
                        <li>
                            <a href="index-2.html">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-window-content"></div>
                                </div><span>Dashboard</span></a>
                        </li>
                        <li class="has-sub-menu">
                            <a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-donut-chart-2"></div>
                                </div><span>Forms</span></a>
                            <ul class="sub-menu">
                                <li><a href="forms.html">Regular Forms</a></li>
                                <li><a href="forms_validation.html">Form Validation</a></li>
                                <li><a href="forms_wizard.html">Form Wizard</a></li>
                                <li><a href="forms_uploads.html">File Uploads</a></li>
                                <li><a href="forms_wisiwig.html">Wisiwig Editor</a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu">
                            <a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-wallet-loaded"></div>
                                </div><span>Tables</span></a>
                            <ul class="sub-menu">
                                <li><a href="tables.html">Regular Tables</a></li>
                                <li><a href="tables_data.html">Data Tables</a></li>
                                <li><a href="tables_editable.html">Editable Tables</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="charts.html">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-delivery-box-2"></div>
                                </div><span>Charts</span></a>
                        </li>
                        <li class="has-sub-menu">
                            <a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-user-male-circle"></div>
                                </div><span>Pages</span></a>
                            <ul class="sub-menu">
                                <li><a href="invoice.html">Invoice</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="lock.html">Lock Screen</a></li>
                                <li><a href="error_404.html">Error 404</a></li>
                                <li><a href="error_500.html">Error 500</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-newspaper"></div>
                                </div><span>Calendar</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="content-w">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="index-2.html">Products</a></li>
                    <li class="breadcrumb-item"><span>Laptop with retina screen</span></li>
                </ul>
                <div class="content-i">
                    <div class="content-box">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="element-wrapper">
                                    <div class="element-actions">
                                        <form class="form-inline justify-content-sm-end">
                                            <select class="form-control form-control-sm rounded">
                                                <option value="Pending">Today</option>
                                                <option value="Active">Last Week </option>
                                                <option value="Cancelled">Last 30 Days</option>
                                            </select>
                                        </form>
                                    </div>
                                    <h6 class="element-header">Sales Dashboard</h6>
                                    <div class="element-content">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="element-box el-tablo">
                                                    <div class="label">Products Sold</div>
                                                    <div class="value">57</div>
                                                    <div class="trending trending-up"><span>12%</span><i class="os-icon os-icon-arrow-up2"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="element-box el-tablo">
                                                    <div class="label">Gross Profit</div>
                                                    <div class="value">$457</div>
                                                    <div class="trending trending-down-basic"><span>12%</span><i class="os-icon os-icon-arrow-2-down"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="element-box el-tablo">
                                                    <div class="label">New Customers</div>
                                                    <div class="value">125</div>
                                                    <div class="trending trending-down-basic"><span>9%</span><i class="os-icon os-icon-graph-down"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="element-wrapper">
                                    <h6 class="element-header">New Orders</h6>
                                    <div class="element-box">
                                        <div class="table-responsive">
                                            <table class="table table-lightborder">
                                                <thead>
                                                    <tr>
                                                        <th>Customer Name</th>
                                                        <th>Products Ordered</th>
                                                        <th class="text-center">Status</th>
                                                        <th class="text-right">Order Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="nowrap">John Mayers</td>
                                                        <td>
                                                            <div class="cell-image-list">
                                                                <div class="cell-img" style="background-image: url(img/portfolio9.jpg)"></div>
                                                                <div class="cell-img" style="background-image: url(img/portfolio2.jpg)"></div>
                                                                <div class="cell-img" style="background-image: url(img/portfolio12.jpg)"></div>
                                                                <div class="cell-img-more">+ 5 more</div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
                                                        </td>
                                                        <td class="text-right">$354</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="nowrap">Kelly Brans</td>
                                                        <td>
                                                            <div class="cell-image-list">
                                                                <div class="cell-img" style="background-image: url(img/portfolio14.jpg)"></div>
                                                                <div class="cell-img" style="background-image: url(img/portfolio8.jpg)"></div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="status-pill red" data-title="Cancelled" data-toggle="tooltip"></div>
                                                        </td>
                                                        <td class="text-right">$94</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="nowrap">Tim Howard</td>
                                                        <td>
                                                            <div class="cell-image-list">
                                                                <div class="cell-img" style="background-image: url(img/portfolio16.jpg)"></div>
                                                                <div class="cell-img" style="background-image: url(img/portfolio14.jpg)"></div>
                                                                <div class="cell-img" style="background-image: url(img/portfolio5.jpg)"></div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
                                                        </td>
                                                        <td class="text-right">$156</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="nowrap">Joe Trulli</td>
                                                        <td>
                                                            <div class="cell-image-list">
                                                                <div class="cell-img" style="background-image: url(img/portfolio1.jpg)"></div>
                                                                <div class="cell-img" style="background-image: url(img/portfolio5.jpg)"></div>
                                                                <div class="cell-img" style="background-image: url(img/portfolio6.jpg)"></div>
                                                                <div class="cell-img-more">+ 2 more</div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="status-pill yellow" data-title="Pending" data-toggle="tooltip"></div>
                                                        </td>
                                                        <td class="text-right">$1,120</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="nowrap">Jerry Lingard</td>
                                                        <td>
                                                            <div class="cell-image-list">
                                                                <div class="cell-img" style="background-image: url(img/portfolio9.jpg)"></div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
                                                        </td>
                                                        <td class="text-right">$856</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="element-wrapper">
                                    <h6 class="element-header">Top Selling Today</h6>
                                    <div class="element-box">
                                        <div class="el-chart-w">
                                            <canvas height="120" id="donutChart" width="120"></canvas>
                                            <div class="inside-donut-chart-label"><strong>142</strong><span>Total Orders</span></div>
                                        </div>
                                        <div class="el-legend">
                                            <div class="legend-value-w">
                                                <div class="legend-pin" style="background-color: #6896f9;"></div>
                                                <div class="legend-value">Processed</div>
                                            </div>
                                            <div class="legend-value-w">
                                                <div class="legend-pin" style="background-color: #85c751;"></div>
                                                <div class="legend-value">Cancelled</div>
                                            </div>
                                            <div class="legend-value-w">
                                                <div class="legend-pin" style="background-color: #d97b70;"></div>
                                                <div class="legend-value">Pending</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="element-wrapper">
                                    <h6 class="element-header">Unique Visitors Graph</h6>
                                    <div class="element-box">
                                        <div class="os-tabs-w">
                                            <div class="os-tabs-controls">
                                                <ul class="nav nav-tabs smaller">
                                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab_overview">Overview</a></li>
                                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab_sales">Sales</a></li>
                                                </ul>
                                                <ul class="nav nav-pills smaller hidden-sm-down">
                                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#">Today</a></li>
                                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#">7 Days</a></li>
                                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#">14 Days</a></li>
                                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#">Last Month</a></li>
                                                </ul>
                                            </div>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab_overview">
                                                    <div class="el-tablo">
                                                        <div class="label">Unique Visitors</div>
                                                        <div class="value">12,537</div>
                                                    </div>
                                                    <div class="el-chart-w">
                                                        <canvas height="150px" id="lineChart" width="600px"></canvas>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab_sales"></div>
                                                <div class="tab-pane" id="tab_conversion"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="element-wrapper">
                                    <h6 class="element-header">Recent Orders</h6>
                                    <div class="element-box-tp">
                                        <div class="controls-above-table">
                                            <div class="row">
                                                <div class="col-sm-6"><a class="btn btn-sm btn-secondary" href="#">Download CSV</a><a class="btn btn-sm btn-secondary" href="#">Archive</a><a class="btn btn-sm btn-danger" href="#">Delete</a></div>
                                                <div class="col-sm-6">
                                                    <form class="form-inline justify-content-sm-end">
                                                        <input class="form-control form-control-sm rounded bright" placeholder="Search" type="text">
                                                        <select class="form-control form-control-sm rounded bright">
                                                            <option selected="selected" value="">Select Status</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="Active">Active</option>
                                                            <option value="Cancelled">Cancelled</option>
                                                        </select>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-lg table-v2 table-striped">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">
                                                            <input class="form-control" type="checkbox">
                                                        </th>
                                                        <th>Customer Name</th>
                                                        <th>Country</th>
                                                        <th>Order Total</th>
                                                        <th>Referral</th>
                                                        <th>Status</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">
                                                            <input class="form-control" type="checkbox">
                                                        </td>
                                                        <td>John Mayers</td>
                                                        <td><img alt="" src="img/flags-icons/us.png" width="25px"></td>
                                                        <td class="text-right">$245</td>
                                                        <td>Organic</td>
                                                        <td class="text-center">
                                                            <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
                                                        </td>
                                                        <td class="row-actions"><a href="#"><i class="os-icon os-icon-pencil-2"></i></a><a href="#"><i class="os-icon os-icon-link-3"></i></a><a class="danger" href="#"><i class="os-icon os-icon-database-remove"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">
                                                            <input class="form-control" type="checkbox">
                                                        </td>
                                                        <td>Mike Astone</td>
                                                        <td><img alt="" src="img/flags-icons/fr.png" width="25px"></td>
                                                        <td class="text-right">$154</td>
                                                        <td>Organic</td>
                                                        <td class="text-center">
                                                            <div class="status-pill red" data-title="Cancelled" data-toggle="tooltip"></div>
                                                        </td>
                                                        <td class="row-actions"><a href="#"><i class="os-icon os-icon-pencil-2"></i></a><a href="#"><i class="os-icon os-icon-link-3"></i></a><a class="danger" href="#"><i class="os-icon os-icon-database-remove"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">
                                                            <input class="form-control" type="checkbox">
                                                        </td>
                                                        <td>Kira Knight</td>
                                                        <td><img alt="" src="img/flags-icons/us.png" width="25px"></td>
                                                        <td class="text-right">$23</td>
                                                        <td>Adwords</td>
                                                        <td class="text-center">
                                                            <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
                                                        </td>
                                                        <td class="row-actions"><a href="#"><i class="os-icon os-icon-pencil-2"></i></a><a href="#"><i class="os-icon os-icon-link-3"></i></a><a class="danger" href="#"><i class="os-icon os-icon-database-remove"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">
                                                            <input class="form-control" type="checkbox">
                                                        </td>
                                                        <td>Jessica Bloom</td>
                                                        <td><img alt="" src="img/flags-icons/ca.png" width="25px"></td>
                                                        <td class="text-right">$112</td>
                                                        <td>Organic</td>
                                                        <td class="text-center">
                                                            <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
                                                        </td>
                                                        <td class="row-actions"><a href="#"><i class="os-icon os-icon-pencil-2"></i></a><a href="#"><i class="os-icon os-icon-link-3"></i></a><a class="danger" href="#"><i class="os-icon os-icon-database-remove"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">
                                                            <input class="form-control" type="checkbox">
                                                        </td>
                                                        <td>Gary Lineker</td>
                                                        <td><img alt="" src="img/flags-icons/ca.png" width="25px"></td>
                                                        <td class="text-right">$64</td>
                                                        <td>Organic</td>
                                                        <td class="text-center">
                                                            <div class="status-pill yellow" data-title="Pending" data-toggle="tooltip"></div>
                                                        </td>
                                                        <td class="row-actions"><a href="#"><i class="os-icon os-icon-pencil-2"></i></a><a href="#"><i class="os-icon os-icon-link-3"></i></a><a class="danger" href="#"><i class="os-icon os-icon-database-remove"></i></a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="controls-below-table">
                                            <div class="table-records-info">Showing records 1 - 5</div>
                                            <div class="table-records-pages">
                                                <ul>
                                                    <li><a href="#">Previous</a></li>
                                                    <li><a class="current" href="#">1</a></li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                    <li><a href="#">4</a></li>
                                                    <li><a href="#">Next</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-panel">
                        <div class="element-wrapper">
                            <h6 class="element-header">Quick Links</h6>
                            <div class="element-box-tp">
                                <div class="el-buttons-list full-width"><a class="btn btn-white btn-sm" href="#"><i class="os-icon os-icon-delivery-box-2"></i><span>Create New Product</span></a><a class="btn btn-white btn-sm" href="#"><i class="os-icon os-icon-window-content"></i><span>Customer Comments</span></a><a class="btn btn-white btn-sm" href="#"><i class="os-icon os-icon-wallet-loaded"></i><span>Store Settings</span></a></div>
                            </div>
                        </div>
                        <div class="element-wrapper">
                            <h6 class="element-header">Support Agents</h6>
                            <div class="element-box-tp">
                                <div class="profile-tile">
                                    <div class="profile-tile-box">
                                        <div class="pt-avatar-w"><img alt="" src="img/avatar1.jpg"></div>
                                        <div class="pt-user-name">Mark Parson</div>
                                    </div>
                                    <div class="profile-tile-meta">
                                        <ul>
                                            <li>Last Login:<strong>Online Now</strong></li>
                                            <li>Tickets:<strong>12</strong></li>
                                            <li>Response Time:<strong>2 hours</strong></li>
                                        </ul>
                                        <div class="pt-btn"><a class="btn btn-success btn-sm" href="#">Send Message</a></div>
                                    </div>
                                </div>
                                <div class="profile-tile">
                                    <div class="profile-tile-box">
                                        <div class="pt-avatar-w"><img alt="" src="img/avatar1.jpg"></div>
                                        <div class="pt-user-name">Mark Parson</div>
                                    </div>
                                    <div class="profile-tile-meta">
                                        <ul>
                                            <li>Last Login:<strong>Online Now</strong></li>
                                            <li>Tickets:<strong>12</strong></li>
                                            <li>Response Time:<strong>2 hours</strong></li>
                                        </ul>
                                        <div class="pt-btn"><a class="btn btn-secondary btn-sm" href="#">Send Message</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="element-wrapper">
                            <h6 class="element-header">Recent Activity</h6>
                            <div class="element-box-tp">
                                <div class="activity-boxes-w">
                                    <div class="activity-box-w">
                                        <div class="activity-time">10 Min</div>
                                        <div class="activity-box">
                                            <div class="activity-avatar"><img alt="" src="img/avatar1.jpg"></div>
                                            <div class="activity-info">
                                                <div class="activity-role">Mark Pearson</div><strong class="activity-title">Opened New Account</strong></div>
                                        </div>
                                    </div>
                                    <div class="activity-box-w">
                                        <div class="activity-time">2 Hours</div>
                                        <div class="activity-box">
                                            <div class="activity-avatar"><img alt="" src="img/avatar1.jpg"></div>
                                            <div class="activity-info">
                                                <div class="activity-role">John Mayers</div><strong class="activity-title">Posted Comment</strong></div>
                                        </div>
                                    </div>
                                    <div class="activity-box-w">
                                        <div class="activity-time">5 Hours</div>
                                        <div class="activity-box">
                                            <div class="activity-avatar"><img alt="" src="img/avatar1.jpg"></div>
                                            <div class="activity-info">
                                                <div class="activity-role">Kate Wallet</div><strong class="activity-title">Opened New Account</strong></div>
                                        </div>
                                    </div>
                                    <div class="activity-box-w">
                                        <div class="activity-time">2 Days</div>
                                        <div class="activity-box">
                                            <div class="activity-avatar"><img alt="" src="img/avatar1.jpg"></div>
                                            <div class="activity-info">
                                                <div class="activity-role">Monica Bonak</div><strong class="activity-title">Uploaded Image</strong></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="element-wrapper">
                            <h6 class="element-header">Team Members</h6>
                            <div class="element-box-tp">
                                <div class="input-search-w">
                                    <input class="form-control rounded bright" placeholder="Search team members..." type="search">
                                </div>
                                <div class="users-list-w">
                                    <div class="user-w with-status status-green">
                                        <div class="user-avatar-w">
                                            <div class="user-avatar"><img alt="" src="img/avatar1.jpg"></div>
                                        </div>
                                        <div class="user-name">
                                            <h6 class="user-title">John Mayers</h6>
                                            <div class="user-role">Account Manager</div>
                                        </div>
                                        <div class="user-action">
                                            <div class="os-icon os-icon-email-forward"></div>
                                        </div>
                                    </div>
                                    <div class="user-w with-status status-green">
                                        <div class="user-avatar-w">
                                            <div class="user-avatar"><img alt="" src="img/avatar1.jpg"></div>
                                        </div>
                                        <div class="user-name">
                                            <h6 class="user-title">Ben Gossman</h6>
                                            <div class="user-role">Administrator</div>
                                        </div>
                                        <div class="user-action">
                                            <div class="os-icon os-icon-email-forward"></div>
                                        </div>
                                    </div>
                                    <div class="user-w with-status status-red">
                                        <div class="user-avatar-w">
                                            <div class="user-avatar"><img alt="" src="img/avatar1.jpg"></div>
                                        </div>
                                        <div class="user-name">
                                            <h6 class="user-title">Phil Nokorin</h6>
                                            <div class="user-role">HR Manger</div>
                                        </div>
                                        <div class="user-action">
                                            <div class="os-icon os-icon-email-forward"></div>
                                        </div>
                                    </div>
                                    <div class="user-w with-status status-green">
                                        <div class="user-avatar-w">
                                            <div class="user-avatar"><img alt="" src="img/avatar1.jpg"></div>
                                        </div>
                                        <div class="user-name">
                                            <h6 class="user-title">Jenny Miksa</h6>
                                            <div class="user-role">Lead Developer</div>
                                        </div>
                                        <div class="user-action">
                                            <div class="os-icon os-icon-email-forward"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/moment/moment.js"></script>
    <script src="bower_components/chart.js/dist/Chart.min.js"></script>
    <script src="bower_components/select2/dist/js/select2.full.min.js"></script>
    <script src="bower_components/ckeditor/ckeditor.js"></script>
    <script src="bower_components/bootstrap-validator/dist/validator.min.js"></script>
    <script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="bower_components/dropzone/dist/dropzone.js"></script>
    <script src="bower_components/editable-table/mindmup-editabletable.js"></script>
    <script src="bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables/media/js/dataTables.bootstrap4.min.js"></script>
    <script src="bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="js/main.js"></script>
</body>
<!-- Mirrored from light.pinsupreme.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Apr 2017 14:36:38 GMT -->

</html>