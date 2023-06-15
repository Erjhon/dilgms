<!DOCTYPE html>
<html>

<head>
    <title>Event List</title>
</head>

<body>
    <h1>Event List</h1>

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Start Date</th>
                <th>End Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($events as $event) : ?>
            <tr>
                <td><?= $event['title']; ?></td>
                <td><?= $event['start_date']; ?></td>
                <td><?= $event['end_date']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>