<?php
session_start();
/*variable pour calculer les differentes elements du classement*/
//groupe A
$pn1a=0; $pn1b=0; $pn1c=0;
$ben1a=0; $ben1b=0; $ben1c=0;
$bmn1a=0; $bmn1b=0; $bmn1c=0;
$mjn1a=0; $mjn1b=0; $mjn1c=0;
$mgn1a=0; $mgn1b=0; $mgn1c=0;
$mpn1a=0; $mpn1b=0; $mpn1c=0;
$mnn1a=0; $mnn1b=0; $mnn1c=0;

$pn2a=0; $pn2b=0; $pn2c=0; 
$ben2a=0; $ben2b=0; $ben2c=0;
$bmn2a=0; $bmn2b=0; $bmn2c=0;
$mjn2a=0; $mjn2b=0; $mjn2c=0;
$mgn2a=0; $mgn2b=0; $mgn2c=0;
$mpn2a=0; $mpn2b=0; $mpn2c=0;
$mnn2a=0; $mnn2b=0; $mnn2c=0;

$pn3a=0; $pn3b=0; $pn3c=0; 
$ben3a=0; $ben3b=0; $ben3c=0;
$bmn3a=0; $bmn3b=0; $bmn3c=0;
$mjn3a=0; $mjn3b=0; $mjn3c=0;
$mgn3a=0; $mgn3b=0; $mgn3c=0;
$mpn3a=0; $mpn3b=0; $mpn3c=0;
$mnn3a=0; $mnn3b=0; $mnn3c=0;

$pn4a=0; $pn4b=0; $pn4c=0;
$ben4a=0; $ben4b=0; $ben4c=0;
$bmn4a=0; $bmn4b=0; $bmn4c=0;
$mjn4a=0; $mjn4b=0; $mjn4c=0;
$mgn4a=0; $mgn4b=0; $mgn4c=0;
$mpn4a=0; $mpn4b=0; $mpn4c=0;
$mnn4a=0; $mnn4b=0; $mnn4c=0;

//groupe B
$pn11a=0; $pn11b=0; $pn11c=0;
$ben11a=0; $ben11b=0; $ben11c=0;
$bmn11a=0; $bmn11b=0; $bmn11c=0;
$mjn11a=0; $mjn11b=0; $mjn11c=0;
$mgn11a=0; $mgn11b=0; $mgn11c=0;
$mpn11a=0; $mpn11b=0; $mpn11c=0;
$mnn11a=0; $mnn11b=0; $mnn11c=0;

$pn22a=0; $pn22b=0; $pn22c=0; 
$ben22a=0; $ben22b=0; $ben22c=0;
$bmn22a=0; $bmn22b=0; $bmn22c=0;
$mjn22a=0; $mjn22b=0; $mjn22c=0;
$mgn22a=0; $mgn22b=0; $mgn22c=0;
$mpn22a=0; $mpn22b=0; $mpn22c=0;
$mnn22a=0; $mnn22b=0; $mnn22c=0;

$pn33a=0; $pn33b=0; $pn33c=0; 
$ben33a=0; $ben33b=0; $ben33c=0;
$bmn33a=0; $bmn33b=0; $bmn33c=0;
$mjn33a=0; $mjn33b=0; $mjn33c=0;
$mgn33a=0; $mgn33b=0; $mgn33c=0;
$mpn33a=0; $mpn33b=0; $mpn33c=0;
$mnn33a=0; $mnn33b=0; $mnn33c=0;

$pn44a=0; $pn44b=0; $pn44c=0;
$ben44a=0; $ben44b=0; $ben44c=0;
$bmn44a=0; $bmn44b=0; $bmn44c=0;
$mjn44a=0; $mjn44b=0; $mjn44c=0;
$mgn44a=0; $mgn44b=0; $mgn44c=0;
$mpn44a=0; $mpn44b=0; $mpn44c=0;
$mnn44a=0; $mnn44b=0; $mnn44c=0;

/*cookie pour affichage automatique des scores*/
//Variable des score
$sc1=0; $sc11=0;
$sc2=0; $sc22=0;
$sc3=0; $sc33=0;
$sc4=0; $sc44=0;
$sc5=0; $sc55=0;
$sc6=0; $sc66=0;
$sc7=0; $sc77=0;
$sc8=0; $sc88=0;
$sc9=0; $sc99=0;
$sc10=0; $sc100=0;
$sc101=0; $sc110=0;
$sc12=0; $sc120=0;
$sc13=0; $sc130=0;
$sc14=0; $sc140=0;
$sc15=0; $sc150=0;
$sc16=0; $sc160=0;
 
/*Match1*/
if(!empty($_POST['sc1'])){
    if($_POST['sc1']<1){
        $sc1=0;
    }
    else 
    setcookie('score1',$_POST['sc1']);
   $sc1=$_POST['sc1'];
}

if(!empty($_POST['sc11'])){
    setcookie('score11',$_POST['sc11']);
    $sc11=$_POST['sc11'];
}
/*Match2*/
if(!empty($_POST['sc2'])){
    if($_POST['sc2']<1){
        $sc2=0;
    }
    else 
    setcookie('score2',$_POST['sc2']);
   $sc2=$_POST['sc2'];
}

if(!empty($_POST['sc22'])){
    setcookie('score22',$_POST['sc22']);
    $sc22=$_POST['sc22'];
}

/*Match3*/
if(!empty($_POST['sc3'])){
    if($_POST['sc3']<1){
        $sc3=0;
    }
    else 
    setcookie('score3',$_POST['sc3']);
   $sc3=$_POST['sc3'];
}

if(!empty($_POST['sc33'])){
    setcookie('score33',$_POST['sc33']);
    $sc33=$_POST['sc33'];
}
/*Match4*/
if(!empty($_POST['sc4'])){
    if($_POST['sc4']<1){
        $sc4=0;
    }
    else 
    setcookie('score4',$_POST['sc4']);
   $sc4=$_POST['sc4'];
}

if(!empty($_POST['sc44'])){
    setcookie('score44',$_POST['sc44']);
    $sc44=$_POST['sc44'];
}
/*Match5*/
if(!empty($_POST['sc5'])){
    if($_POST['sc5']<1){
        $sc5=0;
    }
    else 
    setcookie('score5',$_POST['sc5']);
   $sc5=$_POST['sc5'];
}

if(!empty($_POST['sc55'])){
    setcookie('score55',$_POST['sc55']);
    $sc55=$_POST['sc55'];
}
/*Match6*/
if(!empty($_POST['sc6'])){
    if($_POST['sc6']<1){
        $sc6=0;
    }
    else 
    setcookie('score6',$_POST['sc6']);
   $sc6=$_POST['sc6'];
}

if(!empty($_POST['sc66'])){
    setcookie('score66',$_POST['sc66']);
    $sc66=$_POST['sc66'];
}
/*Match7*/
if(!empty($_POST['sc7'])){
    if($_POST['sc7']<1){
        $sc7=0;
    }
    else 
    setcookie('score7',$_POST['sc7']);
   $sc7=$_POST['sc7'];
}

