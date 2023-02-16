<form method="post">
  <label for="input">texte:</label>
  <input type="text" id="input" name="input"><br><br>
  <button type="submit">Obtenir l'acronyme</button>
</form>


<?php
function acronym($str)
{
  $words = explode(' ', $str);
  $acronym = '';
  foreach ($words as $word) {
    $acronym .= strtoupper($word[0]);
  }
  return $acronym;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $input = $_POST['input'];
  $acronym = acronym($input);
  echo $acronym;
}

?>

<h1>Conjugaison de verbes au présent</h1>
<form method="post">
  <label for="verb">Verbe :</label>
  <input type="text" name="verb" id="verb">
  <button type="submit" name="submit">Conjuguer</button>
</form>
<?php
if (isset($_POST["submit"])) {
  $verb = $_POST["verb"];

  function conjugateVerb($verb)
  {
    $pronouns = array("je", "tu", "il/elle/on", "nous", "vous", "ils/elles");
    $endings = array("e", "es", "e", "ons", "ez", "ent");

    $stem = substr($verb, 0, -2);

    for ($i = 0; $i < count($pronouns); $i++) {
      $conjugation = $pronouns[$i] . " " . $stem . $endings[$i];
      echo $conjugation . "<br>";
    }
  }

  conjugateVerb($verb);
}
?>