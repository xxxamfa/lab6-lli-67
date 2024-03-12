<?php

//Config
require_once('inc/config.inc.php');

//Entities
require_once('inc/Entities/Book.class.php');
require_once('inc/Entities/User.class.php');
require_once('inc/Entities/Page.class.php');

//Utility Classes
require_once('inc/Utility/PDOWrapper.class.php');
require_once('inc/Utility/BooksDAO.class.php');
require_once('inc/Utility/UsersDAO.class.php');
require_once('inc/Utility/LoginManager.class.php');
require_once('inc/Utility/Validate.class.php');

// start the session if it is not started yet

// initialize both DAOs

// Except for the logout. Make sure to VALIDATE all form submissions
// check if there is any POST form method submission
// if it is login, process the login
// if it is logout, process the logout
// if it is the book creation 
    // and the user is privileged to create book, process the new book

// check if there is any GET method
// if it is delete action 
    // and the user is privileged to delete book, process the book deletion

// get the books

// set the Page's static information
// set the header
// display error if any, display the books, display the login/logout, display the add new book (if admin)
// set the footer