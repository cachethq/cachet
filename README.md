# Cachet [![Deploy](https://www.herokucdn.com/deploy/button.png)](https://heroku.com/deploy)
[![Build Status](http://img.shields.io/travis/cachethq/Cachet.svg?style=flat-square)](https://travis-ci.org/cachethq/Cachet)
[![Gitter](https://badges.gitter.im/Join Chat.svg)](https://gitter.im/cachethq/Cachet?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge)

Cachet is an open source PHP status page system using the Laravel framework.

![Current progress](https://dl.dropboxusercontent.com/u/7323096/Cachet.png)

For more information on why I started developing Cachet, check out my [blog post](http://james-brooks.uk/cachet/?utm_source=github&utm_medium=readme&utm_campaign=github-cachet), for more read [What's next for Cachet?]([What's next for Cachet?](http://james-brooks.uk/whats-next-for-cachet/)) [A demo, deployed to Heroku](https://cachet.herokuapp.com).

**Currently in development. Things may change or break until a solid release has been announced.** Please feel free to contribute!

# Features

- Create, edit and delete components.
- Log incidents.
- Override status page colors.
- Apply a custom stylesheet to the status page.

# Installation

See the [INSTALL.md](/INSTALL.md) document for more information. If you'd like to add more documentation, please create a Pull Request, I'd be happy to merge!

[Deploying to Heroku](/INSTALL.md#deploy-to-heroku) requires one-click to get started and no knowledge of PHP or Laravel afterwards.

If you're deploying into production you'll want to create an environmental variable as `ENV=production`. In the instance where the variable isn't defined, Cachet will think that it's `local`.

# Translations

A special thank you to our translators, who have provided us with the chance to share Cachet with the world.

- **Andreas Karlsson** - Swedish
- **Marcin Kurczewski** - Polish
- **Pedro Maia** - Portuguese
- **Salvatore Gentile** - Italian

If you'd like to contribute translations, please check out our [CrowdIn project](https://crowdin.com/project/cachet).

# License

[MIT](http://jbrooksuk.mit-license.org)
