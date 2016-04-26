<?php /* Smarty version 2.6.28, created on 2016-03-28 13:00:14
         compiled from app/main.html */ ?>
<!DOCTYPE html>
<!-- 
Template Name: ../metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.5
Version: 4.1.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/../metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>

<meta charset="utf-8"/>
<title>DOCKER</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="../metronic/v4.1.0/theme/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="../metronic/v4.1.0/theme/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="../metronic/v4.1.0/theme/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="../metronic/v4.1.0/theme/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="../metronic/v4.1.0/theme/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="../metronic/v4.1.0/theme/assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css">
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES -->
<link href="../metronic/v4.1.0/theme/assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
<!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
<link href="../metronic/v4.1.0/theme/assets/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="../metronic/v4.1.0/theme/assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="../metronic/v4.1.0/theme/assets/admin/layout6/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="../metronic/v4.1.0/theme/assets/admin/layout6/css/custom.css" rel="stylesheet" type="text/css"/>
<script src="../js/jquery.js" type="text/javascript"></script>
<script src="../js/main.js" type="text/javascript"></script>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-quick-sidebar-over-content page-boxed" style="height:100%">
<!-- BEGIN MAIN LAYOUT -->
	<!-- HEADER BEGIN -->
   
 <header class="page-header">
        <nav class="navbar" role="navigation">
            <div class="container">
                <div class="havbar-header">
                	<!-- BEGIN LOGO -->
                    <a id="index" class="navbar-brand" href="start.html">
                        
                    </a>
                	<!-- END LOGO -->

	                <!-- BEGIN TOPBAR ACTIONS -->
	                <div class="topbar-actions">
		                <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
						<form class="search-form" action="extra_search.html" method="GET">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search here" name="query">
								<span class="input-group-btn">
									<a href="javascript:;" class="btn submit"><i class="fa fa-search"></i></a>
								</span>
							</div>
						</form>
						<!-- END HEADER SEARCH BOX -->


	                	<!-- BEGIN USER PROFILE -->
		                <div class="btn-group-img btn-group">
							<button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
								  <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
							</button>
							<ul class="dropdown-menu-v2" role="menu">
								
								<li>
									<a href="login.html">Sign Out</a>
								</li>
							</ul>
						</div>
						<!-- END USER PROFILE -->
					</div>
	                <!-- END TOPBAR ACTIONS -->
                </div>
            </div>
            <!--/container-->
        </nav>
    </header>
	<!-- HEADER END -->

	<!-- PAGE CONTENT BEGIN -->
    <div class="container">
    	<div class="page-content page-content-popup">
    		<!-- BEGIN PAGE CONTENT FIXED -->
			<div class="page-content-fixed-header">
				<ul class="page-breadcrumb">
					<li><a href="#">REGISTRY</a></li>
					<li><a class="page-breadcrumb-link" href="#">TAG LIST</a></li>
				</ul>

				<div class="content-header-menu">
    				<!-- BEGIN DROPDOWN AJAX MENU -->
    		
    				<!-- END DROPDOWN AJAX MENU -->

    				<!-- BEGIN MENU TOGGLER -->
    				<button type="button" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
	                    <span class="toggle-icon">
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                    </span>
	                </button>
    				<!-- END MENU TOGGLER -->
    			</div>
			</div>

			<!-- BEGIN SIDEBAR -->
			<div class="page-sidebar-wrapper">
				<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
				<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
				<div class="page-sidebar navbar-collapse collapse">
					<!-- BEGIN SIDEBAR MENU -->
					<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
					<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
					<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
					<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
					<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
					<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
					<ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
						<li class="active">
							<a href="#">
							<i class="icon-home"></i>
							<span class="title">Main</span>
							</a>
						</li>
						<li>
							<a href="#">
							<i class="icon-list"></i>
							<span class="title">Test</span>
							</a>
						</li>
						<li>
							<a href="#">
							<i class="icon-layers"></i>
							<span class="title">Test</span>
							</a>
						</li>
						<li>
							<a href="#">
							<i class="icon-user"></i>
							<span class="title">Test</span>
							</a>
						</li>
						<li>
							<a href="#">
							<i class="icon-check"></i>
							<span class="title">Test</span>
							</a>
						</li>
						<li>
							<a href="#">
							<i class="icon-paper-plane"></i>
							<span class="title">Test</span>
							</a>
						</li>
						<li>
							<a href="#">
							<i class="icon-puzzle"></i>
							<span class="title">Test</span>
							</a>
						</li>
						<li>
							<a href="javascript:;">
							<i class="icon-folder"></i>
							<span class="title">Test</span>
							<span class="arrow "></span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="javascript:;">
									<i class="icon-settings"></i> Item 1 <span class="arrow"></span>
									</a>
									<ul class="sub-menu">
										<li>
											<a href="javascript:;">
											<i class="icon-user"></i>
											Sample Link 1 <span class="arrow"></span>
											</a>
											<ul class="sub-menu">
												<li>
													<a href="#"><i class="icon-power"></i> Sample Link 1</a>
												</li>
												<li>
													<a href="#"><i class="icon-paper-plane"></i> Sample Link 1</a>
												</li>
												<li>
													<a href="#"><i class="icon-star"></i> Sample Link 1</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="#"><i class="icon-camera"></i> Sample Link 1</a>
										</li>
										<li>
											<a href="#"><i class="icon-link"></i> Sample Link 2</a>
										</li>
										<li>
											<a href="#"><i class="icon-pointer"></i> Sample Link 3</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="javascript:;">
									<i class="icon-globe"></i> Item 2 <span class="arrow"></span>
									</a>
									<ul class="sub-menu">
										<li>
											<a href="#"><i class="icon-tag"></i> Sample Link 1</a>
										</li>
										<li>
											<a href="#"><i class="icon-pencil"></i> Sample Link 1</a>
										</li>
										<li>
											<a href="#"><i class="icon-graph"></i> Sample Link 1</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#">
									<i class="icon-bar-chart"></i>
									Item 3 </a>
								</li>
							</ul>
						</li>
					</ul>
					<!-- END SIDEBAR MENU -->
				</div>
			</div>
			<!-- END SIDEBAR -->

	<div class="page-fixed-main-content">
				<div class="row">
	    			<div class="col-md-6">
	    				<!-- BEGIN Portlet PORTLET-->
					
						<!-- END PORTLET-->
	    			</div>
	    			<div class="col-md-12">
	    				<!-- BEGIN PORTLET-->
						<div class="portlet light bordered" style="height:1220px">
							<div class="portlet-title">
								<div class="caption">
									<span class="caption-subject bold uppercase font-red-sunglo">REGISTER</span>
									<span class="caption-helper">TAGS...</span>
								</div>
								<div class="actions">
									<a class="btn btn-circle btn-icon-only btn-default" href="#">
									<i class="icon-cloud-upload"></i>
									</a>
									<a class="btn btn-circle btn-icon-only btn-default" href="#">
									<i class="icon-wrench"></i>
									</a>
									<a class="btn btn-circle btn-icon-only btn-default" href="#">
									<i class="icon-trash"></i>
									</a>
									<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="#">
									</a>
								</div>
							</div>
							<div class="portlet-body">
    							<div id="animated-pie-chart" class="animated-pie-chart">
    								<div id="animated-pie-chart" class="animated-pie-chart">
    										<table class="table  table-light table-striped">
									
						<tr><td style="font-size:16px" width="15%"><b>NAME</b></td><td width="60%" style="font-size:16px"><b>IMAGE</b></td><td widht="10%" style="font-size:16px"><b>TAG</b></td><td widht="10%" style="font-size:16px"></td></tr>			 
						 <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['val']):
