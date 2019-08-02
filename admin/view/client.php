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
                QualityHealth Clients</div>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Surname</th>
                                <th>Gender</th>
                                <th>Age</th>
                                <th>Phone Number</th>
                                <th>E-mail</th>
                                <th>Address</th>

                            </tr>
                        </thead>

                        <tbody>
                            
                             <tr>
                                <td>8201051358080</td>
                                <td>Rose</td>
                                <td>Molepo</td>
                                <td>Female</td>
                                <td>30</td>
                                <td>0764499070</td>
                                <td>phosar@webmail.co.za</td>
                                <td>4 Hill Street, Diepsloot,Johannesburg</td>
                            </tr>
                            
                             <tr>
                                <td>8201051358080</td>
                                <td>Rose</td>
                                <td>Molepo</td>
                                <td>Female</td>
                                <td>30</td>
                                <td>0764499070</td>
                                <td>phosar@webmail.co.za</td>
                                <td>4 Hill Street, Diepsloot,Johannesburg</td>
                            </tr>
                            
                             <tr>
                                <td>8201051358080</td>
                                <td>Rose</td>
                                <td>Molepo</td>
                                <td>Female</td>
                                <td>30</td>
                                <td>0764499070</td>
                                <td>phosar@webmail.co.za</td>
                                <td>4 Hill Street, Diepsloot,Johannesburg</td>
                            </tr>
                            <tr>
                                <td>8201051358080</td>
                                <td>Rose</td>
                                <td>Molepo</td>
                                <td>Female</td>
                                <td>30</td>
                                <td>0764499070</td>
                                <td>phosar@webmail.co.za</td>
                                <td>4 Hill Street, Diepsloot,Johannesburg</td>
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