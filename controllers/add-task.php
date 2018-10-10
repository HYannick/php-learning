<?php

$description = $_POST['description'];
App::get('database')->insert('todos', $description);