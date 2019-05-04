<?php

    function angka2($data){
        $samadengan1 =2;
        $samadengan2 =3;
        $samadengan3 =4;
        for($i=1;$i<=$data;$i++){
            if ($i==$samadengan1){
                echo "= ";
                $samadengan1 = $samadengan1 +5;
            }elseif ($i==$samadengan2){
                echo "= ";
                $samadengan2 = $samadengan2 +5;
            }elseif ($i==$samadengan3){
                echo "= ";
                $samadengan3 = $samadengan3 +5;
            }else{
                echo "* ";

            }
        }
}
function angka($data){
    angka2($data);
    echo PHP_EOL;
    angka2($data);
    echo PHP_EOL;
    for ($i=1;$i<=$data;$i++){
        echo"* ";
    }
    echo PHP_EOL;
    angka2($data);
    echo PHP_EOL;
    angka2($data);
}
angka(5)
?>