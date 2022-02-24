<?php
    require_once "blocks/header.php"
?>
    <?php
    $id = $_GET['id'];
    require_once "php/connect.php";
    $sql = "SELECT `fio`, `about`, `img` FROM `events` WHERE `id`='$id'";
    $candidate = $mysql->query($sql)->fetch_assoc();
   <br>
    ?>
<?php
$id = $_POST['id_candidate'];
$mysql = new mysqli('localhost', 'root', '', 'portal');
$sql = "SELECT `votes` FROM `candidates` WHERE `id`='$id'";
$old_votes = $mysql->query($sql)->fetch_assoc();
$new_votes = (int)$old_votes['votes'];
$new_votes++;
$sql = "UPDATE `candidates` SET `votes`=$new_votes WHERE `id`='$id'";
$mysql->query($sql);
echo $new_votes;

    <main>
        <div class="container">
            <div class="info">
                <img src="<?php echo $candidate['img']; ?>" alt="">
                <div class="content">
                    <h1><?php echo $candidate['fio']; ?></h1>
                    <p><?php echo $candidate['about']; ?></p>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
