$(function () {
  $(".addBtn").on("click", function () {
    $("#modalLabel").html("Add Clover");
    $(".submitBtn").html("Add");
    $(".modal-body form").attr(
      "action",
      "http://localhost/mvcphp/public/Home/add"
    );
    $("#nama").val("");
    $("#email").val("");
    $("#umur").val("");
  });

  $(".editBtn").on("click", function () {
    $("#modalLabel").html("Edit Clover");
    $(".submitBtn").html("Edit");
    $(".modal-body form").attr(
      "action",
      "http://localhost/mvcphp/public/Home/update"
    );

    const id = $(this).data("id");

    $.ajax({
      url: "http://localhost/mvcphp/public/Home/getUpdate",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#nama").val(data.nama);
        $("#email").val(data.email);
        $("#umur").val(data.umur);
        $("#id").val(data.id);
      },
    });
  });
});
