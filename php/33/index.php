<?php

//echo $user = isset($_GET['user']) ? $_GET['user'] : 'guest';

echo $user = $_GET['user'] ?? $_GET['user2'] ?? 'guest';