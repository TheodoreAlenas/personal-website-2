<!DOCTYPE HTML>
<!-- <?php echo basename(__FILE__);  // wrap.php as of now ?> -->

<html lang="en" scheme="dark">

<head>

<title><?php echo "Theodoros - Biography" ?></title>
<script>const currentPage = "biography";</script>

<?php include("metas.html") ?>

<style>
<?php include("s.css") ?>
</style>

<script>
<?php include("scheme-lang.js"); ?>
</script>

</head>

<body class="bg1 fg1 fn1 m0 lnh1">
<?php include("header.html") ?>

<main class="mxw1 m0a b2 p1 bg1 fg1">
<?php
$files = [
    "bio/architecture.html",
    "bio/arts.html",
    "bio/friends.html",
    "bio/high-school.html",
    "bio/languages.html",
    "bio/minimalism.html",
    "bio/youtube.html"
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
