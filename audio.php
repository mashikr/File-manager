<?php require_once 'includes/db.php' ?>
<?php require_once 'includes/header.php' ?>

<?php
if ($db) {
    $sql = "SELECT * FROM `files` WHERE `type` = 'audio' ORDER BY id DESC";
    $stmt = $db->prepare($sql);

    $stmt->execute();
    $audios = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
            <?php

                foreach ($audios as $audio) {
                    echo '
                    <tr class="pointer">
                        <td class="audio-name">' . $audio['name'] . '</td>
                        <td>' . $audio['size'] . '</td>
                        <td>
                        <a onclick="javascript: return confirm(\'Are you sure want to delete?\');" href="delete.php?id=' . $audio['id'] . '&type=' . $audio['type'] . '&name=' . $audio['name'] . '" class="px-2 text-danger btn btn-light" title="delete"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    ';
                }

            ?>
                <!-- <tr>
                <td class="audio-name">Every Night In My Dreams See You And Feel You.mp3</td>
                <td>5MB</td>
                <td><i class="fas fa-trash-alt text-danger"></i></td>
                </tr> -->
            </tbody>
            </table>
        </div>
        <div class="col d-flex justify-content-center audio-div mb-3">
            <div id="audio-player">
                <audio controls>
                    <source src="" 
                        type="audio/mpeg">
                </audio>
            </div>
            <!-- <audio controls autoplay loop>
                <source src="audio/Every Night In My Dreams See You And Feel You.mp3" 
                    type="audio/mpeg">
            </audio> -->
        </div>
    </div>

</div>

<?php require_once 'includes/footer.php' ?>