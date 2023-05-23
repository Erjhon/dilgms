<!DOCTYPE html>
<html>
<head>
    <title>DILG Table</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>DILG Table</h2>
    <?php if ($dilg): ?>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dilg as $row): ?>
                    <tr>
                    <td><?= $row['lgu_place'] ?></td>
                        <td><?= $row['brgy_num'] ?></td>
                        <td><?= $row['income'] ?></td>
                        <td><?= $row['lgoo_name'] ?></td>
                        <td><?= $row['month'] ?></td>
                        <td><?= $row['lgmes'] ?></td>
                        <td><?= $row['lgcds'] ?></td>
                        <td><?= $row['fas'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No data available.</p>
    <?php endif; ?>
</body>
</html>
