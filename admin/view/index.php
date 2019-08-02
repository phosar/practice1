<?php include("header.php"); ?> 
<?php include("sidebar.php"); ?> 

<div class="container-fluid">

    <!-- Page Heading -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Overview</li>
    </ol>

    <!-- Icon Cards -->
    <div class="row" >
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100 ">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-comments"></i>
                    </div>
                    <div class="mr-5">24 New Messages!</div>
                </div>
                <a class="card-footer text-white clearfix small z-l" href="#"> 
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                        <i class="fas fa-angle-right"></i>     
                    </span>
                </a>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100 ">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-shopping-cart"></i>
                    </div>
                    <div class="mr-5">80 New Orders!</div>
                </div>
                <a class="card-footer text-white clearfix small z-l" href="#"> 
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                        <i class="fas fa-angle-right"></i>     
                    </span>
                </a>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100 ">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-list"></i>
                    </div>
                    <div class="mr-5">14 New Tasks!</div>
                </div>
                <a class="card-footer text-white clearfix small z-l" href="#"> 
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                        <i class="fas fa-angle-right"></i>     
                    </span>
                </a>
            </div>
        </div>


    </div>

   

        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-chart-area"></i>
                Financial Report</div>
            <div class="card-body">
                <h3>Day Income:<span style="color: red">R 00.00</span></h3>
                <h3>Weekly Income:<span style="color: red">R 30000.00</span></h3>
                <h3>Monthly Income:<span style="color: red">R 200,000.00</span></h3>

            </div>
            <div class="card-footer small text-muted">Updated now</div>
        </div>


        <!-- Finance Report -->
        <div>
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-chart-area"></i>
                Patient Comment</div>
            <div class="card-body">
                <h3>Rose Molepo</h3>
                <p>Great customer service.</p>

                <h3>Rose Molepo</h3>
                <p>Great customer service.</p>

                <h3>Rose Molepo</h3>
                <p>Great customer service.</p>


            </div>
            <div class="card-footer small text-muted">Updated now</div>   
        </div>
    </div>
        <!-- DataTables Example -->
        <div>
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Website Visitors</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>IP Address</th>
                            <th>Time</th>
                            <th>Browser</th>

                        </tr>
                    </thead>
                    <!--<tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                      </tr>
                    </tfoot>-->
                    <tbody>
                        <tr>
                            <td>127.0.0.1</td>
                            <td>15:00</td>
                            <td>Mozilla</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>


        <div class="card-footer small text-muted">Updated now</div>



    </div>
</div>
<?php include("dash-footer.php"); ?> 
</div>
</div>
<!-- /.container-fluid -->
<?php include("footer.php"); ?> 

