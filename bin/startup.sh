#!/usr/bin/env bash

run-app &> /var/log/gae/gae.log &

disown -h

exit 0
