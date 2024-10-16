#!/bin/bash

command clear
#command html5validator --root . --no-asciiquotes --format=text

# Not unusual to modify more than one file
for file in $(git status -s | awk '{if ($1 == "M") print $2}'); do
	command git add $file # && git commit
done

command php sitemap.php > sitemap.xml &&\
command git add sitemap.xml&&\
command git commit -m 'date update'&&\
command git status

