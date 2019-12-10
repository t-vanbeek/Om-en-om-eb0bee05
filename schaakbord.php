<!doctype html>

<html>

<head>
</head>

<body>

    <table width="270px" cellspacing="0px" cellpadding="0px" border="2px">

        <?php
        for ($z = 1; $z <= 8; $z++) {
            echo "<tr>";
            for ($ces = 1; $ces <= 8; $ces++) {
                $total = $z + $ces;
                if ($total % 2 == 0) {
                    echo "<td height=30px width=30px bgcolor=black></td>";
                } else {
                    echo "<td height=30px width=30px bgcolor=white></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>