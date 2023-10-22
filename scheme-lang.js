/* <?php echo basename(__FILE__);  // scheme-lang.js as of now ?> */

function switchColorScheme() {
    setColorScheme(old => old === "light" ? "dark" : "light");
}
function switchLanguage() {
    setLanguage(old => old === "en" ? "gr" : "en");
}

function setColorScheme(switcher) {
    const definer = document.querySelector("[scheme]");
    const s = switcher(definer.getAttribute("scheme"));
    definer.setAttribute("scheme", s);
    localStorage.setItem("lastTheme", s);
}
function setLanguage(switcher) {
    const definer = document.querySelector("[lang]");
    const s = switcher(definer.getAttribute("lang"));
    definer.setAttribute("lang", s);
    localStorage.setItem("lastLanguage", s);
}

if (localStorage.getItem("lastTheme") === "dark")
    setColorScheme(_ => "dark");
else
    setColorScheme(_ => "light");

if (localStorage.getItem("lastLanguage") == "gr")
    setLanguage(_ => "gr");
else
    setLanguage(_ => "en");


/* <?php echo "The original file had the MIT notice here";
// Copyright (c) 2023 Dimakopoulos Theodoros

// Permission is hereby granted, free of charge, to any person obtaining a copy
// of this software and associated documentation files (the "Software"), to deal
// in the Software without restriction, including without limitation the rights
// to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
// copies of the Software, and to permit persons to whom the Software is
// furnished to do so, subject to the following conditions:

// The above copyright notice and this permission notice shall be included in all
// copies or substantial portions of the Software.

// THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
// IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
// FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
// AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
// LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
// OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
// SOFTWARE.
?> */
