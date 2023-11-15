<?php
    function portfolio_array_to_en_gr($array) {
        global $EN, $GR; $EN($array->en); $GR($array->gr);
    }
    $a = "portfolio_array_to_en_gr";

    function encode_and_surround_with_b_tag($strings, $code) {
        $code = htmlspecialchars($code);
        foreach ($strings as $string) {
            $code = str_replace($string, "<b>$string</b>", $code);
        }
        echo $code;
    }
    $b = "encode_and_surround_with_b_tag";
?>


<?php $p = simplexml_load_file("por-this.xml"); $s = $p->site; ?>
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

<?php $s = simplexml_load_file("por-hotkeys.xml") ?>
<h2><?php $a($s->title) ?></h2>
<p>
    <?php $a($s->hk_sys_around) ?><code>sxhkd</code>,
    <?php $a($s->w_4_vers) ?>:
</p>
<h3>alchain</h3>
<p>
    <?php $a($s->alchain_3_prog) ?>,
    <code>alchain</code>,
    <code>alpopup</code> <?php $EN("and"); $GR("και"); ?>
    <code>hk-tui.bash</code>,
    <?php $a($s->working_together_and_key) ?><code>W</code>,
    <?php $a($s->often_does_nothing) ?>
</p>
<pre><?php
    $b(["read", "next", '$REPLY', '$state'],
    <<<EOSH
read -n 1 -s -r
next=$( awk "/^\$REPLY/ { print \\\$2 }" hk-states/\$state )

if [ -z \$next ]
then
    next=ROOT
    bspc node last --focus
fi
EOSH);
?></pre>
<i><?php $a($s->part_of_file) ?> <code>hk-tui.bash</code></i>
<p>
    <?php $a($s->but_windows_break_like_this) ?>
</p>
<h3>alk</h3>
<p>
    <?php $a($s->alk_is_scripts) ?>
    <?php $a($s->the) ?> <code>al</code> <?php $a($s->shows) ?>
    <code>stdout</code> <?php $EN("and"); $GR("και"); ?>
    <code>stderr</code> <?php $a($s->in_term_if_env_wo) ?>
    <code>INTERACTIVE</code> <?php $a($s->var_set_the_defs_of) ?>
    <code>alk-*</code> <?php $a($s->compile_to_help_note_posix) ?>
</p>
<pre><?php
    $b(["set_interactive", "alk-router", "execute_al "],
    <<<EOSH
if [ "\$INTERACTIVE" = '' ]
then set_interactive
fi

execute_al() {
    alk-router "\$@"
}
execute_al_interactive() {
    execute_al "\$@"
}
EOSH);
?></pre>
<i><?php $a($s->part_of_file) ?> <code>al</code></i>
<p>
    <?php $a($s->but_verbose_and_never_term) ?>
</p>
<h3>alsnip</h3>
<p>
    <?php $a($s->snip_gen_w_compl_unpublished) ?>
</p>
<pre><?php
    $b(["powff", "script", "descr", "arg1"],
    <<<EOSH
fn=powff+key+is-e-q+key-term:"\$fn"
fn_powff() {
  case "\$act" in
    script) printf 'sudo shutdown %s\\n' "\$1" ;;
    descr) cat <<EOM
systemd command,  poweroff  is an alias to  shutdown now
EOM
    ;;
    arg1) printf "recommend\\nnow\\n+1\\n+5\\n+30\\n23:59\\n02:00\\n" ;;
  esac
}
EOSH);
?></pre>
<i>
    <?php $a($s->part_of_file) ?>
    <code>example-config/reset.sh</code>
</i>
<p>
    <?php $a($s->but_never_used_snips_and_martin_bloat) ?>
</p>
<h3>scmd</h3>
<p><?php $a($s->a_single_file) ?></p>
<pre><b>volume_set_8</b>() { pacmd set-sink-volume 0 48000; } <b>#m8</b>
<b>volume_set_9</b>() { pacmd set-sink-volume 0 54000; } <b>#m9</b>
<b>volume_set_custom</b>() { pacmd set-sink-volume 0 "$(:|dmenu)"; }

<b>wallpaper_set_scale</b>() { bspc_float; feh --bg-scale "$(find ~/l/gwp/ -type f -print0 | xargs -0 sxiv -ot)"; }
<b>wallpaper_set_fill</b>()  { bspc_float; feh --bg-fill  "$(find ~/l/gwp/ -type f -print0 | xargs -0 sxiv -ot)"; }</pre>
<p>
    <?php $a($s->line_types) ?>
</p>
<pre><?php
    $b(["scmd_run", "this_file", "scmd_with_bar_status", "#x"],
    <<<EOSH
scmd_run() { c="\$(dmenu < "\$(this_file)" | cut -d'(' -f1)"; test "\$c" && scmd_with_bar_status "\$c"; } #x
  [...]
this_file() { echo ~/.config/scmd.sh; }
EOSH);
?></pre>
<p>
    <?php $a($s->im_most_proud_and_nobody_understands) ?>
</p>
<pre><?php
    $b(["ls_keys", "sxhkd", "awk ", "awk1", "awk2", "this_file"],
    <<<EOSH
scmd_ls_keys() { sed -n 's/^\\([a-z0-9_]\\+\\)(.*#\\([^}]*\\)\$/\\2 \\1/p' "\$(this_file)"; }
scmd_sxhkdrc_vim() { in_vim scmd_sxhkdrc; }
scmd_sxhkdrc() { scmd_ls_keys | awk "{ \$(scmd_awk1) \$(scmd_awk2) }"; }
scmd_awk1() { printf %s 's = \$1; gsub(/./, "; super + &", s); sub("; ", "", s); '; }
scmd_awk2() { printf %s 'print(s); printf("\\t. %s && scmd_with_bar_status %s\\n\\n", "'"\$(this_file)"'", \$2);'; }
EOSH);
?></pre>

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
