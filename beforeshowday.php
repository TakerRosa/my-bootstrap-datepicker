<?php
require_once 'inc/main.js.inc.php';
?>
<!DOCTYPE html>
<html>
<head>

<?php $MAIN_JS_INCLUDE->RUN('main');?>
<?php $MAIN_JS_INCLUDE->RUN('bootstrap_datepicker');?>





<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>beforeshowday</title>

</head>
<body>
	<div class="input-group input-daterange">
		<input id="startDate1" name="startDate1" type="text" class="form-control" readonly="readonly"> 

		<span class="input-group-addon">to</span> 

		<input id="endDate1" name="endDate1" type="text" class="form-control" readonly="readonly">

	</div>


	<div>
		<input id="date" type="text" class="form-control" readonly="readonly">
	</div>


	<script type="text/javascript">
		$(document).ready(function() {

 			 var datesEnabled = ['2018/01/22', '2018/01/23', '2018/01/24'];
			 $('.input-daterange').datepicker({
				language: "zh-TW",
				format: "yyyy/mm/dd",
				beforeShowDay:function (date){
  					var allDates = date.getFullYear() + '/' +((date.getMonth()<10 ? '0' : '')+(date.getMonth() + 1)) + '/' + ((date.getDate()<10 ? '0' : '')+date.getDate());
  					if(datesEnabled.indexOf(allDates) == -1)
  						return true;
  					else
  						return false;
				}
				
             });


             
			 $('#date').datepicker({
				language: "zh-TW",
				format: "yyyy/mm/dd",
				beforeShowDay:function (date){
  					var allDates = date.getFullYear() + '/' +((date.getMonth()<10 ? '0' : '')+(date.getMonth() + 1)) + '/' + ((date.getDate()<10 ? '0' : '')+date.getDate());
  					if(datesEnabled.indexOf(allDates) == -1)
  						return true;
  					else
  						return false;
				}
             });

		});



	</script>
</body>
</html>

