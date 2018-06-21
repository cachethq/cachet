# API Documentation for Cachet

## `GET /api/v1/ping`

Ping the Cachet instance.

## `GET /api/v1/version`

Get the version of Cachet installed.

## `GET /api/v1/status`

Get the overall system status.

## `GET /api/v1/components`

Get all components.

## `GET /api/v1/components/:id`

Get a single component.

### Params

- `id` the ID of the component

## `POST /api/v1/components`

Create a new component.

### Params

- `name` the name of the component
- `description` may be left empty
- `status`
- `link`
- `order`
- `group_id`
- `enabled`
- `meta`

## `DELETE /api/v1/components/:id`

Delete a component.

### Params

- `id`
