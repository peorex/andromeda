#!/bin/sh

# Remove test properties from style.css
# Author: Georgi Kovachev
# Version: 1.0.0

# The CSS syntax is made up of three parts:
# selector { property: value(s) }
# 
# test prpoerties looks like:
# /*test-pr*/ property: value(s)


# configuration start
targetfile=style.css
bakfile=style.css.debug
# configuration end

ME=`basename $0`		# program name
SELFDIR=`dirname $0`		# program directory


cd $SELFDIR

if [ -f "$bakfile" ]; then
	echo -n "$ME: Creating $targetfile... "
	cp $bakfile $targetfile
	rm $bakfile
	echo Done
else
	if [ -f "$targetfile" ]; then
		echo -n "$ME: Proceeding $targetfile... "
		cp $targetfile $bakfile
		# -v, --invert-match
		# Invert the sense of matching, to select non-matching lines.
		grep -v *test-pr* $bakfile > $targetfile
		echo Done
	else
		echo $ME: $targetfile does not exist
	fi
fi


exit 0

