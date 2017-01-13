<?php 

class BookSeed {

    function run()
    {
        $user = new Book;
        $user->title = "A test book title";
        $user->save();
    }
}