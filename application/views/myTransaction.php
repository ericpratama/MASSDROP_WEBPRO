<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" rel = 'stylesheet'></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" rel = 'stylesheet'></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" rel = 'stylesheet'></script>
        <!-- myCss -->
        <link href = "<?php echo base_url('assets/css/myCss.css')?>" rel = 'stylesheet'>
    </head>
    <body>
    <nav class="py-0 pl-4 m-0 sticky-top navbar navbar-expand-lg navbar-light border-bottom" style = "background-color:#FFFFFF">
            <button class="navbar-toggler navbar-toggle" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="m-0 pr-4 py-0 navbar-brand" href="#">
                <img src="<?php echo base_url('assets/images/MassdropLogo.png')?>" width="125" height="60" alt="">
            </a>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="px-4 nav-item active">
                        <a class="nav-link" href="#">For You <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="px-4 nav-item">
                        <a class="nav-link" href="#">Communities</a>
                    </li>
                    <li class="px-4 nav-item">
                        <a class="nav-link" href="#">Shop</a>
                    </li>
                </ul>
            </div>
            <nav class="navbar navbar-light">
                <a class="navbar-brand" href="#">
                    <img src="<?php echo base_url('assets/images/magnifier.png')?>" width="20" height="20" alt="">
                </a>
            </nav>
            <nav class="navbar navbar-light">
                <a class="navbar-brand" href="#">
                    <img src="<?php echo base_url('assets/images/bell-notif.png')?>" width="20" height="20" alt="">
                </a>
            </nav>
            <nav class="navbar navbar-light dropdown">
                <!-- <a class="navbar-brand" href="#"> -->
                    <img src="<?php echo base_url('assets/images/circled-A.png')?>" class=" dropdown-toggle" data-toggle="dropdown" width="40" height="40" alt="">
                    <ul class="dropdown-menu">
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Saved</a></li>
                        <li><a href="<?php echo base_url('myTransactionController') ?>">Transactions</a></li>
                        <li><a href="#">Setting</a></li>
                        <li><a href="#">Give $10, Get $10</a></li>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="<?php echo site_url().'/LoginController/Logout';?>">Logout</a></li>
                        <li><a href="<?php echo site_url().'/LoginController/delete';?>">Delete Account</a></li>
                    </ul>
                <!-- </a> -->
                </nav>
        </nav>
        <div>
            <h3 class = "pl-5 pt-3" style = "background-color : white">My Transactions</h3>
            <div class = "row border-bottom" style = "background-color : white">
                <p class = "col"></p>
                <a class = "col-1" href = "#">Active</a>
                <a class = "col-1"href = "#">Delivered</a>
                <a class = "col-1"href = "#">Cancelled</a>
                <p class = "col"></p>
            </div>
        </div>

    </body>


</html>