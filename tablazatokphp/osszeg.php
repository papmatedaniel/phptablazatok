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

	<tr>
		<td>   N  </td>
		<td>   Σ N    </td>
	</tr>

    <?php 
    $osszeg = 0;
    for ($i=1; $i < 101; $i++) {
        $osszeg += $i;
        print "
		<tr>
			<td> $i </td>
			<td>  $osszeg   </td>
		</tr>
	" ;
    }
    
    ?>
    </table>


  </body>

</html>