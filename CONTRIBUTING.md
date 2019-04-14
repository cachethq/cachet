# Contribution Guidelines

## Thank you

Firstly, thank you for taking an interest in Cachet and for reading this guide.

## Creating issues

We track feature requests and bug reports on the [issue tracker](https://github.com/cachethq/Cachet/issues). Please send support requests to our support email; [support@alt-three.com](mailto:support@alt-three.com?subject=Cachet%20Support).

**Always be respectful.** Organisation members reserve the right to lock topics if they feel necessary.

## Languages

This project accepts **English translations** only. Translations will be updated automatically through the [CrowdIn](https://translate.cachethq.io) integration.

Please submit alternative translations to the [Cachet CrowdIn](https://translate.cachethq.io) project. CrowdIn will automatically send a Pull Request with your updates in.

## Coding Standards

Please try to follow existing coding standards. [StyleCI](https://styleci.io) will analyse and fix any discrepancies in coding standards.

## Introduction into Git and GitHub

If you are new to Git, GitHub and the whole open source software community, welcome! Here are some resources for getting started and understanding what it's all about.

- [Try Git](https://try.github.io/levels/1/challenges/1) by Code School
- [GitHub Help](https://help.github.com)

If you're not fond of the command line, you can get one of GitHub's free GUI desktop apps:

- [GitHub for Mac](https://github.com/blog/1510-installing-git-from-github-for-mac)
- [GitHub for Windows](https://github.com/blog/1127-github-for-windows)

If you're feeling adventurous, you can become a Git & GitHub master with the [Git Path on Code School](https://www.codeschool.com/paths/git).

## .editorconfig

You should also make use of the [.editorconfig](/.editorconfig) file found within the root of the repository. It'll make sure that your editor is setup with the same file settings.

## Ways to help:

Start by becoming familiar with Cachet. If you're already using Cachet, that's a great head start. If not, check out the latest [demo](https://dev.cachethq.io) and have a play. You can also download and install Cachet locally to familiarise yourself that way.

You don't have to be a developer to help improve Cachet, infact there are lots of ways that you can help us.

### Spread the word

There are a lot of people who don't know about Cachet or what a status page is and how important it can be. [Tweet about Cachet](https://twitter.com/CachetHQ). Write blog posts about your success (or failures, we're not perfect) with Cachet and share what you took away from it.

### Help with Documentation

Cachet is in use around the world. Cachet speaks multiple languages. Our documentation doesn't and can be hard to understand for non-English speaking people. Documentation should be easy to understand and we need your help to make this possible. Check out [CachetHQ/Docs](https://github.com/CachetHQ/Docs) to contribute to our documentation.

### As a non-developer/non-designer

We're always looking for new [translations](#translations).

Of course bug reports, feature requests and [documentation](https://docs.cachethq.io) are always appreciated.

### As a designer

As Cachet gains new features, the design and ideas that were once a perfect fit need updating and in some cases designing from scratch. This is where you come in! Fancy giving Cachet a lick of paint? Sweet!

You'll need to install Node.js with NPM or Yarn.

To get started you can do the following:

1. Install Node.js and our dev dependencies.
2. Run `npm run dev`
3. Make your changes to the SCSS files in `./resources/assets/sass/`

If you're making a lot of changes, you'll find that running `npm run watch` will make life easier for you!

When you're happy with your changes, please run `npm run prod` to minify the assets.

### As a developer

Built using [Laravel](https://laravel.com).

We use these extra dependencies to develop Cachet:

- Node.js
- NPM or Yarn
- Composer
- Git

Once cloned to your local machine, you'll need some demo data! Run `php artisan cachet:seed` to get the demo installation ready for action.

### #YOLO JUST SUBMIT A PR

_A great idea taken from https://github.com/metabase/metabase/blob/master/docs/contributing.md#yolo-just-submit-a-pr._

> If you come up with something really cool, and want to share it with us, just submit a PR. If it hasn't gone through the above process, we probably won't merge it as is, but if it's compelling, we're more than willing to help you via code review, design review and generally OCD nitpicking so that it fits into the rest of our codebase.
