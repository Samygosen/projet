<?php
session_start();

$sc15=0; $sc150=0;
$sc16=0; $sc160=0;
 /*Match15*/
 if(!empty($_POST['sc15'])){
    if($_POST['sc15']<1){
        $sc15=0;
    }
    else 
    setcookie('score15',$_POST['sc15']);
   $sc15=$_POST['sc15'];
}

if(!empty($_POST['sc150'])){
    setcookie('score150',$_POST['sc150']);
    $sc150=$_POST['sc150'];
}
/*Match16*/
if(!empty($_POST['sc16'])){
    if($_POST['sc16']<1){
        $sc16=0;
    }
    else 
    setcookie('score16',$_POST['sc16']);
   $sc8=$_POST['sc16'];
}

if(!empty($_POST['sc160'])){
    setcookie('score160',$_POST['sc160']);
    $sc160=$_POST['sc160'];
} 
?>


<!Doctype html>
<html> 
    <head> 
        <title>3eme Foot</title>
        <meta charset = "UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <nav id="a1">    
        <h1 id="co">Coupe 3eme infos</h1> 
        <img id="coup" src="coupe.jpg">
        <img id="inu" src="inuka.jpg">
        <marquee>Courtoisie: <strong>Etudiants 3e Sc Infos</strong></marquee>
    </nav>   
    <nav id="a2">
    <center>   
    <h3>Voici les equipes qui vont participer a la competition</h3>
        <table>
            <thead>
                <th>Lot #1 </br> Tete de serie 1</th>
                <th>Lot #2 </br> Tete de serie 2</th>
                <th>Lot #3 </br> Tete de serie 3</th>
                <th>Lot #4 </br> Tete de serie 4</th>
            </thead>
            <tbody>
               <tr>
                   <td>Bresil</td>
                   <td>France</td>
                   <td>Espagne</td>
                   <td>Portugal</td>
               </tr>
               <tr>
                   <td>Argentine</td>
                   <td>Italie</td>
                   <td>Allemagne</td>
                   <td>Haiti</td>
               </tr>
            </tbody>
        </table>
        
        <h3>Demi-Finale</h3>
        <table>
            <thead>
                <th>Demi-Finale</th>
                <th>Affiche</th>
                <th>Score</th>
            </thead>
            <tbody>
                <tr>
                    <td>Match 13</td>
                    <td><?=$_SESSION['prem1']?> vs <?=$_SESSION['deux2']?></td>
                    <td>
                                   <table>
                                        <tr>
                                            <td><?=htmlentities($_SESSION['sc13'])?></td>
                                            <td><?=htmlentities($_SESSION['sc130'])?></td>
                                        </tr>
                                    </table>
          
                    </td>
                </tr>
                
                <tr>
                    <td>Match 14</td>
                    <td><?=$_SESSION['prem2']?> vs <?=$_SESSION['deux1']?></td>
                    <td>
                                   <table>
                                        <tr>
                                            <td><?=htmlentities($_SESSION['sc14'])?></td>
                                            <td><?=htmlentities($_SESSION['sc140'])?></td>
                                        </tr>
                                    </table>
          
                    </td>
                </tr>
            </tbody>
        </table>
        <h3>Troisieme Place</h3>
        <table>
            <thead>
                <th>Troisieme Place</th>
                <th>Affiche</th>
                <th>Score</th>
            </thead>
            <tbody>
                <tr>
                    <td>Match 15</td>
                    <td><?=$_SESSION['p1']?> vs <?=$_SESSION['p2']?></td>
                    <td>
                        <?php if(isset($_POST['sc15'])) :?>                                
                                    <table>
                                        <tr>
                                            <td><?=htmlentities($sc15)?></td>
                                            <td><?=htmlentities($sc150)?></td>
                                        </tr>
                                    </table> 
                                   
                                <?php else: ?>

                                    <form Method="POST" action="">
                                <input type="number" name="sc15" placeholder="score1"required>
                                <input type="number" name="sc150"placeholder="score2"required>
                                
                                <?php endif; ?>
                    </td>
                                
                </tr>
            </tbody>
        </table>   
        <h3>Finale</h3> 
        <table>
            <thead>
            <th>Finale</th>
                <th>Affiche</th>
                <th>Score</th>
            </thead>
            <tbody>
                <tr>
                    <td>Match 16</td>
                    <td><?=$_SESSION['v1']?> vs <?=$_SESSION['v2']?></td>
                    <td>
                        <?php if(isset($_POST['sc16'])) :?>                                
                                    <table>
                                        <tr>
                                            <td><?=htmlentities($sc16)?></td>
                                            <td><?=htmlentities($sc160)?></td>
                                        </tr>
                                    </table> 
                                   
                                <?php else: ?>

                                    <form Method="POST" action="">
                                <input type="number" name="sc16" placeholder="score1"required>
                                <input type="number" name="sc160"placeholder="score2"required>
                                <input type="submit" value="confirme">
                                </form>
                                <?php endif; ?>
                                
                    </td>
                </tr>
                <?php
                                if($sc16>$sc160){
                                    $champion=$_SESSION['v1'];
                                }
                                else
                                    $champion=$_SESSION['v2'];
                                                                
                                ?>
            </tbody>
        </table>
        <?php if(isset($_POST['sc16'])) :?>
            <h3>L'equipe championne est:<?=$champion?></h3>
        <?php else: ?>
            <h3>Phase Finale</h3>
        <?php endif; ?>
        </center>
</nav>
        </body>
        </html>

                             