<b><?php
    if(isset($this->data['statusLoad'])){
    echo $this->data['statusLoad'];
    }
?>
</b>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="NewFile"><br>
    Описание картинки: <input type="text" name="title"><br>
    <input type="submit" value="Загрузить">
</form>