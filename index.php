<?php

// Includes
    require "./templates/header.php";

// Routings
    if(isset($_POST['action'])){require "./templates/actions.php";} // Perform Action
    else {require "./templates/initial.php";}

?>

    <footer class="page-footer font-small elegant-color-dark py-4">
        <div class="container">
            <div class="footer-copyright text-center bg-transparent">© 2021 Copyright: ZonkSquad.club
                | Designed by: <a href="https://pweb.solutions">PWeb.Solutions</a>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="/static/js/jquery.min.js"></script>
    <script type="text/javascript" src="/static/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/static/js/mdb.min.js"></script>
    <script type="text/javascript" src="/static/js/app.js"></script>
</body>

</html>