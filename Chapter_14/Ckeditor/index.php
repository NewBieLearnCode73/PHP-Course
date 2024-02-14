<?php
if (isset($_POST['sub-btn'])) {
    echo $_POST['message'];
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
    <form>
        <textarea name="editor1" id="editor1" rows="10" cols="80">
                This is my textarea to be replaced with CKEditor 4.
        </textarea>
        <script>
            // Replace the <textarea id="editor1"> with a CKEditor 4
            // instance, using default configuration.
            CKEDITOR.replace('editor1');
        </script>
    </form>

</body>

</html>