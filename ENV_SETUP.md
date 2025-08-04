# Environment Configuration

## Setup

1. **Install dependencies:**
   ```bash
   composer install
   ```

2. **Copy environment file:**
   ```bash
   cp .env.example .env
   ```

3. **Configure your environment variables in `.env`:**

## Environment Variables

### Database Configuration
- `DB_HOST` - Database host (default: localhost)
- `DB_USER` - Database username (default: root)
- `DB_PASS` - Database password (default: empty)
- `DB_NAME` - Database name (default: kreafund)

### Application Configuration
- `APP_BASE_URL` - Base URL for the application
- `CI_ENV` - CodeIgniter environment (development, testing, production)

## Example .env file

```env
# Database Configuration
DB_HOST=localhost
DB_USER=root
DB_PASS=your_password
DB_NAME=kreafund

# Application Configuration
APP_BASE_URL=http://localhost/kreafund/

# Environment
CI_ENV=development
```

## Testing

You can test if environment variables are loaded correctly by visiting:
`http://your-domain/index.php/test/env_test`

## Docker Configuration

For Docker deployment, make sure to update your `.env` file:

```env
DB_HOST=mysql
DB_USER=root
DB_PASS=mysql_pw_1
DB_NAME=kreafund
APP_BASE_URL=http://localhost:8080/
CI_ENV=production
```

## Security Notes

- Never commit `.env` file to version control
- Use different `.env` files for different environments
- Keep sensitive data like passwords secure
- Use `.env.example` as a template for other developers
