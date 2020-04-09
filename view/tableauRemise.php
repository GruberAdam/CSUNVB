<?php
$_GET['action']= 'tableauRemise';

$counter = 0;
ob_start()

?>

    <table id="user-table">
        <tr>
            <th>Date</th>
            <th>Base</th>
        </tr>
        <?php foreach ($remise as $remiseaffich) : ?>
            <tr>
                <td class="td-data"><?= $remiseaffich['date'] ?></td>
                <td class="td-data"><?= $remiseaffich['base'] ?></td>
                <td><a class="btn btn-primary m-1 pull-right modify-button" style="color: white"
                       href="index.php?action=userManagement&id=<?= $counter ?>">Modifier</a>
                </td>
                <td><a class="btn btn-danger m-1 pull-right modify-button" style="color: white"
                       href="index.php?action=deleteAccount&deletedId=<?= $counter ?>">Suprimer</a>
                </td>
            </tr>
            <?php $counter++; endforeach; ?>
    </table>

<?php
$content = ob_get_clean();
require "gabarit.php";

