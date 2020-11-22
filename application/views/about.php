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
  <link rel="stylesheet" href="<?php echo base_url().'assets/about.css'?>">
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
                <button class="btnshop">JOIN US</button>
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
            <h2 class="h2kata text-center">Community-Inspired Products, Designed for Everyone </h2>
            <P class="pkata">Drop is designing products differently. By tapping into data and insights from uniquely passionate people</P>
            <p class="pkata">and applying them to our curated selections and exclusive designs, we deliver inventive products that fuel </p>
            <P class="pkata">your interests. Founded in 2012, Drop empowers people around the world to discover new, diverse </P>
            <P class="pkata">products every day; participate in product development; and learn and share with a community 6.9 </P>
            <P class="pkata">million strong.</P>

            <p class="pkata pt-4">Find and follow your passions on Drop.com and the Drop app for iPhone and Android smartphones. You </p>
            <P class="pkata">can also connect with us at @massdrop on Facebook, Instagram, and Twitter.</P>
        </div>
    </div>
    <div class="poto pt-3">
        <div>
            <h2 class="h2kata text-center">Leadership</h2>
            <div class="row pt-3">
                <div class="col-sm-1"></div>
                <div class="col-sm-5">
                    <div class="card-deck">
                        <div class="card">
                            <div class ="overlay2">
                                <img class="cabot" src="<?php echo base_url().'assets/about1.png'?>" alt="Card image cap">
                                <p class="ct card-text text-left">Steve El-Hage</p>
                                <small class="cs text-muted">Chief Excecutive officer</small></p>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="card-deck">
                        <div class="card">
                            <div class ="overlay2">
                                <img class="cabot" src="<?php echo base_url().'assets/about2.png'?>" alt="Card image cap">
                                <p class="ct card-text text-left">Jasper Chan</p>
                                <small class="cs text-muted">Chief Technology Officer</small></p>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>
            
            <div class="row" style="padding-top:70px;">
                <div class="col-sm-1"></div>
                <div class="col-sm-5">
                    <div class="card-deck">
                        <div class="card">
                            <div class ="overlay2">
                                <img class="cabot" src="<?php echo base_url().'assets/about3.png'?>" alt="Card image cap">
                                <p class="ct card-text text-left">Tony Meneghetti</p>
                                <small class="cs text-muted">Chief Financial Officer</small></p>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="card-deck">
                        <div class="card">
                            <div class ="overlay2">
                                <img class="cabot" src="<?php echo base_url().'assets/about4.png'?>" alt="Card image cap">
                                <p class="ct card-text text-left">Valerie Buckingham</p>
                                <small class="cs text-muted">Chief Marketing Officer</small></p>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>
            
        </div>
    </div>
    <div class="tiga" style="padding-top:100px;">
        <div>
            <h2 class="h2kata text-center">Investors</h2>
            <div class="row">
                <div class="col"></div>
                <div class="col-sm-2">
                    <img class="cabot" src="<?php echo base_url().'assets/investor1.png'?>" alt="Card image cap">
                </div>
                <div class="col-sm-2">
                    <img class="cabot" src="<?php echo base_url().'assets/investor2.png'?>" alt="Card image cap">
                </div>
                <div class="col-sm-2">
                    <img class="cabot" src="<?php echo base_url().'assets/investor3.png'?>" alt="Card image cap">
                </div>
                <div class="col"></div>
            </div>
            <div class="row" style="padding-top:100px;">
                <div class="col"></div>
                <div class="col-sm-2">
                    <img class="cabot" src="<?php echo base_url().'assets/investor4.png'?>" alt="Card image cap">
                </div>
                <div class="col-sm-2">
                    <img class="cabot" src="<?php echo base_url().'assets/investor5.png'?>" alt="Card image cap">
                </div>
                <div class="col-sm-2">
                    <img class="cabot" style='visibility: hidden;' src="<?php echo base_url().'assets/investor1.png'?>" alt="Card image cap">
                </div>
                <div class="col"></div>
            </div>
        </div>
    </div>

    <div class="katakata pt-5">
        <h2 class="h2kata text-center">Love Where You Work</h2>
        <P class="pkata">We believe inventive product design can help people enjoy the things they love like never before, and </P>
        <p class="pkata">we’re always on the lookout for team members who feel the same way. If you’re passionate about our </p>
        <P class="pkata">mission and great at what you do, we want to meet you. Explore your career opportunities at Drop.</P>
    </div>
    <div class="katakata pt-5">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-2"></div>
            <div class="col-sm-2"></div>
            <div class="col-sm-2">
                <button class="btnshop text-center">LEARN MORE</button>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-2"></div>
            <div class="col-sm-1"></div>
        </div>
        
            
        
    </div>
    <div class="katakata pt-5">
        <h2 class="h2kata text-center">Contact Us</h2>
        <div class="row pt-5">
            <div class="col-sm-1"></div>
            <div class="col-sm-2"></div>
            <div class="col-sm-2"></div>
            <div class="col-sm-2">
                <button class="btnshop text-center">LEARN MORE</button>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-2"></div>
            <div class="col-sm-1"></div>
        </div>
        
        <div class="row pt-3">
            <div class="inf col-sm-1"></div>
            <div class="col-sm-1"></div>
            <div class="inf col-sm-2">Media Inquiries</div>
            <div class="col-sm-1"></div>
            <div class="inf col-sm-2">Partnership Inquiries</div>
            <div class="col-sm-1"></div>
            <div class="inf col-sm-2">Become a Vendor</div>
            <div class="col-sm-1"></div>
            <div class="inf col-sm-1"></div>
        </div>
        <div class="row pt-3">
            <div class="inf col-sm-1"></div>
            <div class="col-sm-1"></div>
            <div class="inf col-sm-2">press@massdrop.com</div>
            <div class="col-sm-1"></div>
            <div class="inf col-sm-2">Partnerships@massdrop.com</div>
            <div class="col-sm-1"></div>
            <div class="inf col-sm-2">vendor@massdrop.com</div>
            <div class="col-sm-1"></div>
            <div class="inf col-sm-1"></div>
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
