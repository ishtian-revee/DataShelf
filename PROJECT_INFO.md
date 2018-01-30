## Group And Project Structure Overview

### Group

Course: Web Technologies

Section: F

Group: F-01

Super Visor: **SHOVRA DAS**


**Group Members:**

***Ishtian, Rahim Md.		15-28490-1***

***Ahmed, Niaz			    15-28535-1***

***Jahan, Fatema			  15-28374-1***

***Rahim, Raihana			  15-29009-1***

---

### Structure

This project is to build a website that contains 2 main part which are ***The Website***
and ***The Admin Panel***

`index.php` will redirect to the website landing page.

`admin_index.php` will redirect to the admin portal landing page.

`/DBStuffs/dshelf.sql` contains all the database scripts.

---

3-Layer architecture methodology have been utilized to organize the full project structure.

* Presentation Layer Path: `/roles/presentation/` and then `admin` for admin panel and `user` for the website
* Business Logic or Service Layer Path: `/roles/control/` here `admin` folder contains admin service layer files
and the rest contains for the website
* Data Layer Path: `/roles/data/` contains database connectivity controls and other api sources

## Implemented Features

### Website

* Login
* Registration
* User Profile Management (edit profile, change password, edit profile picture, user details, user datasets)
* Marketplace Full Implemented (dataset details, search)
* New Dataset Creation
* Cart Implementation (add to cart, remove from cart, proceed to checkout)
* Bought Items (download items from user profile bought items section)
* Logout

### Admin Panel

* Login
* Dashboard (daily activities all analytics, overall[users, admins, datasets], top datasets)
* Admin Profile Management (edit profile, change password, admin details)
* Total users and admins details
* Add Admin
* Total datasets details
* Logout

## Unfinished Features [currently on progress for future development]

### Website

* Full Competitions Section
* Full Discussions Section
* Team and Contact pages

### Admin Panel

* Dashboard (overall[active competitions], top buyers, top sellers, top competitions problems)
* Delete and Edit users and admins
* Search users and admins
* Competitions details
* Pending and History Section
