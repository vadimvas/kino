@extends('tamplates.main')

@section('main')

    <div class="container">
        <h3 class="d-flex justify-content-center mt-3" style="color:white">Регистрация</h3>
       
    </div>
    <div class="container d-flex justify-content-center">
        <form action="{{route('register-check')}}" method="post" class="d-flex flex-column justify-content-center w-50 gap-2 mt-5 mb-5">
            @csrf
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating">
                       
                        <input type="text" name="name"  class="form-control @error('name') is-invalid @enderror" id="name">
                        <label for="name" class="form-label">Имя</label>
                        @error('name')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
                            
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating">
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" id="email">
                        <label for="email" class="form-label">E-mail</label>
                        @error('email')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
                        
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating">
                        <input type="password" name="password" value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror" id="password">
                        <label for="password" class="form-label">Пароль</label>
                        @error('password')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
                    
                <div class="col-md">
                    <div class="form-floating">
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="*********">
                        <label for="password_confirmation">Подтверждение</label>
                    </div>
                </div>
            </div>
                      
            <div class="row g-2">
                <button class="btn btn-primary">Создать аккаунт</button>
            </div>
        </form>
    </div>

   
@endsection
                            
                           
                            
                            
                            
                        
                        
                      
                            
                      