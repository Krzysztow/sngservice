#!/bin/bash

if [ $# -eq 0 ];then
	echo "Usage: $0 <panel-id> [<module1> <module2> ...]";
	echo "NOTE: if no module is specified 'listdetail' is taken by default" 
	exit 1;
fi;

set -x

PANEL_ID=$1;
MODULES_LIST="";

let modulesNum=$#;
if [ $modulesNum -gt 1 ]; then
	hadPreviousElement="no"
	for i in `seq 2 $modulesNum`; do
		if [ "$hadPreviousElement" == "no" ]; then
			hadPreviousElement="yes";
		else
			MODULES_LIST=$MODULES_LIST",";
		fi;
		eval module=\$$i;
		MODULES_LIST=$MODULES_LIST"\"$module\"";		
	done; 
	MODULES_LIST="["$MODULES_LIST"]"
else 
	MODULES_LIST="[\"listdetail\"]"
fi;


. common.sh

checkIfSngServerSet;

curl -H "Content-type: application/json" -X POST -d " {\"method\": \"getConfig\", \"params\": {\"id\": $PANEL_ID, \"filteredModules\": $MODULES_LIST}, \"id\": 1}"  $SNG_SERVER_PATH
