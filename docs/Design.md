##Design
---

The question is what does a user have and (roles) per tennant, and what does and endpoint have per permission?  

Remove the multi-tenant aspect out of the equation - that should be another module that interfaces with Permissible
and that interfaces with Routed for handling routing.

This package should only care about being passed a user or reference to a user and return ifAuthorized or isPermitted, 
additionally it should handle authenticate(), logout(), login(), changeRole(), changePermission(), changePermissions()

This package should have a static facade to be able to do Permissible::authenticate() etc

-----

#### Requirements
- Use a UUID for all ID's
- Have Laravel Connectors to connect to the Laravel User Model, Models for Role, Permission, Endpoint, also Migrations
- Have a static Facade
- Have Hooks for Router and Multi-tenant -> hooks are through the Endpoint by handing it inside route/action the mutlitenant and router objects or data
- Use scope as the hook for multi-tenant. It is needed for even a single tenant system to allow restricting say a forum member only from a whole site memnber etc.
- Add a Laravel connector for Ramsey/uuid to use instead of autoincrement ID
