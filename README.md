# Second take on my website

## Goals

- Aesthetics that align with me
- Accessibility
- Compliance to simple standards
- Greek/English and light/dark mode switching
- Instant access to the text on load
- Text that stays in place as data loads

## Aesthetics

Oftentimes, there's a mismatch between
the appearance of someone's website
and the appearance of their house, car and workspace.
The website tends to have an energetic aesthetic.
This website is meant to be mine in every sense.

## Tools

None. This is an improvised workflow, inspired by LaTeX
and general experiences programming.

## Upgrade

The first version of my website used PHP functions to
concatenate strings into HTML.
Near the end, the localization was handled using custom XML files.

This version was meant to be served almost as-is,
with custom 'def-macro' DOM elements expanding using JavaScript,
and span elements with both languages such that half would be
hidden. However Emacs' 'EWW' can't client side render.

The most noticable advantage compared to the first version
is the simplicity, and the separation of PHP that prepares text
from PHP that templates HTML.

## Message

This kind of website is trivial to improvise,
I improvised 3 versions in a few months.
If it doesn't work out, there's not a lot to rework.
Keep in mind that parsing simple XML is a trivial task,
so you may come up with some simple XML format
that allows you to easily switch frameworks late.

The benefit of loading the complexity on the mind,
and offloading it from the computer,
is that when the computer doesn't feel well it doesn't go unnoticed.
