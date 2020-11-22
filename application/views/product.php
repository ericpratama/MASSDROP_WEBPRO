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
        <div class="img-fluid d-flex justify-content-center">
            <img src="<?php echo base_url('assets/images/samsung-tv-1.jpg')?>" class = "py-3" alt="Responsive image">
        </div>
        <div class="pl-5">
            <div class ="pb-3">All Drops > Tech</div>
            <div class = "mr-0 row">
                <div class = "pl-3 col-6.5">
                    <h3 class = "">Samsung 75Q8FN QLED Smart 4K UHD Full Array TV</h3>
                </div>
                    <a class = "pt-2 col-1" href="#">
                        <img src="<?php echo base_url('assets/images/bookmark-false.png')?>" width="16" height="16" alt="">
                    </a>
                <a class = "col-2"href=""></a>
                <a id = "change" value = "change" href = "<?php echo base_url('joinDropController') ?>"type="button" class= "col-4.5 btn btn-dark" style = "border-radius: 0; padding:12px 100px 12px 100px">Join Drop</a>
            </div>
            <div class = "mr-0 row">
                <h4 class = "pl-3 pr-2 col-1.5">$2499</h4>
                <strike class = "pt-1 col-0.5" style =""> $4799</strike>
                <div class = "col-8"></div>
                <div class = "pt-2 col-2 row align-middle" style = "padding-left: 56px; margin-left: 24px;">
                    <a class = "pt-1 col-0.5" href="#">
                        <img src="<?php echo base_url('assets/images/remind-me-bell.png')?>" width="16" height="16" alt="">
                    </a>
                    <div class = "col-1.5">Remind Me</div>
                </div>
            </div>
            <div class = "pl-3 mr-0 row">
                <div class = "row col-1">
                    <a class = "pt-1" href="">
                        <img src="<?php echo base_url('assets/images/clock.png')?>" width="16" height="16" alt="">
                    </a>
                    <p class = "" >Time</p>
                </div>
                <div class = "row col-2">
                <a class = "pt-1" href="">
                    <img src="<?php echo base_url('assets/images/box.png')?>" width="16" height="16" alt="">
                </a>
                <p class = "">Total-Sold</p>
                </div>
            </div>
            <div class = "pl-3 mr-0 row" style = "border-bottom:1px solid;">
                <button type="button" class="px-0 btn">Overview</button>
                <p class = "pt-3 px-3">|</p>
                <button type="button" class="specbutton px-0 btn">Specs</button>
                <p class = "pt-3 px-3">|</p>
                <button type="button" class="px-0 btn">Discussions</button> 
            </div>
            
            <div class = " mr-0 pl-3 row">
                <div class = "col-8">
                    1
                    <h5 class = "pb-3 mb-0">A Seamless 4K Experience</h5>
                    <p>Take your home theater to a whole new level with the Samsung QLED Smart 4K UHD TV. 
                    Boasting more than a billion colors and 100-percent color volume, the TV uses 
                    Quantum Dot technology to ensure that every color is depicted with stunning accuracy. Q Contrast 
                    Elite creates controlled zones of full-array LEDs that adjust automatically to reveal greater detail 
                    and depth. With Samsung’s 4K HDR Elite and 4K Ultra Elite Black technology, the TV delivers impressive 
                    contrast and deeper blacks, meaning you get crisp imagery, no matter the lighting conditions or angle. 
                    The Q Engine processor optimizes all your content to display as close to 4K as possible. Motion Rate 240 
                    ensures that the TV can keep up with fast action scenes and intense video games. And best of all? It 
                    features Samsung's new Ambient Mode, which lets you input information about the room environment to help 
                    it blend in seamlessly with its surroundings, so you’ll barely even notice it’s there. </p>
                    <a href="">
                        <img src="<?php echo base_url('assets/images/tv1.jpeg')?>" width = "100%" height = "auto" alt="">
                    </a>
                    <div class = "pt-2 row">
                        <a class = "col pr-0" href="">
                            <img src="<?php echo base_url('assets/images/tv2.jpeg')?>" width = "100%" height = "auto" alt="">
                        </a>
                        <a class = "col px-2" href="">
                            <img src="<?php echo base_url('assets/images/tv3.jpeg')?>" width = "100%" height = "auto" alt="">
                        </a>
                        <a class = "col pl-0" href="">
                            <img src="<?php echo base_url('assets/images/tv4.jpeg')?>" width = "100%" height = "auto" alt="">
                        </a>
                    </div>
                    <h5 class = "py-4 mb-0">Size Option</h5>
                    <div class = "row">
                        <a class = "col" href="">
                            <img src="<?php echo base_url('assets/images/tv1.jpeg')?>" width = "100%" height = "auto" alt="">
                        </a>
                        <div class = "row col">
                            <a class = "col-3" href="">
                                <img src="<?php echo base_url('assets/images/tv1.jpeg')?>" width = "100%" height = "auto" alt="">
                            </a>
                            <p>75"</p>
                        </div>
                    </div>
                    <h5 class = "specs py-4 mb-0">Specs</h5>
                    <h6 class = "py-1 mb-0">Samsung 75-Inch Q8F QLED Smart 4K UHD TV (75Q8FN)</h6>
                    <h6 class = "py-2 mb-0">Display</h6>
                    <ul>
                        <li>Series: Q8 Series</li>
                        <li>TV Type: QLED</li>
                        <li>Screen Size: 74.5 in </li>
                        <li>Screen Type: Flat Panel</li>
                        <li>Backlighting: Full Array Backlight</li>
                        <li>Bezel-less</li>
                        <li>Color: Carbon Silver</li>
                        <li>4K Ultra HD Connected</li>
                        <li>Resolution: 3,840 x 2,160p</li>
                        <li>Motion Rate: 240</li>
                        <li>Color: Q Color</li>
                        <li>HDR (High-Dynamic Range): Q HDR Elite</li>
                        <li>Ultra Black Elite</li>
                        <li>Picture Engine: Q Engine</li>
                        <li>10bit Support</li>
                        <li>Quantum Dot Color</li>
                        <li>UHD Upscaling</li>
                        <li>Depth Enhancing Technology</li>
                        <li>Contrast Enhancer</li>
                    </ul>
                    <h6 class = "py-2 mb-0">Audio</h6>
                    <ul>
                        <li>Dolby</li>
                        <li>Sound Output (RMS): 40W</li>
                        <li>Woofer</li>
                        <li>Speaker Channels: 4.1</li>
                        <li>Multiroom Link</li>
                        <li>TV SoundConnect</li>
                        <li>Bluetooth Headset Support</li>
                    </ul>
                    <h6 class = "py-2 mb-0">Connectivity</h6>
                    <ul>
                        <li>Wi-Fi</li>
                        <li>Wi-Fi Direct</li>
                        <li>Bluetooth</li>
                    </ul>
                    <h6 class = "py-2 mb-0">Features</h6>
                    <ul>
                        <li>Smart Hub</li>
                        <li>Processor: Quad-core</li>
                        <li>Apps Platform: Smart TV with Bixby Voice, Apps and Full Web Browser</li>
                        <li>Bixby</li>
                        <li>Digital Clean View</li>
                        <li>Auto Channel Search</li>
                        <li>Voice Interaction: Spanish, French</li>
                        <li>Auto Motion Plus</li>
                        <li>Ultra Black</li>
                        <li>Ultra Black Elite</li>
                        <li>Dimming Technology</li>
                        <li>Supreme UHD Dimming</li>
                        <li>ConnectShare</li>
                        <li>Embedded POP</li>
                        <li>OSD Language: English, Spanish, French</li>
                        <li>InstaPort S (HDMI Quick Switch)</li>
                        <li>Anynet+ (HDMI-CEC)</li>
                        <li>Closed Captioning</li>
                        <li>Electronic Program Guide (Channel Guide)</li>
                        <li>V-Chip</li>
                        <li>Game Modes: Auto Game mode, Game Motion Plus</li>
                        <li>Ambient Mode</li>
                        <li>Bluetooth</li>
                        <li>USB HID Support</li>
                        <li>Eco Sensor</li>
                        <li>Auto Power Off</li>
                        <li>Easy Pairing</li>
                        <li>TV to Mobile - Mirroring</li>
                        <li>Mobile to TV - Mirroring, DLNA</li>
                    </ul>
                    <h6 class = "py-2 mb-0">Input/Output</h6>
                    <ul>
                        <li>HDMI: 4</li>
                        <li>USB: 2</li>
                        <li>Ethernet</li>
                        <li>RF In (Terrestrial/Cable Input): 1/1(Common Use for Terrestrial)/0</li>
                        <li>RF In (Satellite Input): 1/1(Common Use for Terrestrial)/0</li>
                        <li>Digital Audio Out (Optical)</li>
                        <li>Audio Return Channel Support (via HDMI port)</li>
                        <li>RS232C</li>
                    </ul>
                    <h6 class = "py-2 mb-0">System</h6>
                    <ul>
                        <li>DTV Tuner: ATSC/ClearQAM</li>
                        <li>Digital Broadcasting: ATSC/ClearQAM</li>
                        <li>Analog Tuner</li>
                    </ul>
                    <h6 class = "py-2 mb-0">Power</h6>
                    <ul>
                        <li>ENERGY STAR Certified</li>
                        <li>Power Supply: AC110–120V 50/60Hz</li>
                        <li>Typical Power Consumption: 100W</li>
                        <li>Maximum Power Consumption: 280W</li>
                        <li>Standby Power Consumption: 0.5</li>
                    </ul>
                    <h6 class = "py-2 mb-0">Physical</h6>
                    <ul>
                        <li>Dimensions, Without Stand: 66 x 37.9 x 2.3 in (167.6 x 96.2 x 5.8 cm)</li>
                        <li>Dimensions, With Stand: 66 x 41.3 x 14.1 in (167.6 x 104.9 x 35.8 cm)</li>
                        <li>Weight, Without Stand: 80.7 lbs (36.6 kg)</li>
                        <li>Weight, With Stand: 82.7 lbs (37.5 kg)</li>
                    </ul>
                    <h6 class = "py-2 mb-0">Include</h6>
                    <ul>
                        <li>Remote</li>
                        <li>Power cable</li>
                        <li>User manual</li>
                        <li>E-manual</li>
                        <li>1-year manufacturers warranty</li>
                    </ul>
                    <div class = "py-3 px-3" style = "background-color: #F0F0F0">
                        <h6 class = "pb-3 mb-0">Delivery & Shipping Disclaimer</h6>
                        <ul>
                            <li>Community members participating in this drop will need to inspect the shipment packaging for visual damages 
                            upon receipt and sign on the BOL (Bill of Lading) for release. If there is any visual damage to the shipment packaging, 
                            you’ll need to note this on the BOL. Open and inspect the TV for physical damage while the driver is present. The drivers are 
                            aware of this and will wait for you to complete this process. If there is any damage to the product itself, you should 
                            note this on the BOL and refuse the shipment.</li>
                            <li>In the case of concealed damage, you must inspect the TV and report the damages to Massdrop within 24 hours of 
                            delivery. If you do not report damages within 24 hours, the claim will be denied. Please email pictures of the 
                            concealed damage, a picture of the serial number on the back of the TV, and your Massdrop receipt to support@massdrop.com.</li>
                            <li>Shipment is insured with the shipping carrier. You are responsible for following the procedures explained in this 
                            disclaimer. Failure to follow these guidelines will result in a rejected claim with the shipping carrier. </li>
                            <li>For all other support issues, including DOA (Dead on Arrival) with no physical damage, please contact Massdrop Support.</li>
                            <li>Due to escalated shipping rates, shipping to the non-contiguous US is not available for this drop. Any orders from 
                            Alaska, Hawaii, Puerto Rico, and other American territories will be canceled. </li>
                        </ul>
                    </div>
                    <h6 class = "pb-3 py-3 mb-0">Shipping</h6>
                    <p>Domestic orders will be shipped by the vendor.</p>
                    <p>Estimated ship date is May 10, 2019 PT.</p>
                    <p>After this product run ends, payment will be collected 
                    and orders will be submitted to the vendor up front, making 
                    all orders final. Check the discussion for updates on your order.</p>
                </div>

                <div class = "col-1">
                    2
                </div>

                <div class = "col-3">
                    3
                    <p>SHARE: GIVE $10, GET $10</p>
                    <div class = "row col">
                        <a class = "px-1 col" href="">
                            <img class = "border rounded border-primary" src="<?php echo base_url('assets/images/twitter.png')?>" width = "70%" height = "auto" alt="">
                        </a>
                        <a class = "px-1 col" href="">
                            <img class = "border rounded border-primary" src="<?php echo base_url('assets/images/facebook.png')?>" width = "70%" height = "auto" alt="">
                        </a>
                        <a class = "px-1 col" href="">
                            <img class = "border rounded border-danger" src="<?php echo base_url('assets/images/reddit.png')?>" width = "70%" height = "auto" alt="">
                        </a>
                        <a class = "px-1 col" href="">
                            <img class = "border rounded border-secondary" src="<?php echo base_url('assets/images/mail.png')?>" width = "70%" height = "auto" alt="">
                        </a>
                        <a class = "px-1 col" href="">
                            <img class = "border rounded border-info" src="<?php echo base_url('assets/images/link.png')?>" width = "70%" height = "auto" alt="">
                        </a>                        
                    </div>
                    <!-- <div class = "col-1"></div> -->
                </div>
            </div>
        </div>
        <div style = "background-color: #F0F0F0">
            <div class = "pl-5 py-3 pr-0">
                <div class = "row">
                    <div class = "row col-3">
                        <a class = "pl-4 pr-0" href="">
                            <img src="<?php echo base_url('assets/images/arrow-down.png')?>" width = "30" height = "auto" alt="">
                        </a> 
                        <h4 class = "">Other Drops</h4>
                    </div>
                </div>
            </div>
            <div class = "pl-5 pr-5 row">
                <div class=" px-0 mx-2 card col" style="width: 0rem;">
                    <img class="card-img-top" src="<?php echo base_url('assets/images/drop1.jpg')?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">VStarcam C38S 1080p IP Camera</h5>
                        <p class="card-text"></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>    
                    </ul>                  
                </div>
                <div class="px-0 mx-2 card col" style="width: 18rem;">
                    <img class="card-img-top" src="<?php echo base_url('assets/images/drop2.jpg')?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">ADATA UC370 USB 3.1/USB-C Flash Drive (Multi-Pack)</h5>
                        <p class="card-text"></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>    
                    </ul>                  
                </div>
                <div class="px-0 mx-2 card col" style="width: 18rem;">
                    <img class="card-img-top" src="<?php echo base_url('assets/images/drop3.jpg')?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Massdrop Vast 35-Inch Curved Gaming Monitor</h5>
                        <p class="card-text"></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>    
                    </ul>                  
                </div>
                <div class="px-0 mx-2 card col" style="width: 18rem;">
                    <img class="card-img-top" src="<?php echo base_url('assets/images/drop4.jpg')?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Mionix Naos QG Optical</h5>
                        <p class="card-text"></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>    
                    </ul>                  
                </div>
            </div>

            <div class = "pt-3 pl-5 pr-5 row">
                <div class=" px-0 mx-2 card col" style="width: 18rem;">
                    <img class="card-img-top" src="<?php echo base_url('assets/images/drop5.jpg')?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Clutch Gaming Chairs</h5>
                        <p class="card-text"></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>    
                    </ul>                  
                </div>
                <div class="px-0 mx-2 card col" style="width: 18rem;">
                    <img class="card-img-top" src="<?php echo base_url('assets/images/drop6.jpg')?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Monster Solara/Rockin' Roller X Wireless Speaker</h5>
                        <p class="card-text"></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>    
                    </ul>                  
                </div>
                <div class="px-0 mx-2 card col" style="width: 18rem;">
                    <img class="card-img-top" src="<?php echo base_url('assets/images/drop7.jpg')?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">AZIO HEaRA Hi-Res Earphone</h5>
                        <p class="card-text"></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>    
                    </ul>                  
                </div>
                <div class="px-0 mx-2 card col" style="width: 18rem;">
                    <img class="card-img-top" src="<?php echo base_url('assets/images/drop8.jpg')?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Naztech Xtra Drive Mini for iPhone</h5>
                        <p class="card-text"></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>    
                    </ul>                  
                </div>
            </div>
            <div class = "pt-3 mt-4 mx-5" style = "border-style:solid; border-width:1px;">
                <p class = "text-center">See All Drops</p>
            </div>
            <div class = "pl-5">
                <p class = "pt-5" style = "font-size:20px;">Related Polls</p>
            </div>



            <div class = "row pl-5">
                <div class = "col rounded mr-4" style = "background-color:white;">
                    <div class = "row col pt-4">
                        <a class = "col-1 pt-0" href="">
                            <img src="<?php echo base_url('assets/images/bar.png')?>" width = "20px" height = "auto" alt="">
                        </a>
                        <h5 class = "col px-0">Microsoft Surface Laptop - 1TB / Intel Core i7 / 16GB RAM (Platinum)</h5>
                        
                    </div>
                    <p class = "pl-3 pb-2 mb-0">poll started in VAR</p>
                    <div class = "border-top row text-center">
                        <p class = "border-right col mb-0 mt-0">Options</p>
                        <p class = "col mb-0 mt-0">Votes</p>
                    </div>
                    <div class = "border-bottom row text-center my-0">
                        <p class = "col mb-0">Options VAR</p>
                        <p class = "border-left col mb-0">Votes VAR</p>
                    </div>
                    <div class = "row">
                        <a class = "col-2" href="">
                            <img class = "pt-3" src="<?php echo base_url('assets/images/laptop1.jpg')?>" width = "100px" height = "auto" alt="">
                        </a>
                        <h6 class = "col-5 mt-4 text-left">Surface Laptop - 512GB / Intel Core i7 / 16GB RAM</h6>
                        <div class = "progress col mr-4 my-auto px-0">
                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>     
                    </div>
                    <div class = "row">
                        <a class = "col-2" href="">
                            <img class = "pt-3" src="<?php echo base_url('assets/images/laptop2.jpg')?>" width = "100px" height = "auto" alt="">
                        </a>
                        <h6 class = "col-5 mt-4 text-left">Surface Laptop - 512GB / Intel Core i7 / 16GB RAM</h6>
                        <div class = "progress col mr-4 my-auto px-0">
                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>     
                    </div>
                    <div class = "row">
                        <a class = "col-2" href="">
                            <img class = "pt-3" src="<?php echo base_url('assets/images/laptop3.jpg')?>" width = "100px" height = "auto" alt="">
                        </a>
                        <h6 class = "col-5 mt-4 text-left">Surface Laptop - 256GB / Intel Core i5 / 16GB RAM</h6>
                        <div class = "progress col mr-4 my-auto px-0">
                            <div class="progress-bar" role="progressbar" style="width: 14%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>     
                    </div>
                    <div class = "pt-3 mt-4 mx-5" style = "border-style:solid; border-width:1px;">
                        <p class = "text-center">Vote on poll</p>
                    </div>
                </div>


                <div class = "col rounded mr-5" style = "background-color:white;">
                    <div class = "row col pt-4">
                        <a class = "col-1 pt-0" href="">
                            <img src="<?php echo base_url('assets/images/bar.png')?>" width = "20px" height = "auto" alt="">
                        </a>
                        <h5 class = "col px-0">Gaming Chairs</h5>
                        
                    </div>
                    <p class = "pl-3 pb-2 mb-0">poll started in VAR</p>
                    <div class = "border-top row text-center">
                        <p class = "border-right col mb-0 mt-0">Options</p>
                        <p class = "col mb-0 mt-0">Votes</p>
                    </div>
                    <div class = "border-bottom row text-center my-0">
                        <p class = "col mb-0">Options VAR</p>
                        <p class = "border-left col mb-0">Votes VAR</p>
                    </div>
                    <div class = "row">
                        <a class = "col-2" href="">
                            <img class = "pt-3" src="<?php echo base_url('assets/images/chair1.jpg')?>" width = "75px" height = "auto" alt="">
                        </a>
                        <h6 class = "col-5 mt-4 text-left">Surface Laptop - 512GB / Intel Core i7 / 16GB RAM</h6>
                        <div class = "progress col mr-4 my-auto px-0">
                            <div class="progress-bar" role="progressbar" style="width: 58%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>     
                    </div>
                    <div class = "row">
                        <a class = "col-2" href="">
                            <img class = "pt-3" src="<?php echo base_url('assets/images/chair2.jpg')?>" width = "75px" height = "auto" alt="">
                        </a>
                        <h6 class = "col-5 mt-4 text-left">Surface Laptop - 512GB / Intel Core i7 / 16GB RAM</h6>
                        <div class = "progress col mr-4 my-auto px-0">
                            <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>     
                    </div>
                    <div class = "row">
                        <a class = "col-2" href="">
                            <img class = "pt-3" src="<?php echo base_url('assets/images/chair3.jpg')?>" width = "75px" height = "auto" alt="">
                        </a>
                        <h6 class = "col-5 mt-4 text-left">Surface Laptop - 256GB / Intel Core i5 / 16GB RAM</h6>
                        <div class = "progress col mr-4 my-auto px-0">
                            <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>     
                    </div>
                    <div class = "pt-3 mt-4 mx-5" style = "border-style:solid; border-width:1px;">
                        <p class = "text-center">Vote on poll</p>
                    </div>
                </div>
            </div>

            <div class = "row pl-5">
                <div class = "col rounded mr-4 mt-3" style = "background-color:white;">
                    <div class = "row col pt-4">
                        <a class = "col-1 pt-0" href="">
                            <img src="<?php echo base_url('assets/images/bar.png')?>" width = "20px" height = "auto" alt="">
                        </a>
                        <h5 class = "col px-0">Microsoft Surface Laptop - 1TB / Intel Core i7 / 16GB RAM (Platinum)</h5>
                        
                    </div>
                    <p class = "pl-3 pb-2 mb-0">poll started in VAR</p>
                    <div class = "border-top row text-center">
                        <p class = "border-right col mb-0 mt-0">Options</p>
                        <p class = "col mb-0 mt-0">Votes</p>
                    </div>
                    <div class = "border-bottom row text-center my-0">
                        <p class = "col mb-0">Options VAR</p>
                        <p class = "border-left col mb-0">Votes VAR</p>
                    </div>
                    <div class = "row">
                        <a class = "col-2" href="">
                            <img class = "pt-3" src="<?php echo base_url('assets/images/laptop1.jpg')?>" width = "100px" height = "auto" alt="">
                        </a>
                        <h6 class = "col-5 mt-4 text-left">Surface Laptop - 512GB / Intel Core i7 / 16GB RAM</h6>
                        <div class = "progress col mr-4 my-auto px-0">
                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>     
                    </div>
                    <div class = "row">
                        <a class = "col-2" href="">
                            <img class = "pt-3" src="<?php echo base_url('assets/images/laptop2.jpg')?>" width = "100px" height = "auto" alt="">
                        </a>
                        <h6 class = "col-5 mt-4 text-left">Surface Laptop - 512GB / Intel Core i7 / 16GB RAM</h6>
                        <div class = "progress col mr-4 my-auto px-0">
                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>     
                    </div>
                    <div class = "row">
                        <a class = "col-2" href="">
                            <img class = "pt-3" src="<?php echo base_url('assets/images/laptop3.jpg')?>" width = "100px" height = "auto" alt="">
                        </a>
                        <h6 class = "col-5 mt-4 text-left">Surface Laptop - 256GB / Intel Core i5 / 16GB RAM</h6>
                        <div class = "progress col mr-4 my-auto px-0">
                            <div class="progress-bar" role="progressbar" style="width: 14%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>     
                    </div>
                    <div class = "pt-3 mt-4 mx-5" style = "border-style:solid; border-width:1px;">
                        <p class = "text-center">Vote on poll</p>
                    </div>
                </div>


                <div class = "col rounded mr-5 mt-3" style = "background-color:white;">
                    <div class = "row col pt-4">
                        <a class = "col-1 pt-0" href="">
                            <img src="<?php echo base_url('assets/images/bar.png')?>" width = "20px" height = "auto" alt="">
                        </a>
                        <h5 class = "col px-0">Gaming Chairs</h5>
                        
                    </div>
                    <p class = "pl-3 pb-2 mb-0">poll started in VAR</p>
                    <div class = "border-top row text-center">
                        <p class = "border-right col mb-0 mt-0">Options</p>
                        <p class = "col mb-0 mt-0">Votes</p>
                    </div>
                    <div class = "border-bottom row text-center my-0">
                        <p class = "col mb-0">Options VAR</p>
                        <p class = "border-left col mb-0">Votes VAR</p>
                    </div>
                    <div class = "row">
                        <a class = "col-2" href="">
                            <img class = "pt-3" src="<?php echo base_url('assets/images/chair1.jpg')?>" width = "75px" height = "auto" alt="">
                        </a>
                        <h6 class = "col-5 mt-4 text-left">Surface Laptop - 512GB / Intel Core i7 / 16GB RAM</h6>
                        <div class = "progress col mr-4 my-auto px-0">
                            <div class="progress-bar" role="progressbar" style="width: 58%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>     
                    </div>
                    <div class = "row">
                        <a class = "col-2" href="">
                            <img class = "pt-3" src="<?php echo base_url('assets/images/chair2.jpg')?>" width = "75px" height = "auto" alt="">
                        </a>
                        <h6 class = "col-5 mt-4 text-left">Surface Laptop - 512GB / Intel Core i7 / 16GB RAM</h6>
                        <div class = "progress col mr-4 my-auto px-0">
                            <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>     
                    </div>
                    <div class = "row">
                        <a class = "col-2" href="">
                            <img class = "pt-3" src="<?php echo base_url('assets/images/chair3.jpg')?>" width = "75px" height = "auto" alt="">
                        </a>
                        <h6 class = "col-5 mt-4 text-left">Surface Laptop - 256GB / Intel Core i5 / 16GB RAM</h6>
                        <div class = "progress col mr-4 my-auto px-0">
                            <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>     
                    </div>
                    <div class = "pt-3 mt-4 mx-5" style = "border-style:solid; border-width:1px;">
                        <p class = "text-center">Vote on poll</p>
                    </div>
                </div>
            </div>
            <div class = "pt-3 mt-4 mx-5" style = "border-style:solid; border-width:1px;">
                <p class = "text-center">Vote on poll</p>
            </div>
            <div class = "pl-5">
                <p class = "pt-5" style = "font-size:20px;">Related Links</p>
            </div>
            <div class = "row pl-5 mr-5">
                <p class = "col text-center mx-2" style = "border-style:solid; border-width:1px;">Monitor</p>
                <p class = "col text-center mx-2" style = "border-style:solid; border-width:1px;">TV</p>
                <p class = "col text-center mx-2" style = "border-style:solid; border-width:1px;">LG</p>
                <p class = "col text-center mx-2" style = "border-style:solid; border-width:1px;">Technology</p>
                <p class = "col text-center mx-2" style = "border-style:solid; border-width:1px;">Entertainment</p>
            </div>
            <div class = "row pl-5 mr-5">
                <p class = "col text-center mx-2" style = "border-style:solid; border-width:1px;">Video Games</p>
                <p class = "col text-center mx-2" style = "border-style:solid; border-width:1px;">Movies</p>
                <p class = "col text-center mx-2" style = "border-style:solid; border-width:1px;">HDTV</p>
            </div>
        </div>
        <div style = "background-color: #222222">
            <div class = "row">
                <div class = "col">
                    <a class = "col-2" href="">
                       <img class = "pt-3" src="<?php echo base_url('assets/images/logo-putih.png')?>" width = "150px" height = "auto" alt="">
                    </a>
                </div>
                <div class = "col">
                    <h6 style = "color:white; margin-top:40px">ABOUT</h6>
                    <p class = "mb-1" style = "color:white; margin-top:20px">About Massdrop</p>
                    <p class = "mb-1" style = "color:white; margin-top:0px">Carrers</p>
                    <p class = "mb-1" style = "color:white; margin-top:0px">Contact</p>
                </div>
                <div class = "col">
                    <h6 style = "color:white; margin-top:40px">COLLABORATE WITH US</h6>
                    <p class = "mb-1" style = "color:white; margin-top:20px">For Brands & Designer</p>
                </div>
                <div class = "col">
                    <h6 style = "color:white; margin-top:40px">SUPPORT</h6>
                    <p class = "mb-1" style = "color:white; margin-top:20px">Community Guidelines</p>
                    <p class = "mb-1" style = "color:white; margin-top:0px">Help Center</p>
                </div>
                <div class = "col">
                    <h6 class = "" style = "color:white; margin-top:40px">FOLLOW MASSDROP</h6>
                    <div class = "row col">
                        <a class = "col" href="">
                            <img class = "py-0 border rounded-circle border-light" src="<?php echo base_url('assets/images/facebook.png')?>" width = "25x" height = "auto" alt="">
                        </a>
                        <a class = "col" href="">
                            <img class = "py-0 border rounded-circle border-light" src="<?php echo base_url('assets/images/twitter.png')?>" width = "25px" height = "auto" alt="">
                        </a>
                        <a class = "py-0 col" href="">
                            <img class = "border rounded-circle border-light" src="<?php echo base_url('assets/images/reddit.png')?>" width = "25px" height = "auto" alt="">
                        </a>
                    </div>
                </div>
                <div class = "col">
                    <h6 style = "color:white; margin-top:40px"></h6>
                </div>
            </div>
        </div>
    </body>

    <script>
        $(".specbutton").click(function() {
            $('html,body').animate({
                scrollTop: $(".specs").offset().top},'slow');
        });
    </script>

</html>