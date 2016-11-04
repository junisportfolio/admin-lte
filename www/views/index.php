<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-index"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
	<div class="login-box">
		<div class="login-logo">
			<a href="#"><b>관리자</b>모드</a>
		</div>
		<!-- /.login-logo -->
		<div class="login-box-body">
			<p class="login-box-msg">관리자 아이디로 로그인하세요</p>

			<form action="" method="post">
				<div class="form-group has-feedback">
					<input type="text" class="form-control" placeholder="Id">
					<span class="glyphicon glyphicon-check form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="password" class="form-control" placeholder="Password">
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<div class="row">
					<div class="col-xs-8">
						<div class="checkbox icheck">
							<input type="checkbox" style="position: static;margin: 0 5px 0 0;vertical-align: middle;"><label> 기억하기</label>
						</div>
					</div>
					<!-- /.col -->
					<div class="col-xs-4">
						<button type="submit" class="btn btn-primary btn-block btn-flat">로그인</button>
					</div>
					<!-- /.col -->
				</div>
			</form>

		</div>
		<!-- /.login-box-body -->
	</div>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>