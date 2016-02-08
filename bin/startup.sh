#!/usr/bin/env bash

run-app &> /vagrant/gae.log &

disown -h

exit 0
