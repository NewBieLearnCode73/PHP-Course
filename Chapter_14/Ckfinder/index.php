<?php
if (isset($_POST['sub-btn'])) {
    echo $_POST['editor1'];
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>CKEditor</title>
    <script src="//cdn.ckeditor.com/4.22.1/full/ckeditor.js"></script>
</head>

<body>
    <form action="index.php" method="post">
        <textarea name="editor1"></textarea>
        <input type="submit" name="sub-btn" value="UploadDocx">
    </form>
    <script>
        CKEDITOR.replace('editor1', {
            filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
            filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
        });
    </script>
</body>

</html>