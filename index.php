<?php
// Include common header
include_once 'inc/header.php';

// Determine the requested page or set a default page
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Define an array of allowed pages in the main folder
$allowedPages = ['home', 'about', 'service', 'docu','contact'];

// Check if the requested page is allowed
if (in_array($page, $allowedPages)) {
    // Include the requested page from the main folder
    include 'pages/' . $page . '.php';
} elseif ($page === 'about' || in_array($page, ['who', 'ouro', 'ourv', 'ourm', 'duties'])) {
    // Check if the requested page is the "about" page or its subpages
    $subpage = isset($_GET['subpage']) ? $_GET['subpage'] : '';

    // Define an array of allowed subpages in the subpages folder
    $allowedSubPages = ['who', 'ouro', 'ourv', 'ourm', 'duties'];

    if (in_array($subpage, $allowedSubPages)) {
        // Include the requested subpage from the subpages folder
        include 'pages/subpages/' . $subpage . '.php';
    } else {
        // Include the default about page from the subpages folder
        include 'pages/subpages/about.php';
    }
} elseif ($page === 'scheme' || in_array($page, ['scheme', 'schemeper', 'master'])) {
    // Check if the requested page is the "scheme" page or its subpages
    $subpage = isset($_GET['subpage']) ? $_GET['subpage'] : '';

    // Define an array of allowed subpages in the subpages folder
    $allowedSubPages = ['schemeper', 'scheme', 'master' ];

    if (in_array($subpage, $allowedSubPages)) {
        // Include the requested subpage from the subpages folder
        include 'pages/subpages/' . $subpage . '.php';
    } else {
        // Include the default scheme page from the subpages folder
        include 'pages/subpages/scheme.php';
    }
} elseif ($page === 'benefit' || in_array($page, ['benefit', 'benefitschem', 'benefitmaster'])) {
    // Check if the requested page is the "scheme" page or its subpages
    $subpage = isset($_GET['subpage']) ? $_GET['subpage'] : '';

    // Define an array of allowed subpages in the subpages folder
    $allowedSubPages = ['benefit', 'benefitschem', 'benefitmaster' ];

    if (in_array($subpage, $allowedSubPages)) {
        // Include the requested subpage from the subpages folder
        include 'pages/subpages/' . $subpage . '.php';
    } else {
        // Include the default scheme page from the subpages folder
        include 'pages/subpages/scheme.php';
    }
}elseif ($page === 'regis' || in_array($page, ['regis', 'regispers', 'regisprov'])) {
    // Check if the requested page is the "scheme" page or its subpages
    $subpage = isset($_GET['subpage']) ? $_GET['subpage'] : '';

    // Define an array of allowed subpages in the subpages folder
    $allowedSubPages = ['regis', 'regispers', 'regisprov' ];

    if (in_array($subpage, $allowedSubPages)) {
        // Include the requested subpage from the subpages folder
        include 'pages/subpages/' . $subpage . '.php';
    } else {
        // Include the default scheme page from the subpages folder
        include 'pages/subpages/scheme.php';
    }
}
else {
    // Page not found, display an error message or redirect to an error page
    include 'pages/404.php';
}

// Include common footer
include_once 'inc/footer.php';
?>
