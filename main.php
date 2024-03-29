<?php
    $ORIGIN_FILE = getenv("FILE");
    if (str_contains($ORIGIN_FILE, "/gr/"))
        $LANG = "gr";
    else
        $LANG = "en";

    $TITLE = array(
        "index.html" => ["Theodoros Dimakopoulos", "Θοδωρής Δημακόπουλος"],
        "portfolio.html" => ["Portfolio", "Χαρτοφυλάκιο"],
        "biography.html" => ["Biography", "Βιογραφικό"],
        "contact.html" => ["Contact", "Επικοινωνία"]
    )[basename($ORIGIN_FILE)][array("en" => 0, "gr" => 1)[$LANG]];

    function echo_localized($en, $gr) {
        global $LANG;
        if ($LANG === "gr")
            echo $gr;
        else
            echo $en;
    }
    function echo_localized_from_xml($match) {
        global $LANG;
        global $STR_XML;
        foreach ($STR_XML->s as $s) {
            if ($s->attributes()["n"] == $match) {
                if ($LANG === "gr")
                    echo $s->gr;
                else
                    echo $s->en;
                return;
            }
        }
        error_log("string not found: '" . $match . "'");
    }
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title><?php echo $TITLE ?></title>

        <meta name="author" content="Dimakopoulos Theodoros">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">

        <style>
            <?php include("main/s.css") ?>
        </style>

        <script>
            <?php include("main/s.js") ?>
        </script>

    </head>
    <body class="fg1">
        <div>
            <header>
                <nav>
                    <?php include("main/header.php") ?>
                </nav>
            </header>
            <main id="main-content">
                <?php
                    $b = "biography";
                    $p = "portfolio";
                    $h = "home";
                    switch (basename($ORIGIN_FILE)) {
                        case "$b.html": include("$b/$b.php"); break;
                        case "$p.html": include("$p/$p.php"); break;
                        case "index.html": include("$h/$h.php"); break;
                        default: echo "<big>Invalid origin</big>"; exit(1);
                    }
                ?>
            </main>
        </div>
    </body>
</html>

<!--
     Copyright (c) 2023 Dimakopoulos Theodoros <dimakopt732@gmail.com>

     Permission is hereby granted, free of charge, to any person obtaining a copy
     of this software and associated documentation files (the "Software"), to deal
     in the Software without restriction, including without limitation the rights
     to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
     copies of the Software, and to permit persons to whom the Software is
     furnished to do so, subject to the following conditions:

     The above copyright notice and this permission notice shall be included in all
     copies or substantial portions of the Software.

     THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
     IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
     FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
     AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
     LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
     OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
     SOFTWARE.
-->
