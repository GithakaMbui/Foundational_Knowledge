<!--                       Classes-->
<!--                  -------- ----------->

<!--It's good practice to name your classes with an uppercase letter at the beginning-->
<!--//  It’s also good practice to have a separate file for your class,with a similar filename. -->
<!-- // For example,the class abovewouldbecontainedinafilecalled Book.php. -->

<!--Properties are used to store data within the class.-->
<!--think about the properties of a book for a moment.I can think of several:-->
<!--• Title. -->
<!--• Author. -->
<!--• Publisher. -->
<!--• Year of publishing-->

<?php
class Book
{
    var $title;
    var $author;    //These are properties
                    // Variables that belong to a class,are called ‘class properties’
    var $publisher;
    var $yearOfPublication;
    var $format = 'Paperback'; // This is a default value. A default values,can’t be set to the results of functions.

    // Declare a method.
    function sayHello()
    {
        return 'Hello Ninja Turtle!';
    }

}





//Instances
//An instance, is a class that we can use
//The class that we’ve defined, is actually a blueprint.
//We can use it to make a new instance of a Book object. The key word there is new.

$book = new Book;     // We create a new instance of the Book class, and assign it to the $book variable

// Setting class properties   we use the object->operator (->) operator

// Set properties of my book.
 $book->title = 'Game of Thrones';
 $book->author = 'George R R Martin';
$book->publisher = 'Voyager Books';
$book->yearOfPublication = 1996;

// /Change the value of format which is a default value
$book->format='Hardback';

//Retrieving class properties.
//I will use the object->operator to echo the properties of the book instance
// Echo properties.
echo $book->title . "</br>";
echo $book->author . "</br>";
echo $book->publisher . "</br>";
echo $book->yearOfPublication . "</br>";
echo "</br>";

//Echo the value of format.
echo$book->format ."</br>";
echo "</br>";



// Multiple class instances

// Create another book instance.
 $second = new Book;

  // Set properties.
$second->title = 'The Colour Of Magic';
$second->author = 'Terry Pratchett';
$second->publisher = 'Colin Smythe';
$second->yearOfPublication = 1983;

//Retrieving class properties.

echo $second->title . "</br>";
echo $second->author . "</br>";
echo $second->publisher . "</br>";
echo $second->yearOfPublication . "</br>";

echo $book->format . "</br>";

echo $second->format;
echo "</br>";

// Execute the hello method.
 echo $second->sayHello();
?>

