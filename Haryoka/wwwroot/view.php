<?php 
include_once 'config/Database.php';
include_once 'class/Articles.php';
$database = new Database();
$db = $database->getConnection();

$article = new Articles($db);

$article->id = (isset($_GET['id']) && $_GET['id']) ? $_GET['id'] : '0';

$result = $article->getArticles();

include_once('inc/header.php');

?>
<title>haryoka: blog</title>
<link href="css/style.css<?php preventScriptStyleCache() ?>" rel="stylesheet" id="bootstrap-css">
<?php include_once('inc/container.php');?>
<div class="container">		
	<div id="blog" class="row">     
		<div id="blog" class="row">
			<div class="header">
			<a href="#default" class="logo">haryoka: blog</a>
			<div class="header-right">
				<a href="index.php">Home</a>
				<a href="#contact">Contact</a>
				<a href="#about">About</a>
			</div>
		</div>		
		<?php 
		while ($post = $result->fetch_assoc()) {
			$date = date_create($post['created']);
			$message = str_replace("\n\r", "<br><br>", $post['message']);
		?>
			<div class="col-md-10 blogShort">
			<h2><?php echo $post['title']; ?></h2>
			<em><strong>Published on</strong>: <?php echo date_format($date, "d F Y");	?></em>
			<em style="visibility:hidden"><strong>Category:</strong> <a href="#" target="_blank"><?php echo $post['category']; ?></a></em>
			<br><br>
			<article>
				<p><?php echo $message; ?> 	</p>
			</article>		
			</div>
		<?php } ?>   
		
		<div class="col-md-12 gap10"></div>
		
	</div>
</div>
<?php include_once('inc/footer.php');?>