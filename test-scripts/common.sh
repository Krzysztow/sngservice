#!/bin/bash

function checkIfSngServerSet {
   	if [ -z $SNG_SERVER_PATH ]; then
		echo "SNG_SERVER_PATH not set!";
		exit 1;
	fi;
   	return 0;
}
