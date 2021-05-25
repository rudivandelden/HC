<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?= $site->twitter() ?></title>

	<?= css('project.css') ?>




</head>
<body>

		<div class="project-gallery">

		<ul id="parent-list">
			<?php foreach($page->images() as $image): ?>
			<li id="child-list">
					<img id="flex" src="<?= $image->url() ?>" class="item">
			</li>
			<?php endforeach ?>
			</ul>

</div>

 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 <script src="http://afarkas.github.io/lazysizes/lazysizes.min.js" async=""></script>
 <script src="http://code.jquery.com/jquery-1.7.2.min.js" async=""></script>
 <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script>

	$("#parent-list > li").click(function() {
    $(this).removeClass('collapse');
    $("#parent-list > li").not(this).each(function() {
        $(this).addClass("collapse");    
    });
    
    
});


</script>

</body>
</html>


