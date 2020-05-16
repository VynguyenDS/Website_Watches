      $.ajax({
            url:"insert.php",
            type:"POST",
            data:{
              nameProduct : nameProduct ,
              brandProduct : brandProduct,
              color : color,
              chatlieu : chatlieu,
              theLoai : theLoai,
              danhgia : danhgia,
              giatien : giatien,
              filename : filename
            },  
            success: function () {
            alert(nameProduct);
            }
          });

     });