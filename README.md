# Secret Santa Database and Mailer

This whole thing just creates the database and performs the emailing.

# Set up

Start by copying the `.env.example` file:

```bash
cp .env.example .env
```

Fill the information for your database connection and set up your AWS SES keys for emails.

## Database

Create the database by running

```
php artisan db:migrate
```

## Sending Emails

To send the emails run:

```
php artisan emails:send
```

### To Do's 
- [ ] Add debug mode for email sender