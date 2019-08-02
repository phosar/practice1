<?php include("header.php"); ?> 
<?php include("sidebar.php"); ?> 

<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Add Supplement</a>
            </li>
            <li class="breadcrumb-item active">Charts</li>
        </ol>

        <!-- Area Chart Example-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-chart-area"></i>
                Add a supplements to your inventory</div>
            <div class="card-body">

                <form>
                    <div class="form-group">
                        <label for="name">Supplement Name</label>
                        <input type="email" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Supplement name">
                       
                    </div>
                    
                     <div class="form-group">
                        <label for="cat">Supplement Category</label>
                        <select class="form-control">
                            <option>Category 1</option>
                            <option>Category 2</option>
                            <option>Category 3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Price</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Price">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Add Supplement</button>
                </form>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>


    </div>
    <!-- /.container-fluid -->

    <?php include("dash-footer.php"); ?> 
</div>
<!-- /.content-wrapper -->

<?php include("footer.php"); ?> 