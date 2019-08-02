<?php include("header.php"); ?>
<div class="container main-container">

    <div class="row my-4">
        <div class=" col-lg-8">
            <h3>Welcome to QualityHealth</h3>

            <!-- Carousel -->

            <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/slide1.png" class="d-block w-100" alt="QualityHealth Slider">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Apple Cider Supplements</h5>
                                <p>For beautiful healthy skin and body .</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/slide2.jpeg" class="d-block w-100" alt="QualityHealth Slider">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Advanced Immune Support</h5>
                                <p>Support for immune health.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/slide3.jpg" class="d-block w-100" alt="QualityHealth Slider">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Nitrotech</h5>
                                <p>For rock solid muscles.</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <!-- Recent Products -->
            <h2 class="mt-2 text-danger"> Recent Products</h2>
            <div class="row my-4">

                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Supplement1</h5>
                            <img src="images/sup1.jpg" alt="" class="img-fluid"/>
                            <h3>R280.00</h3>
                            <button class="btn btn-success btn-sm">Add to Cart</button>
                            <button class="btn btn-danger btn-sm">View</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Supplement2</h5>
                            <img src="images/sup2.jpg" alt="" class="img-fluid"/>
                            <h3>R250.00</h3>
                            <button class="btn btn-success btn-sm">Add to Cart</button>
                            <button class="btn btn-danger btn-sm">View</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Supplement3</h5>
                            <img src="images/sup3.png" alt="" class="img-fluid"/>
                            <h3>R299.00</h3>
                            <button class="btn btn-success btn-sm">Add to Cart</button>
                            <button class="btn btn-danger btn-sm">View</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Banner-->
            <div class="row my-4">    
                <img src="images/banner.jpg" alt=""/>
            </div> 
            
            <!-- Products on Sale -->

            <h2 class="mt-2 text-danger">Products on Sale</h2>
            <div class="row my-4">

                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Supplement1</h5>
                            <img src="images/sup1.jpg" alt="" class="img-fluid"/>
                            <h3>R280.00</h3>
                            <button class="btn btn-success btn-sm">Add to Cart</button>
                            <button class="btn btn-danger btn-sm">View</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Supplement2</h5>
                            <img src="images/sup2.jpg" alt="" class="img-fluid"/>
                            <h3>R250.00</h3>
                            <button class="btn btn-success btn-sm">Add to Cart</button>
                            <button class="btn btn-danger btn-sm">View</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Supplement3</h5>
                            <img src="images/sup3.png" alt="" class="img-fluid"/>
                            <h3>R299.00</h3>
                            <button class="btn btn-success btn-sm">Add to Cart</button>
                            <button class="btn btn-danger btn-sm">View</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <?php include("sidebar.php"); ?>

    </div>
</div>
<?php include("footer.php"); ?>       