<?php
    $STR_XML = simplexml_load_file("home/home.xml");
    $a = "echo_localized_from_xml";
?>


<div class="img-and-p">
    <div
        class="img-container"
        style="height: 128px; background-color: #d3cbca">
        <img
            src="../face.png"
            alt="white male face with long hair staring at viewer"
            style="width: 128px; height: 128px"
        />
    </div>
    <p>
        <?php $a("find-me-on") ?>
        <a href="https://www.youtube.com/@theodorealenas3171"
        ><?php $a("youtube") ?></a>
        <a href="https://https://github.com/TheodoreAlenas/"
        ><?php $a("github") ?></a>
        <a href="mailto:dimakopt732@gmail.com"
        ><?php $a("email") ?></a>
        <?php $a("active-on-youtube"); $a("alenas-is-greek") ?>
    </p>
</div>
<p><?php $a("hello") ?></p>
<p><?php $a("im-minimalist") ?></p>
<p><?php $a("for-hr") ?></p>
<p><?php $a("what-ive-done") ?></p>
<p><?php $a("lets-go-out") ?></p>

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
