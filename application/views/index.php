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
        <form action="/dojos/create" method="post">
            <p>Name: <input type="text" name="name"></p>
            <p>City: <input type="text" name="city"></p>
            <p>State: <input type="text" name="state" placeholder="WA"></p>
            <input type="submit" value="Add Dojo">
        </form>
    </body>
</html>
