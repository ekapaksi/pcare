<?php
namespace Nsulistiyawan\Bpjs\Pcare;

use Nsulistiyawan\Bpjs\BpjsService;
class Mcu extends BpjsService
{

    public function getMcu ($noKunjungan) {
        return $this->get('mcu/kunjungan/' . $noKunjungan);
    }
    
    public function insertMcu ($data = []) {
        return $this->post('mcu', $data);
    }
    
    public function updateMcu ($data = []) {
        return $this->put('mcu', $data);
    }
    
    public function deleteMcu ($kdmcu, $noKunjungan) {
        return $this->delete('mcu/' . $kdmcu . '/kunjungan/' . $noKunjungan);
    }
}