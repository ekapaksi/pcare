# BPJS Kesehatan Indonesia
PHP package to access BPJS Kesehatan API :ambulance:.
This package is a wrapper of BPJS Pcare Web Service

Created because i don't really wanna get my hands dirty coz of using the old php-curl
:shit: example.

#### Installation :fire:

`composer require ekapaksi/pcare:dev-master`

#### Example Usage :confetti_ball:
```php
//use your own bpjs config

$pcare_config = [
    'cons_id'      => '123456',
    'secret_key'   => '123456',
    'base_url'     => 'https://apijkn-dev.bpjs-kesehatan.go.id',
    'service_name' => 'pcare-rest-dev',
    'pcare_user'   => '123456',
    'pcare_pass'   => '123456',
    'user_key'      => '123456',
    'kd_aplikasi'  => '123456'
];

$referensi = new Nsulistiyawan\Bpjs\Pcare\Diagnosa($pcare_config);
var_dump($referensi->getDiagnosa('A00','1','10'));

#### Contributions :ok_hand:
Your contribution is always welcome!
