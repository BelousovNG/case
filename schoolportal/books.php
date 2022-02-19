<?php
require_once "blocks/header.php"
?>


   
 
    <div class="bibl">
        <div class="container">
            <div class="bibl__inner">
                <?php
                require_once "php/connect.php";
                $sql = "SELECT `id`, `fio`, `about`, `img` FROM `books`";
                $candidates = $mysql->query($sql);
                while ($candidate = $candidates->fetch_assoc()) :
                ?>
                    <div class="book">
                        <form action="vote.php" method="POST" id="<?php echo $candidate['id'] ?>">
                           
                                <img src="<?php echo $candidate['img'] ?>" alt="">
                                <h3><?php echo $candidate['fio'] ?></h3>
                                <h4 class="votes" id='votes-<?php echo $candidate['id'] ?>'><?php echo $candidate['votes'] ?></h4>
                            </a>
                          
                        </form>


                    </div>
                <?php endwhile;
                ?>
            </div>
        </div>
    </div>
   
   
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>