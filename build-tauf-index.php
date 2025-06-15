<?php

/*

Regex for given names

* ^\s* — optional leading whitespace

* \d+ — one or more digits (the integer)

* \. — literal dot

* \s+ — at least one whitespace character

* ([A-ZÄÖÜ][a-zäöüß\-]+(?:\s+[A-ZÄÖÜ][a-zäöüß\-]+){0,3})

** Captures 1 to 4 given names

** Each must start with a capital letter (including umlauts)

** Followed by one or more lowercase letters (including umlauts and ß)

** Allows internal hyphens (e.g. Karl-Heinz)

* \b — ensures it ends cleanly on a word boundary

 */

$regex = "^\s*\d+\.\s+([A-ZÄÖÜ][a-zäöüß\-]+(?:\s+[A-ZÄÖÜ][a-zäöüß\-]+){0,3})\b";
