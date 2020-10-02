<?php

/*
*   Pone un botones que revelan 
$data = array(
    array(
        "Titulo",
        "Tipo de dato",//[text],[link]
        array("Los datos", "Otra cosa")
    ),
    array(
        "Titulo",
        "link",
        array(array("link", "texto"), array("link", "texto"))
    ),

);

*
*
**/

if($data!=null){ ?>


<div class="buttons-collapse">
    <div class="titles">
        <?php for($i = 0; $i < count($data); $i++){

            echo "          <a class='a-titles a-button' onclick='show-info('\"".$data[$i][0]."\")>".$data[$i][0]."</a>\n";

         } ?>
    </div>
    <div style="display:flex;height:100%">
    <div class="content">

    <?php for($i = 0; $i < count($data); $i++){ ?>

        <div class="d-hidden">
        <?php

            if($data[$i][1]=="link"){
                for($j=0; $j < count($data[$i][2]); $j++){
                    echo "          <a  class='' href='".$data[$i][2][$j][0]."'>".$data[$i][2][$j][1]."</a>\n";
                }
            }else if($data[$i][1]=="text"){
                for($j=0; $j < count($data[$i][2]); $j++){
                    echo "          <p class='' >".$data[$i][0]."</a>\n";
                }
            }

        ?>
    </div>
        </div>




    <?php } ?>
    </div>
</div>

<?php } ?>