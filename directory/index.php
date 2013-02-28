<?php
	// no direct access
	defined('_JEXEC') or die;
	$app = JFactory::getApplication();
?>

<!DOCTYPE HTML>
<html lang="<?php echo $this->language; ?>">
<head>
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/default.css" type="text/css" />
	
	<title>BizView.com - Bring Businesses To You - BizView - Directory - Local Business Directory - Winnipeg Manitoba</title>
	
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/frameworks/bootstrap/css/bootstrap.min.css" /> 
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/frameworks/fancybox/jquery.fancybox.css?v=2.1.1" type="text/css" media="screen" />
	
	<link rel="shortcut icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/favicon.ico" />
	
	<link rel="apple-touch-icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/icon.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/icon72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/icon114x114.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/icon144x144.png" />
	
	 <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	
	<style type="text/css">
      html,
      body 
      {
        height: 100%;
      }
	  
	  /* Wrapper for page content to push down footer */
      #wrap 
      {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -60px;
        padding-top: 70px;
      }
	  
      /* Set the fixed height of the footer here */
      #push,
      #footer 
      {
        height: 60px;
      }
      #footer 
      {
        background-color: #000000;
      }

      /* top navbar behaviour changes on tablets and phones, so get rid of the no longer needed padding */
      /* potrait tablets */
      @media (min-width: 768px) and (max-width: 979px) 
      {
        #wrap 
        {
          margin: 0 auto -90px;
          padding-top: 0px;
        }
      }

      /* phones */
      @media (max-width: 767px)
      {
        #wrap 
        {
          margin: 0 auto -70px;
          padding-top: 0px;
        }
        #push,
        #footer 
        {
          height: 40px;
        }
      }

      .bizview-login
      {
        color: #E8BC05 !important;
      }
      
      .image-spacing
      {
        padding-bottom: 10px !important;
      }      
	  
	</style>
	
	<script type="text/javascript">
     
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-24152426-1']);
      _gaq.push(['_trackPageview']);
     
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
     
    </script>

    <!-- must be after my styles for the the responsive the handle what I want correctly -->    
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/frameworks/bootstrap/css/bootstrap-responsive.min.css" /> 
	
</head>

