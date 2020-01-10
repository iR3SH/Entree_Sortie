<div class="container-infos" id="infos">
    <form name="entry-form" id="entry-form" action= "recap-entree.php" method="POST" novalidate>
    <!-- section about the person's infos -->
    <h1 class="infos-title">INFORMATIONS SUR LA PERSONNE</h1>
    <div class="q-list">
        <!-- person's lastname -->
        <div class="question-block">
            <p class="questions"><i class="fas fa-asterisk pink"></i> - Nom:</p>
            <input type="text" class="form-control" id="nom1" name="nom1" placeholder="..." onkeyup='javascript:isCharSet()' required>
        </div>

        <!-- person's firstname -->
        <div class="question-block">
            <p class="questions"><i class="fas fa-asterisk pink"></i> - Prénom:</p>
            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="..." onkeyup='javascript:isCharSet()' required>
        </div>

        <!-- registration number -->
        <div class="question-block">
            <p class="questions"><i class="fas fa-asterisk pink"></i> - Matricule:</p>
            <input type="number" class="form-control" id="matricule" name="matricule" placeholder="..." onkeyup='javascript:isCharSet()' required>
        </div>

        <!-- badge -->
        <div class="question-block">
            <p class="questions"><i class="fas fa-asterisk pink"></i> - N° Badge: (5 derniers caractères)</p>
            <input type="text" class="form-control" id="badge" name="badge" placeholder="..." onkeyup='javascript:isCharSet()' onchange='javascript:isCharSet()' required>
        </div>

        <!-- contract type -->
        <div class="question-block">
        <p class="questions"><i class="fas fa-asterisk pink"></i> - Type de contrat:</p>
            <select name="contrat" id="contrat" class="form-control" onchange='javascript:isCharSet()' onkeyup='javascript:isCharSet()' required>
                <option value="">Sélectionner</option>
                <option value="Alternance">Alternance</option>
                <option value="CDD">CDD</option>
                <option value="CDI">CDI</option>
                <option value="Intérimaire">Intérimaire</option>
                <option value="Stagiaire">Stagiaire</option>
                <option value="Autre">Autre</option>
            </select> 
        </div>

        <!-- department -->
        <div class="question-block">
            <p class="questions"><i class="fas fa-asterisk pink"></i> - Service:</p>
            <select name="service" id="service" class="form-control" onchange='javascript:isCharSet()' onkeyup='javascript:isCharSet()' required>
                <option value="">Sélectionner</option>
                <option value="Achats">Achats</option>
                <option value="Bobinage">Bobinage</option>
                <option value="Bureau d'études">Bureau d'études</option>
                <option value="Comptabilité">Comptabilité</option>
                <option value="Environnement / Sécurité">Environnement / Sécurité</option>
                <option value="Gestion de Production">Gestion de Production</option>
                <option value="Informatique">Informatique</option>
                <option value="Laboratoire">Laboratoire</option>
                <option value="Maintenance">Maintenance</option>
                <option value="Marketing">Marketing</option>
                <option value="Méthodes">Méthodes</option>
                <option value="Outillage">Outillage</option>
                <option value="Qualité">Qualité</option>
                <option value="Service du Personnel">Service du Personnel</option>
                <option value="Service Machines">Service Machines</option>
                <option value="Traitement de Surface">Traitement de Surface</option>
                <option value="Ventes">Ventes</option>
            </select> 
        </div>

        <div class="question-block">
            <!-- analytical section -->
            <p class="questions"><i class="fas fa-asterisk pink"></i> - Section analytique:</p>
            <select name="section-analytique" id="section-analytique" class="form-control" onchange='javascript:isCharSet()' onkeyup='javascript:isCharSet()' required>
                <option value=''>Sélectionner</option>
                <option value='100000 - Direction Générale'>100000 - Direction Générale</option>
                <option value='100020 - Gestion de Production'>100020 - Gestion de Production</option>
                <option value='100040 - Production / Services Généraux'>100040 - Production / Services Généraux</option>
                <option value='100060 - Qualité'>100060 - Qualité</option>
                <option value='100070 - Laboratoire'>100070 - Laboratoire</option>
                <option value='120000 - Sécurité'>120000 - Sécurité</option>
                <option value="320000 - Bureau d'Etudes">320000 - Bureau d'Etudes</option>
                <option value='330000 - Maintenance Générale'>330000 - Maintenance Générale</option>
                <option value='360004 - Méthodes'>360004 - Méthodes</option>
                <option value='360006 - Montage Machine & SAV externe'>360006 - Montage Machine & SAV externe</option>
                <option value='400000 - Ateliers de Production'>400000 - Ateliers de Production</option>
                <option value='410001 - Régleurs'>410001 - Régleurs</option>
                <option value='410002 - Agents de Production'>410002 - Agents de Production</option>
                <option value='410003 - Outilleurs'>410003 - Outilleurs</option>
                <option value='700000 - Département Traitement de Surface'>700000 - Département Traitement de Surface</option>
                <option value='910000 - Achats'>910000 - Achats</option>
                <option value='920000 - Comptabilité / Ressources Humaines'>920000 - Comptabilité / Ressources Humaines</option>
                <option value='920050 - Informatique'>920050 - Informatique</option>
                <option value='950010 - Administration des Ventes'>950010 - Administration des Ventes</option>
                <option value='950020 - Force de Vente'>950020 - Force de Vente</option>
                <option value='980000 - Marketing / Projets Produits'>980000 - Marketing / Projets Produits</option>
                <option value='980010 - Expédition'>980010 - Expédition</option>
            </select>
        </div>

        <!-- hierarchy -->
        <div class="question-block">
            <p class="questions"><i class="fas fa-asterisk pink"></i> - Supérieur hiérarchique:</p>
            <input type="text" class="form-control" name="superieur" id="superieur" placeholder="..." onkeyup='javascript:isCharSet()' required>
        </div>
    </div> <!-- /q-list -->

    <div class="arrow-info">
        <a href="#entry" id="to-entry" onclick="goToEntry()"><i class="fas fa-angle-down fa-4x wow pulse" data-wow-iteration="20" data-wow-duration="1.25s"></i></a>
    </div>
