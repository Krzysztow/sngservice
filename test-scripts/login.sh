#!/bin/bash

. common.sh

checkIfSngServerSet;

curl -H "Content-type: application/json" -X POST -d ' {"method": "login", "params": {"authentication": {"user": "snguser","password": "sngpassword"}}, "id": 1}' $SNG_SERVER_PATH
