<!DOCTYPE html>
<html>

  <body>
        <table width=240>

    <?php 
        if (isset($_GET['m'])) $m = @($_GET['m'] *1);
        else{
            $m = 10;
        }
        
    for ($i=1; $i <= $m; $i++) {
         for ($j=1; $j <= $m; $j++) { 
            $szorzo = $i * $j;
            $osztokSzama = 0;
            for ($k=1; $k <= $osztokSzama ; $k++) { 
                if ($szorzo % $k == 0) {
                    $osztokSzama++;
                }
            }
            if ($osztokSzama == 0){
                print " <td>  $szorzo  </td>";
            }
            else{
                print "<td style='background-color: yellow;'>$szorzo</td>";

            }
         }
         print " <tr></tr>";
    
    }
    
    
    ?>


  </body>

</html>