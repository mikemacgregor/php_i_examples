<?php include 'common_functions.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Project Test</title>
</head>
<body>
<h1>Test Form</h1>
<form>
<?php echo buildStatusOptions(); ?>
</form>
<h1>Test Data</h1>
<pre>
<?php var_dump(getStaticOrders(6)) ?>
</pre>
</body>
</html>

