
<div class="wrapper">

	<?php if(getDepthId($pagePath, 0) == "index"){ ?>

	<?php }else{ ?>
		<header class="main-header">
			<!-- Logo -->
			<a href="index2.html" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini"><b>관리자</b></span>
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><b>관리자</b>페이지</span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<!-- Messages: style can be found in dropdown.less-->
						<li>
							<a href="/">
								홈페이지
							</a>
						</li>
						<!-- Notifications: style can be found in dropdown.less -->
						<li>
							<a href="#">
								로그아웃
							</a>
						</li>
						<!-- Control Sidebar Toggle Button -->
						<li>
							<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- Sidebar user panel -->
				<div class="user-panel">
					<div class="pull-right image">
						<img src="<?php echo $config["imageDir"]; ?>/part/layout/logo.png" class="img-circle" alt="User Image">
					</div>
					<div class="pull-left info">
						<p>해파랑길</p>
						<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
					</div>
				</div>
				<!-- search form -->
				<form action="#" method="get" class="sidebar-form">
					<div class="input-group">
						<input type="text" name="q" class="form-control" placeholder="Search...">
						<span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
					</div>
				</form>
				<!-- /.search form -->
				<!-- sidebar menu: : style can be found in sidebar.less -->
				<ul class="sidebar-menu">
					<li class="header">MAIN NAVIGATION</li>
					<li class="active treeview">
						<a href="page.php">
							<i class="fa fa-dashboard"></i> <span>페이지관리</span>
							<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
						</a>
						<ul class="treeview-menu">
							<li class="active"><a href=""><i class="fa fa-circle-o"></i> 메뉴관리</a></li>
							<li><a href="page-content.php"><i class="fa fa-circle-o"></i> 콘텐츠관리</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> 게시판관리</a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-files-o"></i>
							<span>주요관리</span>
							<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
						</a>
						<ul class="treeview-menu">
							<li><a href="#"><i class="fa fa-circle-o"></i> 팝업</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> 상단팝업</a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-files-o"></i>
							<span>세부관리</span>
							<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
						</a>
						<ul class="treeview-menu">
							<li><a href="#"><i class="fa fa-circle-o"></i> 리스트항목</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> 설정</a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-files-o"></i>
							<span>개발자도구</span>
							<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
						</a>
						<ul class="treeview-menu">
							<li><a href="#"><i class="fa fa-circle-o"></i> 관리자메뉴</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> 설정</a></li>
						</ul>
					</li>
					<li class="header">LABELS</li>
					<li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
					<li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
					<li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
				</ul>
			</section>
			<!-- /.sidebar -->
		</aside>
	<?php } ?>
