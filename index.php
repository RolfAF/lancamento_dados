<!DOCTYPE html>
<html>
      
<head>
    <title>
        Lançamento de dados (PHP)
    </title>
</head>
  
<body style="text-align:center;">
      
    <h1 style="color:red;">
        Lançamento de dados
    </h1>
      
    <h4>
        Aperte o botão para lançar os dados
    </h4>

    <form method="post">
        <input type="submit" name="lancar"
                value="Lançar"/>

    </form>
    
    <?php
      
        if(isset($_POST['lancar'])) {
            $dado1 = rand(1,6);
            $dado2 = rand(1,6);
            $dado3 = rand(1,6);
            $dado4 = rand(1,6);
            $soma1 = $dado1 + $dado2;
            $soma2 = $dado3 + $dado4;
            if($soma1 > $soma2){
                $vencedor = 'Jogador';
            }elseif($soma1 == $soma2){
                $vencedor = 'Empate';
            }else{
                $vencedor = 'Cpu';
            }
            echo "<br>";
            echo "Somatório dos 2 dados do jogador: $soma1<br>";
            echo "<img src='dice_Faces".$dado1."_top.png' >";
            echo "<img src='dice_Faces".$dado2."_top.png' ><br>";
            echo "Somatório dos 2 dados da cpu: $soma2<br>";
            echo "<img src='dice_Faces".$dado3."_top.png' >";
            echo "<img src='dice_Faces".$dado4."_top.png' ><br>";
            echo "Vencedor: $vencedor";
        }
    ?>
    
</head>
  
</html>
