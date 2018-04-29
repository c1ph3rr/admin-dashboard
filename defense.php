<?php
    if(isset($_GET["hibernate"]))
    {
        system('shutdown /h');
    }
    elseif(isset($_GET["shut"])){
        echo "shut";

    }
    elseif(isset($_GET["entire"])){
        echo "entire";

    }

