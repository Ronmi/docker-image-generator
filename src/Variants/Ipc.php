<?php

namespace PHPBrew\DIG\Variants;

class Ipc extends \PHPBrew\DIG\TestableVariant
{
    public function test()
    {
        return $this->testFs(array(
            'msg_get_queue' => 'sysvmsg not enabled',
            'sem_get' => 'sysvsem not enabled',
            'shm_get_var' => 'sysvshm not enabled',
        ));
    }

    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+ipc');
    }
}
