<!DOCTYPE html>
<html>

  <body>
  <style>

h1
{
    text-align		: center	;
    color			: #448		;
}

table
{
    margin			: 24px auto	;
    border			: solid 1px #88C;
}

td
{
    text-align		: center	;
    background-color	: #BBD		;
    color			: #224
}

tr:first-child td , tr:last-child td
{
    background-color	: #88C		;
    font-weight		: bold		;
}

td:nth-child(3)
{
    font-weight		: bold		;
}

</style>
        <table width=240>

    <?php 
        if (isset($_GET['m'])) $m = @($_GET['m'] *1);
        else{
            $m = 10;
        }
        
    for ($i=1; $i <= $m; $i++) {
         for ($j=1; $j <= $m; $j++) { 
            $szorzo = $i * $j;
            print " <td>   $szorzo   </td>";
 
         }
         print "<tr></tr>";
    
    }
    
    ?>


  </body>

</html>