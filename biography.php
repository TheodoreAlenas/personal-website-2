<?php
    $bio_php_files = [
        "bio-arts.php"
    ];
    foreach ($bio_php_files as $file) {
        include_once($file);
    }
    function biography_print_en_gr($array) {
        global $EN, $GR;
        $EN($array[0]);
        $GR($array[1]);
    }
    $a = "biography_print_en_gr";
?>

<h2><?php $a($bio_arts_title); ?></h2>

<p>
    <?php $a($ba_quit_piano); ?>
</p>
<p>
    <?php $a($ba_drew_by); ?>
    <a href="https://drawabox.com"><?php $a($ba_drawabox) ?></a>,
    <?php $a($ba_and_with); ?>
    <a href="https://www.proko.com"><?php $a($ba_proko) ?></a>.
    <?php $a($ba_quit_drawing); ?>
</p>
<p>
    <?php $a($ba_cultivated); ?>
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