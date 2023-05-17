<html>
<body>
<script>
const dia = new Date();
console.log(dia.toDateString())
const hoje = dia.getFullYear() +'-'+String(dia.getMonth() + 1).padStart(2,'0') +'-'+dia.getDate()
alert(hoje)
console.log(hoje)
</script>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  Name2: <input type="text" name="fname2">
  <input type="submit">
</form>
<pre>
<?php
$arraynomes = array();
$arrayvalores = array();


?>
</pre>

</body>
</html> 