if(!empty($_POST['sc77'])){
    setcookie('score77',$_POST['sc77']);
    $sc77=$_POST['sc77'];
}
/*Match8*/
if(!empty($_POST['sc8'])){
    if($_POST['sc8']<1){
        $sc8=0;
    }
    else 
    setcookie('score8',$_POST['sc8']);
   $sc8=$_POST['sc8'];
}

if(!empty($_POST['sc88'])){
    setcookie('score88',$_POST['sc88']);
    $sc88=$_POST['sc88'];
}
/*Match9*/
if(!empty($_POST['sc9'])){
    if($_POST['sc9']<1){
        $sc9=0;
    }
    else 
    setcookie('score9',$_POST['sc9']);
   $sc9=$_POST['sc9'];
}

if(!empty($_POST['sc99'])){
    setcookie('score99',$_POST['sc99']);
    $sc99=$_POST['sc99'];
}
/*Match10*/
if(!empty($_POST['sc10'])){
    if($_POST['sc10']<1){
        $sc10=0;
    }
    else 
    setcookie('score10',$_POST['sc10']);
   $sc10=$_POST['sc10'];
}

if(!empty($_POST['sc100'])){
    setcookie('score100',$_POST['sc100']);
    $sc100=$_POST['sc100'];
}
/*Match11*/
if(!empty($_POST['sc101'])){
    if($_POST['sc101']<1){
        $sc101=0;
    }
    else 
    setcookie('score101',$_POST['sc101']);
   $sc101=$_POST['sc101'];
}

if(!empty($_POST['sc110'])){
    setcookie('score110',$_POST['sc110']);
    $sc110=$_POST['sc110'];
}
/*Match12*/
if(!empty($_POST['sc12'])){
    if($_POST['sc12']<1){
        $sc12=0;
    }
    else 
    setcookie('score12',$_POST['sc12']);
   $sc12=$_POST['sc12'];
}

if(!empty($_POST['sc120'])){
    setcookie('score120',$_POST['sc120']);
    $sc120=$_POST['sc120'];
}
/*Match13*/
if(!empty($_POST['sc13'])){
    if($_POST['sc13']<1){
        $sc13=0;
    }
    else 
    setcookie('score13',$_POST['sc13']);
   $sc13=$_POST['sc13'];
}

if(!empty($_POST['sc130'])){
    setcookie('score130',$_POST['sc130']);
    $sc130=$_POST['sc130'];
}
/*Match14*/
if(!empty($_POST['sc14'])){
    if($_POST['sc14']<1){
        $sc14=0;
    }
    else 
    setcookie('score14',$_POST['sc14']);
   $sc14=$_POST['sc14'];
}

if(!empty($_POST['sc140'])){
    setcookie('score140',$_POST['sc140']);
    $sc140=$_POST['sc140'];
}
  

?>

