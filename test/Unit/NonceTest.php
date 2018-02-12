<?php
namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use sody\nonce\Helper;

class NonceTest extends TestCase
{
   
    public function testNonceStr()
    {
    	$str = Helper::createNonce();
        $this->assertTrue((strlen($str) == 16));
    }
}