<?php
    function home_array_to_en_gr($array) {
        global $EN, $GR; $EN($array->en); $GR($array->gr);
    }
    $a = "home_array_to_en_gr";
?>


<?php $h = simplexml_load_file("home/home.xml") ?>

<div class="img-and-p">
    <img
        src="../face.png"
        alt="white male face with long hair starring at viewer"
        style="width: 204px; height: 188px; background-color: #d3cbca"
    />
    <p>
        <span style="display: inline-block">
            E-mail:
            <a href="mailto:dimakopt732@gmail.com"
            >dimakopt732@gmail.com</a>,
        </span>
        <span style="display: inline-block">
            Instagram:
            <a href="https://www.instagram.com/theodore_alenas/"
            >theodore_alenas</a>,
        </span>
        <span style="display: inline-block">
            GitHub:
            <a href="https://https://github.com/TheodoreAlenas/"
            >TheodoreAlenas</a>
        </span>
        <?php $a($h->and_my_youtube) ?>
        <a href="https://www.youtube.com/@theodorealenas3171"
        >Theodore Alenas</a>.
        <?php $a($h->alenas_is_greek) ?>
    </p>
</div>
<p><?php $a($h->hello) ?></p>
<p><?php $a($h->for_hr) ?></p>
<p><?php $a($h->what_ive_done) ?></p>
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
