<?php
ob_start()

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
    <form action="index.php?action=remiseformjour" method="post">
        <div class="form-row">
            <!-- Base -->
            <div class="col-md-4 mb-3">
                <label for="base">Base</label>
                <input type="text" class="form-control" value=<?php $basemodify ?> id="base" placeholder="base" name="mjbasemodifier" required>
            </div>
            <!-- Date -->
            <div class="col-md-6 mb-3">
                <label for="date">Date</label>
                <input type="date" class="form-control" value=<?php $basemodify ?> id="date" placeholder="00/00/0000" name="mjdate" required>
            </div>
            <!-- Responsable de jour -->
            <div class="col-md-4 mb-3">
                <label for="responsabledejour">Responsable de jour</label>
                <input type="text" class="form-control" value=<?php $basemodify ?> id="responsabledejour" placeholder="Responsable de jour" name="mjresponsablejour" required>
            </div>
            <!-- Responsable de nuit -->
            <div class="col-md-4 mb-3">
                <label for="responsabledenuit">Responsable de nuit</label>
                <input type="text" class="form-control" value=<?php $basemodify ?> id="responsabledenuit" placeholder="Responsable de nuit" name="mjresponsablenuit" required>
            </div>
            <!-- Équipage de jour -->
            <div class="col-md-4 mb-3">
                <label for="equipedejour">Équipage de jour</label>
                <input type="text" class="form-control" value=<?php $basemodify ?> id="equipedejour" placeholder="Équipage de jour" name="mjequipedejour" required>
            </div>
            <!-- Équipage de nuit -->
            <div class="col-md-4 mb-3">
                <label for="equipedenuit">Équipage de nuit</label>
                <input type="text" class="form-control" value=<?php $basemodify ?> id="equipedenuit" placeholder="Équipage de nuit" name="mjequipedenuit" required>
            </div>
            <!-- Véhicule de service jour -->
            <div class="col-md-4 mb-3">
                <label for="vehiculedesjour">Véhicule de service jour</label>
                <input type="text" class="form-control" value=<?php $basemodify ?> id="vehiculedesjour" placeholder="Véhicule de service jour" name="mjvehiculedesjour" required>
            </div>
            <!-- Véhicule de service nuit -->
            <div class="col-md-4 mb-3">
                <label for="vehiculedesnuit">Véhicule de service nuit</label>
                <input type="text" class="form-control" value=<?php $basemodify ?> id="vehiculedesnuit" placeholder="Véhicule de service nuit" name="mjvehiculedesnuit" required>
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
                            <input type="radio" id="mjradioRadio1" name="mjradioRadio" class="custom-control-input">
                            <label class="custom-control-label" for="mjradioRadio1" nmae>Oui</label>
                        </div>
                        <div class="custom-control custom-radio" style="margin-left: 50px">
                            <input type="radio" id="mjradioRadio2" name="mjradioRadio" class="custom-control-input">
                            <label class="custom-control-label" for="mjradioRadio2">Non</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="mjremarqueradio">Remarques</label>
                    <input type="text" class="form-control" id="mjremarqueradio" placeholder="Remarques" name="mjremarqueradio" required>
                </div>
            </div>
            <br>
            <!--        --------------------------------------------                Détecteur CO                --------------------------------------------        -->
            <div class="border" style="margin-left: 25px">
                <p class="col-md-4 mb-3">Détecteur CO</p>
                <div class="container" style="margin-top: 10px">
                    <div class="row">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="mjdetecteurRadio1" name="mjdetecteurRadio" class="custom-control-input">
                            <label class="custom-control-label" for="mjdetecteurRadio1" nmae>Oui</label>
                        </div>
                        <div class="custom-control custom-radio" style="margin-left: 50px">
                            <input type="radio" id="mjdetecteurRadio2" name="mjdetecteurRadio" class="custom-control-input">
                            <label class="custom-control-label" for="mjdetecteurRadio2">Non</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="mjremarquedetecteurco">Remarques</label>
                    <input type="text" class="form-control" id="mjremarquedetecteurco" placeholder="Remarques" name="mjremarquedetecteurco" required>
                </div>
            </div>
            <br>
            <!--        --------------------------------------------                Téléphone                --------------------------------------------        -->
            <div class="border" style="margin-left: 25px">
                <p class="col-md-4 mb-3">Téléphone</p>
                <div class="container" style="margin-top: 10px">
                    <div class="row">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="mjtelephoneRadio1" name="mjtelephoneRadio" class="custom-control-input">
                            <label class="custom-control-label" for="mjtelephoneRadio1" nmae>Oui</label>
                        </div>
                        <div class="custom-control custom-radio" style="margin-left: 50px">
                            <input type="radio" id="mjtelephoneRadio2" name="mjtelephoneRadio" class="custom-control-input">
                            <label class="custom-control-label" for="mjtelephoneRadio2">Non</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="mjremarquedetecteurco">Remarques</label>
                    <input type="text" class="form-control" id="mjremarquetelephone" placeholder="Remarques" name="mjremarquetelephone" required>
                </div>
            </div>
            <br>
            <!--        --------------------------------------------                Gt info avisé                --------------------------------------------        -->
            <div class="border" style="margin-left: 25px">
                <p class="col-md-4 mb-3">Gt info avisé</p>
                <div class="container" style="margin-top: 10px">
                    <div class="row">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="mjgtinfoaviseRadio1" name="mjgtinfoaviseRadio" class="custom-control-input">
                            <label class="custom-control-label" for="mjgtinfoaviseRadio1">Oui</label>
                        </div>
                        <div class="custom-control custom-radio" style="margin-left: 50px">
                            <input type="radio" id="mjgtinfoaviseRadio2" name="mjgtinfoaviseRadio" class="custom-control-input">
                            <label class="custom-control-label" for="mjgtinfoaviseRadio2">Non</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="mjremarquegtinfoavise">Remarques</label>
                    <input type="text" class="form-control" id="mjremarquegtinfoavise" placeholder="Remarques" name="mjremaequegtinfoavise" required>
                </div>
            </div>
            <br>
            <!--        --------------------------------------------                Annonce 144                --------------------------------------------        -->
            <div class="border" style="margin-left: 25px">
                <p class="col-md-4 mb-3">Annonce 144</p>
                <div class="container" style="margin-top: 10px">
                    <div class="row">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="mjannonceRadio1" name="mjannonceRadio" class="custom-control-input">
                            <label class="custom-control-label" for="mjannonceRadio1">Oui</label>
                        </div>
                        <div class="custom-control custom-radio" style="margin-left: 50px">
                            <input type="radio" id="mjannonceRadio2" name="mjannonceRadio" class="custom-control-input">
                            <label class="custom-control-label" for="mjannonceRadio2">Non</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="mjannonceremarque">Remarques</label>
                    <input type="text" class="form-control" id="mjremarquegtinfoavise" placeholder="Remarques" name="mjremaequegtinfoavise" required>
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
                                <input type="radio" id="mjpleinessenceRadio1" name="mjpleinessenceRadio" class="custom-control-input">
                                <label class="custom-control-label" for="mjpleinessenceRadio1">Oui</label>
                            </div>
                            <div class="custom-control custom-radio" style="margin-left: 50px">
                                <input type="radio" id="mjpleinessenceRadio2" name="mjpleinessenceRadio" class="custom-control-input">
                                <label class="custom-control-label" for="mjpleinessenceRadio2">Non</label>
                            </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="mjremarquepleinessence">Remarques</label>
                        <input type="text" class="form-control" id="mjremarquepleinessence" placeholder="Remarques" name="mjremarquepleinessence" required>
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
                                <input type="radio" id="mjoperationnelRadio1" name="mjoperationnelRadio" class="custom-control-input">
                                <label class="custom-control-label" for="mjoperationnelRadio1">Oui</label>
                            </div>
                            <div class="custom-control custom-radio" style="margin-left: 50px">
                                <input type="radio" id="mjoperationnelRadio2" name="mjoperationnelRadio" class="custom-control-input">
                                <label class="custom-control-label" for="mjoperationnelRadio2">Non</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="mjremarqueoperationnel">Remarques</label>
                            <input type="text" class="form-control" id="mjremarqueoperationnel" placeholder="Remarques" name="mjremarqueoperationnel" required>
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
                                <input type="radio" id="mjrdvgarageRadio1" name="mjrdvgarageRadio" class="custom-control-input">
                                <label class="custom-control-label" for="mjrdvgarageRadio1">Oui</label>
                            </div>
                            <div class="custom-control custom-radio" style="margin-left: 50px">
                                <input type="radio" id="mjrdvgarageRadio2" name="mjrdvgarageRadio" class="custom-control-input">
                                <label class="custom-control-label" for="mjrdvgarageRadio2">Non</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="mjremarquerdvgarage">Remarques</label>
                            <input type="text" class="form-control" id="mjremarquerdvgarage" placeholder="Remarques" name="mjremarquerdvgarage" required>
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
                                <input type="radio" id="mjgtvhcaviseRadio1" name="mjgtvhcaviseRadio" class="custom-control-input">
                                <label class="custom-control-label" for="mjgtvhcaviseRadio1">Oui</label>
                            </div>
                            <div class="custom-control custom-radio" style="margin-left: 50px">
                                <input type="radio" id="mjgtvhcaviseRadio2" name="mjgtvhcaviseRadio" class="custom-control-input">
                                <label class="custom-control-label" for="mjgtvhcaviseRadio2">Non</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="mjremarquegtvhcavise">Remarques</label>
                            <input type="text" class="form-control" id="mjremarquegtvhcavise" placeholder="Remarques" name="mjremarquegtvhcavise" required>
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
                                <input type="radio" id="mjfiftychfpresentRadio1" name="mjfiftychfpresentRadio" class="custom-control-input">
                                <label class="custom-control-label" for="mjfiftychfpresentRadio1">Oui</label>
                            </div>
                            <div class="custom-control custom-radio" style="margin-left: 50px">
                                <input type="radio" id="mjfiftychfpresentRadio2" name="mjfiftychfpresentRadio" class="custom-control-input">
                                <label class="custom-control-label" for="mjfiftychfpresentRadio2">Non</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="mjremarquefiftych">Remarques</label>
                            <input type="text" class="form-control" id="mjremarquefiftychfpresent" placeholder="Remarques" name="mjremarquefiftychfpresent" required>
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
                                <input type="radio" id="mjprobinterRadio1" name="mjprobinterRadio" class="custom-control-input">
                                <label class="custom-control-label" for="mjprobinterRadio1">Oui</label>
                            </div>
                            <div class="custom-control custom-radio" style="margin-left: 50px">
                                <input type="radio" id="mjprobinterRadio2" name="mjprobinterRadio" class="custom-control-input">
                                <label class="custom-control-label" for="mjprobinterRadio2">Non</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="mjremarqueprobinter">Remarques</label>
                            <input type="text" class="form-control" id="mjremarqueprobinter" placeholder="Remarques" name="mjremarqueprobinter" required>
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
