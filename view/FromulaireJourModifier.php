<?php
ob_start();

?>

    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="?action=home">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="?action=shiftend">Remise</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="?action=remiseformnuitjour" tabindex="-1" aria-disabled="true">Formulaire</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="?action=remiseformjour" tabindex="-1" aria-disabled="true">Formulaire Jour</a>
        </li>
    </ul>

    <h2>Jour</h2>
    <form action="index.php?action=modifyremise&id=<?=$_GET['id']?>" method="post">
        <div class="row">
            <div class="custom-control custom-radio">
                <input type="radio" id="jourRadio" name="mjprtjourneRadio" class="custom-control-input" value="jour" <?php if ($remise[$id]['partie de la journee'] == "jour") : ?>
                    checked
                <?php endif; ?>>>
                <label class="custom-control-label" for="mjradioRadio1">Jour</label>
            </div>
            <div class="custom-control custom-radio" style="margin-left: 50px">
                <input type="radio" id="nuitRadio" name="mjprtjourneRadio" class="custom-control-input" value="nuit" <?php if ($remise[$id]['radio'] == "oui") : ?>
                    checked
                <?php endif; ?>>>
                <label class="custom-control-label" for="nuitRadio">Nuit</label>
            </div>
        </div>
        <div class="form-row">
            <!-- Base -->
            <div class="col-md-4 mb-3">
                <label for="base">Base</label>

                <input type="text" class="form-control" value="<?= $remise[$id]['base'] ?>" id="base" name="mjbase" required>
            </div>
            <!-- Date -->
            <div class="col-md-6 mb-3">
                <label for="date">Date</label>
                <input type="date" class="form-control" value="<?= $remise[$id]['date'] ?>" id="date" name="mjdate" min="1990-01-01" max="2100-01-01" required>
            </div>
            <!-- Responsable de jour -->
            <div class="col-md-4 mb-3">
                <label for="responsabledejour">Responsable de jour</label>
                <input type="text" class="form-control" value="<?= $remise[$id]['responsable jour'] ?>" id="responsabledejour" name="mjresponsablejour" required>
            </div>
            <!-- Responsable de nuit -->
            <div class="col-md-4 mb-3">
                <label for="responsabledenuit">Responsable de nuit</label>
                <input type="text" class="form-control" value="<?= $remise[$id]['responsable nuit'] ?>" id="responsabledenuit" placeholder="Responsable de nuit" name="mjresponsablenuit" required>
            </div>
            <!-- Équipage de jour -->
            <div class="col-md-4 mb-3">
                <label for="equipedejour">Équipage de jour</label>
                <input type="text" class="form-control" value="<?= $remise[$id]['equipe de jour'] ?>" id="equipedejour" placeholder="Équipage de jour" name="mjequipedejour" required>
            </div>
            <!-- Équipage de nuit -->
            <div class="col-md-4 mb-3">
                <label for="equipedenuit">Équipage de nuit</label>
                <input type="text" class="form-control" value="<?= $remise[$id]['equipe de nuit'] ?>" id="equipedenuit" placeholder="Équipage de nuit" name="mjequipedenuit" required>
            </div>
            <!-- Véhicule de service jour -->
            <div class="col-md-4 mb-3">
                <label for="vehiculedesjour">Véhicule de service jour</label>
                <input type="text" class="form-control" value="<?= $remise[$id]['vehicule de service / jour'] ?>" id="vehiculedesjour" placeholder="Véhicule de service jour" name="mjvehiculedesjour" required>
            </div>
            <!-- Véhicule de service nuit -->
            <div class="col-md-4 mb-3">
                <label for="vehiculedesnuit">Véhicule de service nuit</label>
                <input type="text" class="form-control" value="<?= $remise[$id]['vehicule de service / nuit'] ?>" id="vehiculedesnuit" placeholder="Véhicule de service nuit" name="mjvehiculedesnuit" required>
            </div>

        </div>
        <!--        --------------------------------------------                Radio                --------------------------------------------        -->

        <div class="overflow-auto border" style="height: 400px; width: 1200px">     <!-- Mini scroll page -->

            <h3 style="margin-left: 25px; margin-top: 10px">Matériaux & Télécom</h3>
            <br>
            <div class="border" style="margin-left: 25px">
                <p class="col-md-4 mb-3">Radio</p>
                <div class="container" style="margin-top: 10px">
                    <div class="row">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="mjradioRadio1" name="mjradioRadio" value="oui" class="custom-control-input" <?php if ($remise[$id]['radio'] == "oui") : ?>
                                checked
                            <?php endif; ?>>
                            <label class="custom-control-label" for="mjradioRadio1">Oui</label>
                        </div>
                        <div class="custom-control custom-radio" style="margin-left: 50px">
                            <input type="radio" id="mjradioRadio2" name="mjradioRadio" value="non" class="custom-control-input" <?php if ($remise[$id]['radio'] == "non") : ?>
                                checked
                            <?php endif; ?>>
                            <label class="custom-control-label" for="mjradioRadio2">Non</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="mjremarqueradio">Remarques</label>
                    <input type="text" class="form-control" value="<?= $remise[$id]['radio remarques'] ?>" id="mjremarqueradio" placeholder="Remarques" name="mjremarqueradio" required>
                </div>
            </div>
            <br>
            <!--        --------------------------------------------                Détecteur CO                --------------------------------------------        -->
            <div class="border" style="margin-left: 25px">
                <p class="col-md-4 mb-3">Détecteur CO</p>
                <div class="container" style="margin-top: 10px">
                    <div class="row">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="mjdetecteurRadio1" name="mjdetecteurRadio" value="oui" class="custom-control-input" <?php if ($remise[$id]['detecteur'] == "oui") : ?>
                                checked
                            <?php endif; ?>>
                            <label class="custom-control-label" for="mjdetecteurRadio1" name>Oui</label>
                        </div>
                        <div class="custom-control custom-radio" style="margin-left: 50px">
                            <input type="radio" id="mjdetecteurRadio2" name="mjdetecteurRadio" value="non" class="custom-control-input"<?php if ($remise[$id]['detecteur'] == "non") : ?>
                                checked
                            <?php endif; ?>>
                            <label class="custom-control-label" for="mjdetecteurRadio2">Non</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="mjremarquedetecteurco">Remarques</label>
                    <input type="text" class="form-control" id="mjremarquedetecteurco" value="<?= $remise[$id]['detecteur remarques'] ?>" placeholder="Remarques" name="mjremarquedetecteurco" required>
                </div>
            </div>
            <br>
            <!--        --------------------------------------------                Téléphone                --------------------------------------------        -->
            <div class="border" style="margin-left: 25px">
                <p class="col-md-4 mb-3">Téléphone</p>
                <div class="container" style="margin-top: 10px">
                    <div class="row">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="mjtelephoneRadio1" name="mjtelephoneRadio" value="oui" class="custom-control-input" <?php if ($remise[$id]['telephone'] == "oui") : ?>
                                checked
                            <?php endif; ?>>
                            <label class="custom-control-label" for="mjtelephoneRadio1" name>Oui</label>
                        </div>
                        <div class="custom-control custom-radio" style="margin-left: 50px">
                            <input type="radio" id="mjtelephoneRadio2" name="mjtelephoneRadio" value="non" class="custom-control-input" <?php if ($remise[$id]['telephone'] == "non") : ?>
                                checked
                            <?php endif; ?>>
                            <label class="custom-control-label" for="mjtelephoneRadio2">Non</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="mjremarquedetecteurco">Remarques</label>
                    <input type="text" class="form-control" id="mjremarquetelephone" value="<?= $remise[$id]['telephone remarques'] ?>" placeholder="Remarques" name="mjremarquetelephone" required>
                </div>
            </div>
            <br>
            <!--        --------------------------------------------                Gt info avisé                --------------------------------------------        -->
            <div class="border" style="margin-left: 25px">
                <p class="col-md-4 mb-3">Gt info avisé</p>
                <div class="container" style="margin-top: 10px">
                    <div class="row">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="mjgtinfoaviseRadio1" name="mjgtinfoaviseRadio" value="oui" class="custom-control-input" <?php if ($remise[$id]['Gt info avise'] == "oui") : ?>
                                checked
                            <?php endif; ?>>
                            <label class="custom-control-label" for="mjgtinfoaviseRadio1">Oui</label>
                        </div>
                        <div class="custom-control custom-radio" style="margin-left: 50px">
                            <input type="radio" id="mjgtinfoaviseRadio2" name="mjgtinfoaviseRadio" value="non" class="custom-control-input" <?php if ($remise[$id]['Gt info avise'] == "non") : ?>
                                checked
                            <?php endif; ?>>
                            <label class="custom-control-label" for="mjgtinfoaviseRadio2">Non</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="mjremarquegtinfoavise">Remarques</label>
                    <input type="text" class="form-control" id="mjremarquegtinfoavise" placeholder="Remarques" value="<?= $remise[$id]['Gt info avise remarques'] ?>" name="mjremarquegtinfoavise" required>
                </div>
            </div>
            <br>
            <!--        --------------------------------------------                Annonce 144                --------------------------------------------        -->
            <div class="border" style="margin-left: 25px">
                <p class="col-md-4 mb-3">Annonce 144</p>
                <div class="container" style="margin-top: 10px">
                    <div class="row">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="mjannonceRadio1" name="mjannonceRadio" value="oui" class="custom-control-input" <?php if ($remise[$id]['annonce 144'] == "oui") : ?>
                                checked
                            <?php endif; ?>>
                            <label class="custom-control-label" for="mjannonceRadio1">Oui</label>
                        </div>
                        <div class="custom-control custom-radio" style="margin-left: 50px">
                            <input type="radio" id="mjannonceRadio2" name="mjannonceRadio" value="non" class="custom-control-input" <?php if ($remise[$id]['annonce 144'] == "non") : ?>
                                checked
                            <?php endif; ?>>
                            <label class="custom-control-label" for="mjannonceRadio2">Non</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="mjannonceremarque">Remarques</label>
                    <input type="text" class="form-control" id="mjremarquegtinfoavise" placeholder="Remarques" value="<?= $remise[$id]['annonce 144 remarques'] ?>" name="mjremarqueannonce" required>
                </div>
                <br>

            </div>
            <br>
            <br>
        </div>
            <br>
            <br>
            <!-- ------------------------------------------------------------- Véhicule --------------------------------------------- -->

            <div class="overflow-auto border" style="height: 400px; width: 1200px">     <!-- Mini scroll page -->

                <!--        --------------------------------------------                Véhicules & Interventions                --------------------------------------------        -->
                <h3 style="margin-left: 25px; margin-top: 10px">Véhicules & Interventions</h3>
                <br>
                <div class="border" style="margin-left: 25px">
                    <p class="col-md-4 mb-3">Plein essence</p>
                    <div class="container" style="margin-top: 10px">
                        <div class="row">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="mjpleinessenceRadio1" name="mjpleinessenceRadio" value="oui" class="custom-control-input" <?php if ($remise[$id]['plein essence'] == "oui") : ?>
                                    checked
                                <?php endif; ?>>
                                <label class="custom-control-label" for="mjpleinessenceRadio1">Oui</label>
                            </div>
                            <div class="custom-control custom-radio" style="margin-left: 50px">
                                <input type="radio" id="mjpleinessenceRadio2" name="mjpleinessenceRadio" value="non" class="custom-control-input" <?php if ($remise[$id]['plein essence'] == "non") : ?>
                                    checked
                                <?php endif; ?>>
                                <label class="custom-control-label" for="mjpleinessenceRadio2">Non</label>
                            </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="mjremarquepleinessence">Remarques</label>
                        <input type="text" class="form-control" id="mjremarquepleinessence" placeholder="Remarques" value="<?= $remise[$id]['telephone remarques'] ?>" name="mjremarquepleinessence" required>
                    </div>
                    </div>
                </div>

                <br>
                <!--        --------------------------------------------                Opérationnel                --------------------------------------------        -->
                <div class="border" style="margin-left: 25px">
                    <p class="col-md-4 mb-3">Opérationnel</p>
                    <div class="container" style="margin-top: 10px">
                        <div class="row">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="mjoperationnelRadio1" name="mjoperationnelRadio" value="oui" class="custom-control-input" <?php if ($remise[$id]['operationnel'] == "oui") : ?>
                                    checked
                                <?php endif; ?>>
                                <label class="custom-control-label" for="mjoperationnelRadio1">Oui</label>
                            </div>
                            <div class="custom-control custom-radio" style="margin-left: 50px">
                                <input type="radio" id="mjoperationnelRadio2" name="mjoperationnelRadio" value="non" class="custom-control-input" <?php if ($remise[$id]['operationnel'] == "non") : ?>
                                    checked
                                <?php endif; ?>>
                                <label class="custom-control-label" for="mjoperationnelRadio2">Non</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="mjremarqueoperationnel">Remarques</label>
                            <input type="text" class="form-control" id="mjremarqueoperationnel" placeholder="Remarques" value="<?= $remise[$id]['operationnel remarques'] ?>" name="mjremarqueoperationnel" required>
                        </div>
                    </div>
                </div>

                <br>
                <!--        --------------------------------------------                Rdv garage                --------------------------------------------        -->
                <div class="border" style="margin-left: 25px">
                    <p class="col-md-4 mb-3">Rdv garage</p>
                    <div class="container" style="margin-top: 10px">
                        <div class="row">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="mjrdvgarageRadio1" name="mjrdvgarageRadio" value="oui" class="custom-control-input" <?php if ($remise[$id]['rdv garage'] == "oui") : ?>
                                    checked
                                <?php endif; ?>>
                                <label class="custom-control-label" for="mjrdvgarageRadio1">Oui</label>
                            </div>
                            <div class="custom-control custom-radio" style="margin-left: 50px">
                                <input type="radio" id="mjrdvgarageRadio2" name="mjrdvgarageRadio" value="non" class="custom-control-input" <?php if ($remise[$id]['rdv garage'] == "non") : ?>
                                    checked
                                <?php endif; ?>>
                                <label class="custom-control-label" for="mjrdvgarageRadio2">Non</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="mjremarquerdvgarage">Remarques</label>
                            <input type="text" class="form-control" id="mjremarquerdvgarage" placeholder="Remarques" name="mjremarquerdvgarage" value="<?= $remise[$id]['rdv garage remarques'] ?>" required>
                        </div>
                    </div>
                </div>
                <br>
                <!--        --------------------------------------------                Gt vhc avisé                --------------------------------------------        -->
                <div class="border" style="margin-left: 25px">
                    <p class="col-md-4 mb-3">Gt vhc avisé</p>
                    <div class="container" style="margin-top: 10px">
                        <div class="row">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="mjgtvhcaviseRadio1" name="mjgtvhcaviseRadio" value="oui" class="custom-control-input" <?php if ($remise[$id]['Gt vhc avise'] == "oui") : ?>
                                    checked
                                <?php endif; ?>>
                                <label class="custom-control-label" for="mjgtvhcaviseRadio1">Oui</label>
                            </div>
                            <div class="custom-control custom-radio" style="margin-left: 50px">
                                <input type="radio" id="mjgtvhcaviseRadio2" name="mjgtvhcaviseRadio" value="non" class="custom-control-input" <?php if ($remise[$id]['Gt vhc avise'] == "non") : ?>
                                    checked
                                <?php endif; ?>>
                                <label class="custom-control-label" for="mjgtvhcaviseRadio2">Non</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="mjremarquegtvhcavise">Remarques</label>
                            <input type="text" class="form-control" id="mjremarquegtvhcavise" placeholder="Remarques" value="<?= $remise[$id]['Gt vhc avise remarques'] ?>" name="mjremarquegtvhcavise" required>
                        </div>
                    </div>
                </div>
                <br>
                <!--        --------------------------------------------                50chf présent                --------------------------------------------        -->
                <div class="border" style="margin-left: 25px">
                    <p class="col-md-4 mb-3">50chf présent</p>
                    <div class="container" style="margin-top: 10px">
                        <div class="row">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="mjfiftychfpresentRadio1" name="mjfiftychfpresentRadio" value="oui" class="custom-control-input" <?php if ($remise[$id]['50 chf present'] == "oui") : ?>
                                    checked
                                <?php endif; ?>>
                                <label class="custom-control-label" for="mjfiftychfpresentRadio1">Oui</label>
                            </div>
                            <div class="custom-control custom-radio" style="margin-left: 50px">
                                <input type="radio" id="mjfiftychfpresentRadio2" name="mjfiftychfpresentRadio" value="non" class="custom-control-input" <?php if ($remise[$id]['50 chf present'] == "non") : ?>
                                    checked
                                <?php endif; ?>>
                                <label class="custom-control-label" for="mjfiftychfpresentRadio2">Non</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="mjremarquefiftych">Remarques</label>
                            <input type="text" class="form-control" id="mjremarquefiftychfpresent" placeholder="Remarques" value="<?= $remise[$id]['50 chf present remarques'] ?>" name="mjremarquefiftychfpresent" required>
                        </div>
                    </div>
                </div>
                <br>
                <!--        --------------------------------------------                Problèmes d'interventions hors véhicules                --------------------------------------------        -->
                <div class="border" style="margin-left: 25px">
                    <p class="col-md-4 mb-3">Problèmes d'interventions hors véhicules</p>
                    <div class="container" style="margin-top: 10px">
                        <div class="row">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="mjprobinterRadio1" name="mjprobinterRadio" value="oui" class="custom-control-input" <?php if ($remise[$id]['probleme intervention hors vehicules'] == "non") : ?>
                                    checked
                                <?php endif; ?>>
                                <label class="custom-control-label" for="mjprobinterRadio1">Oui</label>
                            </div>
                            <div class="custom-control custom-radio" style="margin-left: 50px">
                                <input type="radio" id="mjprobinterRadio2" name="mjprobinterRadio" value="non" class="custom-control-input" <?php if ($remise[$id]['probleme intervention hors vehicules'] == "non") : ?>
                                    checked
                                <?php endif; ?>>
                                <label class="custom-control-label" for="mjprobinterRadio2">Non</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="mjremarqueprobinter">Remarques</label>
                            <input type="text" class="form-control" id="mjremarqueprobinter" placeholder="Remarques" value="<?= $remise[$id]['probleme intervention hors vehicules remarques'] ?>" name="mjremarqueprobinter" required>
                        </div>
                    </div>
                </div>
                <br>
                <br>
            </div>
            <br>
            <br>
            <br>
            <input type="submit" value="Submit" class="btn btn-primary">
            <br>
            <br>
            <br>

    </form>
<?php
$content = ob_get_clean();
require "gabarit.php";
