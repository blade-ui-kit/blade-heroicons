#!/usr/bin/env bash

set -e

DIRECTORY=$(cd `dirname $0` && pwd)
DIST=$DIRECTORY/../dist
RESOURCES=$DIRECTORY/../resources/svg

echo "Compiling outline icons..."

for FILE in $DIST/outline-md/*; do
  cp $FILE $RESOURCES/o-$(echo ${FILE##*/} | cut -c 4-)
done

echo "Compiling solid icons..."

for FILE in $DIST/solid-sm/*; do
  cp $FILE $RESOURCES/s-$(echo ${FILE##*/} | cut -c 4-)
done

echo "All done!"
