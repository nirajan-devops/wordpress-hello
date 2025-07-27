# -------- Stage 1: Build custom content (optional) --------
FROM wordpress:latest AS builder

# Optional: install dependencies or custom scripts
# RUN apt-get update && apt-get install -y unzip wget

# Copy custom content to builder image
COPY ./wp-content /var/www/html/wp-content

# -------- Stage 2: Final optimized WordPress image --------
FROM wordpress:latest

# Copy pre-built wp-content from builder stage
COPY --from=builder /var/www/html/wp-content /var/www/html/wp-content

# Set environment variables
ENV WORDPRESS_DB_HOST=db \
    WORDPRESS_DB_USER=wp_user \
    WORDPRESS_DB_PASSWORD=wp_pass \
    WORDPRESS_DB_NAME=wp_db

# Expose Apache port
EXPOSE 80
