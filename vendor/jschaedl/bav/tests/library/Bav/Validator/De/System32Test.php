<?php

namespace Bav\Validator\De;

/**
 * Test class for System32.
 * Generated by PHPUnit on 2012-07-05 at 19:22:55.
 */
class System32Test extends SystemTestCase
{

    public function testWithValidAccountReturnsTrue()
    {
        $validAccounts = array('9141405', '1709107983', '0122116979', '0121114867', '9030101192', '9245500460');

        foreach ($validAccounts as $account) {
            $validator = new System32($this->bankId);
            $this->assertTrue($validator->isValid($account));
        }
    }

    public function testWithInvalidAccountReturnsFalse()
    {
        $validAccounts = array('1000805', '539290855');

        foreach ($validAccounts as $account) {
            $validator = new System32($this->bankId);
            $this->assertFalse($validator->isValid($account));
        }
    }

}