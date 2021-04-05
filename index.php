<?php
session_start();
include __DIR__ . '/Flash/Flash.php';

var_dump($_SESSION);

Flash::setFlash('test1');
Flash::setFlash('test2', 'info');
Flash::setFlash('test3', 'success');
Flash::setFlash('test4', 'danger');
Flash::setFlash('test5', 'danger', false);

var_dump($_SESSION);

Flash::getFlash('info');
Flash::getFlash('danger');
Flash::getFlash('success');

var_dump($_SESSION);
