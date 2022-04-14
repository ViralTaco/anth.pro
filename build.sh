#!/bin/env bash

for file in $(git s -s | awk '{if ($1 == M) print $2}'); do
	git add $file;
	echo "Modified $file. Commit message:\n";
	git commit;
done