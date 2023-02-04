<?php
namespace Nsulistiyawan\Bpjs\Pcare;

use Nsulistiyawan\Bpjs\BpjsService;

class Provider extends BpjsService {
    
    public function getProviderRayonasi ($start, $limit) {
        return $this->get('provider/' . $start . '/' . $limit);
    }
}