<?php
    function biography_array_to_en_gr($array) {
        global $EN, $GR; $EN($array->en); $GR($array->gr);
    }
    $b = "biography_array_to_en_gr";
?>


<?php $m = simplexml_load_file("bio-minimalism.xml") ?>
<h2><?php $b($m->title) ?></h2>
<p><?php $b($m->arch) ?></p>
<p><?php $b($m->now_vi) ?></p>


<?php $h = simplexml_load_file("bio-high-school.xml") ?>
<h2><?php $b($h->title) ?></h2>
<p>
    <?php $b($h->graduated) ?>
    <a href="http://2lyk-amaliad.ilei.sch.gr/wordpress17/"
    ><?php $b($h->high_school) ?></a>
    <?php $b($h->went_to_france_with) ?>
    <a href="https://school-education.ec.europa.eu/en/etwinning"
    >E-Twinning</a>.
</p>
<p>
    <?php $b($h->crafted_and_watched) ?>
    <a href="https://www.youtube.com/@3blue1brown">3blue1brown</a>,
    <a href="https://www.youtube.com/@Mathologer">Mathologer</a>,
    <a href="https://www.youtube.com/@numberphile">Numberphile</a>,
    <a href="https://www.youtube.com/@Computerphile">Computerphile</a>
    <?php $EN("and"); $GR("και"); ?>
    <a href="https://www.youtube.com/@standupmaths">Matt Parker</a>.
</p>
<p>
    <?php $b($h->in_uni_also) ?>
    <a href="https://www.youtube.com/@ThePrimeagen">ThePrimeagen</a>,
    <a href="https://www.youtube.com/@HealthyGamerGG">Healthy Gamer GG</a>
    <?php $EN("and"); $GR("και"); ?>
    <a href="https://www.youtube.com/@RamseyDewey">Ramsey Dewey</a>.
</p>
<p>
    <?php $b($h->went_to_uoa_to) ?>
    <a href="https://www.di.uoa.gr"
    ><?php $b($h->di) ?></a>.
    <?php $b($h->participated_in) ?>
    <a href="https://github.com/ACM-UoA-Student-Chapter/dil"
    ><?php $b($h->acm) ?></a>,
    <?php $b($h->but_noob_then_helvia) ?>
    <a href="https://helvia.io">Helvia</a>
    <?php $b($h->saw_web_dev) ?>
</p>


<?php $l = simplexml_load_file("bio-languages.xml") ?>
<h2><?php $b($l->title) ?></h2>

<p>
    <?php $b($l->warm_ups) ?>
    <a href="https://www.youtube.com/watch?v=kScFczWbwRM">TDD</a>,
    <a href="https://youtu.be/tnO2Mos0RjU?si=OhTk8fUdI0FPTWT6">TCR</a>
    <?php $b($l->often_in_vi) ?>
</p>
<p>
    <?php $b($l->touched); $b($l->rust_awk); ?>
    <a href="https://code.jsoftware.com/wiki/Studio/TasteofJPart1">J</a>
    <?php $b($l->slightly_and_ts) ?>
</p>
<p>
    <?php $b($l->for_uni) ?>
</p>


<?php $ac = simplexml_load_file("bio-architecture.xml") ?>
<h2><?php $b($ac->title) ?></h2>

<p><?php $b($ac->os) ?></p>
<p>
    <?php $b($ac->values) ?>
    <a href="http://agilemanifesto.org/"
    ><?php $b($ac->manifesto) ?></a>.
</p>


<?php $f = simplexml_load_file("bio-friends.xml") ?>
<h2><?php $b($f->title); ?></h2>

<p><?php $b($f->psychotherapy) ?></p>
<p><?php $b($f->collabs)       ?></p>
<p><?php $b($f->jackasses)     ?></p>


<?php $ar = simplexml_load_file("bio-arts.xml") ?>
<h2><?php $b($ar->title); ?></h2>

<p><?php $b($ar->quit_piano); ?></p>
<p>
    <?php $b($ar->drew_by); ?>
    <a href="https://drawabox.com"
    ><?php $b($ar->drawabox) ?></a>,
    <?php $b($ar->and_with); ?>
    <a href="https://www.proko.com"
    ><?php $b($ar->proko) ?></a>.
    <?php $b($ar->quit_drawing); ?>
</p>
<p><?php $b($ar->cultivated); ?></p>


<?php $yt = simplexml_load_file("bio-youtube.xml") ?>
<h2><?php $b($yt->title) ?></h2>

<p>
    <?php $b($yt->recorded) ?>
    <a href="https://www.youtube.com/@theodorealenas3171"
    ><?php $b($yt->videos) ?></a>
    <?php $b($yt->using_tricks) ?>
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
