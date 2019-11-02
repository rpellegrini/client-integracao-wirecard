<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;
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

  public function store(CustomerRequest $request)
  {
      $name         = $request->input('name');
      $email        = $request->input('email');
      $document     = $request->input('document');
      $birthDate    = $request->input('birthDate');
      $areaCode     = $request->input('areaCode');
      $phone        = $request->input('phone');
      $street       = $request->input('street');
      $streetNumber = $request->input('streetNumber');
      $district     = $request->input('district');
      $city         = $request->input('city');
      $state        = $request->input('state');

      try {
            $customer = $this->moip->customers()->setOwnId(uniqid())
                ->setFullname($name)
                ->setEmail($email)
                ->setBirthDate($birthDate)
                ->setTaxDocument($document)
                ->setPhone($areaCode, $phone)
                //->setPhone(11, 55552266)
                ->addAddress('BILLING',
                      $street,
                      $streetNumber,
                      $district,
                      $city,
                      $state,
                    '01234567', 8)
                ->create();
        } catch (\Moip\Exceptions\UnautorizedException $e) {
            echo $e->getMessage();
        } catch (\Moip\Exceptions\ValidationException $e) {
            printf($e->__toString());
        } catch (\Moip\Exceptions\UnexpectedException $e) {
            echo $e->getMessage();
        }

        return redirect()
                  ->route('customer.index')
                  ->with('success','Cadastrado com sucesso');
     }

}
