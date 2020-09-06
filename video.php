<?php require_once 'includes/db.php' ?>
<?php require_once 'includes/header.php' ?>

<?php
if ($db) {
    $sql = "SELECT * FROM `files` WHERE `type` = 'video' ORDER BY id DESC";
    $stmt = $db->prepare($sql);

    $stmt->execute();
    $videos = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

<div class="container">

    <div class="text-center position-relative">
    <a class="btn btn-light back-btn" href="index.php"><i class="fas fa-angle-double-left"></i> Back</a>
    <span class="display-4">Video</span></div>
    <hr>

    <div class="row">
        <div class="col-md-5 col-lg-4">
            <?php
                foreach ($videos as $video) {
                    echo '
                    <div class="card">
                        <div class="card-body pointer d-flex" id="video-div">
                            <video class="w-50">
                                <source src="video/' .  $video['name'] . '" type="video/mp4">
                            </video>
                            <div class="d-flex flex-column px-2 word-wrap">
                                <span class="word-wrap">' .  $video['name'] . '</span>
                                <span>Size: ' .  $video['size'] . '</span>
                                <a onclick="javascript: return confirm(\'Are you sure want to delete?\');" href="delete.php?id=' . $video['id'] . '&type=' . $video['type'] . '&name=' . $video['name'] . '" class="px-2 text-danger btn btn-light" title="delete"><i class="fas fa-trash-alt"></i> Delete</a>
                            </div>
                        </div>
                    </div>
                    ';
                }
            ?>
            <!-- <div class="card">
                <div class="card-body pointer d-flex" id="video-div">
                    <video class="w-50">
                        <source src="video/Dil Diyan Gallan Song - Tiger Zinda Hai - Salman Khan, Katrina Kaif - Atif, Vishal & Shekhar, Irshad.mp4" type="video/mp4">
                    </video>
                    <div class="d-flex flex-column px-2">
                        <span>Agua-natural.mp4</span>
                        <span>Size: 10MB</span>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="col d-flex justify-content-center audio-div mb-3">
            <div class="bg-dark w-100 d-flex justify-content-center align-items-center" id="player">
                <i class="far fa-play-circle display-4"></i>
            </div>
            <!-- <audio controls autoplay loop>
                <source src="audio/Every Night In My Dreams See You And Feel You.mp3" 
                    type="audio/mpeg">
            </audio> -->
        </div>
    </div>

</div>

<?php require_once 'includes/footer.php' ?>