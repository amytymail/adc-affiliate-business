<div class="be-contents">
    <div class="main-content container-fluid">
        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-3">
                <div class="widget widget-tile">
                    <div id="spark1" class="chart sparkline"></div>
                    <div class="data-info">
                        <div class="desc">New Users</div>
                        <div class="value"><span class="indicator indicator-equal mdi mdi-chevron-right"></span><span data-toggle="counter" data-end="113" class="number">0</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
                <div class="widget widget-tile">
                    <div id="spark2" class="chart sparkline"></div>
                    <div class="data-info">
                        <div class="desc">Monthly Sales</div>
                        <div class="value"><span class="indicator indicator-positive mdi mdi-chevron-up"></span><span data-toggle="counter" data-end="80" data-suffix="%" class="number">0</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
                <div class="widget widget-tile">
                    <div id="spark3" class="chart sparkline"></div>
                    <div class="data-info">
                        <div class="desc">Impressions</div>
                        <div class="value"><span class="indicator indicator-positive mdi mdi-chevron-up"></span><span data-toggle="counter" data-end="532" class="number">0</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
                <div class="widget widget-tile">
                    <div id="spark4" class="chart sparkline"></div>
                    <div class="data-info">
                        <div class="desc">Downloads</div>
                        <div class="value"><span class="indicator indicator-negative mdi mdi-chevron-down"></span><span data-toggle="counter" data-end="113" class="number">0</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="widget widget-fullwidth be-loading">
                    <div class="widget-head">
                        <div class="tools">
                            <div class="dropdown"><span data-toggle="dropdown" class="icon mdi mdi-more-vert visible-xs-inline-block dropdown-toggle"></span>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#">Week</a></li>
                                    <li><a href="#">Month</a></li>
                                    <li><a href="#">Year</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Today</a></li>
                                </ul>
                            </div><span class="icon mdi mdi-chevron-down"></span><span class="icon toggle-loading mdi mdi-refresh-sync"></span><span class="icon mdi mdi-close"></span>
                        </div>
                        <div class="button-toolbar hidden-xs">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">Week</button>
                                <button type="button" class="btn btn-default active">Month</button>
                                <button type="button" class="btn btn-default">Year</button>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">Today</button>
                            </div>
                        </div><span class="title">Recent Movement</span>
                    </div>
                    <div class="widget-chart-container">
                        <div class="widget-chart-info">
                            <ul class="chart-legend-horizontal">
                                <li><span data-color="main-chart-color1"></span> Purchases</li>
                                <li><span data-color="main-chart-color2"></span> Plans</li>
                                <li><span data-color="main-chart-color3"></span> Services</li>
                            </ul>
                        </div>
                        <div class="widget-counter-group widget-counter-group-right">
                            <div class="counter counter-big">
                                <div class="value">25%</div>
                                <div class="desc">Purchase</div>
                            </div>
                            <div class="counter counter-big">
                                <div class="value">5%</div>
                                <div class="desc">Plans</div>
                            </div>
                            <div class="counter counter-big">
                                <div class="value">5%</div>
                                <div class="desc">Services</div>
                            </div>
                        </div>
                        <div id="main-chart" style="height: 260px;"></div>
                    </div>
                    <div class="be-spinner">
                        <svg width="40px" height="40px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                        <circle fill="none" stroke-width="4" stroke-linecap="round" cx="33" cy="33" r="30" class="circle"></circle>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default panel-table">
                    <div class="panel-heading"> 
                        <div class="tools"><span class="icon mdi mdi-download"></span><span class="icon mdi mdi-more-vert"></span></div>
                        <div class="title">Purchases</div>
                    </div>
                    <div class="panel-body table-responsive">
                        <table class="table table-striped table-borderless">
                            <thead>
                                <tr>
                                    <th style="width:40%;">Product</th>
                                    <th class="number">Price</th>
                                    <th style="width:20%;">Date</th>
                                    <th style="width:20%;">State</th>
                                    <th style="width:5%;" class="actions"></th>
                                </tr>
                            </thead>
                            <tbody class="no-border-x">
                                <tr>
                                    <td>Sony Xperia M4</td>
                                    <td class="number">$149</td>
                                    <td>Aug 23, 2016</td>
                                    <td class="text-success">Completed</td>
                                    <td class="actions"><a href="#" class="icon"><i class="mdi mdi-plus-circle-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Apple iPhone 6</td>
                                    <td class="number">$535</td>
                                    <td>Aug 20, 2016</td>
                                    <td class="text-success">Completed</td>
                                    <td class="actions"><a href="#" class="icon"><i class="mdi mdi-plus-circle-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Samsung Galaxy S7</td>
                                    <td class="number">$583</td>
                                    <td>Aug 18, 2016</td>
                                    <td class="text-warning">Pending</td>
                                    <td class="actions"><a href="#" class="icon"><i class="mdi mdi-plus-circle-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td>HTC One M9</td>
                                    <td class="number">$350</td>
                                    <td>Aug 15, 2016</td>
                                    <td class="text-warning">Pending</td>
                                    <td class="actions"><a href="#" class="icon"><i class="mdi mdi-plus-circle-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Sony Xperia Z5</td>
                                    <td class="number">$495</td>
                                    <td>Aug 13, 2016</td>
                                    <td class="text-danger">Cancelled</td>
                                    <td class="actions"><a href="#" class="icon"><i class="mdi mdi-plus-circle-o"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default panel-table">
                    <div class="panel-heading">
                        <div class="tools"><span class="icon mdi mdi-download"></span><span class="icon mdi mdi-more-vert"></span></div>
                        <div class="title">Latest Commits</div>
                    </div>
                    <div class="panel-body table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th style="width:37%;">User</th>
                                    <th style="width:36%;">Commit</th>
                                    <th>Date</th>
                                    <th class="actions"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="user-avatar"> <img src="webroot/img/avatar6.png" alt="Avatar">Penelope Thornton</td>
                                    <td>Topbar dropdown style</td>
                                    <td>Aug 16, 2016</td>
                                    <td class="actions"><a href="#" class="icon"><i class="mdi mdi-github-alt"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="user-avatar"> <img src="webroot/img/avatar4.png" alt="Avatar">Benji Harper</td>
                                    <td>Left sidebar adjusments</td>
                                    <td>Jul 15, 2016</td>
                                    <td class="actions"><a href="#" class="icon"><i class="mdi mdi-github-alt"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="user-avatar"> <img src="webroot/img/avatar5.png" alt="Avatar">Justine Myranda</td>
                                    <td>Main structure markup</td>
                                    <td>Jul 28, 2016</td>
                                    <td class="actions"><a href="#" class="icon"><i class="mdi mdi-github-alt"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="user-avatar"> <img src="webroot/img/avatar3.png" alt="Avatar">Sherwood Clifford</td>
                                    <td>Initial commit</td>
                                    <td>Jun 30, 2016</td>
                                    <td class="actions"><a href="#" class="icon"><i class="mdi mdi-github-alt"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>