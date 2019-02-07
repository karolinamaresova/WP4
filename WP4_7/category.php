<?php
session_start();
if (isset($_SESSION['email'])) {
    echo "session on";
}
else {
    echo "session off";
}