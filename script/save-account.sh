#!/bin/bash

USERNAME="$1"
UUID="$2"
PROTOCOL="$3"
EXPIRED="$4"
DOMAIN="$5"

FILE="/etc/skyzen/accounts.json"

[ -f "$FILE" ] || echo '{"users":[]}' > "$FILE"

TMP=$(mktemp)

jq --arg username "$USERNAME" \
   --arg uuid "$UUID" \
   --arg protocol "$PROTOCOL" \
   --arg expired "$EXPIRED" \
   --arg domain "$DOMAIN" \
'.users += [{
    username:$username,
    uuid:$uuid,
    protocol:$protocol,
    expired:$expired,
    domain:$domain
}]' "$FILE" > "$TMP"

mv "$TMP" "$FILE"

echo "User $USERNAME berhasil disimpan."