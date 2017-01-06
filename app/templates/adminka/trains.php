<table border="1">
    <tr>
        <th>Отправление</th>
        <th>Пункт назначения</th>
        <th>Прибытие</th>
        <th></th>
        <th></th>
    </tr>
    <?php
    foreach ($this->data['trains'] as $train):
        ?>
        <tr>
            <td>
                <?php echo $train->dateStart; ?>
            </td>
            <td>
                <?php echo $train->finishCity; ?>
            </td>
            <td>
                <?php echo $train->dateFinish; ?>
            </td>
            <td>
                <a href="index.php?adminPIN=42&do=trainEdit&id=<?php echo $train->id; ?>">
                    редактировать
                </a>
            </td>
            <td>
                <a href="index.php?adminPIN=42&do=trainDel&id=<?php echo $train->id; ?>">
                    удалить
                </a>
            </td>
        </tr>
        <?php
    endforeach;
    ?>
</table>

<a href="index.php?adminPIN=42&do=trainAdd">Добавить запись</a>

