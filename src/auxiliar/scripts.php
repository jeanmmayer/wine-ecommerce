<?php

function resolvePage($page) {
    if(!$page) {
        return 0;
    }
    return $page * 10;
}