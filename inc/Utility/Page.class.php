<?php
class Page  {

    public static $developerID;
    public static $developerName;
    public static $title = "Please set your title!";

    static function header()   { ?>
        <!-- Start the page 'header' -->
        <!DOCTYPE html>
        <html>
            <head>
                <title></title>
                <meta charset="utf-8">
                <meta name="author" content="Bambang">
                <title><?php echo self::$title; ?></title>   
                <link href="css/styles.css" rel="stylesheet">     
            </head>
            <body>
                <header>
                    <h1>There should be a heading here</h1>
                </header>
                <article>
                    <section class="main">
    <?php }

    static function mainToSide(){
        echo "</section><section class=\"sides\">";
    }
    static function footer()   { ?>
        <!-- Start the page's footer -->  
                    </section>          
                </article>
            </body>

        </html>

    <?php }

    static function showBookList(Array $bookData)    {
    
    }

    static function showAddBookForm()   { }

    static function showErrorNotifications(){ }
    
    static function showRegistrationForm(){
        
    }

    static function showLoginForm(){}

    static function showLogoutForm(){}
    
}