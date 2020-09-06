<?php require_once 'includes/db.php' ?>
<?php require_once 'includes/header.php' ?>

<?php
if ($db) {
    $sql = "SELECT * FROM `files` WHERE `type` = 'audio' ORDER BY id DESC";
    $stmt = $db->prepare($sql);

    $stmt->execute();
    $images = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

<div class="container">

    <div class="text-center position-relative">
    <a class="btn btn-light back-btn" href="index.php"><i class="fas fa-angle-double-left"></i> Back</a>
    <span class="display-4">Audio</span></div>
    <hr>

    <div class="row">
        <div class="col-md-6 col-lg-7">
        <table class="table table-striped">
            <tbody>
                <tr>
                <td>Every Night In My Dreams See You And Feel You.mp3</td>
                <td>5MB</td>
                <td><i class="fas fa-trash-alt text-danger"></i></td>
                </tr>
            </tbody>
            </table>
        </div>
        <div class="col d-flex justify-content-center audio-div mb-3">
            <!-- <audio controls autoplay loop>
                <source src="audio/Every Night In My Dreams See You And Feel You.mp3" 
                    type="audio/mpeg">
            </audio> -->
        </div>
    </div>

</div>

<?php require_once 'includes/footer.php' ?>