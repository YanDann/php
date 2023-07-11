<?php

namespace App;

class Library
{
    private array $library = [];

    public function addBook(Book $book)
    {
        $this->library[] = $book;
    }

    /**
     * @param array<Book> $books
     * @return self
     */
    public function addBooks(array $books): self
    {
        foreach ($books as $book) {
            $this->addBook($book);
        }
        return $this;
    }

    public function books()
    {
        return $this->library;
    }

    public function count()
    {
        return count($this->library);
    }

    public function totalPages()
    {
        $pages = 0;
        foreach ($this->library as $book) {
            $pages += $book->countPages();
        }
        return $pages;
    }

    public function getBook(string $title)
    {
        foreach ($this->library as $book) {
            if ($title === $book->getName()) {
                return $book;
            }
        }
    }

    public function findBooksByLetter(string $letter)
    {
        $books = new Library();
        foreach ($this->library as $book) {
            if ($letter === substr($book->getName(), 0, 1)) {
                $books->addBook($book);
            }
        }
        return $books;
    }

    public function randomBook()
    {
        $tab = $this->books();
        $randomBook = array_rand($this->books(),  1);
        return $tab[$randomBook];
    }
}
