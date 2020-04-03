<?php
    if(!isset($_GET['res'])) {
        exit;
    }
    
    foreach(glob('res/*') as $res) {
        if(strpos($res, $_GET['res'])) {
            echo '<body style="
                background: url(' . $res . ');
                background-size: contain;
                background-repeat: no-repeat;" />';
            break;
        }   
    }
?>