<?php
/**
 * ${PROJET_NAME} - modificationItem.php
 *
 * Auhor: Dylan.BERNEY
 * Vers:1.0
 * Date: 27.02.2020 14:07
 */
?>
<?php
ob_start();
?>
<br>
<br>
<div>

    <form method="post" action="index.php?action=updatedItem" onsubmit="return validate(this)">

        <table class='table table-bordered' style="width: 97%">
            <input type="hidden" value="<?= $itemSearch["id"] ?>" name="idItem"><br>
            <input type="hidden" value="<?= $itemSearch["base"] ?>" name="base"><br>
            <input type="hidden" value="<?= $_GET['day'] ?>" name="day">
            <input type="hidden" value="<?= $itemSearch["value"] ?>" name="value">

            <tr>
                <td>
                    Travail de nuit
                </td>
                <td>
                    <div>

                        <?php
                        if ($itemSearch["nightjob"] == 0) { ?>


                            <div>
                                <input type="radio" name="nightjob" checked="checked" value=0 >
                                <label>
                                    Non
                                </label>
                            </div>
                            <div>
                                <!--<input type='text' class='form-control' required>-->
                                <input type="radio" name="nightjob" value=1 >
                                <label>
                                    Oui
                                </label>
                            </div>

                        <?php } ?>
                        <?php if ($itemSearch["nightjob"] == 1) { ?>


                            <div>
                                <input type="radio" name="nightjob" value=0>
                                <label>
                                    Non
                                </label>
                            </div>
                            <div>
                                <!--<input type='text' class='form-control' required>-->
                                <input type="radio" name="nightjob" checked="checked" value=1 >
                                <label>
                                   Oui
                                </label>
                            </div>

                        <?php } ?>
                </td>
            </tr>

            <tr>
                <td>Fait par :</td>
                <td><input type='text' value="<?= $itemSearch["acknowledged_by"] ?>" name="acknowledged_by"
                           class='form-control' required></td>
            </tr>

            <tr>
                <td>Type</td>
                <td><label>
                        <input type='text' value="<?= $itemSearch["type"] ?>" name="type" class='form-control' required>
                    </label>
                </td>
            </tr>

            <tr>
                <td>Description<i class="icon-pencil"></i></td>
                <td><textarea type='text' name="description" class='form-control'
                              required><?= $itemSearch["description"] ?></textarea></td>
            </tr>

            <tr>
                <td colspan="2">
                    <input type="hidden" value="<?= $_GET['day'] ?>" name="day">
                    <input type="hidden" value="<?= $itemSearch["base"] ?>">
                    <button type="submit" class="btn btn-primary" name="btn-save">
                        <span class="glyphicon glyphicon-plus"></span> Enrengister
                    </button>
                    <a href="index.php?action=todolist&base=<?= $itemSearch["base"] ?>"
                       class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i>
                        &nbsp; Retour aux tâches</a>
                </td>
            </tr>

        </table>
    </form>
</div>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
          integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ=="
          crossorigin="anonymous">
    <link rel="stylesheet" href="build.css">

</head>


<style>
    .feed {
        padding: 5px 0
    }
</style>

<!-- Template. This whole data will be added directly to working form above -->
<div id="newlinktpl" style="display:none">
    <div class="feed">
        <textarea class='form-control' type="text" name="tache[]" value="" size="50"></textarea>
    </div>
</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
