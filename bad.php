<?php function dewitagain(){$arr=explode('|',explode(';',file_get_contents('ads.txt'))[rand(0,count(explode(';',file_get_contents('ads.txt')))-1)]);$doidewit=true;if(@$arr[0]&&@$arr[1]&&@$arr[2]){if(@$arr[3]){include $arr[3];if(@$bool){$doidewit=true;}else{$doidewit=false;}}if($doidewit){echo"<br/><a href='".$arr[2]."'>".$arr[0]." - ".$arr[1];}else{dewitagain();}}}?>
<?php if(@$_GET['action']!='bean'){?>
<?php if(@$_GET['action']!='getAReadablePage'&&@$_GET['action']!='noFrames'){?><iframe src=bad.php?action=noFrames></iframe><?php }?>
<?php if(@$_GET['action']!='getAReadablePage'){?><body bgcolor=<?php echo strtoupper(sprintf('#%02x%02x%02x',rand(0,255),rand(0,255),rand(0,255)));?>><font face='Comic Sans MS'><font size=100><?php }?>
<?php $text="Welcome to my \"the maximum oversucc\" page! It's filled with cool stuff :D";if(@$_GET['action']!='getAReadablePage'){function lol(){if(rand(0,10)==rand(0,10)){return'<center>';}return'';}$styles=['<b>','<strong>','<i>','<em>','<mark>','<small>','<del>','<ins>','<sub>','<sup>'];$fonts=['Arial','Comic Sans MS','Papyrus'];for($i=0;$i<strlen($text);$i++){echo'<font color='.strtoupper(sprintf('#%02x%02x%02x',rand(0,255),rand(0,255),rand(0,255))).'><font face=\''.$fonts[rand(0,count($fonts)-1)].'\'><font size='.rand(50,100).'>'.str_replace('>','',$styles[rand(0,count($styles)-1)]).' bgcolor='.strtoupper(sprintf('#%02x%02x%02x',rand(0,255),rand(0,255),rand(0,255))).'>'.lol().$text[$i];}}else{echo $text.'<br/>';}?>
<?php if(@$_GET['action']!='noAdvertisements'){dewitagain();}?>
<?php if(@$_GET['action']!='getAReadablePage'){?><a href="bad.php?action=getAReadablePage"><?php $text="Get a readable page";if(@$_GET['action']!='getAReadablePage'){$styles=['<b>','<strong>','<i>','<em>','<mark>','<small>','<del>','<ins>','<sub>','<sup>'];$fonts=['Arial','Comic Sans MS','Papyrus'];for($i=0;$i<strlen($text);$i++){echo'<font color='.strtoupper(sprintf('#%02x%02x%02x',rand(0,255),rand(0,255),rand(0,255))).'><font face=\''.$fonts[rand(0,count($fonts)-1)].'\'><font size='.rand(50,100).'>'.str_replace('>','',$styles[rand(0,count($styles)-1)]).' bgcolor='.strtoupper(sprintf('#%02x%02x%02x',rand(0,255),rand(0,255),rand(0,255))).'>'.lol().$text[$i];}}else{echo $text.'<br/>';}?><?php }?>
<?php if(@$_GET['action']!='getAReadablePage'){$line=strtok(file_get_contents('https://anlucas.neocities.org/88x31Buttons.html'),'\n');while($line){if(strpos($line,'<img src="')){echo str_replace('<img src="','<img src="https://anlucas.neocities.org/',$line);}$line=strtok('\n');}}?>
<?php if(@$_GET['action']!='getAReadablePage'){$line=strtok(file_get_contents('https://cyber.dabamos.de/88x31/'),'\n');while($line){if(strpos($line,'<img src="')){echo str_replace('<img src="','<img src="https://cyber.dabamos.de/88x31/',$line);}$line=strtok('\n');}}?>
<?php }else{echo'Congrats you found the secret page!<br/><br/><br/><b>bean.';}?>