<?php

$dataBin = array
    (
      array("stagnola","plastica"),
      array("batterie","batterie"),
      array("mela","organico"),
      array("moment","medicinali"),
      array("boccaccio","vetro"),
      array("libro","carta"),
      array("cartone","carta")
	);
for($i=0;$i<7;$i++){
	if($_GET['object']==$dataBin[$i][0]){
		$colorBin=$dataBin[$i][1];
	}
}


$data = [
   'oggetto' => $_GET['object'],
   'colore' => $colorBin
];

echo json_encode($data);

?>
