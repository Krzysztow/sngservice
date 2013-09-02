#!/bin/bash

. common.sh

checkIfSngServerSet;

curl -H "Content-type: application/json" -X POST -d ' {"method": "getTimeFunctions", "params": null, "id": 1}'  $SNG_SERVER_PATH
