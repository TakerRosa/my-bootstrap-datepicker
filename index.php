<?php
require_once 'inc/main.js.inc.php';
?>


<!DOCTYPE html>
<html>
<head>

<?php $MAIN_JS_INCLUDE->RUN('main');?>
<?php $MAIN_JS_INCLUDE->RUN('bootstrap_datepicker');?>





<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Page 2</title>

</head>
<body>
	<div class="input-group input-daterange">
		<input id="startDate1" name="startDate1" type="text" class="form-control" readonly="readonly"> 

		<span class="input-group-addon">to</span> 

		<input id="endDate1" name="endDate1" type="text" class="form-control" readonly="readonly">

	</div>

	
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

