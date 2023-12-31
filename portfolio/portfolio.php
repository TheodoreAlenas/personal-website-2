<?php
    function portfolio_array_to_en_gr($array) {
        global $EN, $GR; $EN($array->en); $GR($array->gr);
    }
    $a = "portfolio_array_to_en_gr";

    include_once("por-code.php");
    $c = "encode_and_surround_with_b_tag_code";
?>


<?php $s = simplexml_load_file("portfolio/por-this.xml") ?>
<h2><?php $a($s->title) ?></h2>
<p><?php $a($s->body) ?></p>
<pre><?php $c("php 1") ?></pre>
<i>V1</i>
<pre><?php $c("php 2") ?></pre>
<i>V2</i>
<p>
    <?php $a($s->find) ?>
    <a href="https://github.com/TheodoreAlenas/personal-home-page/"
    ><?php $a($s->v1) ?></a>
    <?php $a($s->and) ?>
    <a href="https://github.com/TheodoreAlenas/personal-website-2/"
    ><?php $a($s->v2) ?></a>
    <?php $a($s->on_gh) ?>.
</p>

<?php $s = simplexml_load_file("portfolio/por-hotkeys.xml") ?>
<h2><?php $a($s->title) ?></h2>
<p>
    <?php $a($s->hk_sys_around) ?><code>sxhkd</code>,
    <?php $a($s->w_4_vers) ?>:
</p>
<h3><?php $EN("Version"); $GR("Έκδοση"); ?> 1: alchain</h3>
<p>
    <?php $a($s->alchain_3_prog) ?>,
    <code>alchain</code>,
    <code>alpopup</code> <?php $EN("and"); $GR("και"); ?>
    <code>hk-tui.bash</code>,
    <?php $a($s->working_together_and_key) ?><code>W</code>,
    <?php $a($s->often_does_nothing) ?>
</p>
<pre><?php $c("hk-tui.bash") ?></pre>
<i>
    <?php $a($s->part_of_file) ?>
    <code><a href="../hk-tui.bash">hk-tui.bash</a></code>
    <?php $EN("(plain file)"); $GR("(Πηγαίος κώδηκας)"); ?>
</i>
<p><?php $a($s->but_windows_break_like_this) ?></p>
<h3><?php $EN("Version"); $GR("Έκδοση"); ?> 2: alk</h3>
<p>
    <?php $a($s->alk_is_scripts) ?>
    <?php $a($s->the) ?> <code>al</code> <?php $a($s->shows) ?>
    <code>stdout</code> <?php $EN("and"); $GR("και"); ?>
    <code>stderr</code> <?php $a($s->in_term_if_env_wo) ?>
    <code>INTERACTIVE</code> <?php $a($s->var_set_the_defs_of) ?>
    <code>alk-*</code> <?php $a($s->compile_to_help_note_posix) ?>
</p>
<pre><?php $c("al") ?></pre>
<i>
    <?php $a($s->part_of_file) ?>
    <code><a href="https://github.com/TheodoreAlenas/alk/blob/main/al"
    >al</a></code>
</i>
<p><?php $a($s->but_verbose_and_never_term) ?></p>
<h3><?php $EN("Version"); $GR("Έκδοση"); ?> 3: alsnip</h3>
<p><?php $a($s->snip_gen_w_compl_unpublished) ?></p>
<pre><?php $c("example-config/reset.sh") ?></pre>
<i>
    <?php $a($s->part_of_file) ?>
    <code><a href="https://github.com/TheodoreAlenas/alsnip/blob/main/example-config/reset.sh"
    >example-config/reset.sh</a></code>
</i>
<p>
    <?php $a($s->but_never_used_snips_and_martin_bloat_find_on) ?>
    <a href="https://github.com/TheodoreAlenas/alsnip">GitHub</a>.
</p>

<h3><?php $EN("Version"); $GR("Έκδοση"); ?> 4: scmd</h3>
<p><?php $a($s->a_single_file) ?></p>
<pre><?php $c("scmd volume") ?></pre>
<p><?php $a($s->line_types) ?></p>
<pre><?php $c("scmd this_file") ?></pre>
<p><?php $a($s->im_most_proud_and_nobody_understands) ?></p>
<pre><?php $c("scmd sxhkd") ?></pre>
<a href="https://github.com/TheodoreAlenas/dotfiles/blob/main/c/scmd.sh"
>scmd.sh</a>.
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