<body> 
	<div id="wrap">
  
    <div class="navbar navbar-inverse navbar-fixed-top">  
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">  
					<span class="icon-bar"></span>  
					<span class="icon-bar"></span>  
					<span class="icon-bar"></span>  
				</a> 
				<a class="brand" title="BizView - Business - Local Business Directory - Winnipeg Manitoba" href="http://www.bizview.com/"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/BizViewLogo.png" class="logo" alt="bizview"></a> 
				<form class="navbar-search pull-right hidden-phone" method="post" action="http://www.bizview.com/directory/directory-search.cfm">
					<input type="text" class="search-query" maxlength="50" name="directory-search-keywords" placeholder="Search" data-provide="typeahead">
				</form>

				<div class="nav-collapse">  
					<ul class="nav pull-right" >  
						<li><a href="http://www.bizview.com/directory/directory-search.cfm">bizview directory</a></li>  
						<li><a class="bizview-login modal-sml" href="http://www.bizview.com/directory/login.cfm?">login</a></li>  
					</ul>
				</div><!--/.nav-collapse -->   
			</div>
		</div>
    </div>
	
	<div class="container-fluid">
	
		<!-- when we're on a phone, the search field doesn't fit in the top navbar so we move it here -->
		<div class="row-fluid visible-phone" style="padding-bottom: 20px">
			<div class="span2 offset1">
				<form class="navbar-search" method="post" action="http://www.bizview.com/directory/directory-search.cfm">
					<input type="text" class="search-query" maxlength="50" name="directory-search-keywords" placeholder="Search" data-provide="typeahead">
				</form>
			</div>
		</div>
      
		<div class="row-fluid">
			<div class="span3 image-spacing">
				<ul class="nav nav-tabs nav-stacked">
					<li><a href="http://www.bizview.com/directory/directory-search.cfm?directory-search-keywords=Automotive%20Services">Automotive Services</a></li>
					<li><a href="http://www.bizview.com/directory/directory-search.cfm?directory-search-keywords=Business%20Solutions">Business Solutions</a></li>
					<li><a href="http://www.bizview.com/directory/directory-search.cfm?directory-search-keywords=Clothing%20%26%20Jewellery">Clothing & Jewellery</a></li>
					<li><a href="http://www.bizview.com/directory/directory-search.cfm?directory-search-keywords=Entertainment%20%26%20Travel">Entertainment & Travel</a></li>
					<li><a href="http://www.bizview.com/directory/directory-search.cfm?directory-search-keywords=Family%20Programs%20%26%20Activities">Family Programs & Activities</a></li>
					<li><a href="http://www.bizview.com/directory/directory-search.cfm?directory-search-keywords=Food%20%26%20Drink">Food & Drink</a></li>
					<li><a href="http://www.bizview.com/directory/directory-search.cfm?directory-search-keywords=Home%20Renovations">Home Renovations</a></li>
					<li><a href="http://www.bizview.com/directory/directory-search.cfm?directory-search-keywords=Organizations%20%26%20Clubs">Organizations & Clubs</a></li>
					<li><a href="http://www.bizview.com/directory/directory-search.cfm?directory-search-keywords=Personal%20Services">Personal Services</a></li>
					<li><a href="http://www.bizview.com/directory/directory-search.cfm?directory-search-keywords=Shopping%20%26%20Gifts">Shopping & Gifts</a></li>
				</ul>
			</div>
			<div class="span9 hidden-phone">
				<!-- first half of the layout -->
				<div class="row-fluid">            
					<div class="span12 image-spacing">
						<div class="row-fluid">
							<div class="span3">
								<a href="http://www.bizview.com/directory/directory-search.cfm?directory-search-keywords=Food%20%26%20Drink">
									<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/FoodDrink.png" alt="">
								</a>
							</div>
							<div class="span9">
								<div class="row-fluid">
									<div class="span8 image-spacing">
										<a href="http://www.bizview.com/directory/directory-search.cfm?directory-search-keywords=Automotive%20Services">
											<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/AutomotiveServices.png" alt="">
										</a>
									</div>
									<div class="span4 image-spacing">
										<a href="http://www.bizview.com/directory/directory-search.cfm?directory-search-keywords=Organizations%20%26%20Clubs">
											<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/OrganizationsClubs.png" alt="">
										</a>
									</div>
								</div>               
								<div class="row-fluid">
									<div class="span4">
										<a href="http://www.bizview.com/directory/directory-search.cfm?directory-search-keywords=Business%20Solutions">
											<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/BusinessSolutions.png" alt="">
										</a>
									</div>
									<div class="span8">
										<a href="http://www.bizview.com/directory/directory-search.cfm?directory-search-keywords=Entertainment%20%26%20Travel">
											<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/EntertainmentTravel.png" alt="">
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- halfway down the layout --> 
				<div class="row-fluid">            
					<div class="span12">         
						<div class="row-fluid">
							<div class="span9">
								<div class="row-fluid">
									<div class="span4 image-spacing">
										<a href="http://www.bizview.com/directory/directory-search.cfm?directory-search-keywords=Personal%20Services">
											<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/PersonalServices.png" alt="">
										</a>
									</div>
									<div class="span4">
										<a href="http://www.bizview.com/directory/directory-search.cfm?directory-search-keywords=Home%20Renovations">
											<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/HomeRenovations.png" alt="">
										</a>
									</div>
									<div class="span4">
										<a href="http://www.bizview.com/directory/directory-search.cfm?directory-search-keywords=Clothing%20%26%20Jewellery">
											<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/ClothingJewellery.png" alt="">
										</a>
									</div>
								</div>            
								<div class="row-fluid">
									<div class="span4 image-spacing">
										<a href="http://www.bizview.com/directory/directory-search.cfm?directory-search-keywords=Family%20Programs%20%26%20Activities">
											<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/FamilyProgramsActivities.png" alt="">
										</a>
									</div>
									<div class="span8 image-spacing">
										<a href="http://www.bizview.com/directory/directory-search.cfm?directory-search-keywords=BizView%20Media">
											<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/BizViewMedia.png" alt="">
										</a>
									</div>
								</div>
							</div>      
							<div class="span3">
								<a href="http://www.bizview.com/directory/directory-search.cfm?directory-search-keywords=Shopping%20%26%20Gifts">
									<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/ShoppingGifts.png" alt="">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
	
	<div id="push"></div>
	
	</div>

	<div id="footer">
		<div class="navbar navbar-inverse navbar-fixed-bottom">  
			<div class="navbar-inner">
				<div class="container">  
					<a class="branding pull-right hidden-phone" id="bizviewmedia" title="Powered By BizView Media - BizView - Directory - Winnipeg Stores - Winnipeg Manitoba" href="http://www.bizviewmedia.com"><img alt="Powered By BizView Media - BizView - online stores - Business Videos - Winnipeg Manitoba" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/BizViewMediaLogo.png"/></a>          <p>&copy;<script type="text/javascript"> var theDate=new Date(); document.write(theDate.getFullYear()); </script> BizView Directory. All Rights Reserved.</p>
				</div>
			</div>
		</div>
    </div>
  
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/frameworks/jquery-1.8.2.min.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/frameworks/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/frameworks/fancybox/jquery.fancybox.pack.js?v=2.1.1"></script>
    <script type="text/javascript">
    	$(document).ready(function() {
        $(".modal-sml").fancybox({
        'width': 540,
        'height': 600,
        'autoScale': true,
        'transitionIn': 'none',
        'transitionOut': 'none',
        'type': 'iframe'
        });
        });
        
        // When ready...
        window.addEventListener("load",function() 
        {
          // Set a timeout...
          setTimeout(function()
          {
            // Hide the address bar!
            window.scrollTo(0, 1);
          }, 0);
        });
    </script>

</body>

</html>