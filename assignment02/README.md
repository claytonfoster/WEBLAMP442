Assignment 2 - Option 1
============
Build a Database Access Layer 

```
class Connection
- constructor   , takes either an array of database parameters or a configuration object that represents database parameters.
- connect()     , connect to the database
- disconnect()  , shutdowns established database connection
- selet()       , return the result of a select query. This function may return an array of rows, an array of models that represent the tables or rows.
- update()      , execute the update sql statement. It should throw an exception if the query fails to execute.
- delete()      , execute the delete sql statement. It should throw an exception if the query fails to execute.
- insert()      , execute insert sql statement. It should return last insert id if operation is successful, or throw an exception if the operation fails.
```
What did I do?
============
- Built a simple DBAL using PDO
- Currently missing the exception throwing when a query fails to execute
- The unit test coverage is not yet fully complete

