<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 03a - PHP dan File</title>
    <link rel="stylesheet" href="latihan01a.css">
</head>
<body>
    <h1>Klasemen Sementara (HTML + PHP File)</h1>
    <?php
        $file = fopen("klasemena.csv","r");
        while (($data_row = fgetcsv($file, 1000, ",")) !== FALSE) {
            $racer_list[] = $data_row;
        }

        // debug
        // print_r($racer_list);
        fclose($file);
    ?>
    <table class="styled-table">
        <thead>
            <tr>
                <th>Rank</th>
                <th>Name</th>
                <th>Points</th>
                <th>Team</th>
                <th>Country</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($racer_list as $racer) {
                echo(
                    "<tr>
                        <td>" . $racer[0] . "</td>
                        <td>" . $racer[1] . "</td>
                        <td>" . $racer[2] . "</td>
                        <td>" . $racer[3] . "</td>
                        <td>" . $racer[4] . "</td>
                    </tr>"
                );
            }
            ?>
        </tbody>
    </table>
</body>
</html>