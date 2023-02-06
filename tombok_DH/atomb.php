<?php
    //Asszociatív tömb
    //valamihez rendelek egy értéket
    function ATomb()
    {
        $autok= array("Toyota Corolla"=> 10,
                    "Ford Focus"=> 4,
                    "Dacia Duster"=> 7,
                    "Subaru Impreza"=> 23);
        foreach($autok as $kulcs=> $ertek)
        echo"<p>". $kulcs.":".$ertek."éves</p>";
    }
    function Nested1()
    {
            $jozsi= array("nev"=>"Kiss József","eletkor"=>37, "foglalkozás"=>"köműves");
            $gizi= array("nev"=>"Humbák Gizella","eletkor"=>67,"magasság"=>178);

            $emberek= array($jozsi,$gizi);

            for($i=0; $i<sizeof($emberek); $i++){
            foreach($emberek[$i] as $key=> $value){
                echo $key.":".$value;
                echo"<br/>";
            }

            }    
    }
    function Nested2(){
        $konyvek= array("Programozás lépésről lépésre"=> array("szerző"=>"Reitter István","ar"=>2500,"oldalak"=>450),
                        "Hamupipőke"=> array("szerző"=>"Grimm Bros","típus"=>"mese","ar"=>2850,"oldalak"=>2888),
                        "1984"=>array("szerző"=>"George Orwell","típus"=>"regény","ar"=>5000),
                        "Biblia"=>array("szrző"=>"'Nem ismert'","típus"=>"episzoda","ar"=>"eszmei értékű","oldalak"=>1295));
                    foreach($konyvek as $key=>$value){
                        echo"<h3>".$key."</h3";
                        echo"<p>";
                        echo"<br>";
                        foreach($value as $key2=>$value2){
                            echo $key2.":".$value2;
                            echo "<br>";
                        }
                    }
    }
    function Nested3(){
        $lotto= array(
            41=> array(1, 7, 39, 41, 58),
            40=> array(18, 33, 36, 48, 60),
            39=> array(5, 48, 8, 9, 12)
        );

        foreach($lotto as $key=>$value){
            $output.="<tr class'".($key%2==0?"páros":"páratlan")."'>";
            for($i=0; $i<sizeof($value); $i++){
                    $output.="<td>";
                    $output.=$value[$i];
                    $output.="</td>";
            }
        }
        $output.="</tr>";
    }
    return $output;

    
?>