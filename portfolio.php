<?php
    function portfolio_array_to_en_gr($array) {
        global $EN, $GR; $EN($array->en); $GR($array->gr);
    }
    $a = "portfolio_array_to_en_gr";
?>


<?php $p = simplexml_load_file("portfolio.xml"); $s = $p->site; ?>
<h2><?php $a($s->title) ?></h2>
<p>
    <?php $a($s->body) ?>
    <?php $a($s->its_on) ?>
    <a href="https://github.com/TheodoreAlenas/personal-website-2/"
    >GitHub</a>,
    <?php $a($s->with) ?>
    <a href="https://github.com/TheodoreAlenas/personal-home-page/"
    ><?php $a($s->v1) ?></a>.
</p>

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