<!Doctype html>
<html> 
    <head> 
        <title>3eme Foot</title>
        <meta charset = "UTF-8"> 
        <title>3eme Foot</title>
        <meta charset = "UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        
    </head>
    <body>
      <nav id='a1'> 
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
                
        <table>
            <thead>
                <th></th>
                <th>Groupe A</th>
                <th>Groupe B</th>
            </thead>
            <tbody>
                <tr>
                    <td>1e tete de serie (TDS)</td>
                    <td><?=$_SESSION['n1']?></td>
                    <td><?=$_SESSION['n11']?></td>
                </tr>
                <tr>
                    <td>2e tete de serie (TDS)</td>
                    <td><?=$_SESSION['n2']?></td>
                    <td><?=$_SESSION['n22']?></td>
                </tr>
                <tr>
                    <td>3e tete de serie (TDS)</td>
                    <td><?=$_SESSION['n3']?></td>
                    <td><?=$_SESSION['n33']?></td>
                </tr>
                <tr>
                    <td>4e tete de serie (TDS)</td>
                    <td><?=$_SESSION['n4']?></td>
                    <td><?=$_SESSION['n44']?></td>
                </tr>
            </tbody>
        </table>
        </center>
        <h1>Calendrier</h1>
        <table>
            <thead>
                <th>Groupe A</th>
                <th>Affiche</th>
                <th>Score</th>
            </thead>
            <tbody>
                <tr>
                    <td>Match 1</td>
                    <td><?=$_SESSION['n1']?> vs <?=$_SESSION['n2']?></td>
                    <td>
                                <?php if(isset($_POST['sc1'])) :?>                                
                                    <table>
                                        <tr>
                                            <td><?=htmlentities($sc1)?></td>
                                            <td><?=htmlentities($sc11)?></td>
                                        </tr>
                                    </table> 
                                   
                                <?php else: ?>

                                    <form Method="POST" action="">
                                <input type="number" name="sc1" placeholder="score1" required>
                                <input type="number" name="sc11"placeholder="score2" required>
                                
                                <?php endif; ?>

                                <?php 
                                if($sc1<$sc11){
                                  $pn2a=$pn2a+3;
                                  $mgn2a= 1;
                                  $mpn1a= 1;  
                                }
                                elseif($sc1>$sc11){
                                      $pn1a=$pn1a+3;
                                      $mgn1a= 1;
                                      $mpn2a= 1;
                                }
                                else {
                                      $pn1a=$pn1a+1;
                                      $pn2a=$pn2a+1;
                                      $mnn1a= 1;
                                      $mnn2a= 1;
                                }
                                $bmn1a= $sc1;
                                $ben1a= $sc11;
                                $bmn2a= $sc11;
                                $ben2a= $sc1;
                               ?>
                               
                    </td>
                </tr>
                

                <tr>
                    
                    <td>Match 2</td>
                    <td><?=$_SESSION['n3']?> vs <?=$_SESSION['n4']?></td>
                    <td>
                    <?php if(isset($_POST['sc2'])) :?>                                
                                    <table>
                                        <tr>
                                            <td><?=htmlentities($sc2)?></td>
                                            <td><?=htmlentities($sc22)?></td>
                                        </tr>
                                    </table> 
                                   
                                <?php else: ?>

                                    <form Method="POST" action="">
                                <input type="number" name="sc2" placeholder="score1"required>
                                <input type="number" name="sc22"placeholder="score2"required>
                                
                                <?php endif; ?>
                                <?php 
                                if($sc2<$sc22){
                                  $pn4a=$pn4a+3;
                                  $mgn4a= 1;
                                  $mpn3a= 1;  
                                }
                                elseif($sc2>$sc22){
                                      $pn3a=$pn3a+3;
                                      $mgn3a= 1;
                                      $mpn4a= 1;
                                }
                                else {
                                      $pn3a=$pn3a+1;
                                      $pn4a=$pn4a+1;
                                      $mnn3a= 1;
                                      $mnn4a= 1;
                                }
                                $bmn3a= $sc2;
                                $ben3a= $sc22;
                                $bmn4a= $sc22;
                                $ben4a= $sc2;
                               ?>    
                    </td>
                </tr>
                <tr>
                    <td>Match 3</td>
                    <td><?=$_SESSION['n1']?> vs <?=$_SESSION['n3']?></td>
                    <td>
                    <?php if(isset($_POST['sc3'])) :?>                                
                                    <table>
                                        <tr>
                                            <td><?=htmlentities($sc3)?></td>
                                            <td><?=htmlentities($sc33)?></td>
                                        </tr>
                                    </table> 
                                   
                                <?php else: ?>

                                    <form Method="POST" action="">
                                <input type="number" name="sc3" placeholder="score1"required>
                                <input type="number" name="sc33"placeholder="score2"required>
                                
                                
                                <?php endif; ?>
                                <?php 
                                if($sc3<$sc33){
                                  $pn3b=$pn3b+3;
                                  $mgn3b= 1;
                                  $mpn1b= 1;  
                                }
                                elseif($sc3>$sc33){
                                      $pn1b=$pn1b+3;
                                      $mgn1b= 1;
                                      $mpn3b= 1;
                                }
                                else {
                                      $pn1b=$pn1b+1;
                                      $pn3b=$pn3b+1;
                                      $mnn1b= 1;
                                      $mnn3b= 1;
                                }
                                $bmn1b= $sc3;
                                $ben1b= $sc33;
                                $bmn3b= $sc33;
                                $ben3b= $sc3;
                               ?>
                    </td>
                </tr>
                <tr>
                    <td>Match 4</td>
                    <td><?=$_SESSION['n2']?> vs <?=$_SESSION['n4']?></td>
                    <td>
                    <?php if(isset($_POST['sc4'])) :?>                                
                                    <table>
                                        <tr>
                                            <td><?=htmlentities($sc4)?></td>
                                            <td><?=htmlentities($sc44)?></td>
                                        </tr>
                                    </table> 
                                   
                                <?php else: ?>

                                    <form Method="POST" action="">
                                <input type="number" name="sc4" placeholder="score1"required>
                                <input type="number" name="sc44"placeholder="score2"required>
                                
                                <?php endif; ?>
                                <?php 
                                if($sc4<$sc44){
                                  $pn4b=$pn4b+3;
                                  $mgn4b= 1;
                                  $mpn2b= 1;  
                                }
                                elseif($sc4>$sc44){
                                      $pn2b=$pn2b+3;
                                      $mgn2b= 1;
                                      $mpn4b= 1;
                                }
                                else {
                                      $pn2b=$pn2b+1;
                                      $pn4b=$pn4b+1;
                                      $mnn2b= 1;
                                      $mnn4b= 1;
                                }
                                $bmn2b= $sc4;
                                $ben2b=$sc44;
                                $bmn4b= $sc44;
                                $ben4b= $sc4;
                               ?>
                    </td>
                </tr>
                <tr>
                    <td>Match 5</td>
                    <td><?=$_SESSION['n1']?> vs <?=$_SESSION['n4']?></td>
                    <td>
                    <?php if(isset($_POST['sc5'])) :?>                                
                                    <table>
                                        <tr>
                                            <td><?=htmlentities($sc5)?></td>
                                            <td><?=htmlentities($sc55)?></td>
                                        </tr>
                                    </table> 
                                   
                                <?php else: ?>

                                    <form Method="POST" action="">
                                <input type="number" name="sc5" placeholder="score1"required>
                                <input type="number" name="sc55"placeholder="score2"required>
                                
                                <?php endif; ?>
                                <?php 
                                if($sc5<$sc55){
                                  $pn4c=$pn4c+3;
                                  $mgn4c= 1;
                                  $mpn1c= 1;  
                                }
                                elseif($sc5>$sc55){
                                      $pn1c=$pn1c+3;
                                      $mgn1c= 1;
                                      $mpn4c= 1;
                                }
                                else {
                                      $pn1c=$pn1c+1;
                                      $pn4c=$pn4c+1;
                                      $mnn1c= 1;
                                      $mnn4c= 1;
                                }
                                $bmn1c= $sc5;
                                $ben1c= $sc55;
                                $bmn4c= $sc55;
                                $ben4c= $sc5;
                               ?>
                    </td>
                </tr>
                <tr>
                    <td>Match 6</td>
                    <td><?=$_SESSION['n2']?> vs <?=$_SESSION['n3']?></td>
                    <td>
                    <?php if(isset($_POST['sc6'])) :?>                                
                                    <table>
                                        <tr>
                                            <td><?=htmlentities($sc6)?></td>
                                            <td><?=htmlentities($sc66)?></td>
                                        </tr>
                                    </table> 
                                   
                                <?php else: ?>

                                    <form Method="POST" action="">
                                <input type="number" name="sc6" placeholder="score1"required>
                                <input type="number" name="sc66"placeholder="score2"required>
                                
                                <?php endif; ?>
                                <?php 
                                if($sc6<$sc66){
                                  $pn3c=$pn3c+3;
                                  $mgn3c= 1;
                                  $mpn2c= 1;  
                                }
                                elseif($sc6>$sc66){
                                      $pn2c=$pn2c+3;
                                      $mgn2c= 1;
                                      $mpn3c= 1;
                                }
                                else {
                                      $pn2c=$pn2c+1;
                                      $pn3c=$pn3c+1;
                                      $mnn2c= 1;
                                      $mnn3c= 1;
                                }
                                $bmn2c= $sc6;
                                $ben2c= $sc66;
                                $bmn3c= $sc66;
                                $ben3c= $sc6;
                               ?>
                    </td>
                </tr>
            </tbody>
        </table></br>
        <table>
            <thead>
                <th>Groupe B</th>
                <th>Affiche</th>
                <th>Score</th>
            </thead>
            <tbody>
                <tr>
                    <td>Match 7</td>
                    <td><?=$_SESSION['n11']?> vs <?=$_SESSION['n22']?></td>
                    <td>
                    <?php if(isset($_POST['sc7'])) :?>                                
                                    <table>
                                        <tr>
                                            <td><?=htmlentities($sc7)?></td>
                                            <td><?=htmlentities($sc77)?></td>
                                        </tr>
                                    </table> 
                                   
                                <?php else: ?>

                                    <form Method="POST" action="">
                                <input type="number" name="sc7" placeholder="score1"required>
                                <input type="number" name="sc77"placeholder="score2"required>
                                
                                <?php endif; ?>
                                <?php 
                                if($sc7<$sc77){
                                  $pn22a=$pn22a+3;
                                  $mgn22a= 1;
                                  $mpn11a= 1;  
                                }
                                elseif($sc7>$sc77){
                                      $pn11a=$pn11a+3;
                                      $mgn11a= 1;
                                      $mpn22a= 1;
                                }
                                else {
                                      $pn11a=$pn11a+1;
                                      $pn22a=$pn22a+1;
                                      $mnn11a= 1;
                                      $mnn22a= 1;
                                }
                                $bmn11a= $sc7;
                                $ben11a= $sc77;
                                $bmn22a= $sc77;
                                $ben22a= $sc7;
                               ?>           
                    </td>
                </tr>
                <tr>
                    <td>Match 8</td>
                    <td><?=$_SESSION['n33']?> vs <?=$_SESSION['n44']?></td>
                    <td>
                    <?php if(isset($_POST['sc8'])) :?>                                
                                    <table>
                                        <tr>
                                            <td><?=htmlentities($sc8)?></td>
                                            <td><?=htmlentities($sc88)?></td>
                                        </tr>
                                    </table> 
                                   
                                <?php else: ?>

                                    <form Method="POST" action="">
                                <input type="number" name="sc8" placeholder="score1"required>
                                <input type="number" name="sc88"placeholder="score2"required>
                                
                                <?php endif; ?>
                                <?php 
                                if($sc8<$sc88){
                                  $pn44a=$pn44a+3;
                                  $mgn44a= 1;
                                  $mpn33a= 1;  
                                }
                                elseif($sc8>$sc88){
                                      $pn33a=$pn44a+3;
                                      $mgn33a= 1;
                                      $mpn44a= 1;
                                }
                                else {
                                      $pn33a=$pn33a+1;
                                      $pn44a=$pn44a+1;
                                      $mnn33a= 1;
                                      $mnn44a= 1;
                                }
                                $bmn33a= $sc8;
                                $ben33a= $sc88;
                                $bmn44a= $sc88;
                                $ben44a= $sc8;
                               ?>     
                    </td>
                </tr>
                <tr>
                    <td>Match 9</td>
                    <td><?=$_SESSION['n11']?> vs <?=$_SESSION['n33']?></td>
                    <td>
                    <?php if(isset($_POST['sc9'])) :?>                                
                                    <table>
                                        <tr>
                                            <td><?=htmlentities($sc9)?></td>
                                            <td><?=htmlentities($sc99)?></td>
                                        </tr>
                                    </table> 
                                   
                                <?php else: ?>

                                    <form Method="POST" action="">
                                <input type="number" name="sc9" placeholder="score1"required>
                                <input type="number" name="sc99"placeholder="score2"required>
                                
                                <?php endif; ?>
                                <?php 
                                if($sc9<$sc99){
                                  $pn33b=$pn33b+3;
                                  $mgn33b= 1;
                                  $mpn11b= 1;  
                                }
                                elseif($sc9>$sc99){
                                      $pn11b=$pn11b+3;
                                      $mgn11b= 1;
                                      $mpn33b= 1;
                                }
                                else {
                                      $pn11b=$pn11b+1;
                                      $pn33b=$pn33b+1;
                                      $mnn11b= 1;
                                      $mnn33b= 1;
                                }
                                $bmn11b= $sc9;
                                $ben11b= $sc99;
                                $bmn33b= $sc99;
                                $ben33b= $sc9;
                               ?>    
                    </td>
                </tr>
                <tr>
                    <td>Match 10</td>
                    <td><?=$_SESSION['n22']?> vs <?=$_SESSION['n44']?></td>
                    <td>
                    <?php if(isset($_POST['sc10'])) :?>                                
                                    <table>
                                        <tr>
                                            <td><?=htmlentities($sc10)?></td>
                                            <td><?=htmlentities($sc100)?></td>
                                        </tr>
                                    </table> 
                                   
                                <?php else: ?>

                                    <form Method="POST" action="">
                                <input type="number" name="sc10" placeholder="score1"required>
                                <input type="number" name="sc100"placeholder="score2"required>
                                
                                <?php endif; ?>
                                <?php 
                                if($sc10<$sc100){
                                  $pn44b=$pn44b+3;
                                  $mgn44b= 1;
                                  $mpn22b= 1;  
                                }
                                elseif($sc10>$sc100){
                                      $pn22b=$pn22b+3;
                                      $mgn22b= 1;
                                      $mpn44b= 1;
                                }
                                else {
                                      $pn22b=$pn22b+1;
                                      $pn44b=$pn44b+1;
                                      $mnn22b= 1;
                                      $mnn44b= 1;
                                }
                                $bmn22b= $sc10;
                                $ben22b= $sc100;
                                $bmn44b= $sc100;
                                $ben44b= $sc10;
                               ?> 
                    </td>
                </tr>
                <tr>
                    <td>Match 11</td>
                    <td><?=$_SESSION['n11']?> vs <?=$_SESSION['n44']?></td>
                    <td>
                    <?php if(isset($_POST['sc101'])) :?>                                
                                    <table>
                                        <tr>
                                            <td><?=htmlentities($sc101)?></td>
                                            <td><?=htmlentities($sc110)?></td>
                                        </tr>
                                    </table> 
                                   
                                <?php else: ?>

                                    <form Method="POST" action="">
                                <input type="number" name="sc101" placeholder="score1"required>
                                <input type="number" name="sc110"placeholder="score2"required>
                                
                                <?php endif; ?>
                                <?php 
                                if($sc101<$sc110){
                                  $pn44c=$pn44c+3;
                                  $mgn44c= 1;
                                  $mpn11c= 1;  
                                }
                                elseif($sc101>$sc110){
                                      $pn11c=$pn11c+3;
                                      $mgn11c= 1;
                                      $mpn44c= 1;
                                }
                                else {
                                      $pn11c=$pn11c+1;
                                      $pn44c=$pn44c+1;
                                      $mnn11c= 1;
                                      $mnn44c= 1;
                                }
                                $bmn11c= $sc101;
                                $ben11c= $sc110;
                                $bmn44c= $sc110;
                                $ben44c= $sc101;
                               ?>     
                    </td>
                </tr>
                <tr>
                    <td>Match 12</td>
                    <td><?=$_SESSION['n22']?> vs <?=$_SESSION['n33']?></td>
                    <td>
                    <?php if(isset($_POST['sc12'])) :?>                                
                                    <table>
                                        <tr>
                                            <td><?=htmlentities($sc12)?></td>
                                            <td><?=htmlentities($sc120)?></td>
                                        </tr>
                                    </table> 
                                   
                                <?php else: ?>

                                    <form Method="POST" action="">
                                <input type="number" name="sc12" placeholder="score1"required>
                                <input type="number" name="sc120"placeholder="score2"required>
                                <form Method='POST' action=''>
                                    <center><table>
                                        <tr>
                                            <td>
                                                <form Method="POST" action="">
                                                <input type="submit" value="confirme">
                                                </form>
                                            </td>
                                        </tr>
                                    </table></center>
                                <?php endif; ?>
                                <?php 
                                if($sc12<$sc120){
                                  $pn33c=$pn33c+3;
                                  $mgn33c= 1;
                                  $mpn22c= 1;  
                                }
                                elseif($sc12>$sc120){
                                      $pn22c=$pn22c+3;
                                      $mgn22c= 1;
                                      $mpn33c= 1;
                                }
                                else {
                                      $pn22c=$pn22c+1;
                                      $pn33c=$pn33c+1;
                                      $mnn22c= 1;
                                      $mnn33c= 1;
                                }
                                $bmn22c= $sc12;
                                $ben22c= $sc120;
                                $bmn33c= $sc120;
                                $ben33c= $sc12;
                               ?>    
                    </td>
                </tr>
            </tbody>
        </table>
       <?php
       $pn1=$pn1a+$pn1b+$pn1c; 
       $ben1=$ben1a+$ben1b+$ben1c;
       $bmn1=$bmn1a+$bmn1b+$bmn1c;
       $mjn1=$mjn1a+$mjn1b+$mjn1c;
       $mgn1=$mgn1a+$mgn1b+$mgn1c;
       $mpn1=$mpn1a+$mpn1b+$mpn1c;
       $mnn1=$mnn1a+$mnn1b+$mnn1c;

       $pn2=$pn2a+$pn2b+$pn2c; 
       $ben2=$ben2a+$ben2b+$ben2c;
       $bmn2=$bmn2a+$bmn2b+$bmn2c;
       $mjn2=$mjn2a+$mjn2b+$mjn2c;
       $mgn2=$mgn2a+$mgn2b+$mgn2c;
       $mpn2=$mpn2a+$mpn2b+$mpn2c;
       $mnn2=$mnn2a+$mnn2b+$mnn2c;

       $pn3=$pn3a+$pn3b+$pn3c;
       $ben3=$ben3a+$ben3b+$ben3c;
       $bmn3=$bmn3a+$bmn3b+$bmn3c;
       $mjn3=$mjn3a+$mjn3b+$mjn3c;
       $mgn3=$mgn3a+$mgn3b+$mgn3c;
       $mpn3=$mpn3a+$mpn3b+$mpn3c;
       $mnn3=$mnn3a+$mnn3b+$mnn3c;

       $pn4=$pn4a+$pn4b+$pn4c;
       $ben4=$ben4a+$ben4b+$ben4c;
       $bmn4=$bmn4a+$bmn4b+$bmn4c;
       $mjn4=$mjn4a+$mjn4b+$mjn4c;
       $mgn4=$mgn4a+$mgn4b+$mgn4c;
       $mpn4=$mpn4a+$mpn4b+$mpn4c;
       $mnn4=$mnn4a+$mnn4b+$mnn4c;

       $pn11=$pn11a+$pn11b+$pn11c; 
       $ben11=$ben11a+$ben11b+$ben11c;
       $bmn11=$bmn11a+$bmn11b+$bmn11c;
       $mjn11=$mjn11a+$mjn11b+$mjn11c;
       $mgn11=$mgn11a+$mgn11b+$mgn11c;
       $mpn11=$mpn11a+$mpn11b+$mpn11c;
       $mnn11=$mnn11a+$mnn11b+$mnn11c;

       $pn22=$pn22a+$pn22b+$pn22c; 
       $ben22=$ben22a+$ben22b+$ben22c;
       $bmn22=$bmn22a+$bmn22b+$bmn22c;
       $mjn22=$mjn22a+$mjn22b+$mjn22c;
       $mgn22=$mgn22a+$mgn22b+$mgn22c;
       $mpn22=$mpn22a+$mpn22b+$mpn22c;
       $mnn22=$mnn22a+$mnn22b+$mnn22c;

       $pn33=$pn33a+$pn33b+$pn33c;
       $ben33=$ben33a+$ben33b+$ben33c;
       $bmn33=$bmn33a+$bmn33b+$bmn33c;
       $mjn33=$mjn33a+$mjn33b+$mjn33c;
       $mgn33=$mgn33a+$mgn33b+$mgn33c;
       $mpn33=$mpn33a+$mpn33b+$mpn33c;
       $mnn33=$mnn33a+$mnn33b+$mnn33c;

       $pn44=$pn44a+$pn44b+$pn44c;
       $ben44=$ben44a+$ben44b+$ben44c;
       $bmn44=$bmn44a+$bmn44b+$bmn44c;
       $mjn44=$mjn44a+$mjn44b+$mjn44c;
       $mgn44=$mgn44a+$mgn44b+$mgn44c;
       $mpn44=$mpn44a+$mpn44b+$mpn44c;
       $mnn44=$mnn44a+$mnn44b+$mnn44c;

       ?>
       <center>
        <h3>Classement</h3>
        <table class="class">
            <tr><td>Groupe A</td></tr>
            <tr>
                <td></td>
                <td>Equipe</td>
                <td>MJ</td>
                <td>MG</td>
                <td>MN</td>
                <td>MP</td>
                <td>BP</td>
                <td>BC</td>
                <td>Dif</td>
                <td>Point</td>
            </tr>
            
            <tr>
                <td>Premier</td>
                
                <?php if($pn1>$pn2 && $pn1>$pn3 && $pn1>$pn4):?>
                    <?php $prem1=$_SESSION['n1']?> 
                    <td><?=$_SESSION['n1']?></td>
                    <td><?=$mgn1+$mnn1+$mpn1?></td>
                    <td><?=$mgn1?></td>
                    <td><?=$mnn1?></td>
                    <td><?=$mpn1?></td>
                    <td><?=$bmn1?></td>
                    <td><?=$ben1?></td>
                    <td><?=$bmn1-$ben1?></td>
                    <td><?=$pn1?></td>
                <?php elseif($pn2>$pn1 && $pn2>$pn3 && $pn2>$pn4):?>
                    <?php $prem1=$_SESSION['n2']?> 
                    <td><?=$_SESSION['n2']?></td>
                    <td><?=$mgn2+$mnn2+$mpn2?></td>
                    <td><?=$mgn2?></td>
                    <td><?=$mnn2?></td>
                    <td><?=$mpn2?></td>
                    <td><?=$bmn2?></td>
                    <td><?=$ben2?></td>
                    <td><?=$bmn2-$ben2?></td>
                    <td><?=$pn2?></td>
                <?php elseif($pn3>$pn1 && $pn3>$pn2 && $pn3>$pn4):?>
                    <?php $prem1=$_SESSION['n3']?> 
                    <td><?=$_SESSION['n3']?></td>
                    <td><?=$mgn3+$mnn3+$mpn3?></td>
                    <td><?=$mgn3?></td>
                    <td><?=$mnn3?></td>
                    <td><?=$mpn3?></td>
                    <td><?=$bmn3?></td>
                    <td><?=$ben3?></td>
                    <td><?=$bmn3-$ben3?></td>
                    <td><?=$pn3?></td>
                <?php else:?>
                    <?php $prem1=$_SESSION['n4']?> 
                    <td><?=$_SESSION['n4']?></td>
                    <td><?=$mgn4+$mnn4+$mpn4?></td>
                    <td><?=$mgn4?></td>
                    <td><?=$mnn4?></td>
                    <td><?=$mpn4?></td>
                    <td><?=$bmn4?></td>
                    <td><?=$ben4?></td>
                    <td><?=$bmn4-$ben4?></td>
                    <td><?=$pn4?></td>
                <?php endif;?>
            </tr>
            <tr>
                <td>Deuxieme</td>
                <?php if($pn1<$pn2 && $pn1>$pn3 && $pn1>$pn4 || $pn1<$pn3 && $pn1>$pn2 && $pn1>$pn4 || $pn1<$pn4 && $pn1>$pn2 && $pn1>$pn3):?>
                    <?php $deux1=$_SESSION['n1']?>    
                    <td><?=$_SESSION['n1']?></td>
                    <td><?=$mgn1+$mnn1+$mpn1?></td>
                    <td><?=$mgn1?></td>
                    <td><?=$mnn1?></td>
                    <td><?=$mpn1?></td>
                    <td><?=$bmn1?></td>
                    <td><?=$ben1?></td>
                    <td><?=$bmn1-$ben1?></td>
                    <td><?=$pn1?></td>
                      
                <?php elseif($pn2<$pn1 && $pn2>$pn3 && $pn2>$pn4 || $pn2<$pn3 && $pn2>$pn1 && $pn2>$pn4 || $pn2<$pn4 && $pn2>$pn1 && $pn2>$pn3):?>
                    <?php $deux1=$_SESSION['n2']?> 
                    <td><?=$_SESSION['n2']?></td>
                    <td><?=$mgn2+$mnn2+$mpn2?></td>
                    <td><?=$mgn2?></td>
                    <td><?=$mnn2?></td>
                    <td><?=$mpn2?></td>
                    <td><?=$bmn2?></td>
                    <td><?=$ben2?></td>
                    <td><?=$bmn2-$ben2?></td>
                    <td><?=$pn2?></td>
                      
                <?php elseif($pn3<$pn2 && $pn3>$pn1 && $pn3>$pn4 || $pn3<$pn1 && $pn3>$pn2 && $pn3>$pn4 || $pn3<$pn4 && $pn3>$pn2 && $pn3>$pn1):?>
                    <?php $deux1=$_SESSION['n3']?> 
                    <td><?=$_SESSION['n3']?></td>
                    <td><?=$mgn3+$mnn3+$mpn3?></td>
                    <td><?=$mgn3?></td>
                    <td><?=$mnn3?></td>
                    <td><?=$mpn3?></td>
                    <td><?=$bmn3?></td>
                    <td><?=$ben3?></td>
                    <td><?=$bmn3-$ben3?></td>
                    <td><?=$pn3?></td>
                      
                <?php else:?>
                    <?php $deux1=$_SESSION['n4']?> 
                    <td><?=$_SESSION['n4']?></td>
                    <td><?=$mgn4+$mnn4+$mpn4?></td>
                    <td><?=$mgn4?></td>
                    <td><?=$mnn4?></td>
                    <td><?=$mpn4?></td>
                    <td><?=$bmn4?></td>
                    <td><?=$ben4?></td>
                    <td><?=$bmn4-$ben4?></td>
                    <td><?=$pn4?></td>
                <?php endif;?>                
            </tr>

            <tr>
                <td>Troisieme</td>
                <?php if($pn1<$pn2 && $pn1<$pn3 && $pn1>$pn4 || $pn1<$pn4 && $pn1<$pn2 && $pn1>$pn3 || $pn1<$pn4 && $pn1<$pn3 && $pn1>$pn2):?>
                    <td><?=$_SESSION['n1']?></td>
                    <td><?=$mgn1+$mnn1+$mpn1?></td>
                    <td><?=$mgn1?></td>
                    <td><?=$mnn1?></td>
                    <td><?=$mpn1?></td>
                    <td><?=$bmn1?></td>
                    <td><?=$ben1?></td>
                    <td><?=$bmn1-$ben1?></td>
                    <td><?=$pn1?></td>
                <?php elseif($pn2<$pn1 && $pn2<$pn3 && $pn2>$pn4 || $pn2<$pn4 && $pn2<$pn1 && $pn2>$pn3 || $pn2<$pn4 && $pn2<$pn3 && $pn2>$pn1):?>
                    <td><?=$_SESSION['n2']?></td>
                    <td><?=$mgn2+$mnn2+$mpn2?></td>
                    <td><?=$mgn2?></td>
                    <td><?=$mnn2?></td>
                    <td><?=$mpn2?></td>
                    <td><?=$bmn2?></td>
                    <td><?=$ben2?></td>
                    <td><?=$bmn2-$ben2?></td>
                    <td><?=$pn2?></td>
                <?php elseif($pn3<$pn2 && $pn3<$pn1 && $pn3>$pn4 || $pn3<$pn4 && $pn3<$pn2 && $pn3>$pn1 || $pn3<$pn4 && $pn3<$pn1 && $pn3>$pn2):?>
                    <td><?=$_SESSION['n3']?></td>
                    <td><?=$mgn3+$mnn3+$mpn3?></td>
                    <td><?=$mgn3?></td>
                    <td><?=$mnn3?></td>
                    <td><?=$mpn3?></td>
                    <td><?=$bmn3?></td>
                    <td><?=$ben3?></td>
                    <td><?=$bmn3-$ben3?></td>
                    <td><?=$pn3?></td>
                <?php else:?>
                    <td><?=$_SESSION['n4']?></td>
                    <td><?=$mgn4+$mnn4+$mpn4?></td>
                    <td><?=$mgn4?></td>
                    <td><?=$mnn4?></td>
                    <td><?=$mpn4?></td>
                    <td><?=$bmn4?></td>
                    <td><?=$ben4?></td>
                    <td><?=$bmn4-$ben4?></td>
                    <td><?=$pn4?></td>
                <?php endif;?>
            </tr>

            <tr>
                <td>Quatrieme</td>
                <?php if($pn1<$pn2 && $pn1<$pn3 && $pn1<$pn4):?>
                    <td><?=$_SESSION['n1']?></td>
                    <td><?=$mgn1+$mnn1+$mpn1?></td>
                    <td><?=$mgn1?></td>
                    <td><?=$mnn1?></td>
                    <td><?=$mpn1?></td>
                    <td><?=$bmn1?></td>
                    <td><?=$ben1?></td>
                    <td><?=$bmn1-$ben1?></td>
                    <td><?=$pn1?></td>
                <?php elseif($pn2<$pn1 && $pn2<$pn3 && $pn2<$pn4):?>
                    <td><?=$_SESSION['n2']?></td>
                    <td><?=$mgn2+$mnn2+$mpn2?></td>
                    <td><?=$mgn2?></td>
                    <td><?=$mnn2?></td>
                    <td><?=$mpn2?></td>
                    <td><?=$bmn2?></td>
                    <td><?=$ben2?></td>
                    <td><?=$bmn2-$ben2?></td>
                    <td><?=$pn2?></td>
                <?php elseif($pn3<$pn1 && $pn3<$pn2 && $pn3<$pn4):?>
                    <td><?=$_SESSION['n3']?></td>
                    <td><?=$mgn3+$mnn3+$mpn3?></td>
                    <td><?=$mgn3?></td>
                    <td><?=$mnn3?></td>
                    <td><?=$mpn3?></td>
                    <td><?=$bmn3?></td>
                    <td><?=$ben3?></td>
                    <td><?=$bmn3-$ben3?></td>
                    <td><?=$pn3?></td>
                <?php else:?>
                    <td><?=$_SESSION['n4']?></td>
                    <td><?=$mgn4+$mnn4+$mpn4?></td>
                    <td><?=$mgn4?></td>
                    <td><?=$mnn4?></td>
                    <td><?=$mpn4?></td>
                    <td><?=$bmn4?></td>
                    <td><?=$ben4?></td>
                    <td><?=$bmn4-$ben4?></td>
                    <td><?=$pn4?></td>
                <?php endif;?>
                
                
            </tr>
        </table> </br>
        <table class="class">
            <tr><td>Groupe B</td></tr>
            <tr>
                <td></td>
                <td>Equipe</td>
                <td>MJ</td>
                <td>MG</td>
                <td>MN</td>
                <td>MP</td>
                <td>BP</td>
                <td>BC</td>
                <td>Dif</td>
                <td>Point</td>
            </tr>
            
            <tr>
                <td>Premier</td>
                
                <?php if($pn11>$pn22 && $pn11>$pn33 && $pn11>$pn44):?>
                    <?php $prem2=$_SESSION['n11']?> 
                    <td><?=$_SESSION['n11']?></td>
                    <td><?=$mgn11+$mnn11+$mpn11?></td>
                    <td><?=$mgn11?></td>
                    <td><?=$mnn11?></td>
                    <td><?=$mpn11?></td>
                    <td><?=$bmn11?></td>
                    <td><?=$ben11?></td>
                    <td><?=$bmn11-$ben11?></td>
                    <td><?=$pn11?></td>
                <?php elseif($pn22>$pn11 && $pn22>$pn33 && $pn22>$pn44):?>
                    <?php $prem2=$_SESSION['n22']?> 
                    <td><?=$_SESSION['n22']?></td>
                    <td><?=$mgn22+$mnn22+$mpn22?></td>
                    <td><?=$mgn22?></td>
                    <td><?=$mnn22?></td>
                    <td><?=$mpn22?></td>
                    <td><?=$bmn22?></td>
                    <td><?=$ben22?></td>
                    <td><?=$bmn22-$ben22?></td>
                    <td><?=$pn22?></td>
                <?php elseif($pn33>$pn11 && $pn33>$pn22 && $pn33>$pn44):?>
                    <?php $prem2=$_SESSION['n33']?> 
                    <td><?=$_SESSION['n33']?></td>
                    <td><?=$mgn33+$mnn33+$mpn33?></td>
                    <td><?=$mgn33?></td>
                    <td><?=$mnn33?></td>
                    <td><?=$mpn33?></td>
                    <td><?=$bmn33?></td>
                    <td><?=$ben33?></td>
                    <td><?=$bmn33-$ben33?></td>
                    <td><?=$pn33?></td>
                <?php else:?>
                    <?php $prem2=$_SESSION['n44']?> 
                    <td><?=$_SESSION['n44']?></td>
                    <td><?=$mgn44+$mnn44+$mpn44?></td>
                    <td><?=$mgn44?></td>
                    <td><?=$mnn44?></td>
                    <td><?=$mpn44?></td>
                    <td><?=$bmn44?></td>
                    <td><?=$ben44?></td>
                    <td><?=$bmn44-$ben44?></td>
                    <td><?=$pn44?></td>
                <?php endif;?>
            </td>
            </tr>
            <tr>
                <td>Deuxieme</td>
                <?php if($pn11<$pn22 && $pn11>$pn33 && $pn11>$pn44 || $pn11<$pn33 && $pn11>$pn22 && $pn11>$pn44 || $pn11<$pn44 && $pn11>$pn22 && $pn11>$pn33):?>
                    <?php $deux1=$_SESSION['n11']?>    
                    <td><?=$_SESSION['n11']?></td>
                    <td><?=$mgn11+$mnn11+$mpn11?></td>
                    <td><?=$mgn11?></td>
                    <td><?=$mnn11?></td>
                    <td><?=$mpn11?></td>
                    <td><?=$bmn11?></td>
                    <td><?=$ben11?></td>
                    <td><?=$bmn11-$ben11?></td>
                    <td><?=$pn11?></td>
                      
                <?php elseif($pn22<$pn11 && $pn22>$pn33 && $pn22>$pn44 || $pn22<$pn33 && $pn22>$pn11 && $pn22>$pn44 || $pn22<$pn44 && $pn22>$pn11 && $pn22>$pn33):?>
                    <?php $deux2=$_SESSION['n22']?> 
                    <td><?=$_SESSION['n22']?></td>
                    <td><?=$mgn22+$mnn22+$mpn22?></td>
                    <td><?=$mgn22?></td>
                    <td><?=$mnn22?></td>
                    <td><?=$mpn22?></td>
                    <td><?=$bmn22?></td>
                    <td><?=$ben22?></td>
                    <td><?=$bmn22-$ben22?></td>
                    <td><?=$pn22?></td>
                      
                <?php elseif($pn33<$pn22 && $pn33>$pn11 && $pn33>$pn44 || $pn33<$pn11 && $pn33>$pn22 && $pn33>$pn44 || $pn33<$pn44 && $pn33>$pn22 && $pn33>$pn11):?>
                    <?php $deux2=$_SESSION['n33']?> 
                    <td><?=$_SESSION['n33']?></td>
                    <td><?=$mgn33+$mnn33+$mpn33?></td>
                    <td><?=$mgn33?></td>
                    <td><?=$mnn33?></td>
                    <td><?=$mpn33?></td>
                    <td><?=$bmn33?></td>
                    <td><?=$ben33?></td>
                    <td><?=$bmn33-$ben33?></td>
                    <td><?=$pn33?></td>
                      
                <?php else:?>
                    <?php $deux2=$_SESSION['n44']?> 
                    <td><?=$_SESSION['n44']?></td>
                    <td><?=$mgn44+$mnn44+$mpn44?></td>
                    <td><?=$mgn44?></td>
                    <td><?=$mnn44?></td>
                    <td><?=$mpn44?></td>
                    <td><?=$bmn44?></td>
                    <td><?=$ben44?></td>
                    <td><?=$bmn44-$ben44?></td>
                    <td><?=$pn44?></td>
                <?php endif;?>                
            </tr>

            <tr>
                <td>Troisieme</td>
                <?php if($pn11<$pn22 && $pn11<$pn33 && $pn11>$pn44 || $pn11<$pn44 && $pn11<$pn22 && $pn11>$pn33 || $pn11<$pn44 && $pn11<$pn33 && $pn11>$pn22):?>
                    <td><?=$_SESSION['n11']?></td>
                    <td><?=$mgn11+$mnn11+$mpn11?></td>
                    <td><?=$mgn11?></td>
                    <td><?=$mnn11?></td>
                    <td><?=$mpn11?></td>
                    <td><?=$bmn11?></td>
                    <td><?=$ben11?></td>
                    <td><?=$bmn11-$ben11?></td>
                    <td><?=$pn11?></td>
                <?php elseif($pn22<$pn11 && $pn22<$pn33 && $pn22>$pn44 || $pn22<$pn44 && $pn22<$pn11 && $pn22>$pn33 || $pn22<$pn44 && $pn22<$pn33 && $pn22>$pn11):?>
                    <td><?=$_SESSION['n22']?></td>
                    <td><?=$mgn22+$mnn22+$mpn22?></td>
                    <td><?=$mgn22?></td>
                    <td><?=$mnn22?></td>
                    <td><?=$mpn22?></td>
                    <td><?=$bmn22?></td>
                    <td><?=$ben22?></td>
                    <td><?=$bmn22-$ben22?></td>
                    <td><?=$pn22?></td>
                <?php elseif($pn33<$pn22 && $pn33<$pn11 && $pn33>$pn44 || $pn33<$pn44 && $pn33<$pn22 && $pn33>$pn11 || $pn33<$pn44 && $pn33<$pn11 && $pn33>$pn22):?>
                    <td><?=$_SESSION['n33']?></td>
                    <td><?=$mgn33+$mnn33+$mpn33?></td>
                    <td><?=$mgn33?></td>
                    <td><?=$mnn33?></td>
                    <td><?=$mpn33?></td>
                    <td><?=$bmn33?></td>
                    <td><?=$ben33?></td>
                    <td><?=$bmn33-$ben33?></td>
                    <td><?=$pn33?></td>
                <?php else:?>
                    <td><?=$_SESSION['n44']?></td>
                    <td><?=$mgn44+$mnn44+$mpn44?></td>
                    <td><?=$mgn44?></td>
                    <td><?=$mnn44?></td>
                    <td><?=$mpn44?></td>
                    <td><?=$bmn44?></td>
                    <td><?=$ben44?></td>
                    <td><?=$bmn44-$ben44?></td>
                    <td><?=$pn44?></td>
                <?php endif;?>
            </tr>

            <tr>
                <td>Quatrieme</td>
                <?php if($pn11<$pn22 && $pn11<$pn33 && $pn11<$pn44):?>
                    <td><?=$_SESSION['n11']?></td>
                    <td><?=$mgn11+$mnn11+$mpn11?></td>
                    <td><?=$mgn11?></td>
                    <td><?=$mnn11?></td>
                    <td><?=$mpn11?></td>
                    <td><?=$bmn11?></td>
                    <td><?=$ben11?></td>
                    <td><?=$bmn11-$ben11?></td>
                    <td><?=$pn11?></td>
                <?php elseif($pn22<$pn11 && $pn22<$pn33 && $pn22<$pn44):?>
                    <td><?=$_SESSION['n22']?></td>
                    <td><?=$mgn22+$mnn22+$mpn22?></td>
                    <td><?=$mgn22?></td>
                    <td><?=$mnn22?></td>
                    <td><?=$mpn22?></td>
                    <td><?=$bmn22?></td>
                    <td><?=$ben22?></td>
                    <td><?=$bmn22-$ben22?></td>
                    <td><?=$pn22?></td>
                <?php elseif($pn33<$pn11 && $pn33<$pn22 && $pn33<$pn44):?>
                    <td><?=$_SESSION['n33']?></td>
                    <td><?=$mgn33+$mnn33+$mpn33?></td>
                    <td><?=$mgn33?></td>
                    <td><?=$mnn33?></td>
                    <td><?=$mpn33?></td>
                    <td><?=$bmn33?></td>
                    <td><?=$ben33?></td>
                    <td><?=$bmn33-$ben33?></td>
                    <td><?=$pn33?></td>
                <?php else:?>
                    <td><?=$_SESSION['n44']?></td>
                    <td><?=$mgn44+$mnn44+$mpn44?></td>
                    <td><?=$mgn44?></td>
                    <td><?=$mnn44?></td>
                    <td><?=$mpn44?></td>
                    <td><?=$bmn44?></td>
                    <td><?=$ben44?></td>
                    <td><?=$bmn44-$ben44?></td>
                    <td><?=$pn44?></td>
                <?php endif;?>
                
                
            </tr>
        </table>
                </center>
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
                    <td><?=$prem1?> vs <?=$deux2?></td>
                    <td>
                    

                                    <form  action="troisiemeplace.php">
                                <input type="number" name="sc13" placeholder="score1"required>
                                <input type="number" name="sc130"placeholder="score2"required>
                </form>
                                
                                
                    </td>
                </tr>
                <?php
                 if($sc13<$sc130){
                    $v1= $deux2;  
                    $p1= $prem1;
                }
                
                else {
                    $v1= $prem1;
                    $p1= $deux2;
                }
                ?>
                <tr>
                    <td>Match 14</td>
                    <td><?=$prem2?> vs <?=$deux1?></td>
                    <td>
                    

                                    <form action="troisiemeplace.php">
                                <input type="number" name="sc14" placeholder="score1"required>
                                <input type="number" name="sc140"placeholder="score2"required>
                                <input type="submit" value="confirme">
                                </form>
                               
                                
                    </td>
                </tr>
                <?php
                 if($sc14<$sc140){
                    $v2= $deux1;  
                    $p2= $prem1;
                }
                
                else {
                    $v2= $prem2;
                    $p2= $deux1;
                }
                ?>
                
            </tbody>
        </table>
        <?php
                                    $_SESSION['prem1']=$prem1;
                                    $_SESSION['deux2']=$deux2;
                                    $_SESSION['sc13']=$sc13;
                                    $_SESSION['sc130']=$sc130;
                                    $_SESSION['prem2']=$prem2;
                                    $_SESSION['deux1']=$deux1;
                                    $_SESSION['sc14']=$sc14;
                                    $_SESSION['sc140']=$sc140;
                                    

                                ?>
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
                    <td>&emsp; vs &emsp;</td>
                    <td>
                                                      
                                    <table>
                                        <tr>
                                            <td><?=htmlentities($sc15)?></td>
                                            <td><?=htmlentities($sc150)?></td>
                                        </tr>
                                    </table> 
                                   
                               
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
                    <td>&emsp; vs &emsp;</td>
                    <td>
                                                       
                                    <table>
                                        <tr>
                                            <td><?=htmlentities($sc16)?></td>
                                            <td><?=htmlentities($sc160)?></td>
                                        </tr>
                                    </table> 
                                   

                    </td>
                </tr>
            </tbody>
        </table>
                                                    
    </nav>
    </body>
</html>