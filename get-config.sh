#!/bin/bash

. common.sh

checkIfSngServerSet;

if [ $# -ne 1 ]; then
	echo "Usage <this> <panel-name>";
	exit 1;
fi; 

curl -H "Content-type: application/json" -X POST -d ' {"method": "getConfig", "params": $1, "id": 1}'  $SNG_SERVER_PATH
