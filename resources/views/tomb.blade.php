<p>Ez az oldal egy tömböt kap a route-ból így írja ki listázva az elemeket.</p>
<ul>
    <?php foreach($feladatok as $task) : ?>
    <li><?= $task; ?></li>
    <?php endforeach; ?>
</ul>