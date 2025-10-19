<?php
session_start();
echo $_SESSION["mensaje"];
unset($_SESSION['mensaje']);
