<?php 
include_once 'config/Database.php';
include_once 'class/Articles.php';
$database = new Database();
$db = $database->getConnection();

$article = new Articles($db);

$article->id = 0;

$result = $article->getArticles();

include('inc/header.php');

?>
<title>haryoka: blog</title>
<link href="css/style.css<?php preventScriptStyleCache() ?>" rel="stylesheet" id="bootstrap-css">

<?php include('inc/container.php');?>
<div class="container">	
		<div id="blog" class="row">
			<div class="header">
			<a href="#default" class="logo">haryoka: blog</a>
			<div class="header-right">
				<a href="index.html">Home</a>
				<a href="index.html#contact">Contact</a>
				<a href="about-us.html">About</a>
			</div>
		</div>	
		<?php
		while ($post = $result->fetch_assoc()) {
			$date = date_create($post['created']);					
			$message = str_replace("\n\r", "<br><br>", $post['message']);
			$message = $article->formatMessage($message, 100);
			?>
			<div class="col-md-10 blogShort">
			<h3><a href="view.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h3>		
			<em><strong>Published on</strong>: <?php echo date_format($date, "d F Y");	?></em>
			<em style="visibility:hidden"><strong>Category:</strong> <a href="#" target="_blank"><?php echo $post['category']; ?></a></em>
			<br><br>
			<article>		
			<p><?php echo $message; ?> 	</p>
			</article>
			<a class="btn btn-blog pull-right" href="view.php?id=<?php echo $post['id']; ?>">READ MORE</a> 
			</div>
		<?php } ?>   	
	</div>
</div>
<?php include('inc/footer.php');?>