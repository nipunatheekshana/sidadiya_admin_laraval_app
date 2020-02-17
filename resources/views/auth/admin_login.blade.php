@extends('layouts.admin_main')
@section('login')
<link rel="stylesheet" href="{{url('css\login.css')}}">

{{-- Main container --}}
<div class="uk-container uk-width-1-2@m uk-margin-top">

    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin uk-card-hover" uk-grid>
        <div class="uk-card-media-left uk-cover-container">
            <img src="{{asset('assets\auth1.svg')}}" width="100" uk-cover>
            <canvas width="600" height="300"></canvas>
        </div>
        <div>
            <div class="uk-card-body uk-text-center">
                <h3 class="uk-card-title">Sidadiya Administration</h3>
                {{-- <img src="{{url('assets\logo.png')}}" width="80" class="logo" alt=""> --}}

                <p class="uk-text-large uk-margin">Sign in</p>

                <form action="#" method="GET" class="uk-margin-top">
                    {{-- Login input --}}
                    <div class="uk-margin">
                        <div class="uk-inline">
                            <span class="uk-form-icon"> <i class="fa fa-user"></i> </span>
                            <input class="uk-input username" type="text">
                        </div>
                    </div>
                    {{-- Password input --}}
                    <div class="uk-margin">
                        <div class="uk-inline">
                            <span class="uk-form-icon"> <i class="fa fa-key"></i> </span>
                            <input class="uk-input pass" type="password">
                        </div>
                    </div>
                    {{-- Login button --}}
                    <p class="uk-margin-top uk-text-right"> <button class="uk-button uk-button-default uk-button-small loginbtn"
                            onclick='signin()'>Sign in</button> </p>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Tost message
    function signin(){
        var uname = $('.username').val()
        var pass = $('.pass').val()

        console.log(uname+'  '+pass)
        if(uname == '' && pass == ''){
            // Warning
            iziToast.warning({
                title: 'Warning!',
                message: 'Please fill out inputs',
                position:'topRight'
            });
        }else if(uname == 'abc' && pass == '123'){
            // Success toast
            iziToast.success({
                title: 'Success!',
                message: 'Successfully logged in',
                position:'topRight'
            });
        }else{
            // Error toast
            iziToast.error({
                title: 'Error!',
                message: 'Invalid inputs',
                position:'topRight'
            });
        }
    }
</script>
@endsection