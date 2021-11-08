  <form action="" method="GET"  enctype="multipart/form-data">
    <div class="form-group">
      <label for="exampleInputEmail1">Entrez votre numero svp</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Numero" name="phone">
    </div>
    <button type="submit" class="btn btn-primary" name="ok">Submit</button>
  </form>


<?php

// j'ai stocker l'ensemble des prefixes de chaque reseau dans des tableau respective

$MTN =array("04", "05", "06", "44", "45", "46", "54", "55", "56",
"64","65","66", "74", "75", "76", "84", "85", "86", "94", "95", "96"
);
$Moov = array("01", "02", "03", "40", "41", "42", "43", "50", "51", "52", "53", "70", "71", "72", "73");

$Orange = array("07", "08", "09", "47", "48", "49", "57", "58", "59",
"67", "68", "69", "77", "78", "79", "87", "88", "89", "97", "98"
);


if (isset($_GET['ok'])) {
  // recupere la valeur phone par get et insertion dans la variable $phone

  $phone = $_GET['phone'];
  // echo $phone."<br>";
  // echo strlen($phone)."<br>";

  //recuperation des huit dernier chiffre de la variable phone dans la variable extention
  $extension = substr($phone,-8,8);

  // echo $extension ."<br>";

  //recuperation du prefix 
  $pref =substr($extension,0,2);

  // echo $pref."<br>";

  //parcour du tableau MTN et verifie si le prefix $pref existe parmis les elements du tableau 
  for ($i=0; $i<21; $i++) {

    if($MTN[$i]==$pref){
      $reseau= 'MTN';
      if ($reseau) {
        //affiche le reseau
        echo'Votre reseau est : '.$reseau. '<br>';
        //affiche le prefix
        echo'Votre prefix actuel est : '.$pref. '<br>';
        //affiche le numero transformé
        echo 'Votre nouveau numero transformé est : 05'.$extension;
        }
    }
}
//parcour du tableau Moov et verifie si le prefix $pref existe parmis les elements du tableau 
for ($i=0; $i<15; $i++) {

  if($Moov[$i]==$pref){
    $reseau= 'MOOV';
    if ($reseau) {
      //affiche le reseau
      echo'Votre reseau est : '.$reseau. '<br>';
      //affiche le prefix
      echo'Votre prefix actuel est : '.$pref. '<br>';
      //affiche le numero transformé
      echo 'Votre nouveau numero transformé est : 01'.$extension;
      }
  }
}
//parcour du tableau Moov et verifie si le prefix $pref existe parmis les elements du tableau 
for ($i=0; $i<20; $i++) {

  if($Orange[$i]==$pref){
    $reseau='ORANGE';
    if ($reseau) {
       //affiche le reseau
      echo'Votre reseau est : '.$reseau. '<br>';
       //affiche le prefix
      echo'Votre prefix actuel est : '.$pref. '<br>';
      //affiche le numero transformé
      echo 'Votre nouveau numero transformé est : 07'.$extension;
      }
  }
}

}

?>