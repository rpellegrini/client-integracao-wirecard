<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\AuthMoip;

class Controller extends BaseController
{
    private $moip;

    public function __construct()
    {
      $auth = new AuthMoip;
      $this->moip = $auth->getMoip();
    }

    public function index()
    {

      dd($this->moip);

    /*try {
          $customer = $this->moip->customers()->setOwnId(uniqid())
              ->setFullname('Marcos Silva')
              ->setEmail('marcos@gmail.com')
              ->setBirthDate('1981-10-20')
              ->setTaxDocument('22222222222')
              ->setPhone(11, 66778899)
              ->addAddress('BILLING',
                  'Rua de teste', 123,
                  'Bairro', 'Sao Paulo', 'SP',
                  '01234567', 8)
              ->addAddress('SHIPPING',
                        'Rua de teste do SHIPPING', 123,
                        'Bairro do SHIPPING', 'Sao Paulo', 'SP',
                        '01234567', 8)
              ->create();
          // Creating an order
          dd($customer);

      } catch (\Moip\Exceptions\UnautorizedException $e) {
          echo $e->getMessage();
      } catch (\Moip\Exceptions\ValidationException $e) {
          printf($e->__toString());
      } catch (\Moip\Exceptions\UnexpectedException $e) {
          echo $e->getMessage();
      }
      */
    }

}
