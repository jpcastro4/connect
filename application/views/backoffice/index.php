

            <!-- PAGE CONTENT -->
            <div class="content-wrapper">
                <div class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="page-title">Dashboard <small>Control Panel</small></h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-md-3">
                            <div class="widget-overview bg-primary-1">
                                <div class="inner">
                                    <h2>$<?php echo $conta->usuarioTotalRecebido ?></h2>
                                    <p>Recebido</p>
                                </div>

                                <div class="icon">
                                    <i class="fa fa-dollar"></i>
                                </div>

                                <!-- <div class="details bg-primary-3">
                                    <span>View Details <i class="fa fa-arrow-right"></i></span>
                                </div> -->
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="widget-overview bg-info-1">
                                <div class="inner">
                                    <h2><?php echo $conta->usuarioTotalRecebido ?></h2>
                                    <p>Nível</p>
                                </div>

                                <div class="icon">
                                    <i class="fa fa-signal"></i>
                                </div>

                                <!-- <div class="details bg-info-3">
                                    <span>View Details <i class="fa fa-arrow-right"></i></span>
                                </div> -->
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="widget-overview bg-success-1">
                                <div class="inner">
                                    <h2>$<?php echo $conta->usuarioTotalRecebido ?></h2>
                                    <p>Total doado</p>
                                </div>

                                <div class="icon">
                                    <i class="fa fa-money"></i>
                                </div>

                                <!-- <div class="details bg-success-3">
                                    <span>View Details <i class="fa fa-arrow-right"></i></span>
                                </div> -->
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="widget-overview bg-danger-1">
                                <div class="inner">
                                    <h2><?php echo $conta->usuarioTotalRecebido ?></h2>
                                    <p>Indicados</p>
                                </div>

                                <div class="icon">
                                    <i class="fa fa-pie-chart"></i>
                                </div>

                                <!-- <div class="details bg-danger-3">
                                    <span>View Details <i class="fa fa-arrow-right"></i></span>
                                </div> -->
                            </div>
                        </div>
                    </div>

                    <div class="row margin-top-10">
                        

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title">Pagamentos</h5>

                                    <div class="recent-products">
                                        <ul>
                                            <li>
                                                <div class="product-image">
                                                    <img src="assets/img/default-img.png" alt="">
                                                </div>

                                                <div class="product-info">
                                                    <span class="product-title">
                                                        <a href="#">Product Name</a>
                                                        <span class="pull-right">
                                                            <badge class="badge badge-primary">$1,800</badge>
                                                            </span>
                                                    </span>
                                                    <span class="product-description">Product Description goes here.</span>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="product-image">
                                                    <img src="assets/img/default-img.png" alt="">
                                                </div>

                                                <div class="product-info">
                                                    <span class="product-title">
                                                        <a href="#">Product Name</a>
                                                        <span class="pull-right">
                                                            <badge class="badge badge-primary">$1,800</badge>
                                                            </span>
                                                    </span>
                                                    <span class="product-description">Product Description goes here.</span>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="product-image">
                                                    <img src="assets/img/default-img.png" alt="">
                                                </div>

                                                <div class="product-info">
                                                    <span class="product-title">
                                                        <a href="#">Product Name</a>
                                                        <span class="pull-right">
                                                            <badge class="badge badge-primary">$1,800</badge>
                                                            </span>
                                                    </span>
                                                    <span class="product-description">Product Description goes here.</span>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="product-image">
                                                    <img src="assets/img/default-img.png" alt="">
                                                </div>

                                                <div class="product-info">
                                                    <span class="product-title">
                                                        <a href="#">Product Name</a>
                                                        <span class="pull-right">
                                                            <badge class="badge badge-primary">$1,800</badge>
                                                            </span>
                                                    </span>
                                                    <span class="product-description">Product Description goes here.</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title">Recebimentos</h5>
                                    <table class="table table-stripped table-hover">
                                        <thead>
                                            <tr>
                                                <td>#</td>
                                                <td>Item</td>
                                                <td>Status</td>
                                                <td>Price</td>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td><a href="#">190</a></td>
                                                <td>Item Name</td>
                                                <td>
                                                    <badge class="badge badge-warning">Pending</badge>
                                                </td>
                                                <td>
                                                    $525
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">190</a></td>
                                                <td>Item Name</td>
                                                <td>
                                                    <badge class="badge badge-success">Completed</badge>
                                                </td>
                                                <td>
                                                    $525
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">190</a></td>
                                                <td>Item Name</td>
                                                <td>
                                                    <badge class="badge badge-primary">Shipped</badge>
                                                </td>
                                                <td>
                                                    $525
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">190</a></td>
                                                <td>Item Name</td>
                                                <td>
                                                    <badge class="badge badge-danger">Cancelled</badge>
                                                </td>
                                                <td>
                                                    $525
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title">Recent Members</h5>

                                    <ul class="recent-members">
                                        <li>
                                            <img src="assets/img/profile-picture.jpg" alt="">
                                            <span class="user-name">Username</span>
                                            <span class="joined-date">Today</span>
                                        </li>

                                        <li>
                                            <img src="assets/img/profile-picture.jpg" alt="">
                                            <span class="user-name">Username</span>
                                            <span class="joined-date">Today</span>
                                        </li>

                                        <li>
                                            <img src="assets/img/profile-picture.jpg" alt="">
                                            <span class="user-name">Username</span>
                                            <span class="joined-date">Today</span>
                                        </li>

                                        <li>
                                            <img src="assets/img/profile-picture.jpg" alt="">
                                            <span class="user-name">Username</span>
                                            <span class="joined-date">Today</span>
                                        </li>

                                        <li>
                                            <img src="assets/img/profile-picture.jpg" alt="">
                                            <span class="user-name">Username</span>
                                            <span class="joined-date">Today</span>
                                        </li>

                                        <li>
                                            <img src="assets/img/profile-picture.jpg" alt="">
                                            <span class="user-name">Username</span>
                                            <span class="joined-date">Today</span>
                                        </li>

                                        <li>
                                            <img src="assets/img/profile-picture.jpg" alt="">
                                            <span class="user-name">Username</span>
                                            <span class="joined-date">Today</span>
                                        </li>

                                        <li>
                                            <img src="assets/img/profile-picture.jpg" alt="">
                                            <span class="user-name">Username</span>
                                            <span class="joined-date">Today</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- /PAGE CONTENT -->
        </div>
    </div>