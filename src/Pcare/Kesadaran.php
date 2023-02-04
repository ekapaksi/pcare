<?php
namespace Nsulistiyawan\Bpjs\Pcare;

use Nsulistiyawan\Bpjs\BpjsService;

class Kesadaran extends BpjsService
{
    public function getKesadaran () {
        return $this->get('kesadaran');
    }
}