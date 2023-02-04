<?php
namespace Nsulistiyawan\Bpjs\Pcare;

use Nsulistiyawan\Bpjs\BpjsService;

class StatusPulang extends BpjsService {
    
    public function getStatusPulang ($rawatInap = TRUE) {
        return $this->get('statuspulang/rawatInap/' . $rawatInap);
    }
}