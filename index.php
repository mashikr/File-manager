<?php require_once 'includes/db.php' ?>
<?php require_once 'includes/header.php' ?>
<?php 
$error = '';
if (isset($_POST['submit'])) {
  $file_name = $_FILES['file']['name'];
  $file = $_FILES['file']['tmp_name'];
  $type = explode("/",$_FILES['file']['type']);
  $size = $_FILES['file']['size'];

  if ($type[0] == 'image' || $type[0] == 'audio' || $type[0] == 'video') {
    if ($size/1048576 > 1) {
      $size = round($size/1048576, 2) . "MB";
    } else {
      $size = round($size/1024, 2) . "KB";
    }
  
    if (move_uploaded_file($file, "$type[0]/$file_name")) {
      $sql = "INSERT INTO `files`(`name`, `type`, `size`) VALUES (:name,:type,:size)";
      $stmt = $db->prepare($sql);
  
      $stmt->bindParam(':name', $file_name, PDO::PARAM_STR);
      $stmt->bindParam(':type', $type[0], PDO::PARAM_STR);
      $stmt->bindParam(':size', $size, PDO::PARAM_STR);
      if ($stmt->execute()) {
        header('Location: index.php');
      } else {
        $error =  "Something went wrong!";        
      }
    }
  } else {
    $error =  "Invalid file format! Please upload image/audio/video";
  }
  
}

?>
<div class="container my-5">
  <div class="display-4 text-center">File manager</div>
  <hr>
  
  <div class="px-5 my-4">
    <form action="" method="post" enctype="multipart/form-data">
      <div class="input-group">
        <div class="custom-file">
          <input type="file" name="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
          <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
        </div>
        <div class="input-group-append">
          <button class="btn btn-outline-secondary px-4" type="submit" id="inputGroupFileAddon04" name="submit">Upload</button>
        </div>
      </div>
      <p class='text-danger'><?php echo $error; ?></p>
    </form>
  </div>

  <hr>
    <div class="display-3 d-flex mt-5">
    <a class="d-flex flex-column mr-4" href="image.php"><i class="fas fa-folder-open  text-warning"></i> <span class="lead">Images</span></a>
    <a class="d-flex flex-column mr-4" href="audio.php"><i class="fas fa-folder-open  text-warning"></i> <span class="lead">Audios</span></a>
    <a class="d-flex flex-column" href="video.php"><i class="fas fa-folder-open  text-warning"></i><span class="lead">Videos</span></a>
    </div>
</div>
<?php require_once 'includes/footer.php' ?>