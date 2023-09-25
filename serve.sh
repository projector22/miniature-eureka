#!/bin/bash

ENV_FILE=".env"
EXAMPLE_FILE=".env.example"
if [ ! -e "$ENV_FILE" ]; then
    cp "$EXAMPLE_FILE" "$ENV_FILE"
    php artisan key:generate
fi

touch database/database.sqlite
# php artisan migrate

# Function to gracefully terminate the processes
terminate_processes() {
  echo "Terminating processes..."
  kill -TERM $php_pid
  kill -TERM $npm_pid
  wait $php_pid
  wait $npm_pid
  echo "Processes terminated."
  exit 0
}

# Trap Ctrl+C and call the terminate_processes function
trap terminate_processes INT

# Start php artisan serve in the background
php artisan serve &
php_pid=$!

# Start npm run dev in the background
npm run dev &
npm_pid=$!

# Wait for both processes to finish
wait $php_pid
wait $npm_pid
