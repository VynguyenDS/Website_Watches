<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<button  type="button" class="btn btn-dark"
style="color: white;margin-top: 10px;background-color: rgb(11,123,193)" onclick="document.getElementById('FeedBack').style.display='block'">
                Khảo Sát Sản Phẩm
</button>
<div id="FeedBack" class="modal">
            <form class="modal-content animate" >
              <h4 style="text-align:center;">Khảo Sát Về Chất Lượng Sản Phẩm</h4>
              <div class="imgcontainer">
                <span onclick="document.getElementById('FeedBack').style.display='none'" class="close" title="Close Modal">&times;</span>  
              </div>

              <div class="container" style="text-align: left;">
                    <div class="form-row">
                          <div class="form-group col-md-12">
                               <label for="nameProduct">Tên Sản Phẩm</label>
                               <input type="text" id="nameProduct" name="nameProduct">
                               <span id="enterNameProduct" class="text-danger"></span>  
                          </div>

                    </div>
                <label for="fullName"><b>Họ Và Tên :</b></label>
                <input id="fullName" type="text"  name="fullName" >

                <label for="Email"><b>Email :</b></label>
                <input id="Email" type="text" placeholder="Email" name="Email" >

                <label for="danhGia"><b>Đánh Giá Sao :</b></label>
                <select id="danhGia" name="danhGia">
                <option value="1">1 </option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
                <div class="form-group">
                        <label for="exampleFormControlTextarea1">Tin Nhắn :</label>
                        <textarea class="form-control" id="messager" rows="3"></textarea>
                </div>
                <p id = "getDateTime"></p>
                
                <button type="button"  class="btn btn-dark btn-block" id="InsertFeedBack">Gửi</button>
              </div>

            </form>
</div>

<script>
  var modal = document.getElementById('FeedBack');
  window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";

  }
  var today = new Date();
  var day = today.getDate();
  var mm = today.getMonth()+1;
  var year = today.getFullYear();
  var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
  today = day+'/'+mm+'/'+year;
  document.getElementById("getDateTime").innerHTML = today+' tại '+ time ;
  }

</script>
       <script type="text/javascript">
         function setCookie(cname,cvalue,exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays*24*60*60*1000));
            var expires = "expires=" + d.toGMTString();
            document.cookie = cname + "=" + cvalue + "; expires=" + d.toGMTString();
            }
        function Cookie() {
            var order = [<?= $products?>];
            order.push("<?= $product_id?>")

            setCookie("Customer",order, 1);
            alert("Sản phẩm đã thêm vào giỏ")
     }
    </script>
    <script type="text/javascript">
    $(document).ready(function(){
      $('#InsertFeedBack').click(function(){
        var  fullName = $('#fullName').val();
        var  Email = $('#Email').val();
        var  danhGia = $('#danhGia').val();
        var  messager = $('#messager').val();

        if(fullName!="" && Email!="" && danhGia!=""){
          $.ajax({
            url: "FeedBack/InsertFeedBack.php",
            type: "POST",
            data: {
             fullName : fullName,


            },
            success: function(data){
           
              alert(data);
              load_data();

            }

          });
        }
        else{
          alert('Vui lòng Nhập đầy đủ thông tin');
        }
      });

    });


  </script>   


