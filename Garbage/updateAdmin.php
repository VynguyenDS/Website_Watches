<script type="text/javascript">
function update(id){
    value = 0;
    $('#ExamPleModal').modal('show');
    $('.lb_text').show();
    $('#btn-save').show();
    $('#text_huongdan').show();
    $('.text').text('Update Data');

    //-------------- Ẩn nút Add , hiện textarea để người dùng nhập lý do( bắt buộc)-----------------//
    $('#btn-add').hide();
    $('#test_id').val(id);
    $.ajax({
          url:'../huongdan/Select_hd.php',
          method: 'POST',
          data: {id:id},
          success:function(data){
                      
            var json = $.parseJSON(data);
            $("#id_stt").val(json[0].stt_hd);
            $("[name=mahuongdan]").val(json[0].mahuongdan);
            $("[name = hovaten]").val(json[0].hovanten);
            $("[name = sothe]").val(json[0].sothe);
            $("[name = hanthe]").val(json[0].hanche);
            $("[name = cmnd]").val(json[0].cmnd);
            $("[name = sodienthoai]").val(json[0].sdt);
            $("[name =  diachi]").val(json[0].diachi);
        

          }
        })
</script>