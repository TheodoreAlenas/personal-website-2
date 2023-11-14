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

<h2>System's hotkey system</h2>
<p>
    A system to provide a listing of key bindings and optional
    input box to key bindings, built around
    <code>sxhkd</code>, with 4 major reworks:
    <ol>
        <li>
            <h3>alchain</h3>
            <p>
                3 programs,
                <code>alchain</code>,
                <code>alpopup</code> and
                <code>hk-tui.bash</code>,
                working together so that when pressing the Windows key
                a terminal appears at the bottom of the screen,
                full width, displays possible
                key bindings and waits for key input.
                After pressing Windows, getting the terminal,
                and pressing another key such as <code>W</code>,
                often nothing would have happened yet and the terminal
                would be showing next possible key presses.
            </p>
            <pre><b>read</b> -n 1 -s -r
next=$( <b>awk</b> "/^$REPLY/ { print \$2 }" hk-states/$state )

<b>if</b> [ -z $next ]
<b>then</b>
    next=ROOT
    <b>bspc</b> node last --focus
<b>fi</b></pre>
            <i>part of <code>hk-tui.bash</code></i>
            <p>
                The flaw was that windows are not designed to work
                well when treated like this.
                There were more than just bugs.
                Windows play a more decorative role than anticipated.
            </p>
        </li>
        <li>
            <h3>alk</h3>
            <p>
                Shell scripts that take arguments corresponding
                to hotkeys, and perform the actions.
                The <code>al</code> executable displays
                the <code>stdout</code> and <code>stderr</code>
                in a terminal,
                if it was called from an environment without
                the <code>INTERACTIVE</code> variable set.
                The shell function definitions of the <code>alk-*</code>
                executables compile into the help message
                which acts like a listing of key bindings.
                While the code may look weird, it's close to
                how I write shell scripts today. Note that
                it's POSIX compliant instead of Bash.
            </p>
            <pre><b>if</b> [ "$INTERACTIVE" = '' ]
<b>then</b> set_interactive
<b>fi</b>

execute_al() {
    <b>alk-router</b> "$@"
}
execute_al_interactive() {
    <b>execute_al</b> "$@"
}</pre>
            <i>part of <code>al</code></i>
            <p>
                Compared to the first approach, this one had
                very verbose configuration files.
                Also, it was never actually used in the terminal.
            </p>
        </li>
        <li>
            <h3>alsnip</h3>
            <p>
                A code snippet generator, that can take multiple
                inputs to complete parts of a snippet,
                and provides auto completion in the process.
                The snippets could be shell scripts that
                would run, and the completion could be started
                by pressing a key binding.
                Built in, the configuration expressed
                which snippets were bound to keys,
                and which of them needed terminal interactions
                such as entering passwords.
                It was almost ready to be published,
                but it wasn't self-contained at all,
                plus I abandoned it before publishing it.
            </p>
            <pre>fn=powff+key+is-e-q+key-term:"$fn"
fn_powff() {
  <b>case</b> "$act" in
    script) printf '<b>sudo shutdown %s\n</b>' "$1" ;;
    descr) cat &lt;&lt;EOM
<b>systemd command,  poweroff  is an alias to  shutdown now</b>
EOM
    ;;
    arg1) printf "<b>recommend\nnow\n+1\n+5\n+30\n23:59\n02:00\n</b>" ;;
  <b>esac</b>
}</pre>
            <i>part of <code>example-config/reset.sh</code></i>
            <p>
                I didn't ever use snippets, nor did I start using
                snippets then. So it still was a hotkey system only.
                It abused Robert C. Martin's insights too, making it
                one of the most complicated pieces of software
                I had made by then.
            </p>
        </li>
        <li>
            <h3>scmd</h3>
            <p>A single file.</p>
            <pre><b>volume_set_8</b>() { pacmd set-sink-volume 0 48000; } <b>#m8</b>
<b>volume_set_9</b>() { pacmd set-sink-volume 0 54000; } <b>#m9</b>
<b>volume_set_custom</b>() { pacmd set-sink-volume 0 "$(:|dmenu)"; }

<b>wallpaper_set_scale</b>() { bspc_float; feh --bg-scale "$(find ~/l/gwp/ -type f -print0 | xargs -0 sxiv -ot)"; }
<b>wallpaper_set_fill</b>()  { bspc_float; feh --bg-fill  "$(find ~/l/gwp/ -type f -print0 | xargs -0 sxiv -ot)"; }</pre>
        </li>
    </ol>
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
