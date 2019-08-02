<?php include("header.php"); ?> 
<?php include("sidebar.php"); ?> 

<div class="container-fluid">

    <!-- Page Heading -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">All Supplement </li>
    </ol>


    <!-- DataTables Example -->
    <div>
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                All Supplement In Stock</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Supplement Name</th>
                                <th>Supplement Picture</th>
                                <th>Quantity In Stock</th>

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
                                <td>Muscle Builder</td>
                                <td><img src="../images/sup1.jpg" alt="" width="150" height="100"/></td>
                                <td>15</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>

            <div class="card-footer small text-muted">Updated now</div>



       
    </div>

    <?php include("dash-footer.php"); ?> 
</div>
<!-- /.content-wrapper -->

<?php
include("footer.php"); ?>