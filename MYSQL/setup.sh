#!/bin/bash
set -e
service mysql start
sleep 3
mysql < /mysql/schema.sql
sleep 3
mysql < /mysql/privileges.sql
