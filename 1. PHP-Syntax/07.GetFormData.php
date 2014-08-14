<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Form Data</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name"><br>
        <input type="number" name="age"><br>
        <input type="radio" name="gender" value="male"> Male<br>
        <input type="radio" name="gender" value="female"> Female<br>
        <input type="submit" value="Submit">
    </form>
    <?php
    if (isset($_POST['name'])) {
    	echo 'My name is '.$_POST['name'].'.'.' I am '.$_POST['age'].' old. '.'I am '.$_POST['gender'].'.';
    }
	?>
</body>
</html>