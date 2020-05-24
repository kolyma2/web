#!/bin/bash

CONN=$1
PASSWORD=$2

sshpass  -p $PASSWORD scp -r subs-ssl/www $CONN:doms/kolyma2.de/subs-ssl

echo 'Done'