<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
   	<meta name="viewport" content="width=device-width, initial-scale=1">
       
   	<title>Change Bookmark</title>
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
		if (isset($_GET['bMId'])) {
			$bookmark_id = $_GET['bMId'];
		}
		if (isset($_GET['bmT'])) {
			$bookmark_title = $_GET['bmT'];
		}
		if (isset($_GET['bmU'])) {
			$bookmark_url = $_GET['bmU'];
		}
	?>
    <form method="post" action="index.php">
    	<div class="form-group">
        <label for="bookmark_id">Bookmark Id</label>
        <input type="number" name="bookmark_id" value="<?php echo $bookmark_id; ?>" readonly/>
        </div>
    	<div class="form-group">
        <label for="bookmark_Title">Bookmark Title</label>
        <input class="form-control" type="text" name="bookmark_Title" id="bookmark_Title" value="<?php echo $bookmark_title; ?>" />
        </div>
        <div class="form-group">
        <label for="bookmark_Url">Bookmark URL</label>
        <input class="form-control" type="text" name="bookmark_Url" id="bookmark_Url" value="<?php echo $bookmark_url; ?>" />
        </div>
        <div class="form-group">
        	<input class="btn btn-primary btn-lg pull-right" type="submit" name="changeBM" value="Change" /> 
        </div>
        <br/><br/>
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