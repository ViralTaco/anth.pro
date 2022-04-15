#!/bin/env bash

builtin clear
command html5validator --root . --no-asciiquotes --format=text

# Not unusual to modify more than one file
for file in $(git s -s | awk '{if ($1 == "M") print $2}'); do
	command git add $file && command git commit
done

command php sitemap.php > sitemap.xml &&\
command git add sitemap.xml&&\
command git commit -m 'date update'&&\
command git s
