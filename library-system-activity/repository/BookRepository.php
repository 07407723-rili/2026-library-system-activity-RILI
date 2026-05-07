<?php
class BookRepository {
    private $conn;
    public function __construct($connection) { $this->conn = $connection; }

    public function addBook($title, $author) {
        $sql = "INSERT INTO books (title, author) VALUES ('$title','$author')";
        return mysqli_query($this->conn, $sql);
    }

    public function getBooks() {
        $result = mysqli_query($this->conn, "SELECT * FROM books");
        $data = [];
        while($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        return $data;
    }
}
?>