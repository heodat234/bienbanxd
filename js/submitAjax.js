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

    // var form = $('form#new_form').serializeArray();
    var form_data = new FormData($('form#new_form')[0]);
    //console.log(form);
    $.ajax({
        type:'post',
        url:"<?php echo base_url(); ?>Xaycontroller/Insert_Xay",
        processData: false,
        contentType: false,
        data:form_data, 
        success: function(data){ //kết quả trả về từ server nếu gửi thành công
        var option = "";
        $.each($.parseJSON(data),function(key, value){
          option += "<option value='"+value['id']+"'>"+value['title']+"</option>"
        })
        $("#sub_category").html(option);
      }
    });
  });
});