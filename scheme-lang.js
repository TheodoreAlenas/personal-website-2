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
