<?php	
/* Catégories en athlétisme
Poussin: avant 9 ans
Pupille : de 10 à 11 ans
Benjamin : de 12 à 13 ans
Minime : de 14 à 15 ans
Cadet : de 16 à 17 ans
Junior : de 18 à 19 ans
Espoir : de 20 à 22 ans
Senior : de 23 à 39 ans
Vétéran 1 : de 40 à 49 ans (35 ans au niveau international)
Vétéran 2 : de 50 à 59 ans
Vétéran 3 : à partir de 60 ans
Vétéran 4 : à partir de 70 ans (messieurs uniquement) 

Age obtenu avant le 31/12/année en cours, donc Age = annCourant - anNaissance
*/


	// Affichage en français (mois,...)
	setlocale(LC_TIME, 'fr'); 
	
	// Date du jour
	$DateDuJour = date("j/m/Y");
	echo "Aujourd'hui nous sommes le $DateDuJour";
	$anCourant = date_format($DateDuJour,"Y");
	$moisCourant = date_format($DateDuJour,"m");
	
	//Date issue du formulaire
	$rep=$_GET['uneDate'];
	echo "Date issue du formulaire : ".$rep;	
	echo("<br/>");
	
	// la date reçue en d/m/Y est convertie en DateTime au format Y/m/d + heure
	//$rep2=DateTime::createFromFormat("d/m/Y",$rep);
	
	$rep2=date_create_from_format("d/m/Y",$rep);
	//echo "Date convertie : ";
	//var_dump($rep2);
	

	// Pour l'affichage en format FRAN9AIS
	//echo $rep2->format("d-m-Y");
	
	echo date_format($rep2,"d-m-Y")."<br/>";
	
	$an= date_format($rep2,"Y");
	echo $an;
	
	
	// Pour insertion dans la BD au format anglais (champ de type DateTime)
	//echo $rep2->date;
	
	
	//$rep2= date_create($rep,timezone_open("Europe/Paris"));
	// Format de date : http://php.net/manual/fr/function.date.php
	//echo date_format($rep2, 'd/m/y');
	
	echo("<br/>");
	$jour= date_format($rep2, 'N');//N=1 (pour Lundi) à 7 (pour Dimanche)
	
	echo "Numéro du jour :".$jour."<br/>";
	
	switch ($jour)
	{
		case 1: echo "Lundi"; break;
		case 2: echo "Mardi"; break;
		case 3: echo "Mercredi"; break;
		case 4: echo "Jeudi"; break;
		case 5: echo "Vendredi"; break;
		case 6: echo "Samedi"; break;
		case 7: echo "Dimanche"; break;		
	}



/*$d= date("l");
echo $d;

if ($d == "Sunday") echo "dim";
else echo "autre";
//echo "Le timestamp de la date (DATE) récupérée en BD est ".strtotime($rep);
//$rep2=strtotime($rep);
*/

// Formats de date-format
//http://php.net/manual/fr/function.date.php

//$rep2 = strtotime($rep);
//echo $rep2;

/* $rep3 = date('l', strtotime($rep));
echo $rep3;
if ($rep3 == "Sunday") echo "dim";
else echo "autre"; */

/*
$rep2 = getdate();
echo date("l",$rep2);

if (strstr($rep,"Sunday")) echo "dimanche";
else echo "autre jour";

if (date("l",$rep ) == "sunday")  echo "dimanche";
 else echo "autre jour";

*/

//echo $rep;
?>