<?php

defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Biên bản xây dựng</title>
	
	 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <!-- <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script> -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script> -->
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/style.css">
	<!-- <script type="text/javascript" src="<?php echo base_url(); ?>js/submitAjax.js"></script> -->
	<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap-datetimepicker.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap-datetimepicker.css">

</head>
<body>
	<div class="example">
            <div id="header">
                <nav class="navbar ">
                    <div class="navbar-header">
                        <a href="" class="navbar-brand">Xây Dựng</a>
                    </div>
 
                    <div class="navbar-collapse export"  style="display: none;">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="<?php echo base_url(); ?>excel">Excel</a></li>
                            <li><a href="<?php  ?>">In</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
                 
    </div>
	<div class="container" >


		<div class="row" style="margin-top: 100px">
		  	<div class="col-md-3" style="border: 1px solid gray; max-height: 500px">
		  		<div class="left-sidebar">
						<h2>Danh sách biên bản</h2>
						<div class="panel-group category-products" id="scroll_box"><!--category-productsr-->
						<!-- @foreach($newsType as $new) -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4><a href="<?php echo base_url(); ?>xaytuong"> Biên bản Xây tường</a></h4>
									<h4><a href="<?php echo base_url(); ?>xaytuong"> Biên bản Trát</a></h4>
									<h4><a href="<?php echo base_url(); ?>xaytuong"> Biên bản Sơn</a></h4>

								</div>
							</div>
						</div>
					</div>
		  	</div>
		  	<div class="col-md-1"></div>
		  	<div class="col-md-8" >
		  		<div class="table-responsive">
		  			<form enctype="multipart/form-data" method="post" id="new_form">
				        <table class="table table-bordered" style="text-align: center;">
							<tbody>
								<tr>
									<td colspan="7" style="background-color: #E6E6E6"><b>BIÊN BẢN KIỂM TRA CÔNG TÁC TRÁT TẦNG</b></td>
								</tr>	
								<tr>
									<td colspan="4" style="text-align: left;">
										<b>Công trình:</b><div id="ten"> <input style="width: 100%;border:none" type="text" name="name" id="name" placeholder="Nhập tên công trình" required=""></div><br>
										<b>Địa điểm:</b><div id="add">    <input style="width: 100%;" type="text" name="address" id="address" placeholder="Nhập địa điểm" required=""></div>
									</td>

									<td colspan="3" style="text-align: left;">
										<b>Số:</b><div id="so_congtrinh"> <input style=" width: 100%" type="text" name="so" id="so" placeholder="Nhập số" required=""></div>
										<b>Hạng mục:</b><div id="hangmuc"> <input style=" width: 100%" type="text" name="hang_muc" id="hang_muc" placeholder="Nhập hạng mục" required=""></div>
										<b>Vị trí/Căn hộ:</b><div id="vitri"> <input style="width: 100%" type="text" name="vi_tri" id="vi_tri" placeholder="Nhập vị trí" required=""></div>
									</td>
								</tr>
								<tr>
									<td colspan="7" style="background-color: #E6E6E6"><b>VỊ TRÍ, CĂN HỘ KIỂM TRA</b></td>
								</tr>
								<tr>
									<td colspan="4">
										<b>SƠ ĐỒ MẶT BẰNG CẤU KIỆN KIỂM TRA</b><br>
										<div id="hinh">
											<input class="form-control" id="f" type="file" name="image" onchange="file_change(this)" required="" title="Bạn chưa chọn hình" />
			                                <img style="width: 430px;height: 230px" id="img"  style="display: none;">
		                            	</div>
									</td>
									<td colspan="3">
										<b><u>Tên, vị trí cấu kiện kiểm tra</u></b><br>
										<div id="tencaukien"><textarea style="width: 100%; min-height: 100px" name="ten_caukien" id="ten_caukien" placeholder="Nhập tên cấu kiện kiểm tra" required=""></textarea></div>
									</td>
								</tr>
								<tr>
									<td colspan="2" rowspan="2">
										<b>Căn cứ kiểm tra:</b>
									</td>
									<td colspan="5" style="text-align: left;">
										<div id="so_tk">Bản vẽ thiết kế số: <input style="width: 55%; margin-left: 5px" type="text" name="so_thietke" id="so_thietke" placeholder="Nhập số bản vẽ" required=""></div>
									</td>
								</tr>
								<tr> 
									<td colspan="5" style="text-align: left;">
										<div id="so_tc">Bản vẽ thi công số: <input style="width: 55%; margin-left:  5px" type="text" name="so_thicong" id="so_thicong" placeholder="Nhập số bản vẽ" required=""></div>
									</td>
								</tr>
								<tr>
									<td colspan="7" style="background-color: #E6E6E6"><b>NỘI DUNG KIỂM TRA</b></td>
								</tr>
								
								<tr style="font-weight: bold;">
									<td rowspan="2">TT</td>
									<td rowspan="2">Công việc</td>
									<td rowspan="2">Thời gian</td>
									<td colspan="2">Đánh giá</td>
									<td colspan="2">Xác nhận</td>
								</tr>
								<tr style="font-weight: bold;">
									<td>Đạt</td>
									<td>Không đạt</td>
									<td>Nhầ thầu</td>
									<td>TVGS</td>
								</tr>
								<?php
								echo '<input type="hidden" value="'.count($congviec).'" name="count" id="count"/>';
								for ($i=0; $i < count($congviec); $i++) 
								 	 { $j=$i+1;
									echo '
										<tr>
											<td>'.$j.'</td>
											<td>'.$congviec[$i]->congviec.' </td>
											<td><div id="ngay'.$j.'"><input type="text" value="" readonly class="form_datetime" id="date'.$j.'" name="date'.$j.'" placeholder="chọn ngày"></div></td>

											<td><div id="dat'.$j.'"><input type="radio" name="danhgia'.$j.'" checked="" value="1"></div></td>

											<td><div id="khongdat'.$j.'"><input type="radio" name="danhgia'.$j.'" value="0"></div></td>
											<td></td>
											<td></td>
										</tr>';
									}
								?>
								<tr>
									<td colspan="7" style="text-align: left; height: 200px">
										<b>Ý kiến khác của các bên (nếu có):</b><br> 
										<div id="ykien"><textarea style="width: 100%; min-height: 150px" name="y_kien" id="y_kien" placeholder="Nhập ý kiến"></textarea></div>
									</td>
								</tr>
								<tr>
									<td colspan="7" style="background-color: #E6E6E6"><b>KẾT LUẬN</b></td>
								</tr>
								<tr style="text-align: left;">
									<td colspan="7">
										<div id="dongy"><input type="radio" name="ketluan"  checked="" value="1">  Đồng ý chuyển công tác tiếp theo</div> <br> 
										<div id="khong"><input type="radio" name="ketluan" value="0">  Không đồng ý chuyển công tác tiếp theo</div>
									</td>
								</tr>
								<tr style="background-color: #E6E6E6; font-weight: bold;">
									<td colspan="2"></td>
									<td colspan="3">Họ & tên</td>
									<td colspan="2">Ký tên</td>
								</tr>
								<tr>
									<td colspan="2"><b>Nhà thầu</b></td>
									<td colspan="3"></td>
									<td colspan="2"></td>
								</tr>
								<tr>
									<td colspan="2"><b>Tư Vấn Giám Sát</b></td>
									<td colspan="3"></td>
									<td colspan="2"></td>
								</tr>
								<tr>
									<td colspan="2"><b>Ban QLXD</b></td>
									<td colspan="3"></td>
									<td colspan="2"></td>
								</tr>
							</tbody>
						</table>
						<br>
						<br>
						<button type="button" id="save" class="button submit-button btn btn-info btn-lg glyphicon glyphicon-floppy-save" style="border-radius: 10px;  ">  Xác nhận</button><br>
					</form>
				</div>
		  	</div>
  		</div>
	</div>
