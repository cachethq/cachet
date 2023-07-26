# Beacons

> **Version Support**
>
> Beacons will be introduced in v2.4.0

Cachet will periodically communicate with our remote server. This is done so
that we're able to gather information about the current version of Cachet
and will later be used for system announcements.

## Disabling the beacon

To disable the beacon, you can turn off the following setting in your .env file.

```
CACHET_BEACON=false
```

## What is reported?

We report the following information to our server:

- A unique installation ID
- The current version of Cachet
- A support contact email (the first enabled admin's email)
- Anonymous statistics (the number of users, incidents, components and metrics)

> **Support Contact Email**
> The contact email is used for the sole purpose of security
> announcements and will never be used for anything else.
