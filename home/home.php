<?php
    function home_array_to_en_gr($array) {
        global $EN, $GR; $EN($array->en); $GR($array->gr);
    }
    $a = "home_array_to_en_gr";
?>


<?php $h = simplexml_load_file("home/home.xml") ?>

<div class="img-and-p">
    <div
     class="img-container"
     style="height: 188px; background-color: #d3cbca">
        <img
         src="../face.png"
         alt="white male face with long hair staring at viewer"
         style="width: 204px; height: 188px"
        />
    </div>
    <p>
        <?php $a($h->find_me_on) ?>
        <a href="https://www.youtube.com/@theodorealenas3171"
        ><?php $a($h->youtube) ?></a>
        <a href="https://https://github.com/TheodoreAlenas/"
        ><?php $a($h->github) ?></a>
        <a href="mailto:dimakopt732@gmail.com"
        ><?php $a($h->email) ?></a>
        <?php $a($h->active_on_youtube); $a($h->alenas_is_greek) ?>
    </p>
</div>
<p><?php $a($h->hello) ?></p>
<p><?php $a($h->im_minimalist) ?></p>
<p><?php $a($h->for_hr) ?></p>
<p><?php $a($h->what_ive_done) ?></p>
<p><?php $a($h->lets_go_out) ?></p>

<?php
    $unused_variable_for_holding_license =
        <<<EOF
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
EOF
?>
