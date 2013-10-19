#!/bin/sh

cd `dirname $0`

rm -rf app/tmp

mkdir app/tmp
mkdir app/tmp/logs
mkdir app/tmp/sessions
mkdir app/tmp/cache
mkdir app/tmp/cache/views
mkdir app/tmp/cache/models
mkdir app/tmp/cache/persistent
mkdir app/tmp/tests

chmod -R a+w app/tmp

echo app/tmp ready.
echo

echo
echo Remember to copy Config/database.php.default to Config/database.php and set appropriate values.
echo If you need emails, do the same with Config/email.php.default to Config/email.php.
echo Then run \"app/Console/cake schema create\" !
