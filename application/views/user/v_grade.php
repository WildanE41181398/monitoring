<?php
    //cetak isi field suhu
    if($data_sensor->grade == "Grade-A")
    { echo '<p class="text-success">'.$data_sensor->grade.'</p>';}
    else if($data_sensor->grade == "Grade-B")
    { echo '<p class="text-warning">'.$data_sensor->grade.'</p>';}
    else
    { echo '<p class="text-danger">'.$data_sensor->grade.'</p>';}
?>