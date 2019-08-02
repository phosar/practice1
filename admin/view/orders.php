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
                Patient Orders</div>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Order Number</th>
                                <th>Date</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Action </th>
                                <th>Complete</th>
                                <th>View</th>

                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>#78464</td>
                                <td>05-07-2019</td>
                                <td>R800.00</td>
                                <td>Completed</td>
                                <td>
                                    <select class="form-control">
                                        <option value = "Completed">Completed</option>
                                        <option value = "Being Prepared">Being Prepared</option>
                                        <option value = "Cancelled">Cancelled</option>
                                    </select>
                                </td>
                                <td><a href="#" class ="btn btn-success btn-sm">Completed</a></td>
                                <td><a href="#" class ="btn btn-danger btn-sm">View</a</td>
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

    <?php include("footer.php"); ?>