<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-index"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>

		<div id="main-about" class="main-section active">
			<div class="tab-content">
				<h3 class="sr-only">메인 컨텐츠</h3>
				<div id="main-about-1" class="main-section">
					<ul class="list">
						<li>
							<a href="#">Lorem ipsum dolor sit amet.
								<span class="date">Lorem ipsum.</span>
							</a>
							<div class="list-detail">
								<div class="img-box">
									<img src="http://placehold.it/100x100" alt="">
								</div>
								<div class="pre-box">
									<h4 class="pre-title">Lorem</h4>
									<p class="pre">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus possimus quas quia quidem quisquam repudiandae rerum similique, tempore veniam voluptatem.</p>
								</div>
								<div class="button-box">
									<a href="#" class="btn btn-sm btn-primary">자세히보기</a>
								</div>
							</div>
						</li>
						<li>
							<a href="#">Lorem ipsum dolor sit amet.
								<span class="date">Lorem ipsum.</span>
							</a>
							<div class="list-detail">
								<div class="img-box">
									<img src="http://placehold.it/100x100" alt="">
								</div>
								<div class="pre-box">
									<h4 class="pre-title">Lorem</h4>
									<p class="pre">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus possimus quas quia quidem quisquam repudiandae rerum similique, tempore veniam voluptatem.</p>
								</div>
								<div class="button-box">
									<a href="#" class="btn btn-sm btn-primary">자세히보기</a>
								</div>
							</div>
						</li>
						<li>
							<a href="#">Lorem ipsum dolor sit amet.
								<span class="date">Lorem ipsum.</span>
							</a>
							<div class="list-detail">
								<div class="img-box">
									<img src="http://placehold.it/100x100" alt="">
								</div>
								<div class="pre-box">
									<h4 class="pre-title">Lorem</h4>
									<p class="pre">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus possimus quas quia quidem quisquam repudiandae rerum similique, tempore veniam voluptatem.</p>
								</div>
								<div class="button-box">
									<a href="#" class="btn btn-sm btn-primary">자세히보기</a>
								</div>
							</div>
						</li>
						<li>
							<a href="#">Lorem ipsum dolor sit amet.
								<span class="date">Lorem ipsum.</span>
							</a>
							<div class="list-detail">
								<div class="img-box">
									<img src="http://placehold.it/100x100" alt="">
								</div>
								<div class="pre-box">
									<h4 class="pre-title">Lorem</h4>
									<p class="pre">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus possimus quas quia quidem quisquam repudiandae rerum similique, tempore veniam voluptatem.</p>
								</div>
								<div class="button-box">
									<a href="#" class="btn btn-sm btn-primary">자세히보기</a>
								</div>
							</div>
						</li>
						<li>
							<a href="#">Lorem ipsum dolor sit amet.
								<span class="date">Lorem ipsum.</span>
							</a>
							<div class="list-detail">
								<div class="img-box">
									<img src="http://placehold.it/100x100" alt="">
								</div>
								<div class="pre-box">
									<h4 class="pre-title">Lorem</h4>
									<p class="pre">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus possimus quas quia quidem quisquam repudiandae rerum similique, tempore veniam voluptatem.</p>
								</div>
								<div class="button-box">
									<a href="#" class="btn btn-sm btn-primary">자세히보기</a>
								</div>
							</div>
						</li>
						<li>
							<a href="#">Lorem ipsum dolor sit amet.
								<span class="date">Lorem ipsum.</span>
							</a>
							<div class="list-detail">
								<div class="img-box">
									<img src="http://placehold.it/100x100" alt="">
								</div>
								<div class="pre-box">
									<h4 class="pre-title">Lorem</h4>
									<p class="pre">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus possimus quas quia quidem quisquam repudiandae rerum similique, tempore veniam voluptatem.</p>
								</div>
								<div class="button-box">
									<a href="#" class="btn btn-sm btn-primary">자세히보기</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="main-profile">
				<div class="toggle-menu">
					<h4><a href="#" class="toggle-button">Juni's Profile</a></h4>
					<div class="toggle-content">
						<div class="my-picture">
							<ul>
								<li><img src="" alt=""></li>
							</ul>
						</div>
						<div class="my-card">
							<ul>
								<li><img src="" alt=""></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="main-contact">
				<div class="toggle-menu">
					<h4><a href="#" class="toggle-button">Contact Juni</a></h4>
					<div class="toggle-content">
						<form class="form-horizontal" action="./php/mail_send_func.php" method="post">
							<div class="form-group">
								<label for="sender" class="control-label col-sm-2">
									Sender Email
								</label>
								<div class="col-sm-10">
									<input type="text" name="sender" id="sender" class="form-control" placeholder="보내는 분의 이메일 주소를 입력하세요.">
								</div>

							</div>
							<div class="form-group">
								<label for="sender_name" class="control-label col-sm-2">
									Sender Name
								</label>
								<div class="col-sm-10">
									<input type="text" name="sender-name" id="sender_name" class="form-control" placeholder="보내는 분의 이름을 입력하세요.">
								</div>
							</div>
							<div class="form-group hidden">
								<label for="receiver" class="control-label col-sm-2">
									Receiver Email
								</label>
								<div class="col-sm-10">
									<input type="text" name="receiver" id="receiver" class="form-control" placeholder="받는 분의 이메일 주소를 입력하세요." value="junishop@gmail.com">
								</div>
							</div>
							<div class="form-group hidden">
								<label for="receiver" class="control-label col-sm-2">
									Receiver Name
								</label>
								<div class="col-sm-10">
									<input type="text" name="receiver_name" id="receiver" class="form-control" placeholder="받는 분의 이름을 입력하세요." value="Perblisher-Juni">
								</div>
							</div>
							<div class="form-group">
								<label for="subject" class="control-label col-sm-2">
									Subject
								</label>
								<div class="col-sm-10">
									<input type="text" name="subject" id="subject" class="form-control" placeholder="이메일의 제목을 입력하세요.">
								</div>
							</div>
							<div class="form-group">
								<label for="content" class="control-label col-sm-2">
									Content
								</label>
								<div class="col-sm-10">
									<textarea name="content" id="content" class="ckeditor"></textarea>
								</div>
							</div>
							<div class="col-sm-10 col-sm-offset-2 text-right">
								<input type="submit" class="btn btn-primary" value="메일보내기">
								<input type="reset" class="btn btn-default" value="다시작성">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="banner-area">
			<ul class="banner-content">
				<li><a href="#">Banner</a></li>
			</ul>
		</div>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>