#!/bin/bash

clear

echo "========================================="
echo "      SKYZEN PANEL INSTALLER"
echo "========================================="

mkdir -p /etc/skyzen
mkdir -p /var/www/html/sub

touch /etc/skyzen/accounts.json

if [ ! -s /etc/skyzen/accounts.json ]; then
cat > /etc/skyzen/accounts.json << EOF
{
  "users":[]
}
EOF
fi

cp -rf panel/* /var/www/html/sub/

chown -R www-data:www-data /var/www/html/sub
chmod -R 755 /var/www/html/sub

echo
echo "Panel berhasil dipasang."
echo