<?php 

include("database/db.php"); 

$sayac=0; 
    $sorgu = $db->query("SELECT * FROM kisiler",PDO::FETCH_ASSOC);

    if($sorgu->rowCount())
    {
        foreach($sorgu as $icerik)
        {
            $sayac++;

        }
        ?>
         
         <p><?php echo $sayac; ?></p>

        <?php
    }



}


?>