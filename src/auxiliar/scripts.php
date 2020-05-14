<?php

function resolvePage($page) {
    if(is_numeric($page)) {
        return $page * 10;
    }

    return 0;
}