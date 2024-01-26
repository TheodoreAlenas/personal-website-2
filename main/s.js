/* <?php echo basename(__FILE__);  // s.js as of now ?> */

function setUpColorScheme() {
    const html = document.querySelector("html");
    const stored = localStorage.getItem("lastTheme");
    setDefinersOfScheme(html, getThisOrPreferedScheme(stored));
}

function switchColorScheme() {
    const html = document.querySelector("html");
    const opposite = getOppositeSchemeThanSet(html);
    setDefinersOfScheme(html, opposite);
    localStorage.setItem("lastTheme", opposite);
}

function setDefinersOfScheme(html, newScheme) {
    html.setAttribute("scheme", newScheme);
    html.style.colorScheme = newScheme;
}

function getThisOrPreferedScheme(stored) {
    if (stored === "dark" || stored === "light")
        return stored;
    if (window.matchMedia('(prefers-color-scheme: dark)').matches)
        return "dark";
    return "light";
}

function getOppositeSchemeThanSet(html) {
    if (html.getAttribute("scheme") === "light")
        return "dark";
    return "light";
}


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
