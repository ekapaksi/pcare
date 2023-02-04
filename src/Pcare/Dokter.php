<?php
namespace Nsulistiyawan\Bpjs\Pcare;

use Nsulistiyawan\Bpjs\BpjsService;

class Dokter extends BpjsService
{
    public function getDokter ($start, $limit) {
        return $this->get('dokter/' . $start . '/' . $limit);
    }
}