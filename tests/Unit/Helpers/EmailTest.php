<?php

namespace Tests\Unit\Helpers;

use PHPUnit\Framework\TestCase;
use App\Helpers\Email;

class EmailTest extends TestCase
{
    /**
     * A basic unit test email.
     *
     * @return void
     */
    public function test_email()
    {
        $email = "mgiraldo594@misena.edu.co";
        $result = Email::validate($email);

        $resultFalse = Email::validate("mari.gilu");

        $this->assertTrue($result);
        $this->assertFalse($resultFalse);
    }

    public function test_helper_email()
    {
        $email = "mgiraldo594@misena.edu.co";
        $result = validate_email($email);
        $this->assertTrue($result);
    }
}
