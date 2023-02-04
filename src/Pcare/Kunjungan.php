<?php
namespace Nsulistiyawan\Bpjs\Pcare;

use Nsulistiyawan\Bpjs\BpjsService;

class Kunjungan extends BpjsService
{
	public function getRujukan ($noKunjungan) {
		return $this->get('kunjungan/rujukan/' . $noKunjungan);
	}
	
	public function getKunjungan ($nokartu) {
		return $this->get('kunjungan/peserta/' . $nokartu);
	}
	
	public function insertKunjungan ($data = []) {
		return $this->post('kunjungan', $data);
	}
		public function updateKunjungan ($data = []) {
		return $this->put('kunjungan', $data);
	}
	
	public function deleteKunjungan ($noKunjungan) {
		return $this->delete('kunjungan' . '/' . $noKunjungan);
	}
}