# Upgrade Cachet on Heroku

To begin, you'll need the [Heroku Toolbelt](https://toolbelt.heroku.com/) on your system.

## Login to Heroku

Run the following command to login to your Heroku account. You'll need to provide your email and password.

```bash
$ heroku login
```

## Clone your app

Now clone your app to somewhere on your system, for this example we'll use the desktop and `cachet` as our app name.

```bash
$ cd ~/Desktop
$ heroku git:clone -a cachet
```

The toolbelt will now use Git to clone your app locally.

## Add a new remote

Once cloned we'll want to change into the app directory.

```bash
$ cd cachet
```

We can now add a new remote - the Cachet source to the repository.

```bash
$ git remote add origin git@github.com:cachethq/cachet.git
```

Now we update our app with the latest version.

```bash
$ git fetch origin
$ git reset --hard origin/master
```

## Change the buildpack

You'll only need to do this if your `BUILDPACK_URL` env var is different to `https://github.com/cachethq/cachet-buildpack`. You can check this by running:

```bash
$ heroku config:get BUILDPACK_URL
```

If you're buildpack does not match the above, you need to run:

```bash
$ heroku config:set BUILDPACK_URL=https://github.com/cachethq/cachet-buildpack
```

## Push the changes

Our app will now be running the latest version of Cachet, we just need to push it back to Heroku.

```bash
$ git push heroku
```

We're done!
