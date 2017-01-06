<?php
$train = $this->data['train'][0];
?>

<form action="index.php?adminPIN=42&do=trainEditSave&id=<?php echo $_GET['id']; ?>" method="post">

    Отбытие поезда:<br>
    <input name="dateStart" type="text" value="<?php echo $train->dateStart; ?>">
    <br><br>
    Прибытие поезда в пункт назначения:<br>
    <input name="dateFinish" type="text" value="<?php echo $train->dateFinish; ?>">
    <br><br>
    Пункт назначения:<br>
    <input name="finishCity" type="text" value="<?php echo $train->finishCity; ?>">
    <br><br>
    <input type="submit" value="исправить">
</form>