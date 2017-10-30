<!DOCTYPE html>
<!--
bottom
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>calculate 2 nr. Farshid</title>
    </head>
    <body>
        <hr>
       
    <?php
    // Farshid php progeramma //
    echo "<h1> calculate your 2 nombers  </h1>";
    echo "<h2> bijvoorbeeld tevoegen op het adres baar ?n1=16&n2=9 </h2>";
    //24-10-2017
    echo "<br>";
    //<button type="button" >My Button</button>;
   
    $nummer1= $_GET['n1'];
    $nummer2= $_GET['n2'];
   
echo "<br><br>";
echo "<button type='button' style='margin-left:3%' onclick='alert($nummer1*$nummer2)'  >X</button>";
echo "<button type='button' style='margin-left:5%' onclick='alert($nummer1/$nummer2)'  >n1/n2</button>";
echo "<button type='button' style='margin-left:8%' onclick='alert($nummer2/$nummer1)'  >n2/n1</button>";
echo "<br><br>";
echo "<button type='button' style='margin-left:10%' onclick='alert($nummer1+$nummer2)'  >+</button>";
echo "<button type='button' style='margin-left:10%' onclick='alert($nummer1-$nummer2)'  >-</button>";
echo "<br><br>";
echo "<button type='button' style='margin-left:9%' onclick='alert($nummer1**0.5)'  >&radic; nr1</button>";
echo "<button type='button' style='margin-left:9%' onclick='alert($nummer2**0.5)'  >&radic; nr2</button>";

    ?>  
<br>
<hr>        
    </body>
</html>
