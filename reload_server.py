#!/usr/bin/python3

from os import listdir
import sqlite3
import subprocess


db = sqlite3.connect('nginx.db')
c = db.cursor()
# c.execute('insert into sites_available values (0)')
# db.commit()
print('Selecting total number of sites')
result = db.execute('select * from sites_available')
for x in result:
    previous_sites = x[0]
    break
# lets get total sites in sites availabe
current_sites = len(listdir('/etc/nginx/sites-available'))
print('Current Sites '+str(current_sites))
print('Previous Sites '+str(previous_sites))
if current_sites > previous_sites:
    print('reloading server')
    subprocess.run(['service', 'nginx', 'reload'])
    t = (current_sites,)
    print('Updating Database')
    c.execute('update sites_available set count=?', t)
    db.commit()
db.close()
