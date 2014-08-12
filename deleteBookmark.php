<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        
    	<title>Bookmark Deleted</title>
        <link rel="shortcut icon" href="/Bookmarks/media/favicon.ico" />
        
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    	<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css" />
        
        <script src="js/respond.min.js"></script>
</head>

<body>
<div class="container">
<div class="row">
<div class="thumbnail">
<div class="caption">
<?php 
$db = mysqli_connect('localhost', 'root', 'root', 'myBookmarks');
if (mysqli_connect_error()) {
	echo("<h1>Error Connecting</h1>");
	die("");
} else {
	if(isset($_GET['bMId'])) {
		$bmId = $_GET['bMId']; 
		echo "<br>";
		$sql = "DELETE FROM `bookmarksList` WHERE id='$bmId';";
		if (!mysqli_query($db, $sql)) {
			echo "<h1>Error Deleteing</h1>";
			die("");
		} else {
			if (isset($_GET['bmT'])){
				$bmTitle = $_GET['bmT'];
				echo "<h1>$bmTitle Deleted</h1>";	
			} else {
				echo "<h1>ID : $bmId Deleted</h1>";
			}
		}
	}
}
?>
	<form action="index.php">
    <div class="form-group">
    	<input class="btn btn-primary btn-lg pull-right" type="submit" value="Back to Bookmarks"/>
        <br/><br/>
    </div>
    </form>
</div>
</div>
</div>
</div>
	<script src="js/jquery.min.js"></script>
   	<script src="js/jquery-ui.min.js"></script>
   	<script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php 
mysqli_close($db);
?>