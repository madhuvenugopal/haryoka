<?php

include_once 'config/Database.php';
include_once 'class/User.php';
include_once 'class/Post.php';
include_once 'class/Category.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);
$post = new Post($db);
$category = new Category($db);

if(!$user->loggedIn()) {
	header("location: index.php");
}

$post = new Post($db);

$postdetails = array(
	'id' => 0, 
	'title' => "", 
	'message' => "", 
	'category_id' => 1, 
	'userid' => 1, 
	'status' => "", 
	'created' => date('Y-m-d H:i:s'), 
	'updated' => date('Y-m-d H:i:s')  
);

$categories = $post->getCategories();

echo $categories == null;

try{
	$post->id = (isset($_GET['id']) && $_GET['id']) ? $_GET['id'] : '0';
	$saveMessage = '';
	if(!empty($_POST["savePost"]) && $_POST["title"]!=''&& $_POST["message"]!='') {
		
		$post->title = $_POST["title"];
		$post->message = $_POST["message"];
		$post->category = $_POST["category"];
		$post->status = $_POST["status"];	 	
		if($post->id) {	
			$post->updated = date('Y-m-d H:i:s');
			if($post->update()) {
				$saveMessage = "Post updated successfully!";
			}
		} else {
			$post->userid = $_SESSION["userid"];
			$post->created = date('Y-m-d H:i:s'); 
			$post->updated = date('Y-m-d H:i:s'); 	
			$lastInserId = $post->insert();
			if($lastInserId) {
				$post->id = $lastInserId;
				$saveMessage = "Post saved successfully!";
			}
		}
	}

	$postdetails = $post->getPost();
	if($postdetails == null){				
		$postdetails = array(
			'id' => 0, 
			'title' => "", 
			'message' => "", 
			'category' => 1, 
			'userid' => 1, 
			'status' => "", 
			'created' => date('Y-m-d H:i:s'), 
			'updated' => date('Y-m-d H:i:s')  
		);
	}

}catch(Exception $e) {
	echo 'Message: ' .$e->getMessage();
}
 
include('inc/header.php');
?>
<script src="js/jquery.dataTables.min.js<?php preventScriptStyleCache() ?>"></script>
<script src="js/dataTables.bootstrap.min.js<?php preventScriptStyleCache() ?>"></script>		
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css<?php preventScriptStyleCache() ?>" />
<script src="js/posts.js<?php preventScriptStyleCache() ?>"></script>	
<link href="css/style.css<?php preventScriptStyleCache() ?>" rel="stylesheet" type="text/css" >  
</head>
<body>
<?php include "menus.php"; ?>
<header id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>Manage Your Site</small></h1>
			</div>
			<br>			
		</div>
	</div>
</header>
<br>
<section id="main">
	<div class="container">
		<div class="row">	
			<?php include_once "left_menus.php"; ?>
			<div class="col-md-9">
				<div class="panel panel-default">
				  <div class="panel-heading">
					<h3 class="panel-title">Add New Post</h3>
				  </div>
				  <div class="panel-body">
				  
					<form method="post" id="postForm">							
						<?php if ($saveMessage != '') { ?>
							<div id="login-alert" class="alert alert-success col-sm-12"><?php echo $saveMessage; ?></div>                            
						<?php } ?>
						<div class="form-group">
							<label for="title" class="control-label">Title</label>
							<input type="text" class="form-control" id="title" name="title" value="<?php echo $postdetails['title']; ?>" placeholder="Post title..">
						</div>
						
						<div class="form-group">
							<label for="lastname" class="control-label">Message</label>							
							<textarea class="form-control" rows="5" id="message" name="message" placeholder="Post message.."><?php echo $postdetails['message']; ?></textarea>					
						</div>	

						
						<div class="form-group">
							<label for="sel1">Category</label>
							<select class="form-control" id="category" name="category">
							<?php
							while ($category = $categories->fetch_assoc()) {
								$selected = '';
								if($category['name'] ==$postdetails['name']) {
									$selected = 'selected=selected';
								}									
								echo "<option value='".$category['id']."' $selected>".$category['name']."</option>";
							}
							?>							
							</select>
						</div>						
						<div class="form-group">
							<label for="status" class="control-label"></label>							
							<label class="radio-inline">
								<input type="radio" name="status" id="publish" value="published" <?php if($postdetails['status'] == 'published') { echo "checked";} ?>>Publish
							</label>
							<label class="radio-inline">
								<input type="radio" name="status" id="draft" value="draft" <?php if($postdetails['status'] == 'draft') { echo "checked";} ?>>Draft
							</label>
							<label class="radio-inline">
								<input type="radio" name="status" id="archived" value="archived" <?php if($postdetails['status'] == 'archived') { echo "checked";} ?>>Archive
							</label>							
						</div>											
						<input type="submit" name="savePost" id="savePost" class="btn btn-info" value="Save" />											
					</form>				
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include('inc/footer.php');?>
