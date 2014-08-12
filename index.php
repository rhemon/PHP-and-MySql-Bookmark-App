
<?php
	$message = '';
	$conn = mysqli_connect('localhost', 'root', 'root', 'myBookmarks');
	if (mysqli_connect_error($db)) {
		$message = 'Error';
	} else {
		if (isset($_POST['changeBM'])){
			
			$newUrl = $_POST['bookmark_Url'];
			$newTitle = $_POST['bookmark_Title'];
			$oldId = $_POST['bookmark_id'];
			$sql = "UPDATE `myBookmarks`.`bookmarksList` SET bookMarkTitle='$newTitle', bookMarkURL='$newUrl' WHERE id='$oldId';";
			if(!mysqli_query($conn, $sql)){
			}		
		}
		if (isset($_POST['submit'])) {
				$title = mysqli_real_escape_string($conn, $_POST['bookmarkTitle']);
				$url =  mysqli_real_escape_string($conn, $_POST['bookmarkURL']);
				$sql = "INSERT INTO `myBookmarks`.`bookmarksList` (`id`, `bookMarkTitle`, `bookMarkURL`) VALUES (NULL, '$title', '$url');";
				if (!mysqli_query($conn,$sql)) {
  					die('Error');
				}		
		}
	}
?>
<?php
$message = '';
$db = new MySQLi('localhost', 'root', 'root', 'myBookmarks');
if ($db->connect_error) {
	$message = 'Error';
} else {
	$sql = "SELECT * FROM `bookmarksList`";
	$dataTable = $db->query($sql);
	if ($db->error){
		$message = "Error";
	}
}

?>
<!Doctype html>
<html>
	<head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	
        <title>Bookmarks</title>
        
        <link rel="shortcut icon" href="/Bookmarks/media/favicon.ico" />
        
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    	<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css" />
		
        <style>
		.row li{
			list-style: none;
		}
		.glyphicon-minus-sign { color: red; }
		.glyphicon-edit {color: orange; }
		</style>
        
    	<script src="js/respond.min.js"></script>
    </head>
    
    <body>
    	<div class="container">
        <div class="row">
        <div class="thumbnail">
        <div class="caption">
    	<h1> My Bookmarks </h1>
        <div class="table-responsive">
    	<table class="table table-hover table-condensed table-bordered">
        	<thead>
                <tr>
                	<th>Bookmark</th>
                    <th colspan="2">Options</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $dataTable->fetch_assoc()): ?>
                    <tr>
                        <td><a href="<?php echo $row['bookMarkURL']; ?>" class="btn btn-link btn-md"> <?php echo $row['bookMarkTitle']; ?> </a> </td> 
                        <td> <form method="post" action="deleteBookmark.php?bMId=<?php echo $row['id'];?>&bmT=<?php echo $row['bookMarkTitle'];?>">	<span class="glyphicon glyphicon-minus-sign"></span><input type="submit" class="btn btn-link btn-md" name="delete" value="Delete"/> </form>
                        </td>
                        
                        <td> <form method="post" action="changeBookmark.php?bMId=<?php echo $row['id'];?>&bmT=<?php echo $row['bookMarkTitle'];?>&bmU=<?php echo $row['bookMarkURL'];?>"><span class="glyphicon glyphicon-edit"></span><input type="submit" class="btn btn-link btn-md" name="change" value="Edit" /></form></td>
                    </tr>
                <?php endwhile; ?>
                
            </tbody>
        </table>
        </div>
        <p><a href="addBookmark.php" class="btn btn-primary btn-md pull-right"> Add Bookmark </a></p><br/><br/>
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
mysqli_close($conn);
?>