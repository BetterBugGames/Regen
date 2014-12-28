<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Regen - An Interactive Story by Better Bug Games!</title>
    <link rel="stylesheet" type="text/css" href="../stories.css">
</head>
<body>
<div class="description">
    <p>
        <?php foreach ($paragraphs as $paragraph): ?>
            <?php echo $paragraph; ?> <br />
        <?php endforeach; ?>
    </p>
</div>
<div class="actions">
    <?php foreach ($actions as $action => $title): ?>
        <a href="<?php echo $action; ?>"><?php echo $title; ?></a>
    <?php endforeach; ?>
</div>
</body>
</html>
