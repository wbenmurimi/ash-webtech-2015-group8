Methods
Function add\_manufacturer($id, $name, $code)
Runs query to store a new manufacturer in the database and returns true if query successful, else false.

Function update\_manufacturer($id, $name, $code)
Runs query to update a particular manufacturer at a given id. Returns true if query successful, else false.

Function delete\_manufacturer($id)
Runs query to delete a manufacturer at a specific id. Return true if query successful, else false.

Function view\_manufacturer()
Runs query to display all manufacturers.

Function view\_one\_manufacturer($id)
Runs query to get details of a particular manufacturer with a specified id. Returns the data of the manufacturer if query is successful else error message is displayed.