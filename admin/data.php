<?php
// Menerima parameter 'module' dan 'book' dari URL
$module = isset($_GET['module']) ? $_GET['module'] : '';
$bookCode = isset($_GET['book']) ? $_GET['book'] : '';
$staffId = isset($_GET['staff']) ? $_GET['staff'] : '';
$memberId = isset($_GET['member']) ? $_GET['member'] : '';
$takerId = isset($_GET['taker']) ? $_GET['taker'] : '';

if($_GET['module']=="book"){
    include "data/book.php";
} else if ($_GET['module'] == "add_book_data") {
    include "module/book/add_book.php";
} else if ($module === 'edit_book' && !empty($bookCode)) {
    $Code = $_GET['book']; // Ambil nilai 'book' dari URL
    include "module/book/edit_book.php";
} else if($module === 'delete_book' && !empty($bookCode)){
    include "module/book/delete_book_action.php";
}

else if($_GET['module']=="staff"){
    include "data/staff.php";
} else if ($_GET['module'] == "add_staff_data") {
    include "module/staff/add_staff.php";
} else if ($module === 'edit_staff' && !empty($staffId)) {
    $Staff = $_GET['staff']; // Ambil nilai 'book' dari URL
    include "module/staff/edit_staff.php";
} else if($module === 'delete_staff' && !empty($staffId)){
    include "module/staff/delete_staff_action.php";
}

else if($_GET['module']=="member"){
    include "data/member.php";
} else if ($_GET['module'] == "add_member_data") {
    include "module/member/add_member.php";
} else if ($module === 'edit_member' && !empty($memberId)) {
    $Member = $_GET['member']; // Ambil nilai 'book' dari URL
    include "module/member/edit_member.php";
} else if($module === 'delete_member' && !empty($memberId)){
    include "module/member/delete_member_action.php";
}

else if($_GET['module']=="taker"){
    include "data/taker.php";
} else if ($_GET['module'] == "add_taker_data") {
    include "module/taker/add_taker.php";
} else if ($module === 'edit_taker' && !empty($takerId)) {
    $Taker = $_GET['taker']; // Ambil nilai 'book' dari URL
    include "module/taker/edit_taker.php";
} else if($module === 'delete_taker' && !empty($takerId)){
    include "module/taker/delete_taker_action.php";
}