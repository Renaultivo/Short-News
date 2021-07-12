<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link type="text/css" rel="stylesheet" href="./assets/css/styles.css">
    <link type="text/css" rel="stylesheet" href="./assets/css/elementManager.css">
    <link type="text/css" rel="stylesheet" href="./assets/css/simplified.css">
    <title>Soft Notes</title>
</head>
<body>
    
    <div id="appLogo" class="flexBoxAlign columnDirection">
        Soft Notes
        <div class="loadingMessage">Loading...</div>
    </div>

    <div id="userFloatMenu">
        <input id="uploadFile" type="file">
    </div>
    
    <header class="flexBox alignCenter">
        <div class="flexBox rowDirection alignCenter">
            <div id="mobileMenu">
                <div class="mobileMenuIconLine"></div>
                <div class="mobileMenuIconLine"></div>
                <div class="mobileMenuIconLine"></div>
            </div>
            <div id="headerTitle">Soft News</div>
        </div>
        <div class="flexBox alignCenter rowDirection">
            <div id="searchBox" class="flexBox alignCenter">
                <input type="text">
                <img class="hoverGrow" src="./assets/icon/search.svg">
            </div>
            <div id="userBox" class="flexBoxAlign">
                <div id="userIcon" class="hoverGrow"></div>
            </div>
        </div>
        <div id="leftMenu"></div>
    </header>

    <div id="root"></div>

    <footer></footer>

    <script src="./assets/js/ajax.js"></script>
    <script src="./assets/js/elementManager.js"></script>
    <script src="./assets/js/menu.js"></script>

</body>
</html>