# SupervisionDB
A database for a printing shop.

--------

## INSTALLATION OF DATABASE
- Please read database/INSTALLATION.txt

-----------

## FLOW OF PAGES

![alt text](https://raw.githubusercontent.com/gmlunesa/SupervisionDB/master/pageFlow.png "Logo Title Text 1")

-----------

## PAGE DESC

**main.php**
- presents four choices, Add, Update, Delete, View

**customer.php**
- customer details

**addCustomerDB.php**
- add information gathered from customer.php and puts it in database
- presents user with product choices
- redirects to corresponding order_(product).php pages

**order_(product).php (example: order_bagtag.php)**
- product details

**(product)_php.php (example: bagtag_php.php)**
- add information gathered from order_(product).php and puts it in database
- presents user with two choices, finish the order (redirects to rec.php) or add another one

**rec.php**
- presents the official invoice of the order that was just addded


**order_info.php**
- presents user with product choices, similar with addCustomerDB.php menu

**update.php**
- presents user with choices on what kind of order to update

**update_(product).php (example: update_bagtag.php)**
- update product details

**u(product)_php.php (example: bagtag_php.php)**
- update information gathered from u(product)_php.php in the database
- presents user with two choices, finish the order or add another one

**view.php**
- presents the order, sorted by customer, multiple tables
- also includes the link to each order's receipts (redirects to receipt.php)
- includes the option to sort the orders by date (redirects to viewByDate.php)
- includes option to add, update or delete orders

**viewByDate.php**
- one table, sorted by date
- includes option to add, update or delete orders


*to be updated*

-----------

##COMMENTS
- I have only made one order_(product).php page, and that is order_bagtag.php
- I also have only made one (product)_php.php page, and that is order_bagtag.php
- Improved CSS design, hope it's okay
- Code is still unrefined and messy
- Thinking of converting to mysqli because mysql is deprecated, but it's too much
- We can now update, delete and view orders in tabular form

-----------

##TO DO LIST
- Complete all order_(product).php pages
- Complete all (product)_php.php pages
- Pass this sh!t to Miss Jam
- Refine and clean up code

-----------

##ACCOMPLISHED LIST
- Retrieve data and display it in tables
- Make css design for tables
- Make viewOrder.php
- Upload on github to show off
- Added functionalities to UPDATE and DELETE orders.

-----------

##QUESTIONS
- Admin login function or nah?

