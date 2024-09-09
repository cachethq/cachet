# Configuring Mail

Your `.env` file will need to include the following setting keys.

```
MAIL_DRIVER=smtp
MAIL_HOST=mailtrap.io
MAIL_PORT=587
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ADDRESS=null
MAIL_NAME=null
MAIL_ENCRYPTION=tls
```

After making changes to your mail configuration you'll need to run the
following command within your Cachet installation directory.

```bash
$ php artisan config:cache

# If you experience any issues after running this command, run this too:
$ rm -rf bootstrap/cache/*
```

## Cachet + Mailgun

Create an account with [Mailgun][1].

MAIL\_USERNAME should be Mailgun domain.
MAIL\_PASSWORD should be Mailgun API Key.

Edit your `.env` file with the following variables.

```
MAIL_DRIVER=mailgun
MAIL_HOST=smtp.mailgun.org
MAIL_PORT=587
MAIL_USERNAME=alt-three.com
MAIL_PASSWORD=xxxx
MAIL_ADDRESS=support@alt-three.com
MAIL_NAME="Alt Three Services Limited"
MAIL_ENCRYPTION=tls
```

The tls encryption setting is required to have e-mails be properly delivered.

## Cachet + Spark Post

Create an account with [Spark Post][2].

Edit your `.env` file with the following variables.

```
MAIL_DRIVER=smtp
MAIL_HOST=smtp.sparkpostmail.com
MAIL_PORT=587
MAIL_USERNAME=SMTP_Injection
MAIL_PASSWORD=API_TOKEN
MAIL_ADDRESS=support@alt-three.com
MAIL_NAME="Alt Three Services Limited"
MAIL_ENCRYPTION=tls
```

[1]: https://mailgun.com/
[2]: https://www.sparkpost.com/
