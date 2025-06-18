# Cachet Docker Setup

This guide explains how to run Cachet using Docker with a complete setup including MySQL database and Redis cache.

## Quick Start

1. **Clone the repository**
   ```bash
   git clone https://github.com/cachethq/cachet.git
   cd cachet
   ```

2. **Create environment file**
   ```bash
   cp .env.docker.example .env
   ```

3. **Update environment variables**
   Edit `.env` file and update the following variables:
   - `APP_KEY`: Generate using `docker-compose exec app php artisan key:generate --show` after starting containers
   - `DB_PASSWORD`: Set a secure database password
   - `REDIS_PASSWORD`: Set a secure Redis password
   - `MYSQL_ROOT_PASSWORD`: Set a secure MySQL root password
   - `APP_URL`: Set to your domain (e.g., `https://status.yourdomain.com`)

4. **Build and start services**
   ```bash
   docker-compose up -d --build
   ```

5. **Generate application key**
   ```bash
   # Generate and set the APP_KEY
   docker-compose exec app php artisan key:generate
   ```

6. **Access Cachet**
   Open your browser and navigate to `http://localhost` (or your configured domain)

## Architecture

The Docker setup includes three services:

- **app**: Cachet application with Nginx + PHP-FPM
- **db**: MySQL 8.0 database
- **redis**: Redis 7 for caching and sessions

## Configuration Files

### Docker Configuration
- `Dockerfile`: Multi-stage build for production deployment
- `docker-compose.yml`: Service orchestration
- `docker/nginx/nginx.conf`: Nginx configuration for Laravel
- `docker/php/cachet.ini`: PHP configuration optimizations
- `docker/supervisor/supervisord.conf`: Process manager configuration
- `docker/entrypoint.sh`: Startup script with database migrations

### Environment Configuration
- `.env.docker.example`: Template environment file for Docker
- Copy to `.env` and customize for your deployment

## Production Deployment

### Docker Hub Image (Recommended)

You can use the pre-built image from Docker Hub:

```yaml
services:
  app:
    image: cachet/cachet:latest
    # ... rest of configuration
```

### Building Your Own Image

1. **Build the image**
   ```bash
   docker build -t your-registry/cachet:latest .
   ```

2. **Push to registry**
   ```bash
   docker push your-registry/cachet:latest
   ```

3. **Update docker-compose.yml**
   ```yaml
   services:
     app:
       image: your-registry/cachet:latest
   ```

## Environment Variables

| Variable | Description | Default |
|----------|-------------|---------|
| `APP_KEY` | Laravel application key | *Required* |
| `APP_URL` | Application URL | `http://localhost` |
| `DB_PASSWORD` | Database password | *Required* |
| `REDIS_PASSWORD` | Redis password | *Required* |
| `MYSQL_ROOT_PASSWORD` | MySQL root password | *Required* |

## Data Persistence

The setup includes persistent volumes for:
- MySQL data: `mysql_data`
- Redis data: `redis_data`
- Application storage: `storage_data`

## Health Checks

Both MySQL and Redis services include health checks to ensure the application starts only when dependencies are ready.

## Scaling

To scale the application:

```bash
docker-compose up -d --scale app=3
```

Add a load balancer like Nginx or Traefik in front of the application containers.

## Troubleshooting

### Database Connection Issues
```bash
# Check database logs
docker-compose logs db

# Test database connection
docker-compose exec app php artisan tinker --execute="DB::connection()->getPdo();"
```

### Redis Connection Issues
```bash
# Check Redis logs
docker-compose logs redis

# Test Redis connection
docker-compose exec redis redis-cli auth your_redis_password ping
```

### Application Logs
```bash
# View application logs
docker-compose logs app

# Follow logs in real-time
docker-compose logs -f app
```

### Reset Everything
```bash
# Stop and remove all containers and volumes
docker-compose down -v

# Rebuild and start
docker-compose up -d --build
```

## Security Considerations

1. **Change default passwords**: Always update database and Redis passwords
2. **Use HTTPS**: Configure SSL/TLS certificates for production
3. **Firewall**: Restrict access to database and Redis ports
4. **Updates**: Regularly update Docker images and dependencies

## Development

For development with live code reloading:

```bash
# Mount source code as volume
docker-compose -f docker-compose.dev.yml up -d
```

## Support

For issues related to Docker setup, please open an issue on the [Cachet repository](https://github.com/cachethq/cachet/issues).