<?php

    function encode_and_surround_with_b_tag($strings, $code) {
        $code = htmlspecialchars($code);
        foreach ($strings as $string) {
            $code = str_replace($string, "<b>$string</b>", $code);
        }
        echo $code;
    }

    function encode_and_surround_with_b_tag_code($key) {
        global $POR_CODE;
        $chosen = $POR_CODE[$key];
        encode_and_surround_with_b_tag($chosen[0], $chosen[1]);
    }

    $POR_CODE = array(


         "al" => [
              ["set_interactive", "alk-router", "execute_al "],
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
EOSH],


        "hk-tui.bash" => [
            ["read", "next", '$REPLY', '$state'],
            <<<EOSH
read -n 1 -s -r
next=$( awk "/^\$REPLY/ { print \\\$2 }" hk-states/\$state )

if [ -z \$next ]
then
    next=ROOT
    bspc node last --focus
fi
EOSH],


        "example-config/reset.sh" => [
            ["powff", "script", "descr", "arg1"],
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
EOSH],


        "scmd volume" => [
            ["()", "{", "}", "#m8", "#m9"],
            <<<EOSH
volume_set_8() { pacmd set-sink-volume 0 48000; } #m8
volume_set_9() { pacmd set-sink-volume 0 54000; } #m9
volume_set_custom() { pacmd set-sink-volume 0 "\$(:|dmenu)"; }

wallpaper_set_scale() { bspc_float; feh --bg-scale "\$(find ~/l/gwp/ -type f -print0 | xargs -0 sxiv -ot)"; }
wallpaper_set_fill()  { bspc_float; feh --bg-fill  "\$(find ~/l/gwp/ -type f -print0 | xargs -0 sxiv -ot)"; }
EOSH],


        "scmd this_file" => [
            ["scmd_run", "this_file", "scmd_with_bar_status", "#x"],
            <<<EOSH
scmd_run() { c="\$(dmenu < "\$(this_file)" | cut -d'(' -f1)"; test "\$c" && scmd_with_bar_status "\$c"; } #x
  [...]
this_file() { echo ~/.config/scmd.sh; }
EOSH],


        "scmd sxhkd" => [
            [
                "scmd_ls_keys",
                "scmd_sxhkdrc_vim",
                "scmd_sxhkdrc",
                "scmd_awk1",
                "scmd_awk2",
                "this_file"
            ],
            <<<EOSH
scmd_ls_keys() { sed -n 's/^\\([a-z0-9_]\\+\\)(.*#\\([^}]*\\)\$/\\2 \\1/p' "\$(this_file)"; }
scmd_sxhkdrc_vim() { in_vim scmd_sxhkdrc; }
scmd_sxhkdrc() { scmd_ls_keys | awk "{ \$(scmd_awk1) \$(scmd_awk2) }"; }
scmd_awk1() { printf %s 's = \$1; gsub(/./, "; super + &", s); sub("; ", "", s); '; }
scmd_awk2() { printf %s 'print(s); printf("\\t. %s && scmd_with_bar_status %s\\n\\n", "'"\$(this_file)"'", \$2);'; }
EOSH]
         );
?>