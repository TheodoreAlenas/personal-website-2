<?php
    $l = "echo_localized";
    $a = "echo_localized_from_xml";
    include_once("por-code.php");
    $c = "encode_and_surround_with_b_tag_code";
?>


<?php $STR_XML = simplexml_load_file("portfolio/por-this.xml") ?>
<h2><?php $a("title") ?></h2>
<p><?php $a("body") ?></p>
<p>
    <?php $a("had-menus") ?>
    <a href="biography-typical-menu.html"
    ><?php $a("older-version") ?></a>
    <?php $a("is-still-served") ?>
</p>
<p>
    <?php $a("find") ?>
    <a href="https://github.com/TheodoreAlenas/personal-home-page/"
    ><?php $a("v1") ?></a>
    <?php $a("and") ?>
    <a href="https://github.com/TheodoreAlenas/personal-website-2/"
    ><?php $a("v2") ?></a>
    <?php $a("on-gh") ?>.
</p>
<pre><?php $c("php 1") ?></pre>
<i>V1</i>
<pre><?php $c("php 2") ?></pre>
<i>V2</i>
<p><?php $a("many-phases") ?></p>

<?php $STR_XML = simplexml_load_file("portfolio/por-hotkeys.xml") ?>
<h2><?php $a("title") ?></h2>
<p>
    <?php $a("hk-sys-around") ?><code>sxhkd</code>,
    <?php $a("w-4-vers") ?>:
</p>
<h3><?php $l("Version", "Έκδοση"); ?> 1: alchain</h3>
<p>
    <?php $a("alchain-3-prog") ?>,
    <code>alchain</code>,
    <code>alpopup</code> <?php $l("and", "και"); ?>
    <code>hk-tui.bash</code>,
    <?php $a("working-together-and-key") ?><code>W</code>,
    <?php $a("often-does-nothing") ?>
</p>
<pre><?php $c("hk-tui.bash") ?></pre>
<i>
    <?php $a("part-of-file") ?>
    <code><a href="../hk-tui.bash">hk-tui.bash</a></code>
    <?php $l("(plain file)", "(Πηγαίος κώδηκας)"); ?>
</i>
<p><?php $a("but-windows-break-like-this") ?></p>
<h3><?php $l("Version", "Έκδοση"); ?> 2: alk</h3>
<p>
    <?php $a("alk-is-scripts") ?>
    <?php $a("the") ?> <code>al</code> <?php $a("shows") ?>
    <code>stdout</code> <?php $l("and", "και"); ?>
    <code>stderr</code> <?php $a("in-term-if-env-wo") ?>
    <code>INTERACTIVE</code> <?php $a("var-set-the-defs-of") ?>
    <code>alk-*</code> <?php $a("compile-to-help-note-posix") ?>
</p>
<pre><?php $c("al") ?></pre>
<i>
    <?php $a("part-of-file") ?>
    <code><a href="https://github.com/TheodoreAlenas/alk/blob/main/al"
    >al</a></code>
</i>
<p><?php $a("but-verbose-and-never-term") ?></p>
<h3><?php $l("Version", "Έκδοση"); ?> 3: alsnip</h3>
<p><?php $a("snip-gen-w-compl-unpublished") ?></p>
<pre><?php $c("example-config/reset.sh") ?></pre>
<i>
    <?php $a("part-of-file") ?>
    <code><a href="https://github.com/TheodoreAlenas/alsnip/blob/main/example-config/reset.sh"
    >example-config/reset.sh</a></code>
</i>
<p>
    <?php $a("but-never-used-snips-and-martin-bloat-find-on") ?>
    <a href="https://github.com/TheodoreAlenas/alsnip">GitHub</a>.
</p>

<h3><?php $l("Version", "Έκδοση"); ?> 4: scmd</h3>
<p><?php $a("a-single-file") ?></p>
<pre><?php $c("scmd volume") ?></pre>
<p><?php $a("line-types") ?></p>
<pre><?php $c("scmd this_file") ?></pre>
<p><?php $a("im-most-proud-and-nobody-understands") ?></p>
<pre><?php $c("scmd sxhkd") ?></pre>
<a href="https://github.com/TheodoreAlenas/dotfiles/blob/main/scmd.sh"
>scmd.sh</a>.
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
