<!DOCTYPE html>
<head>
  
</head>
<body>

    <?php

    // echo "My first PHP Script";

    // $txt = "W3Schools.com";
    // $txt2 = "College de Maranding";
   // echo "I love " . $txt .' '. $txt2;

   // $x = 6;
   // $y = "Eljhon";
   // $z = 100;

  // echo "The result of  $x * $z = " . $z * $x;

  $t = date('D');
  echo 'Today is: '. $t.'<br />';
  if ($t <"20") {
      
      echo 'Have a good day!';
  }
  else {
      echo 'Continue your day';
      echo "<br>";
  }

  $age = 99;
  
  if ($age < 100 ){
      echo 'You are Immortal <br>';
     
  }
  else{

      echo 'You are dead <br />';
      
  }

  $age = 18;
  if($age >= 18){
      echo 'You can vote <br>';
  }
  else{
  echo 'Too young to vote ';
  }

  $pass = 'Hot';
  if($pass == 'password'){
      echo 'You are angel';
  }
  else {
      echo 'You are demon <br>';
  }

  for ($x =0; $x <= 10; $x++) {
      echo "The number is: $x <br>";
  }

  for ($x =10; $x >= 0; $x--) {
    echo "The number is: $x <br>";
}

    for ($x =5; $x <= 50; $x++) {
    echo "The number is: $x <br>";
}

    
    ?>

</body>
</html>