#!/usr/bin/env bash

set -e

DIRECTORY=$(cd `dirname $0` && pwd)
DIST=$DIRECTORY/../dist/optimized
RESOURCES=$DIRECTORY/../resources/svg

echo "Compiling outline icons..."

for FILE in $DIST/outline/*; do
  cp $FILE $RESOURCES/o-$(echo ${FILE##*/})
done

echo "Compiling solid icons..."

for FILE in $DIST/solid/*; do
  cp $FILE $RESOURCES/s-$(echo ${FILE##*/})
done

echo "All done!"
