<?php
ob_start()

?>


    <div class="form-row">
        <!-- Date -->
        <div class="col-md-6 mb-3">
            <label for="date">Date</label>
            <input type="text" class="form-control" id="date" placeholder="00/00/0000" required>
        </div>
        <!-- Responsable de jour -->
        <div class="col-md-4 mb-3">
            <label for="responsabledejour">Responsable de jour</label>
            <input type="text" class="form-control" id="responsabledejour" placeholder="Responsable de jour" required>
        </div>
        <!-- Responsable de nuit -->
        <div class="col-md-4 mb-3">
            <label for="responsabledenuit">Responsable de nuit</label>
            <input type="text" class="form-control" id="responsabledenuit" placeholder="Responsable de nuit" required>
        </div>
        <!-- Équipage de jour -->
        <div class="col-md-4 mb-3">
            <label for="equipedejour">Équipage de jour</label>
            <input type="text" class="form-control" id="equipedejour" placeholder="Équipage de jour" required>
        </div>
        <!-- Équipage de nuit -->
        <div class="col-md-4 mb-3">
            <label for="equipedenuit">Équipage de nuit</label>
            <input type="text" class="form-control" id="equipedenuit" placeholder="Équipage de nuit" required>
        </div>
        <!-- Véhicule de service jour -->
        <div class="col-md-4 mb-3">
            <label for="vehiculedesjour">Véhicule de service jour</label>
            <input type="text" class="form-control" id="vehiculedesjour" placeholder="Véhicule de service jour" required>
        </div>
        <!-- Véhicule de service nuit -->
        <div class="col-md-4 mb-3">
            <label for="vehiculedesnuit">Véhicule de service nuit</label>
            <input type="text" class="form-control" id="vehiculedesnuit" placeholder="Véhicule de service nuit" required>
        </div>

    </div>
    <!--        --------------------------------------------                Radio                --------------------------------------------        -->

    <div class="overflow-auto border" style="height: 400px; width: 1200px">     <!-- Mini scroll page -->
        
        <h3 style="margin-left: 25px">Matériaux & Télécom</h3>
        <br>
        <div class="border" style="margin-left: 25px">
            <p class="col-md-4 mb-3">Radio</p>
            <div class="container" style="margin-top: 10px">
                <div class="row">
                    <div class="col-1">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Oui</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <select class="custom-select">
                            <option selected>Choisissez votre horaire</option>
                            <option value="1">Jour</option>
                            <option value="2">Nuit</option>
                            <option value="3">Jour/Nuit</option>
                        </select>
                    </div>
                    <div class="col-1">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                            <label class="custom-control-label" for="customCheck2">Non</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <select class="custom-select">
                            <option selected>Choisissez votre horaire</option>
                            <option value="1">Jour</option>
                            <option value="2">Nuit</option>
                            <option value="3">Jour/Nuit</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationDefault03">Remarques</label>
                <input type="text" class="form-control" id="validationDefault03" placeholder="City" required>
            </div>
        </div>
        <br>
        <!--        --------------------------------------------                Détecteur CO                --------------------------------------------        -->
        <div class="border" style="margin-left: 25px">
            <p class="col-md-4 mb-3">Détecteurs CO</p>
            <div class="container" style="margin-top: 10px">
                <div class="row">
                    <div class="col-1">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1Detec">
                            <label class="custom-control-label" for="customCheck1Detec">Oui</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <select class="custom-select">
                            <option selected>Choisissez votre horaire</option>
                            <option value="1">Jour</option>
                            <option value="2">Nuit</option>
                            <option value="3">Jour/Nuit</option>
                        </select>
                    </div>
                    <div class="col-1">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck2Detec">
                            <label class="custom-control-label" for="customCheck2Detec">Non</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <select class="custom-select">
                            <option selected>Choisissez votre horaire</option>
                            <option value="1">Jour</option>
                            <option value="2">Nuit</option>
                            <option value="3">Jour/Nuit</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationDefault03">Remarques</label>
                <input type="text" class="form-control" id="validationDefault03" placeholder="City" required>
            </div>
        </div>
        <br>
        <!--        --------------------------------------------                Téléphone                --------------------------------------------        -->
        <div class="border" style="margin-left: 25px">
            <p class="col-md-4 mb-3">Téléphone</p>
            <div class="container" style="margin-top: 10px">
                <div class="row">
                    <div class="col-1">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1Tel">
                            <label class="custom-control-label" for="customCheck1Tel">Oui</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <select class="custom-select">
                            <option selected>Choisissez votre horaire</option>
                            <option value="1">Jour</option>
                            <option value="2">Nuit</option>
                            <option value="3">Jour/Nuit</option>
                        </select>
                    </div>
                    <div class="col-1">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck2Tel">
                            <label class="custom-control-label" for="customCheck2Tel">Non</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <select class="custom-select">
                            <option selected>Choisissez votre horaire</option>
                            <option value="1">Jour</option>
                            <option value="2">Nuit</option>
                            <option value="3">Jour/Nuit</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationDefault03">Remarques</label>
                <input type="text" class="form-control" id="validationDefault03" placeholder="City" required>
            </div>
        </div>
        <br>
        <!--        --------------------------------------------                Gt info avisé                --------------------------------------------        -->
        <div class="border" style="margin-left: 25px">
            <p class="col-md-4 mb-3">Gt info avisé</p>
            <div class="container" style="margin-top: 10px">
                <div class="row">
                    <div class="col-1">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1Gt">
                            <label class="custom-control-label" for="customCheck1Gt">Oui</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <select class="custom-select">
                            <option selected>Choisissez votre horaire</option>
                            <option value="1">Jour</option>
                            <option value="2">Nuit</option>
                            <option value="3">Jour/Nuit</option>
                        </select>
                    </div>
                    <div class="col-1">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck2Gt">
                            <label class="custom-control-label" for="customCheck2Gt">Non</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <select class="custom-select">
                            <option selected>Choisissez votre horaire</option>
                            <option value="1">Jour</option>
                            <option value="2">Nuit</option>
                            <option value="3">Jour/Nuit</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationDefault03">Remarques</label>
                <input type="text" class="form-control" id="validationDefault03" placeholder="City" required>
            </div>
        </div>
        <br>
        <!--        --------------------------------------------                Annonce 144                --------------------------------------------        -->
        <div class="border" style="margin-left: 25px">
            <p class="col-md-4 mb-3">Annonce 144</p>
            <div class="container" style="margin-top: 10px">
                <div class="row">
                    <div class="col-1">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1Ann">
                            <label class="custom-control-label" for="customCheck1Ann">Oui</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <select class="custom-select">
                            <option selected>Choisissez votre horaire</option>
                            <option value="1">Jour</option>
                            <option value="2">Nuit</option>
                            <option value="3">Jour/Nuit</option>
                        </select>
                    </div>
                    <div class="col-1">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck2Ann">
                            <label class="custom-control-label" for="customCheck2Ann">Non</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <select class="custom-select">
                            <option selected>Choisissez votre horaire</option>
                            <option value="1">Jour</option>
                            <option value="2">Nuit</option>
                            <option value="3">Jour/Nuit</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationDefault03">Remarques</label>
                <input type="text" class="form-control" id="validationDefault03" placeholder="City" required>
            </div>
        </div>
        <br>
    </div>
