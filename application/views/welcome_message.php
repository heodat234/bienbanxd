<?php

defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Biên bản xây dựng</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/style.css">
	<!-- <script type="text/javascript" src="<?php echo base_url(); ?>js/submitAjax.js"></script> -->
</head>
<body>
	<!-- <h1>Chào mừng đến với XD</h1> -->
	<div class="container" style="margin-top: 100px;">
		<div class="row">
		  	<div class="col-md-3" style="border: 1px solid gray;">
		  		<div class="left-sidebar">
						<h2>Danh sách biên bản</h2>
						<div class="panel-group category-products" id="scroll_box"><!--category-productsr-->
						<!-- @foreach($newsType as $new) -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Biên bản Xây tường</h4>
								<!-- @if($new->id == $id)
									<h4  class="panel-title"><a style="color: red" href="{{ route('news_By_Id',$new->id) }}">{{ $new->title }}</a></h4>
								@else
									<h4 class="panel-title"><a href="{{ route('news_By_Id',$new->id) }}">{{ $new->title }}</a></h4>
								@endif -->
								</div>
							</div>
						<!-- @endforeach	 -->
						</div><!--/category-products-->
					</div>
		  	</div>
		  	<div class="col-md-1"></div>
		  	<div class="col-md-8" >
		  		<div class="table-responsive">
		  			<form enctype="multipart/form-data" method="post" id="new_form">
				        <table class="table table-bordered" style="text-align: center;">
							<tbody>
								<tr>
									<td colspan="7" style="background-color: #E6E6E6"><b>BIÊN BẢN KIỂM TRA CÔNG TÁC CHỐNG THẤM NỀN VỆ SINH</b></td>
								</tr>
								<tr>
									<td colspan="4" style="text-align: left; font-weight: bold;">
										Công trình: <input style="width: 75%;border:none" type="text" name="name" id="name" placeholder="Nhập tên công trình" required=""><br><br>
										Địa điểm:    <input style="width: 80%;margin-left: 15px" type="text" name="address" id="address" placeholder="Nhập địa điểm" required="">
									</td>

									<td colspan="3" style="text-align: left;font-weight: bold;">
										Số: <input style="margin-left: 68px; width: 43%" type="text" name="so" id="so" placeholder="Nhập số" required=""><br>
										Hạng mục: <input style="margin-left: 15px; width: 43%" type="text" name="hang_muc" id="hang_muc" placeholder="Nhập hạng mục" required=""><br>
										Vị trí/Căn hộ: <input style="width: 40%" type="text" name="vi_tri" id="vi_tri" placeholder="Nhập vị trí" required="">
									</td>
								</tr>
								<tr>
									<td colspan="7" style="background-color: #E6E6E6"><b>VỊ TRÍ, CĂN HỘ KIỂM TRA</b></td>
								</tr>
								<tr>
									<td colspan="4">
										<b>SƠ ĐỒ MẶT BẰNG CẤU KIỆN KIỂM TRA</b><br>
										<input class="form-control" id="f" type="file" name="image" onchange="file_change(this)" required="" title="Bạn chưa chọn hình" />
		                                <img style="width: 430px;height: 230px" id="img"  style="display: none;">
									</td>
									<td colspan="3">
										<b><u>Tên, vị trí cấu kiện kiểm tra</u></b><br><textarea style="width: 100%; min-height: 100px" name="ten_caukien" id="ten_caukien" placeholder="Nhập tên cấu kiện kiểm tra" required=""></textarea>
									</td>
								</tr>
								<tr>
									<td colspan="2" rowspan="2">
										<b>Căn cứ kiểm tra:</b>
									</td>
									<td colspan="5" style="text-align: left;">
										Bản vẽ thiết kế số : <input style="width: 60%; margin-left: 5px" type="text" name="so_thietke" id="so_thietke" placeholder="Nhập số bản vẽ" required="">
									</td>
								</tr>
								<tr> 
									<td colspan="5" style="text-align: left;">
										Bản vẽ thi công số: <input style="width: 60%; margin-left:  5px" type="text" name="so_thicong" id="so_thicong" placeholder="Nhập số bản vẽ" required="">
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
								<tr>
									<td>1</td>
									<td>Kiểm tra vệ sinh nền trước khi chống thấm </td>
									<td><input type="text" value="2012-06-15 14:45" readonly class="form_datetime"></td>
									<td><input type="radio" name="danhgia1" checked="" value="1"></td>
									<td><input type="radio" name="danhgia1" value="0"></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td colspan="7" style="text-align: left; font-weight: bold; height: 200px">
										Ý kiến khác của các bên (nếu có):<br> <textarea style="width: 100%; min-height: 150px" name="y_kien" id="y_kien" placeholder="Nhập ý kiến"></textarea>
									</td>
								</tr>
								<tr>
									<td colspan="7" style="background-color: #E6E6E6"><b>KẾT LUẬN</b></td>
								</tr>
								<tr style="text-align: left;">
									<td colspan="7">
										<input type="radio" name="ketluan"  checked="" value="1">Đồng ý chuyển công tác tiếp theo <br> 
										<input type="radio" name="ketluan" value="0">Không đồng ý chuyển công tác tiếp theo
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
						<button type="button" id="save" class="button submit-button btn btn-info btn-lg glyphicon glyphicon-floppy-save" style="border-radius: 10px;">  Save</button>
					</form>
				</div>
		  	</div>
  		</div>
	</div>
</body>
<script type="text/javascript">
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
	    var danhgia1 = $('[name="danhgia1"]:radio:checked').val();
	    var ykien   = $("#y_kien").val();
	    var ketluan = $('[name="ketluan"]:radio:checked').val();

	    // var form = $('form#new_form').serialize();
	    var form_data = new FormData($('form#new_form')[0]);
	    // console.log(form);
	    $.ajax({
	        type:'post',
	        url:"<?php echo base_url(); ?>Xay_controller/Insert_Xay",
	        processData: false,
	        contentType: false,
	        data:form_data, 
	        success: function(){ //kết quả trả về từ server nếu gửi thành công
	        alert('11111');
	      }
	    });
	  });
	});
</script>
</html>