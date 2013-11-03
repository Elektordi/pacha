#!/bin/sh

cd `dirname $0`

chmod -R a=rX,a-s,u+w .

echo permissions fixed
echo


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

echo init.sh OK, you can now continue to follow install process in README.md...
