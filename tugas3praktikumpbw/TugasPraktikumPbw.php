<?php
$text = "anggunpratiwi";
//conversi text ke array
$converArray = str_split($text);

foreach ($converArray as $row) {
 if(preg_match('/^[aiueo]/', $row[0]))
  {
   echo $row[0] ." = vokal <br >" ;
  }
  else
  {
  echo $row[0] ." = konsonan <br >";
 }
}
?>
<?php
for($bil = 1; $bil <= 20; $bil++){
    if( ($bil % 2) == 0){
        echo "$bil Adalah Bilangan Genap<br>";
    }else {
		echo "$bil Adalah Bilangan Ganjil<br>";
	}	
}
?>
<?php
$hari = 'Sabtu';
if ($hari == 'Senin') {
	echo 'Hari ini hari ' . $hari . ', semoga kembali fresh<br/>';
} else if ($hari == 'Kamis') {
	echo 'Hari ini hari ' . $hari . ', semoga masih semangat<br/>';
} else if ($hari == 'Sabtu') {
	echo 'Hari ini hari ' . $hari . ', selamat menjalani weekend<br/>';
} else {
	echo 'Hari ini hari ' . $hari . ' tetap semangat!!';
}

switch ($hari)
{
	case 'Senin' :
		echo 'Hari ini hari ' . $hari . ', semoga kembali fresh<br/>';
		break;
	case 'Kamis' :
		echo 'Hari ini hari ' . $hari . ', semoga masih semangat<br/>';
		break;
	case 'Sabtu' :
		echo 'Hari ini hari ' . $hari . ', selamat menjalani weekend<br/>';
		break;
	default : 
		echo 'Hari ini hari ' . $hari . ' tetap semangat!!';
}
?>