#!/bin/bash

if [ $# != 1 ]; then
	echo "Usage $0 <server-url-path>";
	exit 1;
fi

export SNG_SERVER_PATH=$1;

echo "Server path set to $SNG_SERVER_PATH";
