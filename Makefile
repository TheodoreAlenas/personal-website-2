T = serve-this/

all: $Tindex.html $Tbiography.html

clean:
	rm -vf $Tindex.html $Tbiography.html

M = header.html s.css metas.html

$Tindex.html: index.php $M
	php $< > $@

$Tbiography.html: biography.php $M $(wildcard bio/*)
	php $< > $@
