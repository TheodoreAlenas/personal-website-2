<?php
    $bio_php_files = ["minimalism", "high-school", "languages",
                      "architecture", "friends", "arts", "youtube"];
    foreach ($bio_php_files as $file) {include_once("bio-$file.php");}
    function biography_print_en_gr($array) {
        global $EN, $GR; $EN($array[0]); $GR($array[1]);
    }
    $a = "biography_print_en_gr";
?>


<h2><?php $a($bio_minimalism_title) ?></h2>

<p><?php $a($bm_arch)   ?></p>
<p><?php $a($bm_now_vi) ?></p>


<h2><?php $a($bio_high_school_title) ?></h2>
<p>
    <?php $a($bh_graduated) ?>
    <a href="http://2lyk-amaliad.ilei.sch.gr/wordpress17/"
    ><?php $a($bh_high_school) ?></a>
    <?php $a($bh_went_to_france_with) ?>
    <a href="https://school-education.ec.europa.eu/en/etwinning"
    >E-Twinning</a>.
</p>
<p>
    <?php $a($bh_crafted_and_watched) ?>
    <a href="https://www.youtube.com/@3blue1brown">3blue1brown</a>,
    <a href="https://www.youtube.com/@Mathologer">Mathologer</a>,
    <a href="https://www.youtube.com/@numberphile">Numberphile</a>,
    <a href="https://www.youtube.com/@Computerphile">Computerphile</a>
    <?php $EN("and", "και") ?>
    <a href="https://www.youtube.com/@standupmaths">Matt Parker</a>.
</p>
<p>
    <?php $a($bh_in_uni_also) ?>
    <a href="https://www.youtube.com/@ThePrimeagen">ThePrimeagen</a>,
    <a href="https://www.youtube.com/@HealthyGamerGG">Healthy Gamer GG</a>
    <?php $EN("and", "και") ?>
    <a href="https://www.youtube.com/@RamseyDewey">Ramsey Dewey</a>.
</p>
<p>
    <?php $a($bh_went_to_uoa_to) ?>
    <a href="https://www.di.uoa.gr"
    ><?php $a($bh_di) ?></a>.
    <?php $a($bh_participated_in) ?>
    <a href="https://github.com/ACM-UoA-Student-Chapter/dil"
    ><?php $a($bh_acm) ?></a>,
    <?php $a($bh_but_noob_then_helvia) ?>
    <a href="https://helvia.io">Helvia</a>
    <?php $a($bh_saw_web_dev) ?>
</p>


<h2><?php $a($bio_languages_title) ?></h2>

<p>
    <?php $a($bl_warm_ups) ?>
    <a href="https://www.youtube.com/watch?v=kScFczWbwRM">TDD</a>,
    <a href="https://youtu.be/tnO2Mos0RjU?si=OhTk8fUdI0FPTWT6">TCR</a>
    <?php $a($bl_often_in_vi) ?>
</p>
<p>
    <?php $a($bl_touched); $a($bl_rust_awk); ?>
    <a href="https://code.jsoftware.com/wiki/Studio/TasteofJPart1">J</a>
    <?php $a($bl_slightly_and_ts) ?>
</p>
<p>
    <?php $a($bl_for_uni) ?>
</p>


<h2><?php $a($bio_architecture_title) ?></h2>

<p><?php $a($bac_os) ?></p>
<p>
    <?php $a($bac_values) ?>
    <a href="http://agilemanifesto.org/"
    ><?php $a($bac_manifesto) ?></a>.
</p>


<h2><?php $a($bio_friends_title); ?></h2>

<p><?php $a($bf_psychotherapy) ?></p>
<p><?php $a($bf_collabs)       ?></p>
<p><?php $a($bf_jackasses)     ?></p>


<h2><?php $a($bio_arts_title); ?></h2>

<p><?php $a($ba_quit_piano); ?></p>
<p>
    <?php $a($ba_drew_by); ?>
    <a href="https://drawabox.com"
    ><?php $a($ba_drawabox) ?></a>,
    <?php $a($ba_and_with); ?>
    <a href="https://www.proko.com"
    ><?php $a($ba_proko) ?></a>.
    <?php $a($ba_quit_drawing); ?>
</p>
<p><?php $a($ba_cultivated); ?></p>


<h2><?php $a($bio_youtube_title); ?></h2>

<p>
    <?php $a($byt_recorded) ?>
    <a href="https://www.youtube.com/@theodorealenas3171"
    ><?php $a($byt_videos) ?></a>
    <?php $a($byt_using_tricks) ?>
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
