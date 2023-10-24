T = serve-this/

all: $Tindex.html $Tbiography.html

clean:
	rm -vf $Tindex.html $Tbiography.html

M = header.html s.css s.js

$Tindex.html: main.php $M lorem.html
	FILE=$@ php $< > $@

$Tbiography.html: main.php $M $(wildcard bio-*)
	FILE=$@ php $< > $@
