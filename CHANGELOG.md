# Changelog

## [2.5.0]

This is not an exhaustive list of the all the changes made since 2.3 but
hopefully captures most of them.

### Upgrade Notes

The upgrade process will require running the DB migrations: `php artisan
migrate`. This will update the DB to support all the new 2.5 features. It will
also move the scheduled maintenance from the incidents table into a dedicated
one, as a result any maintenance older (as in scheduled at date) than a day will
be marked as closed, any newer ones will be open and so will appear on the
status page. If you've performed and completed any maintenance in the last day
you'll need to manually login to the dashboard and set the "When did this
maintenance complete?" field.

PHP < 7.1 is no longer supported, you must use PHP >= 7.1 <= 7.3.

### Added
- Support for PHP >= 7.2 < 7.4
- `CACHET_INTERNET_LOOKUPS` option to disable outbound HTTP requests #6
- Incident Updates - ability to add extra records to an incident logging updates
- Option to disable external HTTP dependencies on the status page. CachetHQ/Cachet#1929
- Use purgecss to reduce CSS size
- Track who created an incident. CachetHQ/Cachet#2717
- Ability set a SEO title and description as meta to an incident
- Use Markdown in mail notifications. Cachet/Cachet#2935
- "always authenticate" setting to limit access to any page to logged in users.
- Setting to suppress notifications during maintenance window
- Option to show only days with incidents in the timeline
- Display postedAt datetime on the single incident page (CachetHQ/Cachet#2795)
- Started using Vue.js for dashboard interface (incomplete)
- Component update notifications can be silenced when updated via the API. CachetHQ/Cachet#2316
- `cachet:version` command
- Components can now be supplied meta data
- Metric visibility options. Decide which group of users should see the metric. CachetHQ/Cachet#2244
- Edit the mail config from the dashboard and provided testing button
- Remember me functionality to login
- Option to only show disrupted days. CachetHQ/Cachet#2088
- Set visibility on component groups to hide components from public users CachetHQ/Cachet#2027
- Ability to stick incident to status page
- `cachet.is_docker` if we're running as Docker
- Option to show the timezone in the footer.

### Changed
- Make scheduled maintenance a 1st class citizen on the dashboard, moved from
  nesting under Incidents
- Move maintenance items to their own section on the status page
- Update dependencies to latest patch versions + swapped discontinued
- `app:install` command renamed to `cachet:install`
- Nicer dashboard sidebar color
- Subscribers can only manage their subscriptions from link emailed to them CachetHQ/Cachet#2047
- Group components on manage subscriptions page
- Split CSS between dashboard and status page
- Rewritten the Metric repository implementation to improve performance. CachetHQ/Cachet#1900
- Allow Cachet to be setup not from the server's root

### Removed
- Support for PHP 5
- Support for PHP 7.0
- Cachet news RSS stream from admin dashboard
- RSS and Atom feeds

### Fixed
- Search API functionality when used with pagination no longer throws an error
- Only send component change email when the status changes. CachetHQ/Cachet#1989
- Redirect when “Component group” was deleted (CachetHQ/Cachet#2130)
- Strip spaces from 2FA code. CachetHQ/Cachet#2405
- Fix timeout with large number of subscribers
