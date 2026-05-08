#!/bin/bash
set -e

if [ ! -f /app/vendor/autoload.php ]; then
    echo "[entrypoint] vendor/ missing — running composer install..."
    composer install --no-interaction --prefer-dist --no-progress
fi

echo "[entrypoint] Starting supervisor..."
exec supervisord -n -c /etc/supervisor/supervisord.conf
