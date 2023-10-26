<?php

include('config.php');

// Check if the request method is POST
///// here
if(isset($_POST['submit'])){

    // Retrieve the form data
    $date = $_POST["date"];
    $nomPrenom = $_POST["nomPrenom"];
    $age = $_POST["age"];
    $poids = $_POST["poids"];
    $taille = $_POST["taille"];
    $tabagisme = $_POST["tabagisme"];
    $paquetsAnnees = isset($_POST["paquetsAnnees"]) ? $_POST["paquetsAnnees"] : null;
    $paAlcool = $_POST["paAlcool"];
    $glucides = $_POST["glucides"];
    $lippides = $_POST["lippides"];
    $fruits = $_POST["fruits"];
    $legumes = $_POST["legumes"];
    $cereales = $_POST["cereales"];
    $viandesRouges = $_POST["viandesRouges"];
    $sel = $_POST["sel"];
    $activitePhysique = $_POST["activitePhysique"];
    $contraceptifsOraux = $_POST["contraceptifsOraux"];
    $dureeContraceptifs = isset($_POST["dureeContraceptifs"]) ? $_POST["dureeContraceptifs"] : null;
    $atcdsPersonnels = $_POST["atcdsPersonnels"];
    $preciserATCDSPersonnels = isset($_POST["preciserATCDSPersonnels"]) ? $_POST["preciserATCDSPersonnels"] : null;
    $atcdsFamiliaux = $_POST["atcdsFamiliaux"];
    $preciserATCDSFamiliaux = isset($_POST["preciserATCDSFamiliaux"]) ? $_POST["preciserATCDSFamiliaux"] : null;
    $posteDeTravail = $_POST["posteDeTravail"];
    $dateEmbauche = $_POST["dateEmbauche"];
    $travailDeNuit = $_POST["travailDeNuit"];
    $anneesTravailDeNuit = isset($_POST["anneesTravailDeNuit"]) ? $_POST["anneesTravailDeNuit"] : null;
    $manipulationCytostatiques = $_POST["manipulationCytostatiques"];
    $anneesManipulationCytostatiques = isset($_POST["anneesManipulationCytostatiques"]) ? $_POST["anneesManipulationCytostatiques"] : null;
    $manipulationFormaldehyde = $_POST["manipulationFormaldehyde"];
    $anneesManipulationFormaldehyde = isset($_POST["anneesManipulationFormaldehyde"]) ? $_POST["anneesManipulationFormaldehyde"] : null;
    $expositionRayonnementsIonisants = $_POST["expositionRayonnementsIonisants"];
    $anneesExpositionRayonnementsIonisants = isset($_POST["anneesExpositionRayonnementsIonisants"]) ? $_POST["anneesExpositionRayonnementsIonisants"] : null;
    $autoPalpationSeins = $_POST["autoPalpationSeins"];
    $agePremieresRegles = $_POST["agePremieresRegles"];
    $menopause = $_POST["menopause"];
    $ageMenopause = isset($_POST["ageMenopause"]) ? $_POST["ageMenopause"] : null;
    $nombreGrossesses = $_POST["nombreGrossesses"];
    $allaitementSein = $_POST["allaitementSein"];
    $dureeAllaitement = isset($_POST["dureeAllaitement"]) ? $_POST["dureeAllaitement"] : null;
    $mammographie = $_POST["mammographie"];
    $echographieMammaire = $_POST["echographieMammaire"];
    $derniereDate = $_POST["derniereDate"];
    $resultat = $_POST["resultat"];
    $rythmicite = $_POST["rythmicite"];




   // SQL query to insert data into the "questionnare" table
    $sql = "INSERT INTO  VALUES ('','$date', '$nomPrenom', '$age', '$poids', '$taille', '$tabagisme', '$paquetsAnnees', '$paAlcool', '$glucides', '$lippides', '$fruits', '$legumes', '$cereales', '$viandesRouges', '$sel', '$activitePhysique', '$contraceptifsOraux', '$dureeContraceptifs', '$atcdsPersonnels', '$preciserATCDSPersonnels', '$atcdsFamiliaux', '$preciserATCDSFamiliaux', '$posteDeTravail', '$dateEmbauche', '$travailDeNuit', '$anneesTravailDeNuit', '$manipulationCytostatiques', '$anneesManipulationCytostatiques', '$manipulationFormaldehyde', '$anneesManipulationFormaldehyde', '$expositionRayonnementsIonisants', '$anneesExpositionRayonnementsIonisants','$autoPalpationSeins', '$agePremieresRegles', '$menopause', '$ageMenopause', '$nombreGrossesses', '$allaitementSein', '$dureeAllaitement', '$mammographie', '$echographieMammaire', '$derniereDate', '$resultat', '$rythmicite')";

    if($conn->query($sql)===TRUE){
        echo('donne');
    }else{
        echo 'error'.$conn->error();
    }
}
?>
