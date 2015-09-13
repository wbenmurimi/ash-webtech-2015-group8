#containing all functions of add, edit, view and delete an item (inventory).

_This class which extends the class adb and It acts as a controller (middle tier) between the user interface and the database._

**Methods**

**add\_items()**

Runs query to store the details of the inventory into the database and returns true if query successful, else false.

**view\_item()**

Runs query to get details of an item with a given item\_id. Returns the data of the item if query successful else error message is displayed

**view\_items()**

Runs query to display all the items in the database. If error with query error message appears else returns true. If no users in database it returns false.

**search\_all\_inventory($txtSearch**

This method runs a query to perform advanced search from the database given an input by the user. It returns true if there are any matches and false if there is no item with the provided input

**update\_item()**

Runs query to update all details of an item with a given item\_id. Returns true if query successful else false.

**deletedelete\_item()**

Runs query to delete an item with a specified item\_id. Returns true if successful in running query (The item id exists in the database) else false