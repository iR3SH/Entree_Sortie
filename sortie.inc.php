<div class="container-infos" id="infos">
    <form name="exit-form" id="exit-form" action="recap-sortie.php" method="POST" novalidate>
    <!-- section about the person's infos -->
    <h1 class="infos-title">INFORMATIONS SUR LA PERSONNE</h1>

    <div class="q-list">
        <!-- person's lastname -->
        <div class="question-block">
            <p class="questions"><i class="fas fa-asterisk pink"></i> - Nom:</p>
            <input type="text" class="form-control" id="nom" name="nom" placeholder="..." onkeyup='javascript:isCharSet()' required>
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
            <select name="contrat" id="contrat" class="form-control" onkeyup='javascript:isCharSet()' onchange='javascript:isCharSet()' required>
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
            <select name="service" id="service" class="form-control" onkeyup='javascript:isCharSet()' onchange='javascript:isCharSet()' required>
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
            <select name="section-analytique" id="section-analytique" class="form-control" onkeyup='javascript:isCharSet()' onchange='javascript:isCharSet()' required>
                <option value=''>Sélectionner</option>
                <option value='100000 - Direction Générale'>100000 - Direction Générale</option>
                <option value='100020 - Gestion de Production'>100020 - Gestion de Production</option>
                <option value='100040 - Production / Services Généraux'>100040 - Production / Services Généraux</option>
                <option value='100060 - Qualité'>100060 - Qualité</option>
                <option value='100070 - Laboratoire'>100070 - Laboratoire</option>
                <option value='120000 - Sécurité'>120000 - Sécurité</option>
                <option value='320000 - Bureau d'Etudes'>320000 - Bureau d'Etudes</option>
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
            <input type="text" class="form-control" id="superieur" name="superieur" placeholder="..." onkeyup='javascript:isCharSet()' required>
        </div>
    </div> <!-- /q-list -->

    <div class="arrow-info">
        <a href="#exit" id="to-exit" onclick="goToExit();"><i class="fas fa-angle-down fa-4x wow pulse" data-wow-iteration="20" data-wow-duration="1.25s"></i></a>
    </div>
</div> <!-- /container-info -->

    <!-- section for an exit -->    <!-- section for an exit -->    <!-- section for an exit -->    <!-- section for an exit -->

<div class="container-exit" id="exit">
    <h1 class="description-section">SORTIE</h1>

    <div class="q-list">
        <div class="date-block">
            <!-- date of expected exit -->
            <p class="questions"><i class="fas fa-asterisk pink"></i> Date de sortie prévue:</p>
            <input class="form-control" type="date" id="sortie-date-out" name="sortie-date-out" onkeyup='javascript:isCharSet()' onchange='javascript:isCharSet()' required>
        </div>
    </div>

    <hr class="small-line">

    <div class="q-list">
        <div class="question-block">
            <!-- recoverable PC -->
            <img src="images/recycle.jpg" alt="ordinateur récupérable" height="80" width="150">
            <p class="questions">Ordinateur récupérable par l'informatique?</p>
            <select  name="recup-pc" id="recup-pc" class="form-control">
                <option value='Non'>Non</option>
                <option value='Oui'>Oui</option>
            </select>
        </div>

        <div class="question-block" id="remove-recup">
            <!-- if unrecoverable who will use the PC? -->
            <p class="questions">Si non, par qui va-t-il être réutilisé?</p>
            <input class="form-control" type="text" name="qui-reutil-pc" placeholder="...">
        </div>
    </div>

    <hr class="small-line">

    <div class="q-list">
        <div class="question-block">
            <!-- documents that should be saved before reallocation -->
            <img src="images/doc_down.jpg" alt="doc à sauvegarder" height="100" width="100">
            <p class="questions">Documents à sauvegarder avant réaffectation?</p>
            <select name="save-doc" id="save-doc" class="form-control">
                <option value='Non'>Non</option>
                <option value='Oui'>Oui</option>
            </select>
        </div>

        <div class="question-block" id="remove-doc">
            <!-- which documents? -->
            <p class="questions">Lesquels?</p>
            <textarea class="form-control" name="quel-save-doc" style="resize:none"></textarea>
        </div>
    </div>

    <hr class="small-line">

    <div class="q-list">
        <div class="deleteacc-block">
            <!-- delete user account -->
            <img src="images/delete_acc.png" alt="suppression compte" height="100" width="100">
            <p class="questions">Suppression du compte utilisateur?</p>
            <h4 style="color:red;" class="wow pulse" data-wow-iteration="100" data-wow-duration="2.5s">ENTRAINE LA SUPPRESSION DE LA BOITE MAIL</h4>
            <select name="suppr-compte" id="suppr-compte" class="form-control">
                <option value='Non'>Non</option>
                <option value='Oui'>Oui</option>
            </select>
        </div>
    </div>

    <hr class="small-line">

    <div class="q-list">
        <div class="question-block remove-compte">
            <!-- keep email address -->
            <img src="images/email_alt.png" alt="suppression email" height="100" width="100">
            <p class="questions">Conservation de l'adresse e-mail?</p> <!-- faire un controle en lien avec la suppression du compte -->
            <select  name="conserv-email"  id="conserv-email" class="form-control">
                <option value='Non'>Non</option>
                <option value='Oui'>Oui</option>
            </select>
        </div>

        <div class="question-block" id="remove-email">
            <!-- until when? -->
            <p class="questions">Si oui, jusqu'à quelle date?</p>
            <input class="form-control" type="date" name="date-conserv-email">
        </div>
    </div>

    <hr class="small-line">

    <div class="q-list">
        <div class="question-block remove-compte">
            <!-- email redirection -->
            <img src="images/redirect_mail.png" alt="redirection email" height="100" width="100">
            <p class="questions">Redirection des futurs messages?</p>
            <select  name="redirect-email" id="redirect-email" class="form-control">
                <option value='Non'>Non</option>
                <option value='Oui'>Oui</option>
            </select>
        </div>

        <div class="question-block" id="remove-redirect">
            <!-- email redirection recipient -->
            <p class="questions">Si oui, vers quelle adresse? (Doit être une adresse de messagerie avec un @)</p>
            <input class="form-control" type="email" name="qui-redirect-email" placeholder="...">
        </div>
    </div>

    <hr class="small-line">
	<form id="form_btn2" action="#" method="POST">
    <div class="container-submit-btn">
        <input type="submit" value="Valider et accéder au récapitulatif" name="btn-submit-exit" id="btn-submit-exit" class="btn btn-lg btn-success">
    </div>
	<script>
	let inputElt = document.getElementById('nom');
	let inputElt2 = document.getElementById('prenom');
	let inputElt3 = document.getElementById('matricule');
	let inputElt4 = document.getElementById('badge');
	let inputElt5 = document.getElementById('contrat');
	let inputElt6 = document.getElementById('service');
	let inputElt7 = document.getElementById('section-analytique');
	let inputElt8 = document.getElementById('superieur');
	let inputElt9 = document.getElementById('sortie-date-out');
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
</div> <!-- /container-exit -->