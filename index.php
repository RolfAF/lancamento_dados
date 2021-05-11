<!DOCTYPE html>
<html>
      
<head>
    <title>
        Lancamento de dados (PHP)
    </title>
</head>
  
<body style="text-align:center;">
      
    <h1 style="color:red;">
        Lancamento de dados
    </h1>
      
    <h4>
        Aperte o botao para lancar os dados
    </h4>

    <form method="post">
        <input type="submit" name="button"
                value="Button"/>

    </form>
    
    <?php
      
        if(isset($_POST['button'])) {
            echo "<br>";
            echo "Somatorio dos seus 2 dados:<br>";
            echo "<img src='dice_Faces1_top.png' >";
            echo "<img src='dice_Faces2_top.png' ><br>";
            echo "Somatorio dos 2 dados da cpu:<br>";
            echo "<img src='dice_Faces3_top.png' >";
            echo "<img src='dice_Faces4_top.png' ><br>";
            echo "Vencedor:";
        }
    ?>
      

    
</head>
  
</html>
