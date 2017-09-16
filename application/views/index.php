<?php

defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Trang chủ</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/style.css">

</head>
<body>
	<div class="container" style="margin-top: 100px;">
		<div class="row">
		  	<div class="col-md-3" style="border: 1px solid gray; max-height: 300px">
		  		<div class="left-sidebar">
						<h2>Danh sách biên bản</h2>
						<div class="panel-group category-products" id="scroll_box"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4><a href="<?php echo base_url(); ?>xaytuong"> Biên bản Xây tường</a></h4>
									<h4><a href="<?php echo base_url(); ?>xaytuong"> Biên bản Trát</a></h4>
								
								</div>
							</div>
						</div><!--/category-products-->
					</div>
		  	</div>
		  	<div class="col-md-1"></div>
		  	<div class="col-md-8">
		  		<h2>Chào mừng bạn đến với trang biên bản nghiệm thu công trình.</h2><br>
				<h2>Xin hãy chọn các biên bản bên cạnh trái để bắt đầu.</h2>
		  	</div>
		</div>
	</div>
	
</body>
</html>