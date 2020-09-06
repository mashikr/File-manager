<?php require_once 'includes/db.php' ?>
<?php


if (isset($_GET['id'])) {
    if ($_GET['type'] && $_GET['name']) {
        if (unlink($_GET['type']. "/" . $_GET['name'])) {
            $sql = "DELETE FROM `files` WHERE `id` = :id";
            $stmt = $db->prepare($sql);

            $stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
        
            if ($stmt->execute()) {
                header('Location: ' . $_GET['type'] . '.php');
            }
        }
    }
}