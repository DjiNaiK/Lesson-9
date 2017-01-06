    <?php
    foreach ($this->data['gallery'] as $img):
        ?>
    <div>
    <a href="index.php?do=galleryView&n=<?php echo $img->id; ?>">
        <img src="images/<?php echo $img->id . '.' .$img->fileType; ?>"><br>
        <?php echo $img->title; ?>
    </a>
    </div><br><br>
        <?php
    endforeach;
    ?>

