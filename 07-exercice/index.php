<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Exercie calcule  -->

<form method="post" action="index.php">
        <input type="number" name="numberOne" placeholder="Number one" /><br />
        <input type="number" name="numberTwo" placeholder="Number two" /><br />
        <input type="submit" value="Calculate" />
        <br>
        <input type="radio" name="operation" value="+" checked> +<br>
        <input type="radio" name="operation" value="-"> -<br>
        <input type="radio" name="operation" value="*"> *<br>
        <input type="radio" name="operation" value="/"> /<br>

    </form>

    <?php 

    $a = $_POST['numberOne'];
    $b = $_POST['numberTwo'];

    $operation = $_POST['operation'];

    switch ($operation) {
      case "+":
        $result = $a + $b;
        break;
      case "-":
        $result = $a - $b;
        break;
      case "*":
        $result = $a * $b;
        break;
      case "/":
        $result = $a / $b;
        break;
      default:
        $result = "Invalid Operation";
    }
    
    echo "$result";
    
    ?>

    <!-- Exercie Convertiseur -->

    <form method="post" action="index.php">
        <input type="number" name="Euros">
        <!-- <input type="number" name="bitcoin">Bitcoin -->
        <input type="submit" value="convert">
        <input type="radio" name="operations" value="Euross"> Euros<br>
        <input type="radio" name="operations" value="Bitcoin"> Bitcoin<br>
    </form>

    <?php 
       $euros = $_POST['Euros'];
       //$bitcoin = $_POST['bitcoin'];
        $valeurBitcoin = 20335;


       $convert = $_POST['operations'];

       switch ($convert) {
        case 'Euross' :
            $resultat = $euros / $valeurBitcoin;
            break;
        case 'Bitcoin' :
            $resultat = $valeurBitcoin / $euros;
       }

       echo "$resultat";
    
    ?>

</body>
</html>