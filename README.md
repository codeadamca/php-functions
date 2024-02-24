# A Basic Introduction to JavaScript and Functions

A basic example of using user-defined PHP functions.

This tutorial will review how to use a series of user-defined functions for format data from a PHP array. 

## The End Goal

The `functions.php` file includes an array with data for three programming books. The array closely resembles data from a MySQL database. 

Similar to the arrays, if, and loops examples, your code needs to output the three values. However, this time it will use some user-defined functions to ensure the prices are formatted properly and display the rating as stars instead of a plain number.

## Steps

1. Open up a new file and name it `functions.php`.
2. Add the following code to the new PHP file:
      
      ```php
      <!doctype html>
      <html>
      <head>
         <title>PHP Functions</title> 
      </head>
      <body>
          
        <h1>PHP Functions</h1> 
      
        <p>Use PHP echo, if statements, loops, and functions to output all three books.</p>
      
        <?php
      
        // **************************************************
        // Do not edit this code
      
        // Define a multi dimensional array to store all of the books
        $books = array (
          0 => array (
            'name' => 'JavaScript and JQuery: Interactive Front-End Web Development',
            'url' =>'https://www.chapters.indigo.ca/en-ca/books/javascript-and-jquery-interactive-front/9781118531648-item.html',
            'image' => 'javascript-jquery.jpg',
            'description' => 'Learn JavaScript and jQuery a nicer way.',
            'rating' => 4,
            'price' => '44.90',
            'sale' => '39.90' ),
          1 => array ( 
            'name' => 'Php For The Web: Visual Quickstart Guide',
            'url' =>'https://www.chapters.indigo.ca/en-ca/books/php-for-the-web-visual/9780134291253-item.html',
            'image' => 'php-web.jpg',
            'description' => 'Learn PHP programming the quick and easy way!',
            'rating' => 3,
            'price' => '55.99',
            'sale' => '' ),
          2 => array (
            'name' => 'Beginning Node.js',
            'url' =>'https://www.chapters.indigo.ca/en-ca/books/beginning-node-js/9781484201886-item.html',
            'image' => 'beginning-nodejs.jpg',
            'description' => 'A step-by-step guide to learning how to develope a Node.js application.',
            'rating' => 5,
            'price' => '65.90',
            'sale' => '58.90' ),
          );
      
        // **************************************************
      
        // Loop through the array and display the link information
        foreach ($books as $book)
        {
      
          echo '<h2>'.$book['name'].'</h2>';
          echo '<hr>';
      
        }
      
        // Use the print_r function to view the contents of the array
        echo '<pre>';
        print_r ($books);
        echo '</pre>';
      
        ?>
          
      </body>
      </html>
      ```
      
      > Do not edit the code between the stars. 

3. Before the `doctype` tag create two functions. The first will accept one numeric paraemter and format it as a number using the format $.00.00. The second function will convert a rating t a series of visual start using HTML special chacaters. For example 3/5 would display &#9733;&#9733;&#9733;&#9734;&#9734;.

4. In the `body` section add code that will display the three sets of book information using loops and the two functions defined in the previous step.

      > Add each value from the arrays one at a time. Test your PHP after each new line of PHP. 

> [More information on PHP for loops](https://www.php.net/manual/en/functions.user-defined.php)

> Full tutorial URL:  
> https://codeadam.ca/learning/php-functions.html

***

## Repo Resources

* [Visual Studio Code](https://code.visualstudio.com/) or [Brackets](http://brackets.io/) (or any code editor)
* [Filezilla](https://filezilla-project.org/) (or any FTP program)

<a href="https://codeadam.ca">
<img src="https://codeadam.ca/images/code-block.png" width="100">
</a>
