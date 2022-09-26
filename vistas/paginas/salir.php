<?php
session_destroy();
include_once "paginas/index.php";
echo '<script>
        window.location = "index";
        </script>';