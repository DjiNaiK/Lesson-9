<?php
$img = $this->data['img'][0];
?>
<div>

    <img src="images/<?php echo $img->id . '.' .$img->fileType; ?>"><br>
    <?php echo $img->title; ?>

</div>
<br>
    <?php
    //рисуем переход к предыдущей картинке, если возможно
    if (isset($this->data['imgPrev'][0]->id)){ ?>
    <a href="index.php?do=galleryView&n=<?php echo $img->id - 1; ?>">//__предыдующая фотография</a>
        <?php } ?>

    <?php
    //рисуем переход к следующей картинке, если возможно
    if (isset($this->data['imgNext'][0]->id)){ ?>
        <a href="index.php?do=galleryView&n=<?php echo $this->data['imgNext'][0]->id; ?>">следующая фотография__\\</a>
    <?php } ?>


