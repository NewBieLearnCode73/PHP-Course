<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text Area Form</title>
</head>
<body>
    <style>
    .error_mess{
        color: red;
        font-weight: bold;   
    }
    </style>


    <form action="http://localhost:3000/Chapter_10/textarea.php" method="post">
        <label for="message"><b>Your Message:</b></label>
        <br>
        <textarea name="message" id="message" rows="4" cols="50"></textarea>
        <br>
        <?php
    if(isset($_POST['btn']) && !empty($_POST['message'])){
        echo $_POST['message'];
    }

    else{
        echo '<p class="error_mess">Vui lòng nhập vào ô</p>';
    }

    ?>
        <input type="submit" value="Submit" name="btn">
    </form>

    
</body>
</html>
