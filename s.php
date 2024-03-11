<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort Array</title>
    <style>
        /* Optional styling to improve presentation */
        body {
            font-family: sans-serif;
            margin: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>Array Sorting</h2>
    <table>
        <thead>
            <tr>
                <th>Original Array</th>
                <th>Sorted Array</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo implode(", ", $arr); ?></td>
                <td>
                    <?php
                        customSort($arr);
                        echo implode(", ", $arr);
                    ?>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>