<br>
<br>
<!-- ------------------------------------------------------------- Véhicule --------------------------------------------- -->

    <div class="overflow-auto border" style="height: 400px; width: 1200px">     <!-- Mini scroll page -->

        <!--        --------------------------------------------                Véhicules & Interventions                --------------------------------------------        -->
        <h3 style="margin-left: 25px">Véhicules & Interventions</h3>
        <br>
        <div class="border" style="margin-left: 25px">
            <p class="col-md-4 mb-3">Plein essence</p>
            <div class="container" style="margin-top: 10px">
                <div class="row">
                    <div class="col-1">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="pleinessence">
                            <label class="custom-control-label" for="pleinessence">Oui</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <select class="custom-select">
                            <option selected>Choisissez votre horaire</option>
                            <option value="1">Jour</option>
                            <option value="2">Nuit</option>
                            <option value="3">Jour/Nuit</option>
                        </select>
                    </div>
                    <div class="col-1">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="pleinessence2">
                            <label class="custom-control-label" for="pleinessence2">Non</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <select class="custom-select">
                            <option selected>Choisissez votre horaire</option>
                            <option value="1">Jour</option>
                            <option value="2">Nuit</option>
                            <option value="3">Jour/Nuit</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationDefault03">Remarques</label>
                <input type="text" class="form-control" id="validationDefault03" placeholder="City" required>
            </div>
        </div>
        <br>
        <!--        --------------------------------------------                Opérationnel                --------------------------------------------        -->
        <div class="border" style="margin-left: 25px">
            <p class="col-md-4 mb-3">Opérationnel</p>
            <div class="container" style="margin-top: 10px">
                <div class="row">
                    <div class="col-1">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="operationnel">
                            <label class="custom-control-label" for="operationnel">Oui</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <select class="custom-select">
                            <option selected>Choisissez votre horaire</option>
                            <option value="1">Jour</option>
                            <option value="2">Nuit</option>
                            <option value="3">Jour/Nuit</option>
                        </select>
                    </div>
                    <div class="col-1">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="operationnel2">
                            <label class="custom-control-label" for="operationnel2">Non</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <select class="custom-select">
                            <option selected>Choisissez votre horaire</option>
                            <option value="1">Jour</option>
                            <option value="2">Nuit</option>
                            <option value="3">Jour/Nuit</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationDefault03">Remarques</label>
                <input type="text" class="form-control" id="validationDefault03" placeholder="City" required>
            </div>
        </div>
        <br>
        <!--        --------------------------------------------                Rdv garage                --------------------------------------------        -->
        <div class="border" style="margin-left: 25px">
            <p class="col-md-4 mb-3">Rdv garage</p>
            <div class="container" style="margin-top: 10px">
                <div class="row">
                    <div class="col-1">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="rdvgarage">
                            <label class="custom-control-label" for="rdvgarage">Oui</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <select class="custom-select">
                            <option selected>Choisissez votre horaire</option>
                            <option value="1">Jour</option>
                            <option value="2">Nuit</option>
                            <option value="3">Jour/Nuit</option>
                        </select>
                    </div>
                    <div class="col-1">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="rdvgarage2">
                            <label class="custom-control-label" for="rdvgarage2">Non</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <select class="custom-select">
                            <option selected>Choisissez votre horaire</option>
                            <option value="1">Jour</option>
                            <option value="2">Nuit</option>
                            <option value="3">Jour/Nuit</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationDefault03">Remarques</label>
                <input type="text" class="form-control" id="validationDefault03" placeholder="City" required>
            </div>
        </div>
        <br>
        <!--        --------------------------------------------                Gt vhc avisé                --------------------------------------------        -->
        <div class="border" style="margin-left: 25px">
            <p class="col-md-4 mb-3">Gt vhc avisé</p>
            <div class="container" style="margin-top: 10px">
                <div class="row">
                    <div class="col-1">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="gtvhcavise">
                            <label class="custom-control-label" for="gtvhcavise">Oui</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <select class="custom-select">
                            <option selected>Choisissez votre horaire</option>
                            <option value="1">Jour</option>
                            <option value="2">Nuit</option>
                            <option value="3">Jour/Nuit</option>
                        </select>
                    </div>
                    <div class="col-1">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="gtvhcavise2">
                            <label class="custom-control-label" for="gtvhcavise2">Non</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <select class="custom-select">
                            <option selected>Choisissez votre horaire</option>
                            <option value="1">Jour</option>
                            <option value="2">Nuit</option>
                            <option value="3">Jour/Nuit</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationDefault03">Remarques</label>
                <input type="text" class="form-control" id="validationDefault03" placeholder="City" required>
            </div>
        </div>
        <br>
        <!--        --------------------------------------------                50chf présent                --------------------------------------------        -->
        <div class="border" style="margin-left: 25px">
            <p class="col-md-4 mb-3">50chf présent</p>
            <div class="container" style="margin-top: 10px">
                <div class="row">
                    <div class="col-1">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="50chfpresent">
                            <label class="custom-control-label" for="50chfpresent">Oui</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <select class="custom-select">
                            <option selected>Choisissez votre horaire</option>
                            <option value="1">Jour</option>
                            <option value="2">Nuit</option>
                            <option value="3">Jour/Nuit</option>
                        </select>
                    </div>
                    <div class="col-1">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="50chfpresent2">
                            <label class="custom-control-label" for="50chfpresent2">Non</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <select class="custom-select">
                            <option selected>Choisissez votre horaire</option>
                            <option value="1">Jour</option>
                            <option value="2">Nuit</option>
                            <option value="3">Jour/Nuit</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationDefault03">Remarques</label>
                <input type="text" class="form-control" id="validationDefault03" placeholder="City" required>
            </div>
        </div>
        <br>
        <!--        --------------------------------------------                Problèmes d'interventions hors véhicules                --------------------------------------------        -->
        <div class="border" style="margin-left: 25px">
            <p class="col-md-4 mb-3">Problèmes d'interventions hors véhicules</p>
            <div class="container" style="margin-top: 10px">
                <div class="row">
                    <div class="col-1">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="gtvhcavise">
                            <label class="custom-control-label" for="gtvhcavise">Oui</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <select class="custom-select">
                            <option selected>Choisissez votre horaire</option>
                            <option value="1">Jour</option>
                            <option value="2">Nuit</option>
                            <option value="3">Jour/Nuit</option>
                        </select>
                    </div>
                    <div class="col-1">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="gtvhcavise2">
                            <label class="custom-control-label" for="gtvhcavise2">Non</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <select class="custom-select">
                            <option selected>Choisissez votre horaire</option>
                            <option value="1">Jour</option>
                            <option value="2">Nuit</option>
                            <option value="3">Jour/Nuit</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationDefault03">Remarques</label>
                <input type="text" class="form-control" id="validationDefault03" placeholder="City" required>
            </div>
        </div>
        <br>
        <br>
    </div>
<br>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>