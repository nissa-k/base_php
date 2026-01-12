//EX 1
Parmi les variables suivantes, lesquelles ont un nom valide : $a, $_a, $a_a, $AAA, $a!, $1a et $a1 ? 
ce qui est bon : $a, $_a, $a_a, $AAA et $a1.

//EX 2
<?php
   $note_maths = 15;
   $note_francais = 12;
   $note_histoire_geo = 9;
   $moyenne = ($note_maths + $note_francais + $note_histoire_geo) / 3;
   echo 'La moyenne est de '.$moyenne.' / 20.';
?>

//EX 3
<?php
   $prix_ht = 50;
   $tva = 20;
   $prix_ttc = $prix_ht + ($prix_ht * $tva / 100);
   echo 'Le prix TTC du produit est de '.$prix_ttc.' €.';
?>

//EX 4
Déclarer une variable $test qui contient la valeur 42. En utilisant la fonction var_dump(), faire en sorte que 
le type de la variable $test soit string et que la valeur soit bien de 42.
Les conditions (if, else et elseif)

<?php
$test = 42; 
if (is_int($test)) {
    $test = (string) $test;

} elseif (is_string($test)) {
    $test = $test;

} elseif ($test != 42) {
    $test = 42;
}
var_dump($test);
?>

//EX 5
Déclarer une variable $sexe qui contient une chaîne de caractères.
Créer une condition qui affiche un message différent en fonction de la valeur de la variable.
<?php
$sexe = "Femme";
if ($sexe == "Femme") {
    echo "Bonjour madame !";
} elseif ($sexe == "Homme") {
    echo "Bonjour monsieur !";
} else {
    echo "Bonjour !";
}
?>

//EX 6
Déclarer une variable $budget qui contient la somme de 1 553,89 €. 
Déclarer une variable $achats qui contient la somme de 1 554,76 €. 
Afficher si le budget permet de payer les achats.
<?php
$budget = 1553.89;
$achats = 1554.76;

if ($budget >= $achats) {
    echo "Tu peux";
} else {
    echo "Tu peux pas";
}
?>

//EX 7
Déclarer une variable $age qui contient la valeur de type integer de votre choix. 
Réaliser une condition pour afficher si la personne est mineure ou majeure.
<?php
$age = 18;
if ($age < 18) {
    echo "mineur";
} else {
    echo "majeur";
}
?>

//EX 8
Déclarer une variable $heure qui contient la valeur de type integer de votre choix comprise entre 0 et 24. 
Créer une condition qui affiche un message si l'heure est le matin, l'après-midi ou la nuit.
<?php
$heure = 10;
if ($heure >= 1 && $heure < 12) {
    echo " matin";
} elseif ($heure > 12 && $heure < 18) {
    echo " après-midi";
} else {
    echo " nuit";
}
?>

//EX 9
En utilisant la boucle while, afficher tous les codes postaux possibles pour le département 77 (de 77000 à 77999).
<?php
$code_postal = 77000;
while ($code_postal < 78000) {
    echo $code_postal . "\n";
    $code_postal++;
}
?>

//EX 10
En utilisant la boucle for, afficher la table de multiplication du chiffre 5.
<?php
for ($i = 0; $i <= 10; $i++) {
    $resultat = 5 * $i;
    echo "5 x " . $i . " = " . $resultat . "\n";
}
?>

//EX 11
En utilisant deux boucles for, écrire un script qui produit le résultat ci-dessous :
Plaintext
1
22
333
4444
55555
<?php
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $i;
    }
    echo "\n";
}
?>

//EX 12
Déclarer une variable avec le nom de votre choix et avec la valeur 0. Tant que cette variable n'atteint pas 20, il faut :
    • L'afficher ;
    • Incrémenter sa valeur de 2 ;
    • Si la valeur de la variable est égale à 10, la mettre en valeur avec la balise HTML appropriée (ex: <strong>).
<?php
$var = 0;
while ($var < 20) {
    if ($var == 10) {
        echo "<strong>" . $var . "</strong>\n";
    } else {
        echo $var . "\n";
    }
    $var += 2;
}
?>

//EX 13
Déclarer une variable de type array qui stocke les informations suivantes :
    • France : Paris
    • Allemagne : Berlin
    • Italie : Rome
Afficher les valeurs de tous les éléments du tableau en utilisant la boucle foreach.
<?php
$pays = array(
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "Italie" => "Rome"
);
foreach ($pays as $capitale) {
    echo $capitale . "\n";
}
?>

//EX 14
En utilisant la fonction rand(), remplir un tableau avec 10 nombres aléatoires. 
Puis, tester si le chiffre 42 est dans le tableau et afficher un message en conséquence. 
Enfin, afficher le contenu de votre tableau avec var_dump.
<?php
$tab = array();
for ($i = 0; $i < 10; $i++) {
    $tab[] = rand(1, 100);
}
if (in_array(42, $tab)) {
    echo "42 est dans le tableau.\n";
} else {
    echo "42 est pas dans le tableau.\n";
}
var_dump($tab);
?>

//EX 15
En utilisant la fonction rand(), remplir un tableau avec 10 nombres aléatoires. Puis, trier les valeurs dans deux tableaux distincts :
    1. Le premier contiendra les valeurs inférieures à 50.
    2. Le second contiendra les valeurs supérieures ou égales à 50.
Enfin, afficher le contenu des deux tableaux.
<?php
$tab = array();
for ($i = 0; $i < 10; $i++) {
    $tab[] = rand(1, 100);
}
$inf = array();
$sup = array();
foreach ($tab as $val) {
    if ($val < 50) {
        $inf[] = $val;
    } else {
        $sup[] = $val;
    }
}
?>

//EX 16
En utilisant le tableau ci-dessous, afficher seulement les pays qui ont une population supérieure ou égale à 20 millions d'habitants.
PHP
<?php
   $pays_population = array(
      'France' => 67595000,
      'Suede' => 9998000,
      'Suisse' => 8417000,
      'Kosovo' => 1820631,
      'Malte' => 434403,
      'Mexique' => 122273500,
      'Allemagne' => 82800000,
   );
   foreach ($pays_population as $pays => $population) {
       if ($population >= 20000000) {
           echo $pays . "\n";
       }
   }
?>

//EX 17
En utilisant le tableau de l'exercice précédent, compter le nombre d'éléments du tableau.
<?php
   $pays_population = array(
      'France' => 67595000,
      'Suede' => 9998000,
      'Suisse' => 8417000,
      'Kosovo' => 1820631,
      'Malte' => 434403,
      'Mexique' => 122273500,
      'Allemagne' => 82800000,
   );
   echo count($pays_population);
?>
ou 
<?php
   $pays_population = array(
      'France' => 67595000,
      'Suede' => 9998000,
      'Suisse' => 8417000,
      'Kosovo' => 1820631,
      'Malte' => 434403,
      'Mexique' => 122273500,
      'Allemagne' => 82800000,
   );
   $cpt = 0;
   foreach ($pays_population as $pays) {
       $cpt++;
   }
   echo $cpt;
?>

//EX 18
Quelle syntaxe permet d'afficher le deuxième élément du tableau $cocktails ?
PHP
<?php
   $cocktails = array('Mojito', 'Long Island Iced Tea', 'Gin Fizz', 'Moscow mule');
    echo $cocktails[1];
?>

//EX 19
Quelle syntaxe permet d'afficher l'âge de Manuel ?
PHP
<?php
   $personnes = array(
      'Jean' => 16,
      'Manuel' => 19,
      'André' => 66
   );
   echo $personnes['Manuel'];
?>