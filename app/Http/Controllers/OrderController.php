<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AuthMoip;
use GuzzleHttp\Client as Guzzle;
use GuzzleHttp\Exception\RequestException;


class OrderController extends Controller
{
  private $moip;

  public function __construct()
  {
    $auth = new AuthMoip;
    $this->moip = $auth->getMoip();
  }

  public function index()
  {


//$customer = $this->moip->customers()->get('CUS-EC3IW1KQQJ08');
//dd($customer);

try{
$customer = $this->moip->customers()->creditCard()
    ->setExpirationMonth('05')
    ->setExpirationYear(2018)
    ->setNumber('4012001037141112')
    ->setCVC('123')
    ->setFullName('Alberto Dias')
    ->setBirthDate('1988-12-30')
    ->setTaxDocument('CPF', '12345678900')
    ->setPhone('55','11','66778899')
    ->create('CUS-EC3IW1KQQJ08');
    dd($customer);
  } catch (RequestException $e){
    return $e->getMessage();
  }

      //$order = $this->moip->orders()->get('ORD-OADTB04ZOUCM');
  //  $orders = $this->moip->orders()->getList();
    //  dd($orders);

    //ORD-OADTB04ZOUCM

  /* $order = $this->moip->orders()->setOwnId(uniqid())
        ->addItem("Descrição do pedido 3",1, "Camiseta gola V branca", 9400)
        ->setShippingAmount(1500)->setAddition(0)->setDiscount(0)
        ->setCustomerId("CUS-7TAGGY6T97RT")
        ->create();

dd($order);*/

/*
    try{
      $client = new Guzzle();
      $credentials = env('CREDENTIALS_BASE64_ENCODE');
      $response = $client->request("GET","https://sandbox.moip.com.br/v2/orders",
    [
        'headers' => [
            'Accept' => 'application/json',
            'Content-type' => 'application/json',
            'Authorization' => 'Basic ' . $credentials,
        ],
    ]);
   dd(json_decode($response->getBody())->orders);
   //$customers = json_decode($response->getBody())->customers;

   } catch (RequestException $e){
     return $e->getMessage();
   }

  */

//$orders = $this->moip->orders()->getList();
//dd($orders);
  /*  $order = $this->moip->orders()->get('ORD-KYG8X9R0IDV5');
    dd($order);
   //$orders = $this->moip->orders()->getList();
   //dd($orders);

   //ORD-KYG8X9R0IDV5

    $order = $this->moip->orders()->setOwnId(uniqid())
        ->addItem("bicicleta",2, "SKU5", 18500)
        ->setShippingAmount(3000)->setAddition(100)->setDiscount(2000)
        ->setCustomerId("CUS-7TAGGY6T97RT")
        ->create();

dd($order);
*/




  }

  public function create($customer)
  {

    $order = $this->moip->orders()->setOwnId(uniqid())
        ->addItem("skate",1, "SKU3", 1500)
        ->setShippingAmount(100)->setAddition(30)->setDiscount(20)
        ->setCustomerId($customer)
        ->create();

dd($order);


  }

}
