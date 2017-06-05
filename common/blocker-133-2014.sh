#!/bin/sh

BORDER=ip.or.router.name
USER=username
PASSWORD=password

CP=$( pwd )
cd ~/133-2017/

cp hostnames.rnbo hostnames
ssh DNS-SERVER ./domains >> hostnames
sort -u hostnames > hostnames~
mv hostnames~ hostnames

./blocker-133-2017 -r${BORDER} -u${USER} -p${PASSWORD}
git commit -a -m "reglament run"
git push origin master

cd ${CP}
