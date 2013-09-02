#!/bin/bash

. common.sh

checkIfSngServerSet;

curl -H "Content-type: application/json" -X POST -d ' {"method": "getTodayInfo", "params": {"country-code":"pl", "location": [52.2300, 21.0108], "days-ahead":4}, "id": 1}'  $SNG_SERVER_PATH
