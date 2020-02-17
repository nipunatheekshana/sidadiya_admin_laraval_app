@extends('layouts.admin_main')
@section('withdrawal')
<style>
    .uk-button {
        border-radius: 5em
    }

    .uk-subnav-pill>.uk-active>a {
        background-color: #eee;
        color: #fff;
    }
</style>

<div class="uk-container uk-container-1-3@m">
    <span class="uk-text-large uk-text-center">Withdrawals</span>
    <div class="uk-child-width-1-2@m uk-grid-small" uk-grid>

        {{-- col1 --}}
        <div class="uk-width-1-4@m">
            <div class="uk-card uk-card-small uk-card-body uk-card-default uk-text-center">
                <div class="uk-text-large"><span class="uk-text-primary ">Total Requests : </span>34</div>
                <div class="uk-text-large"><span class="uk-text-danger ">Total Rejected : </span>34</div>
                <div class="uk-text-large"><span class="uk-text-success ">Total Accepted : </span>34</div>

                <div class="uk-button uk-button-primary uk-margin-small-top" uk-toggle='target:#withdrawalhostory'>View
                    history</div>

            </div>
        </div>

        {{-- col2 --}}
        <div class="uk-width-expand">
            <div class="uk-card uk-card-small uk-card-body uk-card-default uk-text-left">
                <img class="uk-border-circle uk-align-center" width="50" height="50" src="{{url('assets\logo.png')}}">

                <ul class="uk-list uk-margin-left">
                    <li><span class="uk-text-primary">Full Name :</span> John Doe
                    </li>
                    <li><span class="uk-text-primary">NIC :</span>123345567v
                    </li>
                    <li><span class="uk-text-primary">Address :</span>123/3,kandy rd
                    </li>
                    <li><span class="uk-text-primary">Phone :</span>070 123 1231
                    </li>
                    <li><span class="uk-text-primary">Bank :</span>Sampath
                    </li>
                    <li><span class="uk-text-primary">Branch :</span>Kadawatha
                    </li>
                    <li><span class="uk-text-primary">Account no :</span>9827347208349
                    </li>
                    <li><span class="uk-text-primary">Amount :</span>Rs. 1000/=
                    </li>
                </ul>
                <div class="uk-text-right">
                    <button class="uk-button uk-button-danger"> <i
                            class="fa fa-times-circle uk-margin-small-right"></i>Reject</button>
                    <button class="uk-button uk-button-primary"> <i
                            class="fa fa-check-circle uk-margin-small-right"></i>Accept</button>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- popup modal section --}}
{{-- Withdrawal history --}}

<div id="withdrawalhostory" class="uk-modal-container" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <h2 class="uk-modal-title">Withdrawal History</h2>

        <div class="uk-overflow-auto">

            <ul class="uk-subnav uk-subnav-pill" uk-switcher="animation: uk-animation-fade">
                <li><a href="#"><span class="uk-label uk-label-success">Accepted</span></a></li>
                <li><a href="#"><span class="uk-label uk-label-danger">Rejected</span></a></li>
                <li><a href="#"><span class="uk-label uk-label-warning">Pending</span></a></li>
            </ul>

            <ul class="uk-switcher uk-margin">
                {{-- Accepted --}}
                <li>
                    <table class="uk-table">
                        <thead>
                            <tr>
                                <th>Avatar</th>
                                <th>Name</th>
                                <th>Package</th>
                                <th>Type</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img class="uk-border-circle uk-align-center" width="30" height="30" src="{{url('assets\logo.png')}}"></td>
                                <td>Harshan</td>
                                <td>Starter 01</td>
                                <td>Bank</td>
                                <td>1000</td>
                            </tr>
                        </tbody>
                    </table>
                </li>

                {{-- Rejected --}}
                <li>
                    <table class="uk-table">
                        <thead>
                            <tr>
                                <th>Avatar</th>
                                <th>Name</th>
                                <th>Package</th>
                                <th>Type</th>
                                <th>Amount</th>
                                <th>Reason</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img class="uk-border-circle uk-align-center" width="30" height="30" src="{{url('assets\logo.png')}}"></td>
                                <td>Harshan</td>
                                <td>Starter 01</td>
                                <td>Bank</td>
                                <td>1000</td>
                                <td>Not worked</td>
                            </tr>
                        </tbody>
                    </table>
                </li>

                {{-- Pending --}}
                <li>
                    <table class="uk-table">
                        <thead>
                            <tr>
                                <th>Avatar</th>
                                <th>Name</th>
                                <th>Package</th>
                                <th>Type</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img class="uk-border-circle uk-align-center" width="30" height="30" src="{{url('assets\logo.png')}}"></td>
                                <td>Praneeth</td>
                                <td>Starter 01</td>
                                <td>Ez cash</td>
                                <td>1000</td>
                            </tr>
                        </tbody>
                    </table>
                </li>

            </ul>

        </div>

    </div>
</div>
@endsection