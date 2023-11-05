<?php
if($_GET['module']=="book"){
    include "data/book.php";
} else if ($_GET['module'] == "add_book_data") {
    include "module/book/add_book.php";
} else if (isset($_GET['book'])) {
    $Code = $_GET['book']; // Ambil nilai 'book' dari URL
    include "module/book/edit_book.php";
} else if($_GET['module']=="staff"){
    include "data/staff.php";
}