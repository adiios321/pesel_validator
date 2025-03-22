<?php

namespace App\Tests;

use App\Service\PeselValidator;
use PHPUnit\Framework\TestCase;

class PeselValidatorTest extends TestCase
{
    public function testValidPesel()
    {
        $validator = new PeselValidator();
        $this->assertTrue($validator->isValid('44051401359')); 
    }

    public function testInvalidLength()
    {
        $validator = new PeselValidator();
        $this->assertFalse($validator->isValid('1234567890')); 
    }

    public function testInvalidCharacters()
    {
        $validator = new PeselValidator();
        $this->assertFalse($validator->isValid('abcdefghijk'));
    }

    public function testInvalidChecksum()
    {
        $validator = new PeselValidator();
        $this->assertFalse($validator->isValid('44051401358')); 
    }
}
