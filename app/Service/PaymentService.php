<?php  

namespace App\Service;

use YooKassa\Client;

class PaymentService
{
    private function getClient()
    {
        $client = new Client();
        $client->setAuth(config('services.yookassa.shop_id'), config('services.yookassa.secret_key'));

        return $client;
    }

    public function createPayment($amount, $description,$options=[])
    {
        $client = $this->getClient();
        $payment = $client->createPayment([
            'amount'=>[
                'value'=>$amount,
                'currency' => 'RUB'
            ],
            'capture' => false,
            'confirmation' => [
                'type' => 'redirect',
                'return_url' => route('payment.callback'),
            ],
            'metadata'=>[
                'transaction_id'=>$options['transaction_id'],
            ],
            'description' => $description,

            ],uniqid('', true));

            return $payment->getConfirmation()->getConfirmationUrl();
    }
  
}