<!-- <?php echo basename(__FILE__); ?> -->
<?php
    if ($LANG == "en") {
        $menu_opposite_language = "../gr/" . basename($ORIGIN_FILE);
    }
    else {
        $menu_opposite_language = "../en/" . basename($ORIGIN_FILE);
    }
    $l = "echo_localized";
?>
<a href="#main-content" class="skip-link">
    <?php $l("Skip to content", "Μετάβαση στο περιεχόμενο") ?>
</a>
<h1><?php echo $TITLE ?></h1>
<p>

<a href="<?php echo($menu_opposite_language); ?>"
><?php $l("Greek", "English") ?></a>
<?php $l("is also supported. Available are",
         "is also supported. Διατίθενται"); ?>

<a href="index.html"
><?php $l("the home page", "η αρχική σελίδα"); ?>,</a>
<a href="portfolio.html"
><?php $l("portfolio", "χαρτοφυλάκιο"); ?>,</a>
<a href="biography.html"
><?php $l("biography", "βιογραφικό"); ?>,</a>
<a href="../cv.pdf"
>cv.pdf <?php $l("and", "και"); ?></a>

<button
    onclick="switchColorScheme()"
    class="bg1 fg1"
><?php $l("dark/light theme.", "ανοιχτό/σκούρο θέμα."); ?>
</button>
</p>
<script> setUpColorScheme() </script>

<?php
    /*
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
     */
?>
