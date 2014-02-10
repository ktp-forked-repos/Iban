<?php

namespace Bav\Validator\De;

/**
 * Test class for System08.
 * Generated by PHPUnit on 2012-07-05 at 19:22:55.
 */
class System08Test extends SystemTestCase
{

    public function testWithValidAccountReturnsTrue()
    {
        $validAccounts = array('14564553', '539290858');

        foreach ($validAccounts as $account) {
            $validator = new System08($this->bankId);
            $this->assertTrue($validator->isValid($account));
        }
    }

    public function testWithInvalidAccountReturnsFalse()
    {
        $validAccounts = array('1000805', '539290859', '59999');

        foreach ($validAccounts as $account) {
            $validator = new System08($this->bankId);
            $this->assertFalse($validator->isValid($account));
        }
    }

}