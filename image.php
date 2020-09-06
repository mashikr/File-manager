<?php require_once 'includes/db.php' ?>
<?php require_once 'includes/header.php' ?>

<?php
if ($db) {
    $sql = "SELECT * FROM `files` WHERE `type` = 'image' ORDER BY id DESC";
    $stmt = $db->prepare($sql);

    $stmt->execute();
    $images = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

<div class="container">

    <div class="text-center position-relative">
    <a class="btn btn-light back-btn" href="index.php"><i class="fas fa-angle-double-left"></i> Back</a>
    <span class="display-4">Images</span></div>
    <hr>

    <div class="row">
        <?php
            foreach ($images as $image) {
                echo '
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 pointer">
                    <img src="image/' . $image['name'] . '" class="img-fluid" alt="' . $image['name'] . '">
                    <div class="text-center word-wrap">
                        <span>' . $image['name'] . '</span>
                        <br>
                        size: ' . $image['size'] . '
                        <a onclick="javascript: return confirm(\'Are you sure want to delete?\');" href="delete.php?id=' . $image['id'] . '&type=' . $image['type'] . '&name=' . $image['name'] . '" class="px-2" title="delete"><i class="fas fa-trash-alt text-danger"></i></a>
                    </div>
                </div>
                ';
            }

        ?>
        <!-- <div class="col-6 col-sm-4 col-md-3 col-lg-2 pointer">
            <img src="image/img1.jpg" class="img-fluid" alt="img1.jpg">
            <div class="text-center">
                <span>Imgname.jpg</span>
                <br>
                size: 3mb
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 pointer">
            <img src="image/mypic2.PNG" class="img-fluid" alt="mypic2.PNG">
            <div class="text-center word-wrap">
                <span>72969140_2482955335286006_1547940440072781824_n.jpg</span>
                <br>
                size: 3mb
            </div>
        </div> -->
    </div>

</div>


<!-- Modal -->
<div class="modal fade" id="imgModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <span class="modal-title word-wrap" id="exampleModalLabel">Modal title</span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body d-flex justify-content-center">
        <img src="image/img1.jpg" class="img-fluid" alt="">
      </div>
    </div>
  </div>
</div>

<?php require_once 'includes/footer.php' ?>