<?php
    function shift($count, $phrase){
      $phrase = strtolower($phrase);
      
      $letters = "abcdefghijklmnopqrstuvwxyz";
      $a = str_split($letters);
      $b = str_split($letters);
      $s = $count + 1;
      for($i = 0; $i < sizeof($a); $i++){
        $pos = $i + $s - 1;
        if($i + $s > sizeof($a))
          $pos = $s - (sizeof($a) - $i) - 1;
        $b[$pos] = $a[$i];
      }
      
      $return = "";
      $phrase = str_split($phrase);
      foreach($phrase as $letter){
        if($letter == " " || $letter == "'" || $letter == "." || $letter == "," || $letter == "(" || $letter == ")"){
          $return .= $letter;
        } else {
          $return .= $b[array_search($letter, $a)];
        }
      }
      
      return strtoupper($return);
    }
    
    if(isset($_GET["answer"])){
      if("avocados" == $_GET["answer"]){
        echo "correct";
      }
    }
?>
<!doctype html>
<html lang=en>
<head>
  <meta charset=utf-8>
  <title>Luke Ogburn</title>
  <link rel='shortcut icon' type=image/png href=/walker.png>
  <link rel=stylesheet href=/style.css>
  <meta name=viewport content="width=device-width,initial-scale=1.0">
</head>
<body>
  
  <?php $num = random_int(1, 25); ?>
  <p><?=shift($num, "MERRY CHRISTMAS");?></p>
  <p><?=shift($num, "I HOPE THESE ARE STILL INTERESTING");?></p>

  <!-- <?=shift($num, "maybe it's time to /shift it over");?> -->
  
  <form method=GET action="">
    <input type=text placeholder=ANSWER name=answer autocomplete=off autofocus><br>
    <input type=submit class=hidden>
  </form>
  
  <!--
    I like it when you find an answer to something and get excited
    about it. So let's make this a coding challenge. Translate:
    
    <?=shift($num, "Honestly I really just needed filler text here but also honestly I think that you're kinda a cool person who deserves love and to be pursued. You love so purely and when you're comfortable enough, you open yourself up. You have shown me who you are and it is beautiful. I love you. Merry Christmas. The answer is avocados.");?>
  
  -->
</body>
</html>

