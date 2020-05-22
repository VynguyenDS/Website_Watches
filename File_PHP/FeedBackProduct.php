<button  type="button" class="btn btn-dark"
style="color: white;margin-top: 10px;background-color: rgb(11,123,193)" onclick="document.getElementById('FeedBack').style.display='block'">
                Khảo Sát Sản Phẩm
</button>
<div id="FeedBack" class="modal">
            <form class="modal-content animate" action="/ActionPage.php" method="post">
              <h4 style="text-align:center;">Khảo Sát Về Chất Lượng Sản Phẩm</h4>
              <div class="imgcontainer">
                <span onclick="document.getElementById('FeedBack').style.display='none'" class="close" title="Close Modal">&times;</span>  
              </div>

              <div class="container" style="text-align: left;">
                <label for="fullName"><b>Họ Và Tên :</b></label>
                <input type="text" placeholder="Enter Username" name="fullName" required>

                <label for="Email"><b>Đánh giá:</b></label>
                  <select class="option_customer"  name="rate" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>

                <div class="form-group">
                        <label for="exampleFormControlTextarea1">Tin Nhắn :</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                
                <button type="submit" name="feedback" class="btn btn-dark btn-block">Gửi</button>
              </div>

            </form>
</div>

<script>
  var modal = document.getElementById('FeedBack');
  window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
  }
</script>