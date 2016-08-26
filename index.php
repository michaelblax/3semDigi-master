<!DOCTYPE html>
<html>
<?php 
//  Brors lær_så_de_navne_spil og tilstedeværelse registrering (ingen DB connection p.t.)

//  Gæt på navnet og hover for at se om du havde ret.
//  Kan også bruges til at danne tilfældige grupper med - 
//  tryk shuffle og juster bredden på browser efter gruppestørrelsen
//
//  Use, modify, and let me know how you improved the product
//  
//  Sprog, title og andre tilpasninger kan gøres i de filer der includeres herunder
//  
include "settings.php";
include "buttons.php";
?>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title ?></title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
    <body>
		<h1 id="titleH1"><?php echo $absent ; ?></h1>
		<button id="shuffle" type="button"><?php echo $shuffle ; ?></button>
        <button id="doInverse" type="button"><?php echo $present ; ?></button>
        <button id="nocover" type="button"><?php echo $shownames ; ?></button>
        <button id="docover" type="button"><?php echo $hidenames ; ?></button>
        
        <div id="article_list">
			<?php
			// find files in folder  and sort by filename
			$allFiles = scandir($sti,1);
			sort($allFiles);
			// take away . and ..
			array_splice ($allFiles,0,2);
			// and show them
			$howMany = count($allFiles);
			for($i=0;$i<$howMany;$i++){
//				<article class='gametile' onClick=\" this.innerHTML='' \">
				echo "
				<article class='show' onClick=\" swop(this) \">		
					<img src=\"$sti/$allFiles[$i]\" />
					<div class='cover' onClick=\" swop2(this) \"></div>
				</article>	";
			}
			?>
        </div>
       
        
        <script src ="script.js.php"></script>
		
    </body>
</html>