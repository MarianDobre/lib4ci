<?php

use MarianDobre\Lib4CI\Librarian;

class LibrarianTest extends \PHPUnit_Framework_TestCase {

    public function testGetAge()
    {
        $librarian = new Librarian;
        $this->assert($librarian->getAge(), 44);
    }
}