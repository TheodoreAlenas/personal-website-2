<!-- <?php
         echo basename(__FILE__);  // header.html as of now
         ?> -->
<?php
    function menu_print_li_attributes() {
        echo 'class="ilbl gr-r1"';
    }
    $l = "menu_print_li_attributes";

    function menu_print_a_attributes($href, $extra_classes, $file) {
        echo 'href="' . $href . '" ';
        echo 'class="ilbl p1 hov-bg3 ';
        echo $extra_classes;
        if ($href == basename($file)) {
            echo "bg3 ";
        }
        echo '"';
    }
    $a = "menu_print_a_attributes";

    if ($LANG == "en") {
        $menu_opposite_language = "../gr/" . basename($ORIGIN_FILE);
    }
    else {
        $menu_opposite_language = "../en/" . basename($ORIGIN_FILE);
    }


?>
<input id="hamburger-checkbox" type="checkbox" class="phone" />
<label
    for="hamburger-checkbox"
    class="shadow p2 bg1 phone-grid gr-acol-a"
>
    <span id="menu-label" class="gr-r1">Home</span>
    <span class="gr-r1" style="text-align: end">☰</span>
</label>
<ul
    class="shadow flattened-list mxw2 m0a
    bg1 grid ali-c gr-tcol-a gr-acol-m"
>
    <li <?php $l() ?>>
        <a <?php $a("index.html", "pl3 pr3", $ORIGIN_FILE); ?>>
            <?php $EN("Home"); $GR("Αρχική"); ?>
        </a>
    </li>
    <li <?php $l() ?>>
        <button
            onclick="switchColorScheme()"
            class="ilbl p1 fn2 bg1 fg1 b1 br1 m1 hov-bg3"
        >
            <?php $EN("Colors"); $GR("Χρώμα"); ?>
        </button>
    </li>
    <script> setUpColorScheme(); </script>
    <li <?php $l() ?>>
        <a <?php $a($menu_opposite_language, "", $ORIGIN_FILE); ?>>
            <?php $EN("Greek"); $GR("English"); ?>
        </a>
    </li>
    <li <?php $l() ?>>
        <a <?php $a("portfolio.html", "", $ORIGIN_FILE); ?>>
            <?php $EN("Portfolio"); $GR("Χαρτοφυλάκιο"); ?>
        </a>
    </li>
    <li <?php $l() ?>>
        <a <?php $a("biography.html", "", $ORIGIN_FILE); ?>>
            <?php $EN("Biography"); $GR("Βιογραφικό"); ?>
        </a>
    </li>
    <li <?php $l() ?>>
        <a <?php $a("contact.html", "pr3", $ORIGIN_FILE); ?>>
            <?php $EN("Contact"); $GR("Επικοινωνία"); ?>
        </a>
    </li>
</ul>


<?php echo "<!-- The original file had the MIT notice here -->";
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
