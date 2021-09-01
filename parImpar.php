<?php

$n_Inicial =0;
$n_Final = 0;
$par=null;
$impar=null;
$qntdePar=null;
$qntdeImpar=null;

if(isset($_POST['btnCalcular']))
{
    $n_Inicial = $_POST['txtNumeroInicial'];
    $n_Final = $_POST['txtNumeroFinal'];
    
    for($cont=$n_Inicial;$cont<=$n_Final;$cont++)
    {
 
         if($cont % 2 ==0)
         {
             $par=$par.$cont."<br>";
             $qntdePar++;
         }
        
         else 
         {
             $impar=$impar.$cont."<br>";
             $qntdeImpar++;
         } 
        
    }
     
}
 



?>

<html>
    <head>
        <title> Munu drop</title>       
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <header>
            <div class="caixaMenu3">
                <ul id="menu">

                    <li class="menuItem">
                        Menu 
                        <div id="caixaSubMenu">
                            <ul>
                               <li>
                                <a href="home.html">home </a>
                                </li>
                                <li>
                                    <a href="../Aula03/medias.php">medias
                                    </a>
                                </li>
                                <li> 
                                    <a href="../Aula05/if/calculadora.php">
                                    calculadora
                                    </a>
                                </li>
                                <li>
                                    <a href="tabuada.php">tabuada</a>
                                </li>
                                <li>
                                    <a href="ParImpar.php">
                                        par ou impar
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>

            </div>
        
        </header>
   
            
        
        <div id="caixaParImpar">
            <form name="frmParImpar" method="post" action="">
                
                <div class="caixasDeTexto">
                     <label>
                         Numero inicial:
                    </label>
                    <select name="txtNumeroInicial">
                        <option value="">
                            <?php
                            for($cont=0;$cont<=500;$cont++)
                            {
                                echo("<option value='".$cont."'>".$cont."</option>");
                            } 
                            ?>
                        </option>
                    </select>
                        
                </div>
                
                <div class="caixasDeTexto">
                     <label>Numero final: </label>
                    <select name="txtNumeroFinal">
                        <option value="">
                            <?php
                            for($cont=100;$cont<=1000;$cont++)
                            {
                                echo("<option value='".$cont."'>".$cont."</option>");
                            } 
                            ?>
                        </option>
                    
                    </select> 
                </div>
    
                <div id="botao">
                    <input type="submit" name="btnCalcular" value="Calcular">
                
                </div>
                
                <div id="blocoPar">
                    <div id="par">
                    par
                    <br>
                    <?=$par?>
                </div>
                
                  <div id="quantidadePar">
                    Quantidade de n° pares
                    <br>
                    <?=$qntdePar?>
                </div>
                
                </div>
                
                <div id="blocoImpar">
                    <div id="impar">
                        impar 
                        <br>
                        <?= $impar?>
                    </div>

                     <div id="quantidadeImpar">
                        Quantidade de n° impares
                        <br>
                        <?=$qntdeImpar?>
                    </div>
                </div>
            </form>
        </div>
   
    </body>

</html>