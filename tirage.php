<?php
session_start();
            $t1 = rand(1,2);
            if ($t1 == 1){
                $_SESSION['n1']= 'Bresil';
                $_SESSION['n11']= 'Argentine';
            }
            else {
                $_SESSION['n11']= 'Bresil';
                $_SESSION['n1']= 'Argentine';
            }
            
            $t2 = rand(3,4);
            if ($t2 == 3){
                $_SESSION['n2']= 'France';
                $_SESSION['n22']= 'Italie';
            }
            else {
                $_SESSION['n22']= 'France';
                $_SESSION['n2']= 'Italie';
            }
            
            $t3 = rand(5,6);
            if ($t2 == 5){
                $_SESSION['n3']= 'Allemagne';
                $_SESSION['n33']= 'Espagne';
            }
            else {
                $_SESSION['n33']= 'Allemagne';
                $_SESSION['n3']= 'Espagne';
            }
            
            $t4 = rand(7,8);
            if ($t2 == 7){
                $_SESSION['n4']= 'Haiti';
                $_SESSION['n44']= 'Portugal';
            }
            else {
                $_SESSION['n44']= 'Haiti';
                $_SESSION['n4']= 'Portugal';
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
        <h1 id="cou">Coupe 3eme infos</h1> 
        <img id="coupe" src="coupe.jpg">
        <img id="inuk" src="inuka.jpg">
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
        <h3>Pressez le bouton pour le tirage</h3>
        <form action="Calendrier.php" >
             <input type="submit" value="tirage" > 
            </form>
        </center>
        </body>
        </html>
           
            
        