<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url().'assets/about2.css'?>">
</head>
<body>
  <header>
        <nav class="py-0 pl-4 m-0 sticky-top navbar navbar-expand-lg navbar-light border-bottom" style = "background-color:#FFFFFF">
                <button class="navbar-toggler navbar-toggle" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="m-0 pr-4 py-0 navbar-brand" href="#">
                    <img src="<?php echo base_url().'assets/logokecil.png'?>" width="125" height="60" alt="">
                </a>
                
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="px-4 nav-item active text-center" style="font-weight:700;color: black">
                            <a class="nav-link" href="#">Shop <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="px-4 nav-item active text-center" style="font-weight:700; color: black">
                            <a class="nav-link" href="#">Massdrop Made</a>
                        </li>
                        <li class="px-4 nav-item active text-center" style="font-weight:700;color: black">
                            <a class="nav-link" href="#">Discuss</a>
                            <a href="#myContent">coba scroll</a>
                            <a href="#google">xxxxxxx</a>
                            
                        </li>
                    </ul>
                </div>
                <nav class="navbar navbar-light">
                    <a class="nav-link" href="<?php echo site_url().'/LoginController/Logout';?>"><i class="fa fa-power -off"></i>Logout</a>
                </nav>
                <nav class="navbar navbar-light">
                    <a class="nav-link" href="<?php echo site_url().'/LoginController/delete/';?>"><i class="fa fa-power -off"></i>Delete Account</a>
                </nav>
                <nav class="navbar navbar-light">
                    <a class="navbar-brand" href="#">
                        <img src="<?php echo base_url().'assets/iconbell.png'?>" width="40" height="40" alt="">
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
                <nav class="navbar navbar-light">
                    <a class="navbar-brand" href="#">
                        <img src="" width="40" height="40" alt="">
                    </a>
                </nav>
            </nav>
            
      <div class="bg-img">
        <div class="atas">
            
        </div>
        <div class="bawah">
            <div id="bt">
                <button class="btnshop">SEE OPEN POSITIONS</button>
            </div>
        </div>
    </div>
  </header>

