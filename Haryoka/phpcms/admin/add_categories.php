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

$category = new Category($db);

$categoryDetails = array(
	'id' => 0, 
	'name' => ""
);

try{

$category->id = (isset($_GET['id']) && $_GET['id']) ? $_GET['id'] : '0';
//echo implode(",",$category); 
$saveMessage = '';
if(!empty($_POST["categorySave"]) && $_POST["categoryName"]!='') {
	
	$category->name = $_POST["categoryName"];	
	if($category->id) {			
		if($category->update()) {
			$saveMessage = "Category updated successfully!";
		}
	} else {			
		$lastInserId = $category->insert();
		if($lastInserId) {
			$category->id = $lastInserId;
			$saveMessage = "Category saved successfully!";
		}
	}

	$categoryDetails = $category->getCategory();
	if($categoryDetails == null){				
		$categoryDetails = array(
			'id' => 0, 
			'name' => ""
		);
	}
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
			<?php include "left_menus.php"; ?>
			<div class="col-md-9">
				<div class="panel panel-default">
				  <div class="panel-heading">
					<h3 class="panel-title">Add / Edit Category</h3>
				  </div>
				  <div class="panel-body">
				  
					<form method="post" id="postForm">							
						<?php if ($saveMessage != '') { ?>
							<div id="login-alert" class="alert alert-success col-sm-12"><?php echo $saveMessage; ?></div>                            
						<?php } ?>
						
						<div class="form-group">
							<label for="title" class="control-label">Category Name</label>
							<input type="text" class="form-control" id="categoryName" name="categoryName" value="<?php echo $categoryDetails['name']; ?>" placeholder="Category name..">							
						</div>				
						
						<input type="submit" name="categorySave" id="categorySave" class="btn btn-info" value="Save" />											
					</form>				
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include('inc/footer.php');?>
