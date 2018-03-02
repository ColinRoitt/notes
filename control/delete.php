<?php
require_once("../model/Card.php");
require_once("../model/dataAccess.php");

deleteCard($_REQUEST["cardId"]);
echo('card removed ' . $_REQUEST["cardId"]);

?>