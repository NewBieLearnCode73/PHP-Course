$(document).ready(function () {
    // Bắt lấy sự kiện thay đổi
    $("#num_order").change(function () {
        var price = $("#price").text();
        var num_order = $("#num_order").val();

        var data = { price: price, num_order: num_order };

        $.ajax({
            url: "process.php",
            method: "POST",
            data: data,
            dataType: "json",
            success: function (data) {
                $("#total").text(data);
            },
        });
    });
});
