# Metrics

This guide aims to explain basics about metrics.

## What are metrics

When you do monitoring on your services, servers, APIs or others, you can get
raw data. These datas may be a response time to a request, the number of queries
handled in a minute, etc.

The metrics are these raw datas. Using the [Cachet's API][1] you can send the datas
about what you are monitoring to Cachet.


## What can do metrics for you

Having good metrics to show may be great for customers or partners.

You have a big webservice that is under pressure? So it's important to have a
short response time. A metric could show to your users that the webservice is
responding fast!
Imagine, you have a metric named "Response time". Every 10 seconds you call your
webservice, and send the response time to the Cachet's API, in the metric. On
your status page you'll be able to see the average response time for a minute
for example.

Doing so, your users would see that during the last 10 minutes your response
time was worst than previously, and it begins to being better.



[1]: api-documentation.md
