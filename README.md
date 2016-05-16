# SupervisionDB
A database for a printing shop.

--------

## INSTALLATION OF DATABASE
- Please read database/README.txt

-----------

## FLOW OF PAGES

*to be updated*

-----------

## PAGE DESC

**main.php**
- presents two choices, Add Order or View Order

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
- presents user with two choices, finish the order or add another one

**order_info.php**
- presents user with product choices, similar with addCustomerDB.php menu

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

