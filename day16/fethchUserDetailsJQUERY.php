<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>fetch manually</title>
</head>
<body>
	<form action="process.php">
		<div>
			man
			<input type="text" name="man">
		</div>
		<div>
			woman
			<input type="text" name="woman">
		</div>
		<div>
			<input onclick="getRequest()" type="button" value="fetch">
		</div>
	</form>
	<div id="certificate"></div>
	<script type="text/javascript" src="../includes/jquery.js"></script>
	<script type="text/javascript">

		function getRequest()
		{
			var man=document.querySelector('input[name=man').value;
			var woman=document.querySelector('input[name=woman').value;
			var url='process.php?man='+man+'&woman='+woman;
			console.log(url);
			$.ajax({
				method : 'GET',
				url  : url,
				success: function(resp)
				{
					// console.log(resp);
					$("#certificate").html(resp)
				}
			});
		}

	</script>







</body>
</html>