<?php
$this->get('', function ($data) {
    $template = $this->core->loadModule('template');
    $template->render('home', $data);
});

// Load another router files if you want to separate each route on it's own file
$this->loadRouteFile('test');