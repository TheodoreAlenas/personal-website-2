<?php
    $b = "echo_localized_from_xml";
?>


<?php $STR_XML = simplexml_load_file("biography/bio-minimalism.xml") ?>
<h2><?php $b("title") ?></h2>
<p><?php $b("arch") ?></p>
<p><?php $b("now-vi") ?></p>


<?php $STR_XML = simplexml_load_file("biography/bio-high-school.xml") ?>
<h2><?php $b("title") ?></h2>
<p>
    <?php $b("graduated") ?>
    <a href="http://2lyk-amaliad.ilei.sch.gr/wordpress17/"
    ><?php $b("high-school") ?></a>
    <?php $b("went-to-france-with") ?>
    <a href="https://school-education.ec.europa.eu/en/etwinning"
    >E-Twinning</a>.
</p>
<p>
    <?php $b("crafted-and-watched") ?>
    <a href="https://www.youtube.com/@3blue1brown">3blue1brown</a>,
    <a href="https://www.youtube.com/@Mathologer">Mathologer</a>,
    <a href="https://www.youtube.com/@numberphile">Numberphile</a>,
    <a href="https://www.youtube.com/@Computerphile">Computerphile</a>
    <?php echo_localized("and", "και"); ?>
    <a href="https://www.youtube.com/@standupmaths">Matt Parker</a>.
</p>
<p>
    <?php $b("in-uni-also") ?>
    <a href="https://www.youtube.com/@ThePrimeagen">ThePrimeagen</a>,
    <a href="https://www.youtube.com/@HealthyGamerGG">Healthy Gamer GG</a>
    <?php echo_localized("and", "και"); ?>
    <a href="https://www.youtube.com/@RamseyDewey">Ramsey Dewey</a>.
</p>
<p>
    <?php $b("went-to-uoa-to") ?>
    <a href="https://www.di.uoa.gr"
    ><?php $b("di") ?></a>.
    <?php $b("participated-in") ?>
    <a href="https://github.com/ACM-UoA-Student-Chapter/dil"
    ><?php $b("acm") ?></a>
    <?php $b("but-noob-then-helvia") ?>
    <a href="https://helvia.io">Helvia</a>
    <?php $b("saw-web-dev") ?>
</p>


<?php $STR_XML = simplexml_load_file("biography/bio-languages.xml") ?>
<h2><?php $b("title") ?></h2>

<p>
    <?php $b("warm-ups") ?>
    <a href="https://www.youtube.com/watch?v=kScFczWbwRM">TDD</a>,
    <a href="https://youtu.be/tnO2Mos0RjU?si=OhTk8fUdI0FPTWT6">TCR</a>
    <?php $b("often-in-vi") ?>
</p>
<p>
    <?php $b("touched"); $b("rust-awk"); ?>
    <a href="https://code.jsoftware.com/wiki/Studio/TasteofJPart1">J</a>
    <?php $b("slightly-and-ts") ?>
</p>
<p>
    <?php $b("for-uni") ?>
</p>


<?php $STR_XML = simplexml_load_file("biography/bio-architecture.xml") ?>
<h2><?php $b("title") ?></h2>

<p><?php $b("os") ?></p>
<p>
    <?php $b("values") ?>
    <a href="http://agilemanifesto.org/"
    ><?php $b("manifesto") ?></a>
    <?php $b("for-agile") ?>
</p>


<?php $STR_XML = simplexml_load_file("biography/bio-friends.xml") ?>
<h2><?php $b("title"); ?></h2>

<p><?php $b("psychotherapy")     ?></p>
<p><?php $b("collabs")           ?></p>
<p><?php $b("everyone-hates-me") ?></p>


<?php $STR_XML = simplexml_load_file("biography/bio-arts.xml") ?>
<h2><?php $b("title"); ?></h2>

<p><?php $b("quit-piano"); ?></p>
<p>
    <?php $b("drew-by"); ?>
    <a href="https://drawabox.com"
    ><?php $b("drawabox") ?></a>
    <?php $b("and-with"); ?>
    <a href="https://www.proko.com"
    ><?php $b("proko") ?></a>.
    <?php $b("quit"); ?>
</p>
<p><?php $b("cultivated"); ?></p>


<?php $STR_XML = simplexml_load_file("biography/bio-youtube.xml") ?>
<h2><?php $b("title") ?></h2>

<p>
    <?php $b("recorded") ?>
    <a href="https://www.youtube.com/@theodorealenas3171"
    ><?php $b("videos") ?></a>
    <?php $b("using") ?> <code>ffmpeg</code>
    <?php $b("piping") ?> <code>/dev/video0</code>
    <?php $b("to") ?> <code>mpv</code>
    <?php $b("to-share") ?>
</p>

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
