/* <?php echo basename(__FILE__);  // s.js as of now ?> */

function setUpColorScheme() {
    const stored = localStorage.getItem("lastTheme");
    const html = document.querySelector("html");
    setSchemeByChangingElement(html, getThisOrPreferedScheme(stored));
}

function switchColorScheme() {
    const html = document.querySelector("html");
    const next = getNextSchemeLookingAtElement(html);
    setSchemeByChangingElement(html, next);
    localStorage.setItem("lastTheme", next);
}

function setSchemeByChangingElement(html, newScheme) {
    html.setAttribute("scheme", newScheme);
    if (newScheme === "light" || newScheme === "accessible-light")
        html.style.colorScheme = "light";
    if (newScheme === "dark" || newScheme === "accessible-dark")
        html.style.colorScheme = "dark";
}

function getThisOrPreferedScheme(stored) {
    if (stored)
        return stored;
    if (window.matchMedia('(prefers-color-scheme: dark)').matches)
        return "dark";
    return "light";
}

function getNextSchemeLookingAtElement(html) {
    const now = html.getAttribute("scheme");
    if (now === "light")
        return "dark";
    if (now === "dark")
        return "accessible-light";
    if (now === "accessible-light")
        return "accessible-dark";
    return "light";
}


/* <?php echo "The original file had the MIT notice here";
// Copyright (c) 2023 Dimakopoulos Theodoros <dimakopt732@gmail.com>

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
