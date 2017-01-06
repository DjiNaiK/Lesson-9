<table border="1">
    <tr>
        <th>Отправление</th>
        <th>Пункт назначения</th>
        <th>Прибытие</th>
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
        </tr>
    <?php
    endforeach;
    ?>
</table>

