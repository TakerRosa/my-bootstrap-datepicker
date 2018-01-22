<?php
require_once 'inc/main.js.inc.php';

	$Urlary=array(
		'daterange'
		,'beforeshowday'
	);

?>


<!DOCTYPE html>
<html>
<head>

<?php $MAIN_JS_INCLUDE->RUN('main');?>






<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Index</title>

</head>
<body>
	<table class="table table-striped">
    	<thead>
      		<tr>
        		<th>Name</th>
      		</tr>
    	</thead>

  		<tbody>
<?php
	foreach ($Urlary as $value ) {
?>
  			<tr>
  				<td><a href="<?=$value?>.php"><?=$value?></a></td>
  			</tr>

<?php
	}
?>

  		</tbody>
	</table>

	
	<script type="text/javascript">
		$(document).ready(function() {
			 $('.input-daterange').datepicker({
				language: "zh-TW",
				format: "yyyy/mm/dd"
             });
		});
	</script>
</body>
</html>

