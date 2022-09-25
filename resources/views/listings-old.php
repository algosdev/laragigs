<h1><?php echo $heading ?></h1>
<ul>
    <?php foreach ($listings as $item) : ?>
        <li>
            <h4><?php echo $item['title'] ?></h4>
            <p><?php echo $item['description'] ?></p>
        </li>
    <?php endforeach; ?>
</ul>