?>
						<tr><td style="font-size:13px;"><?php echo $this->_tpl_vars['val']['name']; ?>
</td><td style="font-size:13px;"><?php echo $this->_tpl_vars['val']['image']; ?>
</td><td style="font-size:13px;">
							<button id="<?php echo $this->_tpl_vars['val']['name']; ?>
" type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal" onmouseover='showtag("<?php echo $this->_tpl_vars['val']['tags']; ?>
","<?php echo $this->_tpl_vars['val']['repo']; ?>
","<?php echo $this->_tpl_vars['val']['name']; ?>
")'>
 <?php echo $this->_tpl_vars['val']['tag']; ?>

</button>
			

						</td><td></td></tr>
						
						<?php endforeach; endif; unset($_from); ?>
								
									</table>

                    <nav> <ul class="pagination"><?php echo $this->_tpl_vars['pageListContents']; ?>
</ul></nav>
								</div>

								

    							</div>
							</div>
						</div>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" onmouseover="show()" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">TAGS</h4>
      </div>
      <div class="modal-body" tr="" ti="">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" onmouseover="show()">Close</button>
      
      </div>
    </div>
  </div>
</div>

						<!-- END PORTLET-->
	    			</div>
	    		</div>

	    		</div>

    						
<!-- Copyright BEGIN -->
			<p class="copyright-v2">2016 © WangYanJie. 
	 			<a href="#" title="DOCKER" target="_blank">REGISTER</a>
	 		</p>
			<!-- Copyright END -->

			</div>
</div>

    		<!-- BEGIN QUICK SIDEBAR -->

 
	
<script src="../metronic/v4.1.0/theme/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="../metronic/v4.1.0/theme/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="../metronic/v4.1.0/theme/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../metronic/v4.1.0/theme/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="../metronic/v4.1.0/theme/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../metronic/v4.1.0/theme/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../metronic/v4.1.0/theme/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="../metronic/v4.1.0/theme/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="../metronic/v4.1.0/theme/assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript" ></script>
<script src="../metronic/v4.1.0/theme/assets/global/plugins/amcharts/amcharts/serial.js" type="text/javascript" ></script>
<script src="../metronic/v4.1.0/theme/assets/global/plugins/amcharts/amcharts/pie.js" type="text/javascript" ></script>
<script src="../metronic/v4.1.0/theme/assets/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript" ></script>
<script src="../metronic/v4.1.0/theme/assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
<script src="../metronic/v4.1.0/theme/assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
<script src="../metronic/v4.1.0/theme/assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../metronic/v4.1.0/theme/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../metronic/v4.1.0/theme/assets/admin/layout6/scripts/layout.js" type="text/javascript"></script>
<script src="../metronic/v4.1.0/theme/assets/admin/layout6/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="../metronic/v4.1.0/theme/assets/admin/layout6/scripts/index.js" type="text/javascript"></script>
<script src="../metronic/v4.1.0/theme/assets/admin/pages/scripts/tasks.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->

</body>

<!-- END BODY -->
</html>
