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
  <link rel="stylesheet" href="<?php echo base_url().'assets/test.css'?>">
</head>
<body>
    <header>

    <div class="bg-img">
        <div class="atas">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-9 pt-3" style="background-color:transparent;">
                    <img class="logokecil" src="<?php echo base_url().'assets/logoputih.png'?>" alt="">
                    <button class="buttonlogin" data-toggle="modal" data-target="#modalRegisterForm" >Register</button>
                </div>
                <div class="col-sm-1 pt-3">
                <button class="buttonlogin" data-toggle="modal" data-target="#modallogin" >Login</button> 
                </div>
                <div class="col-sm-1"></div>
            </div>
            

        <div class="atas2">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <div class="text-left">
                        <p class="p1">Do more of </p>
                        <p class="p1">what you love</p>
                    </div>
                <div class="col-sm-1""></div>  
                </div>
            </div>
        </div>
        <div class="atas3" id="tabrak">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col pt-3" id="tabrak2">
                    <button type="button" class="btn btn-lg" id="btnemail">
                        <div style="display: flex;">
                            <div class="bicon">
                                <img class="bicon" src="<?php echo base_url().'assets/iconmail.png'?>">
                            </div>
                            <div class="bitext px-3">
                                Continue with email
                            </div>
                        </div>
                    </button>
                    <button type="button" class="btn btn-lg" id="btnfb">
                        <div style="display: flex;">
                            <div class="bicon">
                                <img class="bicon" src="<?php echo base_url().'assets/iconfbwhite.png'?>">
                            </div>
                            <div class="bitext px-3">
                                Continue with facebook
                            </div>
                        </div>
                    </button>
                    
                    <button type="button" class="btn btn-lg" id="btngoogle">
                        <div style="display: flex;">
                            <div class="bicon">
                                <img class="bicon" src="<?php echo base_url().'assets/icongoogle.png'?>">
                            </div>
                            <div class="bitext px-3" id="tanya">
                                Continue with Google
                            </div>
                        </div>
                    </button>
                    <button type="button" class="btn btn-lg" id="btntanya">
                        <div style="display: flex;">
                            <div class="bicon">
                                <img class="bicon" src="<?php echo base_url().'assets/icontanya.png'?>">
                            </div>
                            <div class="bitext px-3">
                                Why do I need  to sign up?
                            </div>
                        </div>
                    </button>
                </div>
                <div class="col-sm-1"></div>
            </div>
    </div>
    <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form method="post" action="<?php echo site_url().'/LoginController/register';?>" class="login100-form validate-form">  
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Register</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <div class="md-form mb-5">
                            <i class="fas fa-user prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="orangeForm-name">Input Username</label>
                            <input type="text" id="orangeForm-name" class="form-control validate" name="username" placeholder="Username" >
                        </div>
                        <div class="md-form mb-5">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="orangeForm-email">Input Email</label>
                            <input type="email" id="orangeForm-email" class="form-control validate" name="email" placeholder="Email">
                        </div>
                        <div class="md-form mb-4">
                            <i class="fas fa-lock prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="orangeForm-pass">Input Password</label>
                            <input type="password" id="orangeForm-pass" class="form-control validate" name="password" placeholder="Password">
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <!--button-- class="btn btn-deep-orange">Sign up</button-->
                            <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="modallogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form method="post" action="<?php echo site_url().'/LoginController/cek_login';?>" class="login100-form validate-form">  
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Login</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <div class="md-form mb-5">
                            <i class="fas fa-user prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="orangeForm-name">Input Username</label>
                            <input type="text" id="orangeForm-name" class="form-control validate" name="username" placeholder="Username" >
                        </div>
                        <div class="md-form mb-4">
                            <i class="fas fa-lock prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="orangeForm-pass">Input Password</label>
                            <input type="password" id="orangeForm-pass" class="form-control validate" name="password" placeholder="Password">
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <!--button-- class="btn btn-deep-orange">Sign up</button-->
                            <input type="submit" name="login" id="login" class="form-submit" value="login"/>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
        
        

    </header>
    



    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-1" style="background-color:#F0F0F0"></div>
            <div class="col-sm-10" style="background-color:rgb(255, 255, 255);">
                <h2 class="head1 pt-3" style="margin-top:30px;">Community-Driven Commerce</h2>
                <p class ="teks1">We make products with input from our members and give them a place to connect, learn and shop with people who share their interests.</p>
                <h2 class="head2">Find your interests</h2>
                <p class="teks2">Everything on Massdrop is chosen, created, or inspired by our enthusiast communities.</p>
            </div>
            <div class="col-sm-1" style="background-color:#F0F0F0"></div>
        </div>
        <div class="row">
            <div class="col-sm-1" style="background-color:#F0F0F0"></div>
            <div class="col-sm-1" style="background-color:#ffff;"></div>
            <div class="col-sm-8" style="background-color:rgb(255, 255, 255);">
                <div class="card-deck">
                    <div class="card">
                        <div class ="overlay2">
                            <img class="card-img-top" src="<?php echo base_url().'assets/card1.jpg'?>" alt="Card image cap">
                        </div>
                    </div>
                    <div class="card">
                        <div class ="overlay2">
                            <img class="card-img-top" src="<?php echo base_url().'assets/card2.jpg'?>" alt="Card image cap">
                        </div>
                    </div>
                    <div class="card">
                        <div class ="overlay2">
                            <img class="card-img-top" src="<?php echo base_url().'assets/card3.jpg'?>" alt="Card image cap">
                        </div>
                    </div>
                    <div class="card">
                        <div class ="overlay2">
                            <img class="card-img-top" src="<?php echo base_url().'assets/card4.jpg'?>" alt="Card image cap">
                        </div>
                    </div>
                    <div class="card">
                        <div class ="overlay2">
                            <img class="card-img-top" src="<?php echo base_url().'assets/card5.jpg'?>" alt="Card image cap">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-1" style="background-color:#ffff;"></div>
            <div class="col-sm-1" style="background-color:#F0F0F0"></div>
        </div>
        <div class="row">
            <div class="col-sm-1" style="background-color:#F0F0F0"></div>
            <div class="col-sm-1" style="background-color:#ffff;"></div>
            <div class="col-sm-8" style="background-color:rgb(255, 255, 255);">
                <div class="card-deck">
                    <div class="card">
                        <div class ="overlay2">
                            <img class="card-img-top" src="<?php echo base_url().'assets/card6.jpg'?>" alt="Card image cap">
                        </div>
                    </div>
                    <div class="card">
                        <div class ="overlay2">
                            <img class="card-img-top" src="<?php echo base_url().'assets/card7.jpg'?>" alt="Card image cap">
                        </div>
                    </div>
                    <div class="card">
                        <div class ="overlay2">
                            <img class="card-img-top" src="<?php echo base_url().'assets/card8.jpg'?>"alt="Card image cap">
                        </div>
                    </div>
                    <div class="card">
                        <div class ="overlay2">
                            <img class="card-img-top" src="<?php echo base_url().'assets/card9.jpg'?>" alt="Card image cap">
                        </div>
                    </div>
                    <div class="card">
                        <div class ="overlay2">
                            <img class="card-img-top" src="<?php echo base_url().'assets/card10.jpg'?>" alt="Card image cap">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-1" style="background-color:#ffff;"></div>
            <div class="col-sm-1" style="background-color:#F0F0F0"></div>
        </div>
        <div class="row">
            <div class="col-sm-1" style="background-color:#F0F0F0"></div>
            <div class="col-sm-1" style="background-color:#ffff;"></div>
            <div class="col-sm-8" style="background-color:rgb(255, 255, 255);">
                <div class="card-deck">
                    <div class="card">
                        <div class ="overlay2">
                            <img class="card-img-top" src="<?php echo base_url().'assets/card11.jpg'?>" alt="Card image cap">
                        </div>
                    </div>
                    <div class="card">
                        <div class ="overlay2">
                            <img class="card-img-top" src="<?php echo base_url().'assets/card12.jpg'?>" alt="Card image cap">
                        </div>
                    </div>
                    <div class="card">
                        <div class ="overlay2">
                            <div class="text-center">
                                <img class="card-img-top" src="<?php echo base_url().'assets/card13.jpg'?>" alt="Card image cap">
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class ="overlay2">
                            <img class="card-img-top" src="<?php echo base_url().'assets/card14.jpg'?>" alt="Card image cap">
                        </div>
                    </div>
                    <div class="card">
                        <div class ="overlay2">
                            <img class="card-img-top" src="<?php echo base_url().'assets/card15.jpg'?>" alt="Card image cap">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-1" style="background-color:#ffff;">.</div>
            <div class="col-sm-1" style="background-color:#F0F0F0"></div>
        </div>
        <div class="row">
          <div class="col-sm-1" style="background-color:#F0F0F0"></div>
          <div class="col-sm-1" style="background-color:#ffff;"></div>
          <div class="col-sm-8" style="background-color:rgb(255, 255, 255);">
              <div class="card-deck">
                  <div class="card">
                      <img class="card-img-top" style='visibility: hidden;'' src="<?php echo base_url().'assets/card5.jpg'?>" alt="Card image cap">
                      
                  </div>
                  <div class="card">
                      <img class="card-img-top" style='visibility: hidden;' src="<?php echo base_url().'assets/card5.jpg'?>" alt="Card image cap">
                      
                  </div>
                  <div class="card">
                        <div class ="overlay2">
                            <img class="card-img-top" src="<?php echo base_url().'assets/card16.jpg'?>" alt="Card image cap">
                        </div>
                    </div>
                  <div class="card">
                      <img class="card-img-top" style='visibility: hidden;' src="<?php echo base_url().'assets/card5.jpg'?>" alt="Card image cap">
                      
                  </div>
                  <div class="card">
                      <img class="card-img-top" style='visibility: hidden;' src="<?php echo base_url().'assets/card5.jpg'?>" alt="Card image cap">
                      
                  </div>
              </div>
            </div>
            <div class="col-sm-1" style="background-color:#ffff;"></div>
            <div class="col-sm-1" style="background-color:#F0F0F0"></div>
        </div>
        <div class="row">
                <div class="col-sm-1" style="background-color:#F0F0F0"></div>
                <div class="col-sm-10" style="background-color:rgb(255, 255, 255);">
                    <h2 class="head3">Join your enthusiast community</h2>
                    <h2 class="head4">Discover products and share stories with people who share your passion.</h2>
                </div>
                <div class="col-sm-1" style="background-color:#F0F0F0"></div>
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
                    <a class="head5">about</a>
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
        
        
    </footer>
</body>

</html>
