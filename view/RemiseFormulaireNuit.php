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
            <a class="nav-link disabled" href="?action=remiseformnuit" tabindex="-1" aria-disabled="true">Formulaire Nuit</a>
        </li>
    </ul>

    <h2>Nuit</h2>
    <form action="index.php?action=remiseformnuit" method="post">
        <div class="form-row">
            <!-- Base -->
            <div class="col-md-4 mb-3">
                <label for="nbase">Base</label>
                <input type="text" class="form-control" id="nbase" placeholder="base" name="nbase" required>
            </div>
            <!-- Date -->
            <div class="col-md-6 mb-3">
                <label for="ndate">Date</label>
                <input type="date" class="form-control" id="ndate" placeholder="00/00/0000" name="ndate" required>
            </div>
            <!-- Responsable de jour -->
            <div class="col-md-4 mb-3">
                <label for="nresponsabledejour">Responsable de jour</label>
                <input type="text" class="form-control"  id="nresponsabledejour" placeholder="Responsable de jour" name="nresponsablejour" required>
            </div>
            <!-- Responsable de nuit -->
            <div class="col-md-4 mb-3">
                <label for="nresponsabledenuit">Responsable de nuit</label>
                <input type="text" class="form-control" id="nresponsabledenuit" placeholder="Responsable de nuit" name="nresponsablenuit" required>
            </div>
            <!-- Équipage de jour -->
            <div class="col-md-4 mb-3">
                <label for="nequipedejour">Équipage de jour</label>
                <input type="text" class="form-control" id="nequipedejour" placeholder="Équipage de jour" name="nequipedejour" required>
            </div>
            <!-- Équipage de nuit -->
            <div class="col-md-4 mb-3">
                <label for="nequipedenuit">Équipage de nuit</label>
                <input type="text" class="form-control" id="nequipedenuit" placeholder="Équipage de nuit" name="nequipedenuit" required>
            </div>
            <!-- Véhicule de service jour -->
            <div class="col-md-4 mb-3">
                <label for="nvehiculedesjour">Véhicule de service jour</label>
                <input type="text" class="form-control" id="nvehiculedesjour" placeholder="Véhicule de service jour" name="nvehiculedesjour" required>
            </div>
            <!-- Véhicule de service nuit -->
            <div class="col-md-4 mb-3">
                <label for="nvehiculedesnuit">Véhicule de service nuit</label>
                <input type="text" class="form-control" id="nvehiculedesnuit" placeholder="Véhicule de service nuit" name="nvehiculedesnuit" required>
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
                            <input type="radio" id="radioRadio1" name="nradioRadio" class="custom-control-input" value="oui">
                            <label class="custom-control-label" for="radioRadio1">Oui</label>
                        </div>
                        <div class="custom-control custom-radio" style="margin-left: 50px">
                            <input type="radio" id="radioRadio2" name="nradioRadio" class="custom-control-input" value="non">
                            <label class="custom-control-label" for="radioRadio2">Non</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="remarqueradio">Remarques</label>
                    <input type="text" class="form-control" id="remarqueradio" placeholder="Remarques" name="nremarqueradio" required>
                </div>
            </div>
            <br>
            <!--        --------------------------------------------                Détecteur CO                --------------------------------------------        -->
            <div class="border" style="margin-left: 25px">
                <p class="col-md-4 mb-3">Détecteur CO</p>
                <div class="container" style="margin-top: 10px">
                    <div class="row">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="detecteurRadio1" name="ndetecteurRadio" class="custom-control-input" value="oui">
                            <label class="custom-control-label" for="detecteurRadio1">Oui</label>
                        </div>
                        <div class="custom-control custom-radio" style="margin-left: 50px">
                            <input type="radio" id="detecteurRadio2" name="ndetecteurRadio" class="custom-control-input" value="non">
                            <label class="custom-control-label" for="detecteurRadio2">Non</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="remarquedetecteurco">Remarques</label>
                    <input type="text" class="form-control" id="remarquedetecteurco" placeholder="Remarques" name="nremarquedetecteurco" required>
                </div>
            </div>
            <br>
            <!--        --------------------------------------------                Téléphone                --------------------------------------------        -->
            <div class="border" style="margin-left: 25px">
                <p class="col-md-4 mb-3">Téléphone</p>
                <div class="container" style="margin-top: 10px">
                    <div class="row">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="telephoneRadio1" name="ntelephoneRadio" class="custom-control-input" value="oui">
                            <label class="custom-control-label" for="telephoneRadio1" nmae>Oui</label>
                        </div>
                        <div class="custom-control custom-radio" style="margin-left: 50px">
                            <input type="radio" id="telephoneRadio2" name="ntelephoneRadio" class="custom-control-input" value="non">
                            <label class="custom-control-label" for="telephoneRadio2">Non</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="remarquedetecteurco">Remarques</label>
                    <input type="text" class="form-control" id="remarquetelephone" placeholder="Remarques" name="nremarquetelephone" required>
                </div>
            </div>
            <br>
            <!--        --------------------------------------------                Gt info avisé                --------------------------------------------        -->
            <div class="border" style="margin-left: 25px">
                <p class="col-md-4 mb-3">Gt info avisé</p>
                <div class="container" style="margin-top: 10px">
                    <div class="row">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="gtinfoaviseRadio1" name="ngtinfoaviseRadio" class="custom-control-input" value="oui">
                            <label class="custom-control-label" for="gtinfoaviseRadio1">Oui</label>
                        </div>
                        <div class="custom-control custom-radio" style="margin-left: 50px">
                            <input type="radio" id="gtinfoaviseRadio2" name="ngtinfoaviseRadio" class="custom-control-input" value="non">
                            <label class="custom-control-label" for="gtinfoaviseRadio2">Non</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="remarquegtinfoavise">Remarques</label>
                    <input type="text" class="form-control" id="remarquegtinfoavise" placeholder="Remarques" name="remarquegtinfoavise" required>
                </div>
            </div>
            <br>
            <!--        --------------------------------------------                Annonce 144                --------------------------------------------        -->
            <div class="border" style="margin-left: 25px">
                <p class="col-md-4 mb-3">Annonce 144</p>
                <div class="container" style="margin-top: 10px">
                    <div class="row">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="annonceRadio1" name="annonceRadio" class="custom-control-input" value="oui">
                            <label class="custom-control-label" for="annonceRadio1">Oui</label>
                        </div>
                        <div class="custom-control custom-radio" style="margin-left: 50px">
                            <input type="radio" id="annonceRadio2" name="annonceRadio" class="custom-control-input" value="non">
                            <label class="custom-control-label" for="annonceRadio2">Non</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="mjannonceremarque">Remarques</label>
                    <input type="text" class="form-control" id="remarquegtinfoavise" placeholder="Remarques" name="nremarqueannonce" required>
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
                            <input type="radio" id="pleinessenceRadio1" name="npleinessenceRadio" class="custom-control-input" value="oui">
                            <label class="custom-control-label" for="pleinessenceRadio1">Oui</label>
                        </div>
                        <div class="custom-control custom-radio" style="margin-left: 50px">
                            <input type="radio" id="pleinessenceRadio2" name="npleinessenceRadio" class="custom-control-input" value="non">
                            <label class="custom-control-label" for="pleinessenceRadio2">Non</label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="remarquepleinessence">Remarques</label>
                        <input type="text" class="form-control" id="remarquepleinessence" placeholder="Remarques" name="nremarquepleinessence" required>
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
                            <input type="radio" id="operationnelRadio1" name="noperationnelRadio" class="custom-control-input" value="oui">
                            <label class="custom-control-label" for="operationnelRadio1">Oui</label>
                        </div>
                        <div class="custom-control custom-radio" style="margin-left: 50px">
                            <input type="radio" id="operationnelRadio2" name="noperationnelRadio" class="custom-control-input" value="non">
                            <label class="custom-control-label" for="operationnelRadio2">Non</label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="remarqueoperationnel">Remarques</label>
                        <input type="text" class="form-control" id="remarqueoperationnel" placeholder="Remarques" name="nremarqueoperationnel" required>
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
                            <input type="radio" id="rdvgarageRadio1" name="nrdvgarageRadio" class="custom-control-input" value="oui">
                            <label class="custom-control-label" for="rdvgarageRadio1">Oui</label>
                        </div>
                        <div class="custom-control custom-radio" style="margin-left: 50px">
                            <input type="radio" id="rdvgarageRadio2" name="nrdvgarageRadio" class="custom-control-input" value="non">
                            <label class="custom-control-label" for="rdvgarageRadio2">Non</label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="remarquerdvgarage">Remarques</label>
                        <input type="text" class="form-control" id="remarquerdvgarage" placeholder="Remarques" name="nremarquerdvgarage" required>
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
                            <input type="radio" id="gtvhcaviseRadio1" name="ngtvhcaviseRadio" class="custom-control-input" value="oui">
                            <label class="custom-control-label" for="gtvhcaviseRadio1">Oui</label>
                        </div>
                        <div class="custom-control custom-radio" style="margin-left: 50px">
                            <input type="radio" id="gtvhcaviseRadio2" name="ngtvhcaviseRadio" class="custom-control-input" value="non">
                            <label class="custom-control-label" for="gtvhcaviseRadio2">Non</label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="mjremarquegtvhcavise">Remarques</label>
                        <input type="text" class="form-control" id="mjremarquegtvhcavise" placeholder="Remarques" name="nremarquegtvhcavise" required>
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
                            <input type="radio" id="fiftychfpresentRadio1" name="nfiftychfpresentRadio" class="custom-control-input" value="oui">
                            <label class="custom-control-label" for="fiftychfpresentRadio1">Oui</label>
                        </div>
                        <div class="custom-control custom-radio" style="margin-left: 50px">
                            <input type="radio" id="fiftychfpresentRadio2" name="nfiftychfpresentRadio" class="custom-control-input" value="non">
                            <label class="custom-control-label" for="fiftychfpresentRadio2">Non</label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="remarquefiftych">Remarques</label>
                        <input type="text" class="form-control" id="remarquefiftychfpresent" placeholder="Remarques" name="nremarquefiftychfpresent" required>
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
                            <input type="radio" id="probinterRadio1" name="nprobinterRadio" class="custom-control-input" value="oui">
                            <label class="custom-control-label" for="probinterRadio1">Oui</label>
                        </div>
                        <div class="custom-control custom-radio" style="margin-left: 50px">
                            <input type="radio" id="probinterRadio2" name="nprobinterRadio" class="custom-control-input" value="non">
                            <label class="custom-control-label" for="probinterRadio2">Non</label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="remarqueprobinter">Remarques</label>
                        <input type="text" class="form-control" id="remarqueprobinter" placeholder="Remarques" name="nremarqueprobinter" required>
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
