
<!doctype html>
<html lang="en">
</head>
<body>
        <h1 class="banner-head">
                <?php
                $handle = fopen("User-Details.txt", "r");
                while (($line = fgets($handle)) !== false) {
                    echo "$line<br>";
                }
    fclose($handle);
               ?>
                </h1>

                </body>
</html>
