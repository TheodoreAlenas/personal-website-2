P = serve-this
E = serve-this/en/
G = serve-this/gr/

A = index.html portfolio.html biography.html

C = $(shell find cp-to-serve-this -type f)

all: $(addprefix $E,$A) $(addprefix $G,$A) $P/cv.pdf $(C:cp-to-%=%)

clean:
	rm -vfr $P/* cv/fonts/

push: $P
	rsync --delete -vr $P/* srv@theodoros-d-alenas.site:/srv

.PHONY: all clean push

$P/en/index.html: main.php $(wildcard main/* home/*)
	mkdir -p $E $G && FILE=$@ php $< > $@

$P/gr/index.html: main.php $(wildcard main/* home/*)
	mkdir -p $E $G && FILE=$@ php $< > $@

$P/en/portfolio.html: main.php $(wildcard main/* portfolio/*)
	mkdir -p $E $G && FILE=$@ php $< > $@

$P/gr/portfolio.html: main.php $(wildcard main/* portfolio/*)
	mkdir -p $E $G && FILE=$@ php $< > $@

$P/en/biography.html: main.php $(wildcard main/* biography/*)
	mkdir -p $E $G && FILE=$@ php $< > $@

$P/gr/biography.html: main.php $(wildcard main/* biography/*)
	mkdir -p $E $G && FILE=$@ php $< > $@

$P/cv.pdf: cv/cv.tex cv/fonts/ $(wildcard cv/*)
	cd cv && lualatex \\nonstopmode\\input cv.tex
	mv cv/cv.pdf $P/

FONT_URL = https://github.com/adobe-fonts/source-sans/releases/download/
FONT_URL_DIR = 3.052R/
FONT = OTF-source-sans-3.052R

cv/fonts/:
	cd cv && wget ${FONT_URL}${FONT_URL_DIR}${FONT}.zip
	cd cv && unzip ${FONT}.zip
	cd cv && rm ${FONT}.zip
	cd cv && mv OTF fonts
	cd cv && rm -rf __MACOSX
	cd cv && cp FontAwesome.ttf fonts/

$P/%: cp-to-serve-this/%
	-test -f $@ && rm -rf $@
	cp -r $< $@
