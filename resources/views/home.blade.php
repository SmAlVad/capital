@extends('layouts.app')

@section('content')

<section class="home-page">
    <div class="container-fluid">
        <div class="row justify-content-center">
           <div class="col-lg-3">
               <div class="user-photo">
                    <div class="user-avatar"><i class="far fa-user"></i></div>

                   <h4>{{ Auth::user()->name }}</h4>
               </div>
           </div>

            <div class="col-lg-6">
                <div class="user-info">
                    <ul>
                        <li>Имя: {{ Auth::user()->name }}</li>
                        <li>Email: {{ Auth::user()->email }}</li>
                        <li>Реферал: {{ Auth::user()->referal }}</li>
                    </ul>

                    <h4>Описать логику работы личного кабинета</h4>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
