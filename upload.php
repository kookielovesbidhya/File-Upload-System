<?php $title = "New Upload"; ?>
<?php $body =
  '
    <form id="uploader" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>
  ';
  require 'model/template.php';
?>
