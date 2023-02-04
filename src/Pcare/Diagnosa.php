<?php
namespace Nsulistiyawan\Bpjs\Pcare;

use Nsulistiyawan\Bpjs\BpjsService;

class Diagnosa extends BpjsService
{
    public function getDiagnosa ($keyword, $start, $limit) {
        return $this->get('diagnosa/' . $keyword . '/' . $start . '/' . $limit);
    }
}