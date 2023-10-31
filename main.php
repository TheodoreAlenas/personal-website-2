<!DOCTYPE HTML>
<!-- <?php echo basename(__FILE__) . " for " . getenv("FILE"); ?> -->

<html lang="en" scheme="dark">

<head>

<title>Loading</title>

<!-- script tag added by PHP -->
<?php

    function skip_region($t) {
    }
     function echo_region($t) {
         echo $t;
     }
$GR = "skip_region";
$EN = "echo_region";

$t = "id: 'home', en: 'Home', gr: 'Αρχική'";
echo "<script>\n";
echo "const currentPage = { $t };\n";
echo "</script>\n";
?>

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
<?php include("header.html") ?>

<main class="mxw1 m0a b2 p1 bg1 fg1">
<?php
$files = [
    "bio-minimalism.html",
    "bio-high-school.html",
    "bio-languages.html",
    "bio-architecture.html",
    "bio-friends.html",
    "bio-arts.html",
    "bio-youtube.html"
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
