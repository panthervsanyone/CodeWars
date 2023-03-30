#!/bin/bash

<<command
Write a script which return the latest modified file.

For example, if the following files are in the current directory:

poem.txt
article.txt
quotes.txt
and the latest edited file was article.txt then the following should be returned:

article.txt
Note: The files will be in the current directory.

command
echo $(ls -t | head -1)