<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-index"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				콘텐츠관리
			</h1>
			<ol class="breadcrumb">
				<li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
				<li><a href="/">페이지관리</a></li>
				<li class="active">콘텐츠관리</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="box-header">
				<button type="submit" class="btn btn-success">콘텐츠 등록</button>
			</div>
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-search"></i></span>
				<input type="text" class="form-control input-lg" placeholder="검색어를 입력하세요">
				<span class="input-group-btn">
                      <button type="button" class="btn btn-primary btn-flat input-lg">검색</button>
                    </span>
			</div>
			<table class="table table-striped table-primary admin-list">
				<col width="*">
				<col width="20%">
				<thead>
				<tr>
					<th>이름</th>
					<th>수정일</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad amet aperiam asperiores delectus error numquam quasi quis tempora vitae.</td>
					<td>2016-06-23</td>
				</tr>
				<tr>
					<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid assumenda autem, cupiditate distinctio doloribus dolorum, eaque eos facere illum ipsa iusto laborum magni quam quos ratione sed vel? Autem, illum.</td>
					<td>2016-06-23</td>
				</tr>
				<tr>
					<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, molestias?</td>
					<td>2016-06-23</td>
				</tr>
				</tbody>
			</table>

		</section>
		<!-- /.content -->
	</div>



<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>