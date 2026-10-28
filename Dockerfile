# Use official PHP CLI image
FROM php:8.5-cli AS runner

# Workdir for your script(s)
WORKDIR /app

# Copy your benchmark script (rename if your file has a different name)
COPY test.php /app/test.php

# Default command runs the benchmark; override with `docker run ... php your.php`
CMD ["php", "/app/test.php"]