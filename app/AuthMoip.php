<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Moip\Moip;
use Moip\Auth\BasicAuth;

class AuthMoip extends Model
{
    private $moip;

    public function __construct()
    {
      $token = 'R9ZJCFTAYXUSN4IM8O12YGGVEOUMSIQF';
      $key   = 'QCHODHXOAGRSYBYOYLSZ7NLWPPINCMFN08KX23XJ';
      $this->moip  = new Moip(new BasicAuth($token, $key), Moip::ENDPOINT_SANDBOX);
    }

    public function getMoip()
    {
      return $this->moip;
    }
}
