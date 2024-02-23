<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="./js/app.js"></script>
</head>

<body>
    <h1>Tính toán bằng AJAX</h1>
    <form action="">
        <p>Giá
            <span id="price">10</span>
        </p>
        <label for="">Số lượng</label>
        <input type="number" min="0" max="20" name="num_order" id="num_order" value="0">
        <hr>
        <p>Tổng: <span id="total">0</span></p>
    </form>
</body>

</html>