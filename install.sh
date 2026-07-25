#!/bin/bash

# ======================================
# Skyzen2k33 Panel Installer
# Version 1.0.0
# ======================================

clear

GREEN='\033[0;32m'
RED='\033[0;31m'
YELLOW='\033[1;33m'
NC='\033[0m'

echo -e "${GREEN}"
echo "========================================"
echo "      SKYZEN2K33 PANEL INSTALLER"
echo "========================================"
echo -e "${NC}"

# Root Check
if [ "$(id -u)" != "0" ]; then
    echo -e "${RED}Error: Jalankan installer sebagai root!${NC}"
    exit 1
fi

# Cek OS
if [ ! -f /etc/os-release ]; then
    echo -e "${RED}OS tidak didukung!${NC}"
    exit 1
fi

source /etc/os-release

if [[ "$ID" != "ubuntu" && "$ID" != "debian" ]]; then
    echo -e "${RED}Hanya mendukung Ubuntu/Debian.${NC}"
    exit 1
fi

echo -e "${GREEN}✓ OS : $PRETTY_NAME${NC}"

echo -e "${YELLOW}Update repository...${NC}"
apt update -y

echo -e "${YELLOW}Install package...${NC}"

apt install -y \
curl \
wget \
git \
unzip \
zip \
nginx \
php \
php-cli \
php-fpm \
php-mysql \
php-curl \
php-xml \
php-mbstring \
php-zip

echo -e "${YELLOW}Membuat folder panel...${NC}"

mkdir -p /var/www/html/sub

echo -e "${GREEN}========================================"
echo "Instalasi dasar selesai."
echo "Folder panel : /var/www/html/sub"
echo "========================================"
echo -e "${NC}"

echo "Tahap selanjutnya:"
echo "1. Clone repository"
echo "2. Copy file panel"
echo "3. Konfigurasi Nginx"
echo "4. Integrasi Xray"

echo "Install Nginx Config..."

cp nginx/skyzen.conf /etc/nginx/sites-available/skyzen

ln -sf /etc/nginx/sites-available/skyzen \
/etc/nginx/sites-enabled/skyzen

nginx -t

systemctl restart nginx

exit 0