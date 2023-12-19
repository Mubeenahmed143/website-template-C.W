$(document).ready(function () {
    let cat_name = $("#cat_name");
    let cat_des = $("#cat_des");
    let addCat = $("#addCat");
    let cat_add_msg = $('#cat_add_msg');
    let padding = "py-4"
    $("#status").change(function () {
      
      let status = $(this).val();
  
      addCat.on("click", function () {
        $.ajax({
          url: "insert_cat.php",
          method: "POST",
          data: {
            cat_name: cat_name.val(),
            cat_des: cat_des.val(),
            cat_status: status,
          },
          success: function (data) {
            console.log(data);
            cat_add_msg.html(data);
            
          },
        });
      });
    });
  });