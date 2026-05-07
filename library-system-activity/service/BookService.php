<?php
class BookService {
    private $repo;
    public function __construct($repo) { $this->repo = $repo; }

    public function saveBook($title,$author) {
        if($title=="" || $author=="") {
            return "Input required";
        }
        return $this->repo->addBook($title,$author);
    }

    public function showBooks() {
        return $this->repo->getBooks();
    }
}
?>