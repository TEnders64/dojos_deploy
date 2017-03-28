<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>All Dojos</title>
    </head>
    <body>
        <h1>All Dojos</h1>
<?php foreach ($dojos as $dojo){ ?>
        <p><a href="/dojos/show/<?= $dojo['id'] ?>"><?= $dojo['name'] ?></a></p>
<?php } ?>
    </body>
</html>
