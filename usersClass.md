#containing all functions of add, edit, view and delete for users.


<p>This class which extends the class adb for users of the inventory application which encapsulates mysql php functions.</p>


<b>Methods</b>

<p>add_user($id, $name, $email, $pass, $phone)</p>

Runs query to store a new user in database and returns true if query
successful, else false.

<b>function view_user($id)</b>

Runs query to get details of a user at a specific id. Returns the data of the user if query successful else error message is displayed. If query runs but returns false it also returns false.

<b>function view_all()</b>

Runs query to display all users. If error with query error message appears else returns true. If no users in database it returns false.

<b>update_user($id, $name, $email, $pass, $phone)</b>

Runs query to update details of a user at a given id. Returns true if query successful else false.

<b>delete_user($id)</b>

Runs query to delete a user at a specific id. Returns true if successful in running query else false.