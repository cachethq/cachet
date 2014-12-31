# API Incidents

## `/incidents`

Interact with incidents

Example URL: `http://status.cachethq.io/api/incidents`

* `GET`: returns a list of the current incidents and their status
  - success: 200:
  
    ~~~json
  {
  "data": [
      {
        "updated_at": 1420036705,
        "created_at": 1420036705,
        "component": null,
        "human_status": "Investigating",
        "status": 1,
        "message": "This is an example incident",
        "name": "Example Incident",
        "id": 6
      },
      {
        "updated_at": 1420038898,
        "created_at": 1420038898,
        "component": null,
        "human_status": "Fixed",
        "status": 4,
        "message": "This is a resolved incident",
        "name": "A resolved incident",
        "id": 7
      }
    ]
  }
    ~~~

* `POST`: Create an incident
  - payload

    ~~~json
    {
    "name":"Example Created Incident",
    "message":"Description for an API created incident",
    "status":2
    }
    ~~~



## `/incidents/:id`

Show a single incident

Example URL: `http://status.cachethq.io/api/incident/1`

* `GET`: Return a single incident and its status
  - success: 200:

    ~~~json
    {
      "data": {
        "updated_at": 1420038898,
        "created_at": 1420038898,
        "component": null,
        "human_status": "Fixed",
        "status": 4,
        "message": "This is a resolved incident",
        "name": "A resolved incident",
        "id": 1
      }
    }
    ~~~


