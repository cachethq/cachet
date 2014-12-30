# Introduction to Cachet

This document is a brief breakdown of what Cachet is, why it was built and how it works. Each section is explained in more detail within other pages.

## What is Cachet?

Cachet is a status page used for informing your customers/employees/developers with any updates or issues affecting your service and the individual components which make it up.

For example, if you're running an online store, you may have the following components powering it:

- Stripe (payments)
- Storefront (website)
- CDN
- API

If your API breaks, developers may want to know what's going on as their integrations will have broken. You can easily update the status of the component and then create a new incident explaining the issue. As you progress through to rectifying the issue you can create more incidents with a new status. Eventually you'll have fixed the issue and your service status banner will turn green.

## Why build it?

Originally built by [James Brooks](http://james-brooks.uk/cachet/), Cachet was a solution to a problem. Whilst there was [StatusPage.io](https://statuspage.io), it's an expensive service for the [small service](http://anorakci.com) that was being built at the time.

Since Cachet is open source, **anybody** can run it and anybody can contribute to it. Contributions make software better and having the freedom to fork and improve upon it means it'll be forever improving.

## How does it work?

Cachet is built upon two core concepts:

- [Components](#components)
- [Incidents](#incidents)

Here we'll break down these concepts and how they work together. Cachet also uses metrics, however they're an optional feature of Cachet that can be unused without affecting anything.

### Components

A component is setup for each of the core, individual parts to a service or product, for instance;

- API
- Website
- CDN
- Payments

In the future Cachet will be able to create third-party components directly for things like:

- GitHub
- Stripe
- Intercom
- Desk.com

And automatically update the status based on their current service status.

### Incidents

Incidents are individual to components but come pre-designed to be linked against one of them, this background feature is ready for third-party components which will be coming later on.

An incident is a status update containing a title, message and readable status.
