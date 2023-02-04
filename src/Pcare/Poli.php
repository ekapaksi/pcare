<?php
namespace Nsulistiyawan\Bpjs\Pcare;

use Nsulistiyawan\Bpjs\BpjsService;

class Poli extends BpjsService
{
    public function getPoliFKTP ($start, $limit) {
        return $this->get('poli/fktp/' . $start . '/' . $limit);
    }
}