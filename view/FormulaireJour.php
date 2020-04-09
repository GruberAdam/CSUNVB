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
                <input type="text" class="form-control" id="base" placeholder="base" name="base" required>
            </div>
            <!-- Date -->
            <div class="col-md-6 mb-3">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date" placeholder="00/00/0000" name="date" required>
            </div>
            <!-- Responsable de jour -->
            <div class="col-md-4 mb-3">
                <label for="responsabledejour">Responsable de jour</label>
                <input type="text" class="form-control"  id="responsabledejour" placeholder="Responsable de jour" name="responsablejour" required>
            </div>
            <!-- Responsable de nuit -->
            <div class="col-md-4 mb-3">
                <label for="responsabledenuit">Responsable de nuit</label>
                <input type="text" class="form-control" id="responsabledenuit" placeholder="Responsable de nuit" name="responsablenuit" required>
            </div>
            <!-- Équipage de jour -->
            <div class="col-md-4 mb-3">
                <label for="equipedejour">Équipage de jour</label>
                <input type="text" class="form-control" id="equipedejour" placeholder="Équipage de jour" name="equipedejour" required>
            </div>
            <!-- Équipage de nuit -->
            <div class="col-md-4 mb-3">
                <label for="equipedenuit">Équipage de nuit</label>
                <input type="text" class="form-control" id="equipedenuit" placeholder="Équipage de nuit" name="equipedenuit" required>
            </div>
            <!-- Véhicule de service jour -->
            <div class="col-md-4 mb-3">
                <label for="vehiculedesjour">Véhicule de service jour</label>
                <input type="text" class="form-control" id="vehiculedesjour" placeholder="Véhicule de service jour" name="vehiculedesjour" required>
            </div>
            <!-- Véhicule de service nuit -->
            <div class="col-md-4 mb-3">
                <label for="vehiculedesnuit">Véhicule de service nuit</label>
                <input type="text" class="form-control" id="vehiculedesnuit" placeholder="Véhicule de service nuit" name="vehiculedesnuit" required>
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
                            <input type="radio" id="radioRadio1" name="radioRadio" class="custom-control-input">
                            <label class="custom-control-label" for="mjradioRadio1" nmae>Oui</label>
                        </div>
                        <div class="custom-control custom-radio" style="margin-left: 50px">
                            <input type="radio" id="radioRadio2" name="radioRadio" class="custom-control-input">
                            <label class="custom-control-label" for="radioRadio2">Non</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="remarqueradio">Remarques</label>
                    <input type="text" class="form-control" id="remarqueradio" placeholder="Remarques" name="remarqueradio" required>
                </div>
            </div>
            <br>
            <!--        --------------------------------------------                Détecteur CO                --------------------------------------------        -->
            <div class="border" style="margin-left: 25px">
                <p class="col-md-4 mb-3">Détecteur CO</p>
                <div class="container" style="margin-top: 10px">
                    <div class="row">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="detecteurRadio1" name="detecteurRadio" class="custom-control-input">
                            <label class="custom-control-label" for="detecteurRadio1" nmae>Oui</label>
                        </div>
                        <div class="custom-control custom-radio" style="margin-left: 50px">
                            <input type="radio" id="detecteurRadio2" name="detecteurRadio" class="custom-control-input">
                            <label class="custom-control-label" for="detecteurRadio2">Non</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="remarquedetecteurco">Remarques</label>
                    <input type="text" class="form-control" id="remarquedetecteurco" placeholder="Remarques" name="remarquedetecteurco" required>
                </div>
            </div>
            <br>
            <!--        --------------------------------------------                Téléphone                --------------------------------------------        -->
            <div class="border" style="margin-left: 25px">
                <p class="col-md-4 mb-3">Téléphone</p>
                <div class="container" style="margin-top: 10px">
                    <div class="row">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="telephoneRadio1" name="telephoneRadio" class="custom-control-input">
                            <label class="custom-control-label" for="telephoneRadio1" nmae>Oui</label>
                        </div>
                        <div class="custom-control custom-radio" style="margin-left: 50px">
                            <input type="radio" id="telephoneRadio2" name="telephoneRadio" class="custom-control-input">
                            <label class="custom-control-label" for="telephoneRadio2">Non</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="remarquedetecteurco">Remarques</label>
                    <input type="text" class="form-control" id="remarquetelephone" placeholder="Remarques" name="remarquetelephone" required>
                </div>
            </div>
            <br>
            <!--        --------------------------------------------                Gt info avisé                --------------------------------------------        -->
            <div class="border" style="margin-left: 25px">
                <p class="col-md-4 mb-3">Gt info avisé</p>
                <div class="container" style="margin-top: 10px">
                    <div class="row">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="gtinfoaviseRadio1" name="gtinfoaviseRadio" class="custom-control-input">
                            <label class="custom-control-label" for="gtinfoaviseRadio1">Oui</label>
                        </div>
                        <div class="custom-control custom-radio" style="margin-left: 50px">
                            <input type="radio" id="gtinfoaviseRadio2" name="gtinfoaviseRadio" class="custom-control-input">
                            <label class="custom-control-label" for="gtinfoaviseRadio2">Non</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="remarquegtinfoavise">Remarques</label>
                    <input type="text" class="form-control" id="remarquegtinfoavise" placeholder="Remarques" name="remaequegtinfoavise" required>
                </div>
            </div>
            <br>
            <!--        --------------------------------------------                Annonce 144                --------------------------------------------        -->
            <div class="border" style="margin-left: 25px">
                <p class="col-md-4 mb-3">Annonce 144</p>
                <div class="container" style="margin-top: 10px">
                    <div class="row">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="annonceRadio1" name="annonceRadio" class="custom-control-input">
                            <label class="custom-control-label" for="annonceRadio1">Oui</label>
                        </div>
                        <div class="custom-control custom-radio" style="margin-left: 50px">
                            <input type="radio" id="annonceRadio2" name="annonceRadio" class="custom-control-input">
                            <label class="custom-control-label" for="annonceRadio2">Non</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="mjannonceremarque">Remarques</label>
                    <input type="text" class="form-control" id="remarquegtinfoavise" placeholder="Remarques" name="remarqueannonce" required>
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
                            <input type="radio" id="pleinessenceRadio1" name="pleinessenceRadio" class="custom-control-input">
                            <label class="custom-control-label" for="pleinessenceRadio1">Oui</label>
                        </div>
                        <div class="custom-control custom-radio" style="margin-left: 50px">
                            <input type="radio" id="pleinessenceRadio2" name="pleinessenceRadio" class="custom-control-input">
                            <label class="custom-control-label" for="pleinessenceRadio2">Non</label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="remarquepleinessence">Remarques</label>
                        <input type="text" class="form-control" id="remarquepleinessence" placeholder="Remarques" name="remarquepleinessence" required>
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
                            <input type="radio" id="operationnelRadio1" name="operationnelRadio" class="custom-control-input">
                            <label class="custom-control-label" for="operationnelRadio1">Oui</label>
                        </div>
                        <div class="custom-control custom-radio" style="margin-left: 50px">
                            <input type="radio" id="operationnelRadio2" name="operationnelRadio" class="custom-control-input">
                            <label class="custom-control-label" for="operationnelRadio2">Non</label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="remarqueoperationnel">Remarques</label>
                        <input type="text" class="form-control" id="remarqueoperationnel" placeholder="Remarques" name="remarqueoperationnel" required>
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
                            <input type="radio" id="rdvgarageRadio1" name="rdvgarageRadio" class="custom-control-input">
                            <label class="custom-control-label" for="rdvgarageRadio1">Oui</label>
                        </div>
                        <div class="custom-control custom-radio" style="margin-left: 50px">
                            <input type="radio" id="rdvgarageRadio2" name="rdvgarageRadio" class="custom-control-input">
                            <label class="custom-control-label" for="rdvgarageRadio2">Non</label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="remarquerdvgarage">Remarques</label>
                        <input type="text" class="form-control" id="remarquerdvgarage" placeholder="Remarques" name="remarquerdvgarage" required>
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
                            <input type="radio" id="gtvhcaviseRadio1" name="gtvhcaviseRadio" class="custom-control-input">
                            <label class="custom-control-label" for="gtvhcaviseRadio1">Oui</label>
                        </div>
                        <div class="custom-control custom-radio" style="margin-left: 50px">
                            <input type="radio" id="gtvhcaviseRadio2" name="gtvhcaviseRadio" class="custom-control-input">
                            <label class="custom-control-label" for="gtvhcaviseRadio2">Non</label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="mjremarquegtvhcavise">Remarques</label>
                        <input type="text" class="form-control" id="mjremarquegtvhcavise" placeholder="Remarques" name="remarquegtvhcavise" required>
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
                            <input type="radio" id="fiftychfpresentRadio1" name="fiftychfpresentRadio" class="custom-control-input">
                            <label class="custom-control-label" for="fiftychfpresentRadio1">Oui</label>
                        </div>
                        <div class="custom-control custom-radio" style="margin-left: 50px">
                            <input type="radio" id="fiftychfpresentRadio2" name="fiftychfpresentRadio" class="custom-control-input">
                            <label class="custom-control-label" for="fiftychfpresentRadio2">Non</label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="remarquefiftych">Remarques</label>
                        <input type="text" class="form-control" id="remarquefiftychfpresent" placeholder="Remarques" name="remarquefiftychfpresent" required>
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
                            <input type="radio" id="probinterRadio1" name="probinterRadio" class="custom-control-input">
                            <label class="custom-control-label" for="probinterRadio1">Oui</label>
                        </div>
                        <div class="custom-control custom-radio" style="margin-left: 50px">
                            <input type="radio" id="probinterRadio2" name="probinterRadio" class="custom-control-input">
                            <label class="custom-control-label" for="probinterRadio2">Non</label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="remarqueprobinter">Remarques</label>
                        <input type="text" class="form-control" id="remarqueprobinter" placeholder="Remarques" name="remarqueprobinter" required>
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
