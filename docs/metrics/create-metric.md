# Create a metric

This documentation will guide you through the metric creation.
You need to know [what is a metric][1].

## Filling the form

Creating a metric is as simple as filling a form. You just need to know what do
the fields mean.

To access to the metrics creation, follow these steps:

- Log into your Cachet instance.
- Once on the Dashboard click `Metrics` in the sidebar.
- Click the `Create a metric` button.

And you are there! You should be able to see the metric form.
Let's explain the fields:

- `Name`: The name of the metric as it will be shown on the status page.
  Example: "API response time".
- `Suffix`: The suffix that will be added in the tooltip when you put your mouse
  over the point on the metric. Usually it's the unit of the raw data. Example:
  "ms". If you send "42" to the metric, then "42ms" would be show in the
  tooltip.
- `Description`: A description of the metric. What is the usage of the metric?
  What does it measure? Example: "The average response time of our API".
- `Calculation of metrics`: What computation should be done on your data before
  displaying them in the metric? It may be either _Sum_ or _Average_. Example:
  _Average_ to compute the average reponse time for a given time.
- `Default view`: The default view of the metric. Viewing the datas of 1 year
  ago is not useful, but it's about your preference to see datas of the last
  hour, 12 hours, week or month. Example: _Last 12 hours_ because you want to
  see the last 12 hours of data by default. It's only the default view, this can
  be changed in a select box.
- `Decimal places` The number of decimal of the point that is displayed. If you
  are computing the average of something it's almost sure that you'll get an
  average with a coma, line 42,424242. Example: 2 to get 42,42 instead of a long
  number.
- `How many minutes of threshold between metric points?`: The number of minutes
  between the points in the metric. According to your needs it may be 1, 5 or
  even 30. It's really up to you. Example: 60 to get one point every hour.
- `Display chart on the status page?`: If checked, this chart will be displayed
  on the status page. But it's possible to create the metric and not showing it.
- `Visibility`: Who should be able to see the chart? You have three choices:
    - `Visible to authenticated users`: It means that people won't be able to
      see it except if they are authenticated. Useful if it's an internal metric.
    - `Visible to everybody`: It means that every user, even not authenticated,
      will be able to see the chart.
    - `Always hidden`: It means that nobody will be able to see the chart.



[1]: index.md
