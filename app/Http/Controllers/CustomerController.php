<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AuthMoip;

use GuzzleHttp\Client as Guzzle;
use GuzzleHttp\Exception\RequestException;


class CustomerController extends Controller
{
  private $moip;

  public function __construct()
  {
    $auth = new AuthMoip;
    $this->moip = $auth->getMoip();
  }

  public function index()
  {
        try{
          $client = new Guzzle();
          $credentials = env('CREDENTIALS_BASE64_ENCODE');
          $response = $client->request("GET","https://sandbox.moip.com.br/v2/customers",
        [
            'headers' => [
                'Accept' => 'application/json',
                'Content-type' => 'application/json',
                'Authorization' => 'Basic ' . $credentials,
            ],
        ]);
       //dd(json_decode($response->getBody())->customers);
       $customers = json_decode($response->getBody())->customers;

       } catch (RequestException $e){
         return $e->getMessage();
       }

     return view('customers.index', compact('customers'));
  }

  public function create()
  {
     return view('customers.create');
  }

  public function store(Request $request)
  {

    //CUS-EC3IW1KQQJ08  -alberto

      $name      = $request->input('name');
      $email     = $request->input('email');
      $document  = $request->input('document');
      $birthDate = $request->input('birthDate');
      $phone     = $request->input('phone');

      try {
            $customer = $this->moip->customers()->setOwnId(uniqid())
                ->setFullname($name)
                ->setEmail($email)
                ->setBirthDate($birthDate)
                ->setTaxDocument($document)
                ->setPhone(11, 66778899)
                //->setPhone($phone)
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
            //dd($customer);

        } catch (\Moip\Exceptions\UnautorizedException $e) {
            echo $e->getMessage();
        } catch (\Moip\Exceptions\ValidationException $e) {
            printf($e->__toString());
        } catch (\Moip\Exceptions\UnexpectedException $e) {
            echo $e->getMessage();
        }

        print_r($customer);

  }

}
