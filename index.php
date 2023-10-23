<!DOCTYPE HTML>
<!-- <?php echo basename(__FILE__);  // wrap.php as of now ?> -->

<html lang="en" scheme="dark">

<head>

<title><?php echo "Theodoros - Home" ?></title>
<script>
const currentPage = {
    id: "home", en: "Home", gr: "Αρχική"
};
</script>

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
<?php include("main.html") ?>
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
