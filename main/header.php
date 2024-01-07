<!-- <?php echo basename(__FILE__); ?> -->
<?php
    if ($LANG == "en") {
        $menu_opposite_language = "../gr/" . basename($ORIGIN_FILE);
    }
    else {
        $menu_opposite_language = "../en/" . basename($ORIGIN_FILE);
    }
?>
<h1><?php echo $TITLE ?></h1>
<p>
<?php $EN("Στηρίζεται και η"); ?>

<a href="<?php echo($menu_opposite_language); ?>"
><?php $EN("Ελληνική"); $GR("English"); ?></a>
<?php
    $EN("γλώσσα. Available are");
    $GR("is also supported. Διατίθενται");
?>

<a href="index.html"
><?php $EN("the home page"); $GR("η αρχική σελίδα"); ?></a>,
<a href="portfolio.html"
><?php $EN("portfolio"); $GR("χαρτοφυλάκιο"); ?></a>,
<a href="biography.html"
><?php $EN("biography"); $GR("βιογραφικό"); ?></a>,
<a href="../cv.pdf"
>cv.pdf</a>
<?php $EN("and dark/light"); $GR("και ανοιχτό/σκούρο"); ?>

<button
    onclick="switchColorScheme()"
    class="bg1 fg1"
><?php $EN("theme"); $GR("θέμα"); ?>
</button>.
</p>

<?php
    /*
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
     */
?>
