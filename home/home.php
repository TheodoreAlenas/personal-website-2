<?php
    function home_array_to_en_gr($array) {
        global $EN, $GR; $EN($array->en); $GR($array->gr);
    }
    $a = "home_array_to_en_gr";
?>


<?php $h = simplexml_load_file("home/home.xml") ?>
<h1><?php $a($h->teo); echo ' '; $a($h->dimak); ?></h1>

<p><?php $a($h->caring_programmer) ?></p>
<p><?php $a($h->i_trust) ?></p>
<ul>
    <li><?php $a($h->t1) ?></li>
    <li><?php $a($h->t2) ?></li>
    <li><?php $a($h->t3) ?></li>
</ul>
<p><?php $a($h->i_follow_the_rules) ?></p>
<ul>
    <li><?php $a($h->r1) ?></li>
    <li><?php $a($h->r2) ?></li>
    <li><?php $a($h->r3) ?></li>
</ul>
<p><?php $a($h->lets_go_out) ?></p>

<?php
    $unused_variable_for_holding_license =
        <<<EOF
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
EOF
?>
