<!--  THIS IS (_Chaimaa_) PAGE -->
<header>
    <nav class="topnav" id="topnav">
        <a href="homepage.php"><img class="img-responsive" src="/img/LOGO-FAVICON.png" data-bs-hover-animate="pulse" alt="logo" width="48" height="48"></a>
        <div class="navbar">
            <strong class="surveyItem">
                <?php
                $menuItems = array(
                    array("/question1.php", "Quiz"),

                );
                foreach ($menuItems as $item) {
                    echo "<a href ='$item[0]'>$item[1]</a> ";
                }
                ?>
            </strong>
        </div>
    </nav>

</header>

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