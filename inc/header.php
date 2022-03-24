<!DOCTYPE html>
<html>

<head>
    <title>Header</title>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>


    <nav class="topnav" id="topnav">
        <a href="homepage.php"><img class="img-responsive" src="/img/logo_w.svg" data-bs-hover-animate="pulse" alt="logo" width="48" height="48"></a>
        <div class="navbar">
            <strong class="surveyItem">
                <?php
                $menuItems = array(
                    array("/index.php", "Survey"),

                );
                foreach ($menuItems as $item) {
                    echo "<a href ='$item[0]'>$item[1]</a> ";
                }
                ?>
            </strong>
        </div>
    </nav>


    <script>
        function myFunction() {
            var x = document.getElementById("topnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>

</body>

</html>