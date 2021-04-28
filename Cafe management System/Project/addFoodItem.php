<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="controller/createFoodItem.php" method="POST" enctype="multipart/form-data">
  <label for="name"> Food Item Name:</label><br>
  <input type="text" id="name" name="name"><br>
   <input type="file" name="image"><br><br>
  <input type="submit" name = "createFoodItem" value="Create">
  <input type="reset"> 
</form> 

</body>
</html>

