#!/bin/sh

BORDER=ip.or.router.name
USER=username
PASSWORD=password

CP=$( pwd )
cd ~/133-2017/
../block-hostname-by-ip -r${BORDER} -u${USER} -p${PASSWORD}
git commit -a -m "reglament run"
git push origin master
cd ${CP}