</body>
<script type="text/javascript">

	    $(".form_datetime").datetimepicker({
	    	todayBtn: "linked",
	       language: "it",
	       autoclose: true,
	       todayHighlight: true,
	       format: 'dd/mm/yyyy' 
	    });


	function file_change(f){
	    var reader = new FileReader();
	    reader.onload = function (e) {
	        var img = document.getElementById("img");
	        img.src = e.target.result;
	        img.style.display = "inline";
	    };
	    var ftype =f.files[0].type;
	    switch(ftype)
	            {
	                case 'image/png':
	                case 'image/gif':
	                case 'image/jpeg':
	                case 'image/pjpeg':
	                    reader.readAsDataURL(f.files[0]);
	                    break;
	                default:
	                    alert(' Bạn chỉ được chọn file ảnh.');
	                   $('#f').val(null);
	            }
    
    }

    $(document).ready(function(){

	  $('#save').click(function() {
	    var name = $("#name").val();
	    var address = $("#address").val();
	    var so = $("#so").val();
	    var hang_muc = $("#hang_muc").val();
	    var vi_tri = $("#vi_tri").val();
	    var ten_caukien = $("#ten_caukien").val();
	    var so_tk =$("#so_thietke").val();
	    var so_tc = $("#so_thicong").val();
	    var ykien   = $("#y_kien").val();
	    var ketluan = $('[name="ketluan"]:radio:checked').val();


	    var count = $("#count").val();
	    var danhgia = new Array();
	    var ngay = new Array();
	    for(var i=1; i <count+1;i++){
	    	ngay[i] = $('#date'+i+'').val();
	    	danhgia[i]  = $('[name="danhgia'+i+'"]:radio:checked').val();
	    }
	    
	    // alert(ngay);

	    var form = $('form#new_form').serialize();
	    var form_data = new FormData($('form#new_form')[0]);
	    // console.log(form);
	    $.ajax({
	        type:'post',
	        url:"<?php echo base_url(); ?>Xay_controller/Insert_Xay",
	        processData: false,
	        contentType: false,
	        data:form_data, 
	        success: function(data){ //kết quả trả về từ server nếu gửi thành công
	        	console.log(data);
	        	$("#ten").html(name);
	        	$("#add").html(address);
	        	$("#so_congtrinh").html(so);
	        	$("#hangmuc").html(hang_muc);
	        	$("#vitri").html(vi_tri);
	        	$("#tencaukien").html(ten_caukien);
	        	$("#so_tk").html("Số bản vẽ thiết kế: "+so_tk);
	        	$("#so_tc").html("Số bản vẽ thi công: "+so_tc);
	        	$("#ykien").html(ykien);
	    		$("#hinh").html('<img src="<?php echo base_url(); ?>image/'+data+'" style="width: 430px;height: 230px" id="img"  style="display: none;">')
	    		for( var i=1;i<count+1;i++){
	    			$('#ngay'+i+'').html(ngay[i]);
		        	if(danhgia[i]==1){
		        		$('#dat'+i+'').html('<input type="radio" name="danhgia'+i+'" checked="" disabled="" value="1"> ');
		        		$('#khongdat'+i+'').html('<input type="radio" name="danhgia'+i+'" disabled="" value="0">');
		        	}else{
		        		$('#khongdat1'+i+'').html('<input type="radio" name="danhgia'+i+'" checked="" disabled="" value="0"> ');
		        		$('#dat1'+i+'').html('<input type="radio" name="danhgia'+i+'" disabled="" value="1"> ');
		        	}
	        	}


	        	if(ketluan==1){
	        		$("#dongy").html('<input type="radio" name="ketluan" checked="" disabled="" value="1">  Đồng ý chuyển công tác tiếp theo');
	        		$("#khong").html('<input type="radio" name="ketluan" disabled="" value="0">  Không đồng ý chuyển công tác tiếp theo');
	        	}else{
	        		$("#khong").html('<input type="radio" name="ketluan" checked="" disabled="" value="0">  Không đồng ý chuyển công tác tiếp theo');
	        		$("#dongy").html('<input type="radio" name="ketluan" disabled="" value="1">  Đồng ý chuyển công tác tiếp theo');
	        	}

	        	$("#save").hide();
	        	$(".export").show();
	      }
	    });
	  });
	});
</script>
</html>