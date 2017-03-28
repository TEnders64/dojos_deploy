<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Show Page</title>
        <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    </head>
    <body>
        <h1>Show Page</h1>
        <p><?= $dojo['name'] ?></p>
        <table>
            <thead>
                <th>Name</th>
            </thead>
            <tbody>
<?php foreach($students as $student) { ?>
                <tr>
                    <td><?= $student['name'] ?></td>
                </tr>
<?php } ?>
            </tbody>
        </table>
        <h2>Add Student</h2>
        <form action="/dojos/add_student/<?= $dojo['id'] ?>" method="post">
            <input type="text" name="student_name">
            <input type="submit" value="Add Student">
        </form>
    </body>
</html>
