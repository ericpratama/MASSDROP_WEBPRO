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
       
    <body style = "background-color:#F0F0F0">
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

        <div class = "row">
            <div class = "col-1">1</div>
            <div class = "col-7">2
                <div class = "row border" style = "background-color:#FFFFFF">
                    <div class = "col-2 px-0" style = "">
                        <a class = "" href="">
                            <img src="<?php echo base_url('assets/images/tv1.jpeg')?>" width = "100px" height = "auto" alt="">
                        </a>
                    </div>
                    <div class = "col mt-3 px-0">
                        <h6 style = "font-size:20px">Samsung 75Q8FN QLED Smart 4K UHD Full Array </h6>
                    </div>
                    <div class = "col-2 px-0 mt-3">
                        <h6 style = "font-size:20px">$2499</h6>
                    </div>
                </div>
                <div class = "row border mt-3 py-2" style = "background-color:#FFFFFF">
                    <div class = "text-center my-3 col-2 px-0">
                        <h6 class = "mb-0">Select Quantity:</h6>
                    </div>
                    <select class = "quantity my-2 ml-3 col-1">
                        <option id = "1" value="1" selected>1</option>
                        <option id = "2" value="2">2</option>
                    </select>
                    <p class = "col-8"></p>
                </div>
                <div class = "row mt-3 card-columns">
                    <div class="col card mr-3 p-3">
                        <div class="card-body border-bottom">
                            <h6>Payment Option</h6>
                        </div>
                        <div class="card-body border-bottom">
                            <div class = "row">
                                <div class="col-1 input-group">
                                    <input id = "CardType" type="radio" value = "CreditCard" checked="checked" name = "CardType" aria-label="Radio button for following text input">
                                </div>
                                <h6 class = "col">Credit Card</h6>
                            </div>
                            <div>
                                <select class = "wow" id = "penentu">
                                    <option id = "1" value="MasterCard" selected>Master Card ending in 4444 expiring 1/2028</option>
                                    <option id = "2" value="OtherCard">Add a new credit card</option>
                                </select>

                                <div id = "MasterCard" class = "row pt-3 wow">
                                    <h6 class = "text-right pl-1 col-4">Security Code</h6>
                                    <input class = "col" type="text" size = "4" name="fname">
                                    <p class = "col-6"></p>
                                </div>

                                <div class = "wow" id = "OtherCard">
                                    <div class = "row pt-3">
                                        <h6 class = "text-right pl-1 col-4">Nama</h6>
                                        <input class = "col"type="text" name="fname">
                                    </div>
                                    <div class = "row pt-3">
                                        <h6 class = "text-right pl-1 col-4">Card Number</h6>
                                        <input class = "col"type="text" name="fname">
                                    </div>
                                    <div class = "row pt-3">
                                        <h6 class = "text-right pl-1 col-4">Expiry</h6>
                                        <div class = "row col">
                                            <select class = "col" id  = "penentu">
                                                <option id = "0" value="0" selected>MM</option>
                                                <option id = "1" value="1">01 &nbsp;&nbsp;&nbsp; January</option>
                                                <option id = "2" value="2">02 &nbsp;&nbsp;&nbsp; February</option>
                                                <option id = "3" value="3">03 &nbsp;&nbsp;&nbsp; March</option>
                                                <option id = "4" value="4">04 &nbsp;&nbsp;&nbsp; April</option>
                                                <option id = "5" value="5">05 &nbsp;&nbsp;&nbsp; May</option>
                                                <option id = "6" value="6">06 &nbsp;&nbsp;&nbsp; June</option>
                                                <option id = "7" value="7">07 &nbsp;&nbsp;&nbsp; July</option>
                                                <option id = "8" value="8">08 &nbsp;&nbsp;&nbsp; August</option>
                                                <option id = "9" value="9">09 &nbsp;&nbsp;&nbsp; September</option>
                                                <option id = "10" value="10">10 &nbsp;&nbsp;&nbsp; October</option>
                                                <option id = "11" value="11">11 &nbsp;&nbsp;&nbsp; November</option>
                                                <option id = "12" value="12">12 &nbsp;&nbsp;&nbsp; December</option>
                                            </select>
                                            <p class = "col-3 text-center mt-2">/</p>
                                            <select class = "col" id  = "penentu">
                                                <option id = "2025" value="2025">2025</option>
                                                <option id = "2026" value="2026">2026</option>
                                                <option id = "2027" value="2027">2027</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class = "row pt-3">
                                        <h6 class = "text-right pl-1 col-4">Security Code</h6>
                                        <input class = "col" type="text" size = "4" name="fname">
                                        <p class = "col-6"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class = "row">
                                <div class="col-1 input-group">
                                    <input id = "CardType" type="radio" value = "PayPal" name = "CardType"  aria-label="Radio button for following text input">
                                </div>
                                <h6 class = "col-3">Paypal</h6>
                                <a class = "col" href="">
                                    <img src="<?php echo base_url('assets/images/paypal.png')?>" width = "40px" height = "auto" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col card">
                        <div class="card-body border-bottom">
                            <h6>Shipping Address</h6>
                        </div>
                        <div class="card-body border-bottom">
                            <div class = "row">
                                <div class="col-1 input-group">
                                    <input type="radio" aria-label="Radio button for following text input">
                                </div>
                                <h6 class = "col-6">use a new address</h6>
                            </div>
                            <form method="post" id = "alamat" action="<?php echo site_url().'/JoinDropController/simpanalamat';?>" class="login100-form validate-form">
                            <div class = "" id = "">
                                    <div class = "row pt-3">
                                        <h6 class = "text-right pl-5 col-5">Name</h6>
                                        
                                        <input class = "col"type="text" name="nama">
                                    </div>
                                    <div class = "row pt-3">
                                        <h6 class = "text-right pl-5 col-5">Address</h6>
                                        <input class = "col"type="text" name="alamat">
                                    </div>
                                    <div class = "row pt-3">
                                        <h6 class = "text-right pl-5 col-5">City</h6>
                                        <input class = "col"type="text" name="kota">
                                    </div>
                                    <div class = "row pt-3">
                                        <h6 class = "text-right pl-5 col-5">State</h6>
                                        <select class = "col" id  = "penentu" name = "provinsi" >
                                            <option id = "1" value="Jawa Barat" selected>Jawa Barat</option>
                                            <option id = "2" value="Riau">Riau</option>
                                        </select>
                                    </div>
                                    <div class = "row pt-3">
                                        <h6 class = "text-right pl-5 col-5">Postal Code</h6>
                                        <input class = "col"type="text" name="kode_pos">
                                    </div>
                                    <div class = "row pt-3">
                                        <h6 class = "text-right pl-5 col-5">Phone Number</h6>
                                        <input class = "col"type="text" name="nomor_hp">
                                    </div>
                                    <!-- <input type="submit" name="joinz" id="joinz" class="form-submit" value="Join"/> -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class = "col-3">3
                <div class="card">
                    <div class="card-body border-bottom">
                        <h6>Order Details</h6>
                    </div>
                    <div class="card-body border-bottom">
                        <div class = "row pt-3">
                            <h6 class = "text-left col">Quantity</h6>
                            <h6 class = "text-right col" id = "jumlah"></h6>
                        </div>
                        <div class = "row pt-3">
                            <h6 class = "text-left col">Subtotal</h6>
                            <h6 class = "price text-right col">$2499</h6>
                        </div>
                        <div class = "row pt-3">
                            <h6 class = "text-left col-8">Shipping & Handling</h6>
                            <h6 class = "text-right col">$0</h6>
                        </div>
                        <div class = "row pt-3">
                            <h6 class = "text-left col">Tax</h6>
                            <h6 class = "text-right col">$0</h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class = "row">
                            <h6 class = "text-left col">Total(USD)</h6>
                            <h6 class = "price text-right col" id= "price" action = <?php echo site_url().'/JoinDropController/calculatePrice';?>></h6>
                        </div>
                        <div class = "row pt-3">
                            <button type="submit" form = "alamat" class="mx-auto btn btn-dark" style = "padding: 17px 120px 17px 120px;">Join</button>
                        </div>
                        <div id = "warning" class = "row pt-3 px-4">
                            <p style = "font-size:13px">Please re-enter your credit card security code to use a new shipping address.</p>
                        </div>
                        <div class = "row">
                            <p class = "col-1"></p>
                            <a class = "col-2 pl-5 pr-0 pb-0 mb-0 pt-2" href="">
                                <img src="<?php echo base_url('assets/images/lock.png')?>" width = "20" height = "auto" alt="">
                            </a>
                            <p class = "col pl-4 pt-2 pb-0 mb-0" style = "font-size:15px">Secure Checkcout</p>
                            <p class = "col-1"></p>
                        </div>
                    </div>
                    
                </div>
                <h6 class = "text-center pt-4" style = "font-size:13px">When will I be charged and how much?</h6>
                <p class = "text-center pt-1" style = "font-size:13px">You’ll be charged when this product run ends (on or before Apr 22, 2019) 
                for the lowest price point reached at that time.</p>
            </div>
            <div class = "col-1">4</div>
        </div>
    </body>

    <script>
        $(document).ready(function(){
            document.getElementById('price').innerHTML = '2499';
            $("#OtherCard").hide();
            document.getElementById('jumlah').innerHTML = "1";

            $('input[type="radio"]').click(function(){
                var radio = $(this).val();
                if(radio == "CreditCard") {
                    $(".wow").hide();
                    $("#penentu").show();
                    $("#penentu").val(function(){
                        var dropdown = $(this).val();
                        if(dropdown == "MasterCard") { 
                            $("#penentu").show();    
                            $('#'+dropdown).show();
                        } else if (dropdown == "OtherCard") {
                            $("#penentu").show();
                            $('#'+$(this).val()).show();
                        }
                        $('#'+dropdown).value = drowpdown;
                        $("#penentu").show();
                    });
                } else if (radio == "PayPal") {
                    $("#MasterCard").hide();
                    $("#penentu").hide();
                    $("#OtherCard").hide();
                }                                
            });

            $('#penentu').change(function(){
                var dropdown = $(this).val();
                        if(dropdown == "MasterCard") {     
                            $('.wow').hide();
                            $("#penentu").show();
                            $('#'+$(this).val()).show();
                        } else if (dropdown == "OtherCard") {
                            $('.wow').hide();
                            $("#penentu").show();
                            $('#'+$(this).val()).show();
                } 
            });

            $('.quantity').change(function(){
                document.getElementById('jumlah').innerHTML = $(this).val();
                var jumlah = $(this).val();
                var sum = 2499*jumlah;
                document.getElementById('price').innerHTML = sum;
                
            });

            $(".quantity").change(function(){
                
            });
            
         });
    </script>

</html>