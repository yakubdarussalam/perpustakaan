<?php
$modules = $_GET['module'];
$data = ['book','staff','member','taker','return','add_book_data','edit_book_data'];
$book = ['book','add_book_data','edit_book_data'];


//Title
if($modules=="book"){
    $title = "Book Data";
} elseif ($modules=="staff") {
    $title = "Staff Data";
}  elseif ($modules=="member") {
    $title = "Member Data";
}  elseif ($modules=="taker") {
    $title = "Taker Data";
}  elseif ($modules=="return") {
    $title = "Return Data";
} elseif ($modules=="report") {
    $title = "Report";
} elseif ($modules=="add_book_data") {
    $title = "Add Book";
} elseif (isset($_GET['book'])) {
    $title = "Edit Book";
} else {
    $title = "Dashboard";
}
