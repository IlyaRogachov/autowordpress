#!/bin/bash
sudo chmod 700 ./templates/server_ca
echo 192.168.56.41 mywordpress.com >> /etc/hosts
vagrant up
cd ./own && ansible-playbook -i  inventory.cfg  playbook/ownrun.yaml
