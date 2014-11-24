# Cachet [![Deploy](https://www.herokucdn.com/deploy/button.png)](https://heroku.com/deploy)

Cachet is an open source PHP status page system using the Laravel framework.

![Current progress](https://dl.dropboxusercontent.com/u/7323096/Cachet.png)

For more information on why I started developing Cachet, check out my [blog post](http://james-brooks.uk/cachet/?utm_source=github&utm_medium=readme&utm_campaign=github-cachet), for more read [What's next for Cachet?]([What's next for Cachet?](http://james-brooks.uk/whats-next-for-cachet/)) [A demo, deployed to Heroku](https://cachet.herokuapp.com).

**Currently in development. Things may change or break until a solid release has been announced.** Please feel free to contribute!

# Installation

See the [INSTALL.md](/INSTALL.md) document for more information. If you'd like to add more documentation, please create a Pull Request, I'd be happy to merge!

[Deploying to Heroku](/INSTALL.md#deploy-to-heroku) requires one-click to get started and no knowledge of PHP or Laravel afterwards.

If you're deploying into production you'll want to create an environmental variable as `ENV=production`. In the instance where the variable isn't defined, Cachet will think that it's `local`.

# Looking to contribute?

Are you looking to help out and contribute towards Cachet, awesome! There is a lot to do before the [first milestone](https://github.com/jbrooksuk/Cachet/milestones/First%20Release) is reached, including:

- **Revamp the existing design** [#2](https://github.com/jbrooksuk/Cachet/issues/2). Whether you think that we should drop Bootstrap and we use a custom framework or we apply awesome styles, fork Cachet, make your changes and propose them!
    + A good design for Cachet needs to also support a Setup and Management backend.
- **Setup Page** [#12](https://github.com/jbrooksuk/Cachet/issues/12). Work has started on this, but there is a lot more that needs to be setup including; users, components, incidents and templates.
- **Dashboard** [#11](https://github.com/jbrooksuk/Cachet/issues/11). Currently there is no way to get the incidents and components into the database without a bit of messing around.
- **API** [#3](https://github.com/jbrooksuk/Cachet/issues/3). All good services need an API and Cachet is no exception. An API will allow third-party integration and vice-versa.

However, if you're not looking to work on anything big then some of our issues will be tagged with the **enjoy** label. Feel free to take a look at these as they should be much easier to deal with.

# License

[MIT license](http://jbrooksuk.mit-license.org)
