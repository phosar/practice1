<!Doctype html>
<html lang="en">
    <head>

        <!--Required meter tag-->
        <meta charset ="utf-8">
        <meta name ="viewport" content ="width=device-width, initial-scale=1, shrink-to-fit=no ">
              
         <!--Bootstrap CSS-->   
         <link rel="stylesheet" href="css/bootstrap.min.css"/> 
         <link href="css/custom.css" rel="stylesheet" />
              <title>QualityHealth</title>
    </head> 
    <body>
        <div class="container wrapper-container">

            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <a class="navbar-brand" href="?action=home"><img src="images/quality.png" height="30" width="30">ualityHealth</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="?action=products">All Products <span class="sr-only">(current)</span></a>
                        </li>
                        
                       
                         <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Member Area
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="?action=register">Register</a>
                                <a class="dropdown-item" href="?action=register">login</a>
                                <div class="dropdown-divider"></div>
                                
                            </div>
                        </li>
                       
                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Profile
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="?action=update">Update Profile</a>
                                <a class="dropdown-item" href="?action=cart">Cart</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Logout</a>
                            </div>
                        </li>
                        
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-danger my-2 my-sm-0 text-white" type="submit">Search</button>
                    </form>
                </div>
            </nav> 
