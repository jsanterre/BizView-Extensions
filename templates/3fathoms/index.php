<?php
	// no direct access
	defined('_JEXEC') or die;
	$app = JFactory::getApplication();
?>

<!DOCTYPE HTML>
<html lang="<?php echo $this->language; ?>">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/default.css" type="text/css" />
	
	<title>BizView.com - Bring Businesses To You - BizView - Directory - Local Business Directory - Winnipeg Manitoba</title>
	
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/frameworks/bootstrap/css/bootstrap.min.css" /> 
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/frameworks/fancybox/jquery.fancybox.css?v=2.1.1" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/frameworks/bootstrap/css/bootstrap-responsive.min.css" /> 
	
	<link rel="shortcut icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/favicon.ico" />
	
	<link rel="apple-touch-icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/icon.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/icon72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/icon114x114.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/icon144x144.png" />
	
	 <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	
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

				<!-- When we're on a phone, the search field doesn't fit in the top navbar so we move it here -->
				<div class="row-fluid visible-phone" style="padding-bottom: 20px; padding-left: 13px; float:left;">
					<div class="span2 offset1">
						<form class="navbar-search" method="post" action="http://www.bizview.com/directory/directory-search.cfm">
							<input type="text" class="search-query" maxlength="50" name="directory-search-keywords" placeholder="Search" data-provide="typeahead">
						</form>
					</div>
				</div>
				
				<div class="nav-collapse">  
					<ul class="nav pull-right" >  
						<li><a class="bizview-directory" href="http://www.bizview.com/directory/directory-search.cfm">bizview directory</a></li>  
						<li><a class="bizview-login modal-sml" href="http://www.bizview.com/directory/login.cfm?">login</a></li>  
						
					</ul>
				</div><!--/.nav-collapse -->   
				
			</div>
		</div>
	</div>
			
	<div class="container-fluid clientPage">
	<div id="pageContent"> 
	
		<div id="background">
				<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/background-image.jpg" class="stretch" alt="" />
		</div>
		
		<div class="allmenus desktopmenu hidden-phone hidden-tablet">
			<div class="row-fluid">
				<nav class="span12 navbar">
					<div class="navbar inner">
						<div class="nav-collapse collapse">
							<jdoc:include type="modules" name="menu" style="none" />
						</div>	
					</div>
				</nav>
			</div>		
		</div> 
		
		<div class="allmenus mobilemenu visible-phone visible-tablet">
			<div class="row-fluid">
				<nav class="span12 navbar">
					<div class="navbar inner">
						<div class="nav-collapse collapse">
							<jdoc:include type="modules" name="menu" style="none" />
						</div>	
					</div>
				</nav>
			</div>		
		</div> 
		
		<div class="row-fluid">
			<div id="top">
				<div class="span3" id="left">
					<a title="BizVew - Business - Local Business Directory - Winnipeg Manitoba"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/logo.jpg" class="myLogo" alt="3 Fathoms"></a>
					<jdoc:include type="modules" name="left" style="xhtml" />
				</div>
				<div class="span5" id="mainContent">
					<jdoc:include type="message" />
					<jdoc:include type="component" />
					<jdoc:include type="modules" name="main" style="none" />
				</div>
				<div class="span4" id="right">
					<jdoc:include type="modules" name="right" style="xhtml" />
				</div>
			</div>
		</div>
		
		<div class="row-fluid">
			<div id="bottom">
				<div class="span7" id="left"> 
					<jdoc:include type="modules" name="bottom-left" style="xhtml" />
				</div>
				<div class="span5" id="right">
					<jdoc:include type="modules" name="bottom-right" style="xhtml" />
				</div>
			</div>
		</div>
		
		<div class="row-fluid">
			<div id="very-bottom">
				<div class="span12"> 
					<jdoc:include type="modules" name="bottom" style="xhtml" />
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
		// Google Analytic code
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-24152426-1']);
		_gaq.push(['_trackPageview']);
     
		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
    </script>	
</body>

</html>