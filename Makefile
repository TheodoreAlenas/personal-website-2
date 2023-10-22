T = serve-this/

all: $Tindex.html $Tbiography.html

clean:
	rm -vf $Tindex.html $Tbiography.html

$T%.html: %.php
	php $< > $@
