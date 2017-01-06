<?php
$train = $this->data['train'][0];
?>
<p>Вы действительно хотите удалить запись?</p>
<i>
Отправление: <?php echo $train->dateStart; ?><br>
Прибытие: <?php echo $train->dateFinish; ?><br>
Пункт назначения: <?php echo $train->finishCity; ?><br>
</i>
<p><a href="index.php?adminPIN=42&do=trainDelDo&id=<?php echo $train->id; ?>">Да, удалить</a></p>
<p><a href="index.php?adminPIN=42&do=trains">Нет</a></p>