#!/usr/bin/env bash
SCRIPT=`realpath $0`
SCRIPTPATH=`dirname $SCRIPT`

# start the server
php -S 127.0.0.1:8889 -t "$SCRIPTPATH/../../../../.." &

sleep 30

# run the tests
cd "$SCRIPTPATH/CalDAVTester"
PYTHONPATH="$SCRIPTPATH/pycalendar/src" python2 testcaldav.py --print-details-onfail --basedir "$SCRIPTPATH/../caldavtest/" -o cdt.txt \
	"CardDAV/current-user-principal.xml" \
	"CardDAV/sync-report.xml" \
	"CardDAV/sharing-addressbooks.xml"


RESULT=$?

tail "$SCRIPTPATH/../../../../../data/owncloud.log"

exit $RESULT
