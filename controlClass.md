#This class acts as a controller for the ajax requests.

_It contains commands (**cmd**) which depending on the command provided calls a specific method._

**Methods**

**getManufacturers()**

This method includes manufacturer.php. It returns a result of 0 and a message that the manufacturers do not exist else it returns a result of 1 and an array of json objects(manufacturers)that are found in the database.

**getItems**()

This method includes items.php. It returns a result of 0 and a message that the items/inventory do not exist else it returns a result of 1 and an array of json objects(items)that are found in the database.

**search\_inventory**()

This method includes items.php. It returns a result of 0 and a message that the items/inventory do not exist else it returns a result of 1 and an array of json objects(items)that are found in the database matching the search input.


**search\_manufacturer**()

This method includes manufacturer.php. It returns a result of 0 and a message that the manufacturer does not exist else it returns a result of 1 and an array of json objects(manufacturer)that are found in the database matching the search input.


**search\_halls**()

This method includes halls.php. It returns a result of 0 and a message that the hall does not exist else it returns a result of 1 and an array of json objects(halls)that are found in the database matching the search input.