# Incidents

An incident is something that should not happen, but that happens anyway.

## What is exactly an incident

In your status page you are showing the state of some components. It may be a
server, a database, of whatever you want.
If your database server crashes, it is an incident.

## Why should I create an incident

Having a status page is a good thing, being honest with the state of your
components is better.
A status page is not only there to show a green light, it's also there to show
why something bad is happening, and when it will be fixed.

So, when your component experiences a problem, it's a good practice to create an
incident.

## How to use the incidents

When experiencing an incident, it's good to keep being up-to-date with what
happens in the real world. That's why you can use _incident updates_.

How you manage your incidents is up to you, but if you have no idea you can do
the following:

1. An incident happens. While a team is working to fix it, a person is creating
   an incident. Be clear about what happens. At the same time, set the concerned
   component with the right status (_Major Outage_, _Performance issues_ or
   other)
2. You identify the origin of the problem, add an _incident update_ to explain
   what is the problem, if it's important or not.
3. You think the problem is fixed but are not sure, add an incident update to
   explain that. Say it should be fixed, you are watching if everything keeps
   being good.
4. If it's not fixed, add an _incident update_ as in the second point because
   it's identified bt not fixed. If it's fixed, congratulation! Add an _incident
   update_ to explain the details, and say it's definitely fixed. Do not forget
   to set the component as _Operational_ again.
