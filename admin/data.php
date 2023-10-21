<?php
if($_GET['module']=="book"){
    include "data/book.php";
} else if ($_GET['module'] == "add_book_data") {
    include "module/book/add_book.php";
}