# API Components

## `/components`

Interact with components

Example URL: `http://status.cachethq.io/api/components`

* `GET`: returns a list of the current components and their status
  - success: 200:
  
    ~~~json
    {
      "data": [
        {
        "updated_at": 1420029799,
        "created_at": 1420029577,
        "incident_count": 0,
        "status": "Operational",
        "status_id": 1,
        "description": "This is an example component",
        "name": "Example Component",
        "id": 5
        },
        {
        "updated_at": 1420037024,
        "created_at": 1420037024,
        "incident_count": 0,
        "status": "Major Outage",
        "status_id": 4,
        "description": "This is a second example component",
         "name": "Second Example Components",
        "id": 2
        }
      ]
    }
    ~~~

* `POST`: Create a component
  - payload

    ~~~json
    {
    "name":"Example Created API",
    "description":"API Created",
    "status":2
    }
    ~~~



## `/components/:id`

Show a single component

Example URL: `http://status.cachethq.io/api/components/1`

* `GET`: Return a single component and its status
  - success: 200:

    ~~~json
    {
      "data": [
        {
        "updated_at": 1420029799,
        "created_at": 1420029577,
        "incident_count": 0,
        "status": "Operational",
        "status_id": 1,
        "description": "SelfServe automation tool for project publishes, resets and Operations tasks",
        "name": "SelfServe",
        "id": 1
        }
      ]
    }
    ~~~


