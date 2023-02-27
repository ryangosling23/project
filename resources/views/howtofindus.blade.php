@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       <div class="d-flex justify-content-center">
        <h3>Где нас найти</h3>
            </div>
            <div class="d-flex justify-content-center"> 
                <img src="{{ url('/img/map(1).jpg')}}" width="50%"  alt="">
            </div>

                <div class="d-flex justify-content-center">
                    
                    <div class="">
                        <p>Улица Пушкина. Дом Колотушкино 77.</p>
                        <p>Gmail@yandex.ru</p>
                        <p>+7951-104-62-23</p>
                    </div>
                </div>

    </div>
</div>

@endsection