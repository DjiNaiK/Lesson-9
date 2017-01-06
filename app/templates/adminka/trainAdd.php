<form action="index.php?adminPIN=42&do=trainAddSave" method="post">

    Отбытие поезда:<br>
    <input name="dateStart" type="text" value="<?php echo date('Y-m-d G:i:s'); ?>">
    <br><br>
    Прибытие поезда в пункт назначения:<br>
    <input name="dateFinish" type="text" value="<?php echo date('Y-m-d G:i:s'); ?>">
    <br><br>
    Пункт назначения:<br>
    <input name="finishCity" type="text" value="">
    <br><br>
    <input type="submit" value="Добавить запись">

</form>