<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Welcome to Eknowledgetree</title>
<link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>css/bootstrap-theme.css" rel="stylesheet" type="text/css">
 
 <script src="<?php echo base_url();?>js/jquery.min.js"></script>
 
</head>
 
<body>
		<!------- top head start --------->
		<div class="row drk-blue-bg-wth-border">
    	<div class="container">
        	<div class="row">
           
 				 <div class="col-md-8 top-menu">
                 	<ul>
                               	
                            <li></li>
                                <li></li>
                                    <li></li>
                    </ul>
                  </div>
  				
			</div>
        </div>
    </div>
   		 <!------- top head ends --------->
    
     <!------- menu - logo contaciner starts --------->
   	 <div class="row head-shadow">
    	<div class="container bg nav-con" id="mainpart">
        	<div class="row">
          		<div class="col-md-3">
       	        <a href="<?php echo base_url();?>" target="_self"> <img src="<?php echo base_url();?>images/logo.png" width="200"></a></div>
               
  				<div class="col-md-8 pdg0 nav2">
                
                <ul class="nav nav-pills flt-left menu">
  					
                               <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
				</ul>
                	</div>
                    <div class="container demo-1">	
			<!-- Codrops top bar -->
			 <!--/ Codrops top bar -->
			 
	
		</div>
  				
			</div>
        </div>
    </div>
     <!-------  menu - logo contaciner ends --------->
     
     <!-------  body starts --------->
  <div class="body">
     <div class="container bg">
     	<div class="row padding-top-btm pdgb10">
     <!-----------left container starts---------->
  			<div class="col-md-4">
            	<div class="new-car-con radtl5">
                	
                 <?php echo $stateinfo;?>
                    <div class="dvder"></div>
                    <?php echo $searchinfo; ?>
                </div>
                
                
                
                <div class="new-car-con radtl5">
               
                <div class="dvder"></div>
                <div class="row pad6">
                <div class=" txt-centre">
                 <?php echo $slider; ?>
               	 <?php /*?> <img src="<?php echo base_url();?>images/featred-car.jpg" width="282" height="166"><?php */?> </div>
                </div>
               
                </div>
             
            </div>
           
            <div style="clear:both;"></div>
             <?php echo $content;?>
            </div>
      <!-----------right container ends----------> 
		</div>
     	     </div>
 
     <!-------  body ends --------->
     
     <!----------- footer starts --------->
     <div class="footer pdg0">
     	<div class="container pdg0">
            <div class="footerin col-md-12 pull-left">
               <?php echo $footer;?>
                
                <div class="social clear mgnt-40">
            <ul>
           		<li><a href="" class="youtube"></a></li>
                <li><a href="" class="twitter"></a></li>
                <li><a href="" class="facebook"></a></li>
                <li><a href="" class="in"></a></li>
            </ul>
        </div>
            </div>
     		<div class="row">
     		<div class="col-md-12 foot-links">
                <div class="dvder"></div>
                <h6 class="text-center">Copyright 2014 © www.eknowledgetree.com</h6>
            </div>
        	<div class="col-md-4">
            </div>	
        </div>
        </div>
     </div>
     <!----------- footer ends   --------->   
    </body>
    </html>