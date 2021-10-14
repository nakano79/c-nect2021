<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
move_uploaded_file($_FILES["data"]["tmp_name"], $_FILES["data"]["name"]);
}