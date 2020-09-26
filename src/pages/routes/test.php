<?php

$this->get('test/{name}/{age}', function ($data) {
    $template = $this->core->loadModule('template');
    $template->render('test', $data);
});

?>