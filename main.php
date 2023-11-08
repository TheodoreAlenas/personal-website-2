<!DOCTYPE HTML>
<!-- <?php
         echo basename(__FILE__) . " for " . getenv("FILE");
         ?> -->
<?php
    function skip_region($t) {}
    function echo_region($t) {echo $t;}
    $FILE_END_TO_TITLE = array(
        "index.html" => ["Home", "Αρχική"],
        "portfolio.html" => ["Portfolio", "Χαρτοφυλάκιο"],
        "biography.html" => ["Biography", "Βιογραφικό"],
        "contact.html" => ["Contact", "Επικοινωνία"]
    );

    $ORIGIN_FILE = getenv("FILE");
    if (str_contains($ORIGIN_FILE, "/gr/")) {
        $GR = "echo_region";
        $EN = "skip_region";
        $LANG = "gr";
        $TITLE = $FILE_END_TO_TITLE[basename($ORIGIN_FILE)][1];
    }
    else {
        $GR = "skip_region";
        $EN = "echo_region";
        $LANG = "en";
        $TITLE = $FILE_END_TO_TITLE[basename($ORIGIN_FILE)][0];
    }

?>

<html lang="en" scheme="dark">

    <head>

        <title><?php echo $TITLE ?></title>

        <meta name="author" content="Dimakopoulos Theodoros">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">

        <style>
            <?php include("s.css") ?>
        </style>

        <script>
            <?php include("s.js"); ?>
        </script>

    </head>

    <body class="bg1 fg1 fn1 m0 lnh1">
        <header id="menu" style="position: sticky; top: 0;">
            <nav><nav>
                <?php include("header.php") ?>
            </nav>
        </header>

        <main class="mxw1 m0a b2 p1 bg1 fg1">
            <?php
                $files = [
                    "bio-minimalism.php",
                    "bio-high-school.php",
                    "bio-languages.php",
                    "bio-architecture.php",
                    "biography.php",
                    "bio-youtube.php"
                ];
                foreach ($files as $file) {
                    echo "<!-- $file -->\n";
                    include($file);
                }
            ?>
        </main>

    </body>

</html>

<!--
     Copyright (c) 2023 Dimakopoulos Theodoros

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
