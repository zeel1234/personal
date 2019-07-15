<html>
<body>
</body>
<table border="2px">
<th padding ="25px"> Value </th>
<th> Data Type  </th>
<tr>
<td> <?php  $myvar=True; echo $myvar;?></td>
<td> <?php echo gettype($myvar); ?> </td>
</tr>
<tr>
<td> <?php  $myvar=9; echo $myvar;?></td>
<td> <?php echo gettype($myvar); ?> </td>
</tr>
<tr>
<td> <?php  $myvar=7.8; echo $myvar;?></td>
<td> <?php echo gettype($myvar); ?> </td>
</tr>
<tr>
<td> <?php  $myvar="Hello123"; echo $myvar;?></td>
<td> <?php echo gettype($myvar); ?> </td>
</tr>
<tr>
<td> <?php  $myvar=array(1,2,3);
            echo var_dump($myvar);
            ?></td>
<td> <?php echo gettype($myvar); ?> </td>
</tr>

<tr>
<td> <?php  $myvar=null; echo $myvar;?></td>
<td> <?php echo gettype($myvar); ?> </td>
</tr>
<tr>
<td> <?php  $myvar="tmpfile()"; echo $myvar;?></td>
<td> <?php echo gettype($myvar); ?> </td>
</tr>


</table>
</html>