<?php
include "config/db.php";
include "repository/BookRepository.php";
include "service/BookService.php";

$db = new Database();
$conn = $db->connect();

$repo = new BookRepository($conn);
$service = new BookService($repo);

if(isset($_POST['add'])) {
    $msg = $service->saveBook($_POST['title'], $_POST['author']);
}

$books = $service->showBooks();
?>

<form method="POST">
<input type="text" name="title" placeholder="Title"><br>
<input type="text" name="author" placeholder="Author"><br>
<button name="add">Add</button>
</form>

<?php
if(isset($msg)) echo $msg;

echo "<h3>Book List</h3>";
foreach($books as $b) {
    echo $b['title']." - ".$b['author']."<br>";
}
?>