<div class="container">
    <div class="scroll">
        <div>
            <a class="isiscroll" id="isiscroll2">COMPANY INFO</a>
            <a class="isiscroll">LEADERSHIP</a>
            <a class="isiscroll">INVESTORS</a>
            <a class="isiscroll">CULTURE</a>
            <a class="isiscroll">CONTACT</a>
        </div>
    </div>
    <div class="katakata pt-5">
        <div>
            <h2 class="h2kata text-center">Work Meets Play</h2>
            <P class="pkata">Drop is home to some of the biggest enthusiasts in the world, and the people who build the site are every </P>
            <p class="pkata">bit as passionate as the people who use it. We care deeply about creating the best user experience and </p>
            <P class="pkata">we nerd out over the products we sell. Of course, life at Drop is more than just work. We live and breathe </P>
            <P class="pkata">our communities through game nights, camping trips, cook-offs, knitting circles, mechanical keyboard </P>
            <P class="pkata">meetups, and more.</P>
        </div>
    </div>
    <div class="katakata pt-5">
        <div>
            <h2 class="h2kata text-center">Featured Team</h2>
            <P class="pkata">The Commerce team is responsible for sourcing enthusiast products for each community. Our days are </P>
            <p class="pkata">varied and no two are the same. Most buyers have a curious streak that runs a mile wide, which makes </p>
            <P class="pkata">sourcing new products extremely enjoyable. Our time is spent reaching out to vendors, scouting trade </P>
            <P class="pkata">shows for exciting new vendors, and finding new ideas and topics that can be shared in our communities.</P>


            <p class="pkata pt-4">Most of us are enthusiasts, which in many cases is what attracted us to the Drop platform prior to </p>
            <P class="pkata">working here. We are a very passionate group who love wearing many hats to help make Drop a place </P>
            <P class="pkata">where people enjoy sharing information with other passionate people.</P>
        </div>
    </div>
    <div class="profil pt-3">
    <h2 class="h2kata text-center">Featured Employees</h2>
        <div class="pt-3">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-1">
                    <img src="<?php echo base_url().'assets/emp1.jpg'?>" alt="">
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-6">
                    <div class="row">
                        <p>Duncan Campbell</p>
                    </div>
                    <div class="row">
                        <p>COMMUNITIES CONTENT AND SOCIAL MEDIA MANAGER</p>
                    </div>
                    <div class="row">
                        <p>“I honestly get to do all of what I love here at Drop. Seeing the impact of the things that we do is really rewarding. I work with great people and nobody here is a stranger.”</p>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </div>
    <div class="profil pt-3">
        <div class="pt-3">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-7">
                    <div class="row">
                        <p>George Mason</p>
                    </div>
                    <div class="row">
                        <p>DATA ANALYST</p>
                    </div>
                    <div class="row">
                        <p>
                        Drop offers a space for growth with numerous data challenges in both the Analytical and Machine Learning realm. Also, working alongside a knowledgeable and driven team makes for a great work environment.”
                        </p>
                    </div>
                </div>

                <div class="col-sm-1">
                    <img src="<?php echo base_url().'assets/emp2.jpg'?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="profil pt-3">
        <div class="pt-3">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-1">
                    <img src="<?php echo base_url().'assets/emp3.jpg'?>" alt="">
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-6">
                    <div class="row">
                        <p>Kim Suarez</p>
                    </div>
                    <div class="row">
                        <p>PRODUCT DEVELOPMENT MANAGER</p>
                    </div>
                    <div class="row">
                        <p>
                        “Working at Drop, I get to collaborate with some of the best brands, designers and factories in the world. All while working alongside a wide range of talented people. It's a dream job for sure!”
                        </p>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </div>
    <div class="profil pt-3">
        <div class="pt-3">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-7">
                    <div class="row">
                        <p>Kylee Jensen</p>
                    </div>
                    <div class="row">
                        <p>BUYER</p>
                    </div>
                    <div class="row">
                        <p>
                        “Working at Drop, I’m encouraged to try out new products and be innovative on a daily basis. Also, the connections I’ve made with co-workers, vendors and community members is truly inspiring.”
                        </p>
                    </div>
                </div>

                <div class="col-sm-1">
                    <img src="<?php echo base_url().'assets/emp4.jpg'?>" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

 

    <footer>
        <div class="container-fluid" id="bawah">
            <div class="row" id="barisbawah2">
                <div class="col-sm-1" style="background-color:#FFFFFF"></div>
                <div class="col-sm-1" id="colbawah" style="background-color:rgb(255, 255, 255);">
                    <a class="head5"><a>
                </div>
                <div class="col-sm-1" style="background-color:rgb(255, 255, 255);">
                    <a class="head5"></a>
                </div>
                <div class="col-sm-1" style="background-color:rgb(255, 255, 255);">
                    <a href = "<?php echo base_url('AboutController/index') ?>" class="head5">about</a>
                </div>
                <div class="col-sm-1" style="background-color:rgb(255, 255, 255);">
                    <a class="head5">careers</a>
                </div>
                <div class="col-sm-1" style="background-color:rgb(255, 255, 255);">
                    <a class="head5">help center</a>
                </div>
                <div class="col-sm-1" style="background-color:rgb(255, 255, 255);">
                    <a class="head5">privacy</a>
                </div>
                <div class="col-sm-1" style="background-color:rgb(255, 255, 255);">
                    <a class="head5">terms</a>
                </div>
                <div class="col-sm-1" style="background-color:rgb(255, 255, 255);">
                    <a class="head5">sitemap</a>
                </div>
                <div class="col-sm-1" style="background-color:rgb(255, 255, 255);">
                    <a class="head5"></a>
                </div>
                <div class="col-sm-1" style="background-color:rgb(255, 255, 255);">
                    <a class="head5"></a>
                </div>
                <div class="col-sm-1" style="background-color:#FFFFFF"></div>
            </div>
            <div class="row" id="rowbawah">
                <div class="col-sm-1" style="background-color:#FFFFFF"></div>
                <div class="col-sm-10" id="colbawah" style="background-color:#FFFFFF;">
                    <div class="text-center">
                        <img src="<?php echo base_url().'assets/iconfb.png'?>" alt="icon" class="icon">
                        <img src="<?php echo base_url().'assets/icontwitter.png'?>" alt="icon" class="icon">
                        <img src="<?php echo base_url().'assets/iconig.png'?>" alt="icon" class="icon">     
                    </div>
                </div>
                <div class="col-sm-1" style="background-color:#FFFFFF"></div>
            </div>
        </div>
        <div id="google"></div>
        <script>
            var myClassName = "foo";

             $(function() {
            $("#myContent").addClass(myClassName);
            });
        </script>
        
    </footer>
</body>

</html>