</div> <!-- /container-info -->


 <!-- section for a new entry --> <!-- section for a new entry --> <!-- section for a new entry --> <!-- section for a new entry -->

<div class="container-entry" id="entry">       
    <h1 class="description-section">ENTRÉE</h1>

    <div class="q-list">
        <div class="date-block">
            <!-- date of the arrival -->
            <p class="q-date"><i class="fas fa-asterisk pink"></i> Date d'entrée prévue:</p>
            <input type="date" name="date-in" id="date-in" class="form-control" onkeyup='javascript:isCharSet()' onchange='javascript:isCharSet()' required>
        </div>
        <div class="date-block" id="date-block-out">
            <!-- date of the exit (if specified on the contract) -->
            <p class="q-date">Date de sortie prévue (sauf CDI):</p>
            <input type="date" id="entree-date-out" name="entree-date-out" class="form-control"'>
        </div>
    </div>

    <hr class="small-line"> 

    <h3 class="sub-title">ÉQUIPEMENTS</h3>

    <div class="container-equipements">
        <div class="equipement-block">
            <!-- phone -->
            <img src="images/tel_fixe.png" alt="tel-fixe" height="100" width="100">
            <p class="questions">Tel fixe?</p>
            <select name="fixe" class="form-control">
                <option value='Non'>Non</option>
                <option value='Oui'>Oui</option>
            </select>
        </div>

        <div class="equipement-block">
            <!-- DECT -->
            <img src="images/dect.png" alt="DECT" height="100" width="80">
            <p class="questions">DECT?</p>
            <select name="dect" class="form-control">
                <option value='Non'>Non</option>
                <option value='Oui'>Oui</option>
            </select>
        </div>

        <div class="equipement-block">
            <!-- apple mobile -->
            <img src="images/iphone7.png" alt="Apple" height="100" width="80">
            <p class="questions">Apple?</p>
            <select name="apple" class="form-control">
                <option value='Non'>Non</option>
                <option value='Oui'>Oui</option>
            </select>
        </div>

        <div class="equipement-block">
            <img src="images/samsung_s8.png" alt="Android" height="100" width="80">
            <!-- android mobile -->
            <p class="questions">Android?</p>
            <select name="android" class="form-control">
                <option value='Non'>Non</option>
                <option value='Oui'>Oui</option>
            </select>
        </div>

        <div class="equipement-block">
            <!-- desktop station -->
            <img src="images/antec_isk.jpg" alt="PC-fixe" height="100" width="110">
            <p class="questions">PC fixe?</p>
            <select name="pc" class="form-control">
                <option value='Non'>Non</option>
                <option value='Oui'>Oui</option>
            </select>
        </div>

        <div class="equipement-block">
            <!-- laptop -->
            <img src="images/pc_portable.png" alt="PC-portable" height="100" width="120">
            <p class="questions">PC portable?</p>
            <select name="laptop" class="form-control">
                <option value='Non'>Non</option>
                <option value='Oui'>Oui</option>
            </select>
        </div>

        <div class="equipement-block">
            <!-- surface -->
            <img src="images/surface.png" alt="MS-surface" height="100" width="120">
            <p class="questions">Surface?</p>
            <select name="surface" class="form-control">
                <option value='Non'>Non</option>
                <option value='Oui'>Oui</option>
            </select>
        </div>
    </div>

    <div class="container-reuse">
        <div class="reuse-block">
            <!-- if the new guy uses existing equipment, specify the identification of the machine -->
            <p class="questions">En cas de réutilisation d'un matériel existant, indiquer les références de celui-ci ( N° H du PC ou N° d'appel du téléphone) et l'ancienne appartenance:</p>
            <textarea class="form-control" name="reaffectation" style="resize:none"></textarea>
        </div>
    </div>

    <hr class="small-line"> 

    <h3 class="sub-title">CONFIGURATION INFORMATIQUE</h3>

    <div class="container-config">
        <div class="config-block">
            <!-- computer brewing -->
            <img src="images/prise_murale.jpg" alt="prise_murale" height="100" width="120">
            <p class="questions">Prise murale à connecter:</p>
            <input class="form-control" type="text" name="brassage" placeholder="...">
        </div>

        <div class="config-block">
            <!-- new email -->
            <img src="images/email_alt.png" alt="mail" height="100" width="100">
            <p class="questions">Création adresse e-mail?</p>
            <select name="email" class="form-control">
                <option value='Non'>Non</option>
                <option value='Oui'>Oui</option>
            </select>
        </div>

        <div class="config-block">
            <!-- internet access -->
            <img src="images/internet.png" alt="acces-internet" height="100" width="100">
            <p class="questions">Accès internet autorisé?</p>
            <select name="internet" class="form-control">
                <option value='Non'>Non</option>
                <option value='Oui'>Oui</option>
            </select>
        </div>
    </div>

    <div class="container-config">
        <div class="config-block">
            <!-- SAP install -->
            <img src="images/sap.png" alt="install-sap" height="80" width="150">
            <p class="questions">Installation SAP?</p>
            <select name="sap" class="form-control">
                <option value='Non'>Non</option>
                <option value='Oui'>Oui</option>
            </select>
        </div>

        <div class="config-block">
            <!-- new SAP licence -->
            <img src="images/sap.png" alt="licence_sap" height="80" width="150">
            <p class="questions"><a href="/formulaire-nouvel-utilisateur_sap_si.docx">Nouvelle licence SAP ?</a></p>
            <select name="licence-sap" class="form-control">
                <option value='Non'>Non</option>
                <option value='Oui'>Oui</option>
            </select>
        </div>

        <div class="config-block">
            <!-- design office's article blueprints -->
            <img src="images/blueprint.png" alt="plan-articles-BE" height="100" width="150">
            <p class="questions">Installation plans articles BE?</p>
            <select name="articles-be" class="form-control">
                <option value='Non'>Non</option>
                <option value='Oui'>Oui</option>
            </select>
        </div>
    </div>
        
    <hr class="small-line"> 

    <!-- groups -->
    <h3 class="sub-title">INCLURE DANS LES GROUPES SUIVANTS:</h3>

    <div class="container-grp">
        <div class="grp-block">
            <input class="" type="checkbox" name="groups[]" id="grp1" value="SFA" checked="checked">
                <label for="grp1">SFA (Par défaut)</label>
        </div>
        <div class="grp-block">
            <input class="" type="checkbox" name="groups[]" id="grp2" value="Achats">
                <label for="grp2">Achats</label>
        </div>
        <div class="grp-block">
            <input class="" type="checkbox" name="groups[]" id="grp3" value="Agent de maîtrise">
                <label for="grp3">Agent de maîtrise</label>
        </div>
        <div class="grp-block">
            <input class="" type="checkbox" name="groups[]" id="grp4" value="BE">
                <label for="grp4">BE</label>
        </div>
        <div class="grp-block">
            <input class="" type="checkbox" name="groups[]" id="grp5" value="Cadres de permanence">
                <label for="grp5">Cadres de permanence</label>
        </div>
        <div class="grp-block">
            <input class="" type="checkbox" name="groups[]" id="grp6" value="Cadres forfait jour">
                <label for="grp6">Cadres forfait jour</label>
        </div>
        <div class="grp-block">
            <input class="" type="checkbox" name="groups[]" id="grp7" value="CAO">
                <label for="grp7">CAO</label>
        </div>
        <div class="grp-block">
            <input class="" type="checkbox" name="groups[]" id="grp8" value="Chefs de service">
                <label for="grp8">Chefs de service</label>
        </div>
        <div class="grp-block">
            <input class="" type="checkbox" name="groups[]" id="grp9" value="Chefs d'équipe">
                <label for="grp9">Chefs d'équipe</label>
        </div>
        <div class="grp-block">
            <input class="" type="checkbox" name="groups[]" id="grp10" value="CHSCT">
                <label for="grp10">CHSCT</label>
        </div>
        <div class="grp-block">
            <input class="" type="checkbox" name="groups[]" id="grp11" value="Codes SAP">
                <label for="grp11">Codes SAP</label>
        </div>
        <div class="grp-block">
            <input class="" type="checkbox" name="groups[]" id="grp12" value="Commercial">
                <label for="grp12">Commercial</label>
        </div>
        <div class="grp-block">
            <input class="" type="checkbox" name="groups[]" id="grp13" value="Comptabilité">
                <label for="grp13">Comptabilité</label>
        </div>
        <div class="grp-block">
            <input class="" type="checkbox" name="groups[]" id="grp14" value="CrimpGr">
                <label for="grp14">CrimpGr</label>
        </div>
        <div class="grp-block">
            <input class="" type="checkbox" name="groups[]" id="grp15" value="Déclaration présence et badgeage">
                <label for="grp15">Déclaration de présence et badgeage</label>
        </div>
        <div class="grp-block">
            <input class="" type="checkbox" name="groups[]" id="grp16" value="Diffusion CA">
                <label for="grp16">Diffusion CA</label>
        </div>
        <div class="grp-block">
            <input class="" type="checkbox" name="groups[]" id="grp17" value="Expédition">
                <label for="grp17">Expédition</label>
        </div>
        <div class="grp-block">
            <input class="" type="checkbox" name="groups[]" id="grp18" value="Labo Développement">
                <label for="grp18">Labo Développement</label>
        </div>
        <div class="grp-block">
            <input class="" type="checkbox" name="groups[]" id="grp19" value="Labo_SFA">
                <label for="grp19">Labo_SFA</label>
        </div>
        <div class="grp-block">
            <input class="" type="checkbox" name="groups[]" id="grp20" value="Méthodes">
                <label for="grp20">Méthodes</label>
        </div>
        <div class="grp-block">
            <input class="" type="checkbox" name="groups[]" id="grp21" value="PM_SFA">
                <label for="grp21">PM_SFA</label>
        </div>
        <div class="grp-block">
            <input class="" type="checkbox" name="groups[]" id="grp22" value="Production">
                <label for="grp22">Production</label>
        </div>
        <div class="grp-block">
            <input class="" type="checkbox" name="groups[]" id="grp23" value="Qualité">
                <label for="grp23">Qualité</label>
        </div>
        <div class="grp-block">
            <input class="" type="checkbox" name="groups[]" id="grp24" value="rapport-equipe">
                <label for="grp24">rapport-equipe</label>
        </div>
        <div class="grp-block">
            <input class="" type="checkbox" name="groups[]" id="grp25" value="Reception-SFA">
                <label for="grp25">Reception-SFA</label>
        </div>
        <div class="grp-block">
            <input class="" type="checkbox" name="groups[]" id="grp26" value="RH-Andlau">
                <label for="grp26">RH-Andlau</label>
        </div>
        <div class="grp-block">
            <input class="" type="checkbox" name="groups[]" id="grp27" value="Service Machine">
                <label for="grp27">Service Machine</label>
        </div>
        <div class="grp-block">
            <input class="" type="checkbox" name="groups[]" id="grp28" value="Ventes">
                <label for="grp28">Ventes</label>
        </div>
    </div>

    <hr class="small-line">

    <!-- printers -->
    <h3 class="sub-title">IMPRIMANTE(S) À CONFIGURER:</h3>

    <div class="container-impr">
        <div class="impr-block">
            <input type="checkbox" name="impr[]" id="impr1" value="IDNR : 709944 - Maintenance Outillages - Ricoh MP2550">
                <label for="impr1">IDNR : 709944 - Maintenance Outillages - Ricoh MP2550</label>
        </div>
        <div class="impr-block">
            <input type="checkbox" name="impr[]" id="impr2" value="IDNR : 709998 - Service Machines - Kyocera TaskAlfa 2551ci">
                <label for="impr2">IDNR : 709998 - Service Machines - Kyocera TaskAlfa 2551ci</label>
        </div>
        <div class="impr-block">
            <input type="checkbox" name="impr[]" id="impr3" value='IDNR : 709999 - BAO - Accueil RH - Ricoh MPC306Z'>
                <label for="impr3">IDNR : 709999 - BAO - Accueil RH - Ricoh MPC306Z</label>
        </div>
        <div class="impr-block">
            <input type="checkbox" name="impr[]" id="impr4" value='IDNR : 710005 - BAO - Couloir Haut - Ricoh MPC3003'>
                <label for="impr4">IDNR : 710005 - BAO - Couloir Haut - Ricoh MPC3003</label>
        </div>
        <div class="impr-block">
            <input type="checkbox" name="impr[]" id="impr5" value='IDNR : 710006 - Local Reprographie - Ricoh MPC 4503' checked="checked">
                <label for="impr5">IDNR : 710006 - Local Reprographie - Ricoh MPC 4503</label>
        </div>
        <div class="impr-block">
            <input type="checkbox" name="impr[]" id="impr6" value='IDNR : 710028 - Expédition Bureau - Kyocera TaskAlfa 3010i'>
                <label for="impr6">IDNR : 710028 - Expédition Bureau - Kyocera TaskAlfa 3010i</label>
        </div>
        <div class="impr-block">
            <input type="checkbox" name="impr[]" id="impr7" value='IDNR : 710466 - Qualité - Kyocera FS-2100'>
                <label for="impr7">IDNR : 710466 - Qualité - Kyocera FS-2100</label>
        </div>
        <div class="impr-block">
            <input type="checkbox" name="impr[]" id="impr8" value='IDNR : 710467 - BAO - Accueil RH - Kyocera FS-2100'>
                <label for="impr8">IDNR : 710467 - BAO - Accueil RH - Kyocera FS-2100</label>
        </div>
        <div class="impr-block">
            <input type="checkbox" name="impr[]" id="impr9" value='IDNR : 710468 - Bureau Etudes - Kyocera FS-2100'>
                <label for="impr9">IDNR : 710468 - Bureau Etudes - Kyocera FS-2100</label>
        </div>
        <div class="impr-block">
            <input type="checkbox" name="impr[]" id="impr10" value='IDNR : 710469 - Outillage Conception (FZ) - Kyocera FS-2100'>
                <label for="impr10">IDNR : 710469 - Outillage Conception (FZ) - Kyocera FS-2100</label>
        </div>
        <div class="impr-block">
            <input type="checkbox" name="impr[]" id="impr11" value='IDNR : 710470 - Expédition Hall Bureau - Kyocera FS-2100'>
                <label for="impr11">IDNR : 710470 - Expédition Hall Bureau - Kyocera FS-2100</label>
        </div>
        <div class="impr-block">
            <input type="checkbox" name="impr[]" id="impr12" value='IDNR : 710471 - Expédition Hall Gauche - Kyocera FS-2100'>
                <label for="impr12">IDNR : 710471 - Expédition Hall Gauche - Kyocera FS-2100</label>
        </div>
        <div class="impr-block">
            <input type="checkbox" name="impr[]" id="impr13" value='IDNR : 710472 - BAO - Commercial Ventes - Kyocera FS-2100'>
                <label for="impr13">IDNR : 710472 - BAO - Commercial Ventes - Kyocera FS-2100</label>
        </div>
        <div class="impr-block">
            <input type="checkbox" name="impr[]" id="impr14" value='IDNR : 710473 - Informatique - Kyocera FS-2100'>
                <label for="impr14">IDNR : 710473 - Informatique - Kyocera FS-2100</label>
        </div>
        <div class="impr-block">
            <input type="checkbox" name="impr[]" id="impr15" value='IDNR : 710474 - BAO - Comptabilité - Kyocera FS-2100'>
                <label for="impr15">IDNR : 710474 - BAO - Comptabilité - Kyocera FS-2100</label>
        </div>
        <div class="impr-block">
            <input type="checkbox" name="impr[]" id="impr16" value='IDNR : 710475 - Expédition Hall Droite - Kyocera FS-2100'>
                <label for="impr16">IDNR : 710475 - Expédition Hall Droite - Kyocera FS-2100</label>
        </div>
        <div class="impr-block">
            <input type="checkbox" name="impr[]" id="impr17" value='IDNR : 710481 - Traitement de Surface - Kyocera FS-2100'>
                <label for="impr17">IDNR : 710481 - Traitement de Surface - Kyocera FS-2100</label>
        </div>
        <div class="impr-block">
            <input type="checkbox" name="impr[]" id="impr18" value='IDNR : 710496 - BAO - Achats - Kyocera M3540idn'>
                <label for="impr18">IDNR : 710496 - BAO - Achats - Kyocera M3540idn</label>
        </div>
        <div class="impr-block">
            <input type="checkbox" name="impr[]" id="impr19" value='IDNR : 710518 - Gestion de Production - Kyocera M3040idn'>
                <label for="impr19">IDNR : 710518 - Gestion de Production - Kyocera M3040idn</label>
        </div>
        <div class="impr-block">
            <input type="checkbox" name="impr[]" id="impr20" value='IDNR : 710519 - Réception Matières - Kyocera M3040idn'>
                <label for="impr20">IDNR : 710519 - Réception Matières - Kyocera M3040idn</label>
        </div>
        <div class="impr-block">
            <input type="checkbox" name="impr[]" id="impr21" value='IDNR : 712098 - Laboratoire - Aficio SP-8200DN'>
                <label for="impr21">IDNR : 712098 - Laboratoire - Aficio SP8200DN</label>
        </div>
        <div class="impr-block">
            <input type="checkbox" name="impr[]" id="impr22" value='IDNR : 712200 - Expedi3 (BL) - Kyocera P3045DN'>
                <label for="impr22">IDNR : 712200 - Laboratoire - Expedi3 (BL) - Kyocera P3045DN</label>
        </div>
        <div class="impr-block">
            <input type="checkbox" name="impr[]" id="impr23" value='IDNR : 707764 - Production Bureau Chefs Equip - Kyocera FS-2100DN'>
                <label for="impr23">IDNR : 707764 - Production Bureau Chefs Equip - Kyocera FS-2100DN</label>
        </div>
        <div class="impr-block">
            <!-- Empty because of odd number. Remove if even -->
        </div>
    </div>

    <hr class="small-line">

    <div class="container-soft">
        <div class="soft-block">
            <!-- software installs -->
            <p class="questions">Logiciels à installer (autres que SAP, Microsoft Office, Acrobat Reader, PDF Creator):</p>
            <textarea name="softs" style="resize:none" class="form-control"></textarea>
        </div>
    </div>

    <hr class="small-line">

    <div class="container-folder">
        <div class="folder-block">
            <!-- access rights to network folders -->
            <p class="questions">Droits d'accès aux dossiers suivants en précisant le niveau de droit (Lecture, Écriture):</p>
            <textarea name="droits" style="resize:none" class="form-control"></textarea>
        </div>
    </div>

    <hr class="small-line">
	<form id="form_btn" action="#" method="POST">
    <div class="container-submit-btn">
        <input type="submit" value="Valider et accéder au récapitulatif" name="btn-submit-exit" id="btn-submit-exit" class="btn btn-lg btn-success">
    </div>
	<script>
	let inputElt = document.getElementById('nom1');
	let inputElt2 = document.getElementById('prenom');
	let inputElt3 = document.getElementById('matricule');
	let inputElt4 = document.getElementById('badge');
	let inputElt5 = document.getElementById('contrat');
	let inputElt6 = document.getElementById('service');
	let inputElt7 = document.getElementById('section-analytique');
	let inputElt8 = document.getElementById('superieur');
	let inputElt9 = document.getElementById('date-in');
	let btn = document.getElementById('btn-submit-exit');
	// on commence par desactiver le bouton quand le javascript se charge
	btn.disabled = true;
	function isCharSet(){
	if (inputElt.value != "" && inputElt2.value != "" && inputElt3.value != "" && inputElt4.value != "" && inputElt5.value != "" && inputElt6.value != "" && inputElt7.value != "" && inputElt8.value != "" && inputElt9.value != "" && inputElt4.value.toString().length == 5) {
		btn.disabled = false;
	} else {
		btn.disabled = true;
	}
	}
	</script>
	</form>
    </form>
</div> <!-- /container-entry -->