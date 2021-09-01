<?php
$tabelaResult =0;

if(isset($_POST['btnCalcular']))
{
    $tabuada = $_POST['txtTabuada'];
    $contador = $_POST['txtContador'];
    $resultado = 0;
    
    
    for($cont=1;$cont<=$contador;$cont++)
    {
        $resultado = $tabuada*$cont;
        $tabelaResult = $tabelaResult.$tabuada." x ".$cont." = ".$resultado."<br />";
        
       
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
   
            <div class="caixaMenu2">
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
        
        <div id="caixaTabuada">
            <form name="frmTabuada" method="post" action="">
                
                <div class="caixasDeTexto">
                     <label>
                         
                    </label>
                    <input  type="text" name="txtTabuada" value="" size="10" maxlength="2">Tabuada:
                </div>
                
                <div class="caixasDeTexto">
                     <label>Contador: </label>
                <input type="text" name="txtContador" value="" maxlength="2">
                </div>
    
                <div id="botao">
                    <input type="submit" name="btnCalcular" value="Calcular">
                
                </div>
                
                <div>
                 <?=$tabelaResult?>
                </div>
            </form>
        </div>
   
    </body>

</html>
