<!DOCTYPE html>
<html>
      
<head>
    <title>
        Lançamento de dados (JS)
    </title>
</head>
  
<body style="text-align:center;">
      
    <h1 style="color:red;">
        Lançamento de dados
    </h1>
      
    <h4>
        Aperte o botão para lançar os dados
    </h4>
    
    <button onclick="lancar()">Lancar</button>
    
    <script language = "javascript" type = "text/javascript">
        function lancar(){
            var dado1 = Math.floor(Math.random() * 6) + 1;
            var dado2 = Math.floor(Math.random() * 6) + 1;
            var dado3 = Math.floor(Math.random() * 6) + 1;
            var dado4 = Math.floor(Math.random() * 6) + 1;
            var soma1 = dado1 + dado2;
            var soma2 = dado3 + dado4;
            var vencedor = '';
            if(soma1 > soma2){
                vencedor = 'Jogador';
            }else if(soma1 == soma2){
                vencedor = 'Empate';
            }else{
                vencedor = 'Cpu';
            }
            document.getElementById("dados").innerHTML = [
            '<br>',
            'Somatório dos 2 dados do jogador: '+soma1+'<br>',
            '<img src="dice_Faces'+dado1+'_top.png">',
            '<img src="dice_Faces'+dado2+'_top.png"><br>',
            'Somatório dos 2 dados da cpu: '+soma2+'<br>',
            '<img src="dice_Faces'+dado3+'_top.png">',
            '<img src="dice_Faces'+dado4+'_top.png"><br>',
            'Vencedor: '+vencedor].join('');
        }
    </script>
      
    <p id="dados"></p>
    
</head>
  
</html>
