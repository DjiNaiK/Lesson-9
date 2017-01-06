<form action="index.php?adminPIN=42&do=indexEditSave" method="post">
    <textarea name="text" style="width: 300px; height: 200px">
        <?php
        echo $this->data['content'][0]->text;
        ?>
    </textarea>
    <br>
    <input type="submit" value="исправить">
</form>
