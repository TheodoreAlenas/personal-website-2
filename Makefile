E = serve-this/en/
G = serve-this/gr/

A = index.html portfolio.html biography.html

all: $(addprefix $E,$A) $(addprefix $G,$A)

clean:
	rm -vf $Tindex.html $Tbiography.html

M = header.php s.css s.js

%/index.html: main.php $M $(wildcard home*)
	mkdir -p $E $G && FILE=$@ php $< > $@

%/portfolio.html: main.php $M $(wildcard por*)
	mkdir -p $E $G && FILE=$@ php $< > $@

%/biography.html: main.php $M $(wildcard bio*)
	mkdir -p $E $G && FILE=$@ php $< > $@
