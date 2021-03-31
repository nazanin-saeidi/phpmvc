<?php require APP_ROOT . '/views/includes/header.php'; ?>
<h3>
    <?php echo $data['title']; ?>
    <ul>
        <?php foreach($data['posts'] as $post) : ?>
            <li><?php echo $post->title . '<br />' . $post->body; ?></li>
        <?php endforeach?>
    </ul>
</h3>
<?php require APP_ROOT . '/views/includes/footer.php'; ?>