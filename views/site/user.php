
<h1> <?= $user->username?> </h1>
<?php foreach($posts as $post) : ?>
    <h2><a href ="index.php?r=site/post&id=<?=$post->id?>"> <?= $post->titular?> </a></h2>
    <p> <?= $post->texto?> </p>
    <p> Categoria: <?= $post->categoria->nombre?> - 
        Autor : <?= $post->user->username ?> </p>
<?php endforeach; ?>