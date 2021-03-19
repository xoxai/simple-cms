<?php

include_once('includes/connection.php');
include_once('includes/article.php');

$article = new Article();
$articles = $article->fetch_all();

?>

<html>

	<head>
		<title>CMS Tutorial</title>
		<link rel="stylesheet" type="text/css" href="assets/style.css">
	</head>

	<body>
		<div class="container">
			<a href="index.php" id="logo">XCMS</a>

			<ol>
				<?php foreach ($articles as $article) { ?>
				<li>
					<a href="article.php?id=<?php echo $article['article_id']; ?>">
						<?php echo $article['article_title']; ?>
					</a>

					- <small>
						posted <?php echo date('M jS', $article['article_timestamp']); ?>
					</small>
				<?php } ?>
				</li>
			</ol>
			<br />
			<small><a href="admin">admin</a></small>
		</div>
	</body>

</html>