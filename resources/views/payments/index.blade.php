@extends('tamplates.main')

@section('main')
<body>
    <div class="form-signin w-100 m-auto mt-5" >

        <img src="https://yookassa.ru/integration/simplepay/img/iokassa-gray.svg?v=1.15.0" class="ym-logo" width="114" height="27" alt="ЮKassa" >
        <h2>Пополнить баланс</h2>
        <form action="{{route('payments.create')}}" method="post">
            @csrf
            <div class="ym-payment-btn-block ym-align-space-between">
                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                <div class="ym-input-icon-rub">
                    <input name="amount" placeholder="0.00" class="ym-input ym-sum-input ym-required-input" type="number" step="any" value="550">
                </div>
                <br>
                <br>
                <button data-text="Заплатить" class="ym-btn-pay ym-result-price"><span class="ym-text-crop">Заплатить</span> <span class="ym-price-output"></span></button>
            </div>
            
        </form>
    </div>
</body>
@endsection