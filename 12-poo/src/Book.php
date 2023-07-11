<?php

namespace App;

class Book
{
    private string $title;
    private int $nbPage;

    private int $activePage = 1;

    public function __construct(string $title, int $nbPage)
    {
        $this->title = $title;
        $this->nbPage = $nbPage;
    }

    public function page(): int
    {
        return $this->activePage;
    }

    public function nextPage(): int
    {
        return $this->activePage += 1;
    }

    public function close(): int
    {
        return $this->activePage = 1;
    }

    public function getName(): string
    {
        return $this->title;
    }

    public function countPages(): int
    {
        return $this->nbPage;
    }
}
