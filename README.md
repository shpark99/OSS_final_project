# Class Material Manager
Class Material Manager is web page for managing all the materials used in classes
especially that are forms of pdf.
## What does this project do?
* Add class material informations to the database.
> > Make a list of files with essential informations.
* Find class materials with some informations like semester, code, professor, class, file name.
* Shows contents of pdf file by clicking each file name in the table.
### Information about each files
* first_page.php
> > This is a first_page of web page. It will make 2 options.
> > > 1. Connection to add_info.php.
> > > 2. Connection to db_php.
* add_info.php
> > This is a page for adding informations of class materials.
> > It will be connected to the Insert.php to put information to the database.
* Insert.php
> > It will get data from add_info.php and store data to the database.
> > It will shows result of action.
> > > 1. Success to store data
> > > 2. Fail to store data
* db.php
> > It is page for searching list of files that you have on your server.
> > It will make hyper link in file name to connect with viewer.html in pdf directory, so that contents of file can be shown in web page as pdf. 
* Class
> > This is directory to save class materials in it.
* pdf
> > This is the directory of pdf viewer.
> > This is "pdf.js" open source from "https://github.com/mozilla/pdf.js.git"
## Why is this project useful?
* Efficient to manage all the class materials at once by using database.
* Easy to find and see the class materials.
* If you use it with your second server, the sever can be used as the secondary storage for storing class materials.
## How do you get start?
* First, you need to have a table with five columns named "semester", "code","professor", "class" and "filename".
* In the "Insert.php" and "db.php" file, you have to change informations related to database (id, password, db name) to your own informations of database.
* In "db.php", you have to change file path to the path where you saved files.
## Where can you get more help?
* Send email to inventor. <21800284@handong.edu>
* See the video
> > It will give a insight of how it works.
> > Video address: "https://youtu.be/jfMYbltvb3A"
