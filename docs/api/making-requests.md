# Making requests

The Cachet API provides access to incidents and components, allowing you to view, create and update via JSON requests.

The API is accessible from `http://<cachet-url>/api/<endpoint>`

## Examples

You can use curl to interact with the API. There is no authentication required for `GET` requests:

`curl -XGET curl -XGET http://status.cachethq.io/api/components`

In order to create incidents, you must send the a json string with the required payload and authenticate. More information can be found in the Endpoints documentation listed below.

Here's a simple example:

`curl -u username@example.com -H "Content-Type: application/json" -d '{"name":"API","description":"An example description","status":1}' http://status.cachethq.io/api/components`


# Endpoints

## `/components`
List and create components

See [Component API documentation](components.md) for more information

## `/incidents`
List and create and update incidents

See [Incidents API documentation](incidents.md) for more information

## `/metrics`
List and add metrics

See [Incidents API documentation](metrics.md) for more information

# Authorization

# Security
