@extends('layouts.admin_main')
@section('panel')
<link rel="stylesheet" href="{{url('css\panel.css')}}">

{{-- Chart js --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">

<div class="uk-container uk-container-medium uk-margin-top uk-margin-bottom">
    {{-- 1st,2nd rows Top details card --}}
    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
        {{-- new users --}}
        <div>
            <div class=" uk-card uk-card-primary uk-card-small uk-text-center uk-card-body"
                uk-toggle="target: #newusers">
                <i class="fa fa-user fa-3x uk-margin-left uk-position-center-left"></i>
                <div class="uk-text-large uk-text-light"> New users
                </div>
                <div class="uk-text-large uk-text-bold">12</div>
            </div>
        </div>

        {{-- pending posts --}}
        <div>
            <a href="{{url('/wall')}}" style="text-decoration:none">
            <div class=" uk-card uk-card-primary uk-card-small uk-text-center uk-card-body">
                <i class="fa fa-portrait fa-3x uk-position-center-left uk-margin-left"></i>
                <div class="uk-text-large uk-text-light"> Pending
                    posts</div>
                <div class="uk-text-large uk-text-bold">3562</div>
            </div></a>
        </div>

        {{-- pending withdrawals --}}
        <div>
            <a href="{{url('/withdrawals')}}" style="text-decoration:none">
            <div class=" uk-card uk-card-primary uk-card-small uk-text-center uk-card-body">
                <i class="fa fa-coins fa-3x uk-position-center-left uk-margin-left"></i>
                <div class="uk-text-large uk-text-light"> Pending
                    withdrawals</div>
                <div class="uk-text-large">Rs. <span class="uk-text-bold">34562</span></div>
            </div>
            </a>
        </div>

        {{-- total posts --}}
        <div>
            <div class=" uk-card uk-card-primary uk-card-small uk-text-center uk-card-body">
                <i class="fa fa-newspaper fa-3x uk-position-center-left uk-margin-left"></i>
                <div class="uk-text-large uk-text-light"> Total
                    posts</div>
                <div class="uk-text-large ">Rs. <span class="uk-text-bold">32</span></div>
            </div>
        </div>
        {{-- total users --}}
        <div>
            <div class=" uk-card uk-card-primary uk-card-small uk-text-center uk-card-body">
                <i class="fa fa-users fa-3x uk-position-center-left uk-margin-left"></i>
                <div class="uk-text-large uk-text-light">Total users
                </div>
                <div class="uk-child-width-1-2 uk-grid-small uk-text-center" uk-grid>
                    {{-- Active --}}
                    <div>
                        <div>Active</div>
                        <div class="uk-text-bold">12</div>
                    </div>
                    {{-- Free --}}
                    <div>
                        <div>Free</div>
                        <div class="uk-text-bold">22</div>
                    </div>

                </div>

            </div>
        </div>

        {{-- online --}}
        <div>
            <div class=" uk-card uk-card-primary uk-card-small uk-text-center uk-card-body" uk-toggle='target:#onlineusers'>
                <i class="fa fa-signal fa-3x uk-position-center-left uk-margin-left"></i>
                <div class="uk-text-large uk-text-light">Total Online
                </div>
                <div class="uk-text-large"><span>34</span></div>
            </div>
        </div>

    </div>

    {{-- 3rd row Daily chart records--}}
    <div class="uk-child-width-1-2@m uk-grid-small" uk-grid>
        {{-- Line chart --}}
        <div>
            <div class="uk-card uk-card-default uk-card-body uk-card-small uk-margin-small-top">
                <div class="uk-text-large">Daily line graph</div>
                <canvas id="myChart" width="400" height="200"></canvas>
            </div>
        </div>

        {{-- Donut chart --}}
        <div>
            <div class="uk-card uk-card-default uk-card-body uk-card-small uk-margin-small-top">
                <div class="uk-text-large">Daily withdrawal donut graph</div>
                <canvas id="doughnut-chart" width="400" height="200"></canvas>
            </div>
        </div>

    </div>

    {{-- 4th row user details --}}
    <div class="uk-child-width-1-2@m uk-grid-small" uk-grid>
        {{-- Daily users --}}
        <div>
            <div class="uk-card uk-card-default uk-card-body uk-card-small uk-height-medium uk-overflow-auto">
                <span class="uk-text-large">Top users</span>

                <table class="uk-table">
                    <thead>
                        <tr>
                            <th>Avatar</th>
                            <th>Name</th>
                            <th>Package</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img class="uk-border-circle" src="{{url('assets\logo.png')}}" width="20" alt="">
                            </td>
                            <td>John doe</td>
                            <td>Starter 02</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>

        {{-- Star ranking --}}
        <div>

            <div class="uk-card uk-card-small uk-card-body uk-card-default uk-overflow-auto uk-height-medium">
                <span class="uk-text-large">Star ranking</span>

                <table class="uk-table">
                    <thead>
                        <tr>
                            <th>Avatar</th>
                            <th>Name</th>
                            <th>Rank</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img class="uk-border-circle" src="{{url('assets\logo.png')}}" width="20" alt="">
                            <td>Alan walker</td>
                            <td><i class="fa fa-star uk-margin-small-right" style="color:orange;"></i>2</td>
                            <td><button class="uk-button uk-button-primary uk-button-small">View</button></td>
                        </tr>
                    </tbody>
                </table>


            </div>
        </div>
    </div>


</div>

{{-- Popup modal section --}}
{{-- new users --}}
<div id="newusers" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">

        <table class="uk-table">
            <thead>
                <tr>
                    <th>Avatar</th>
                    <th>Name</th>
                    <th>Time</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img class="uk-border-circle" src="{{url('assets\logo.png')}}" width="20" alt=""></td>
                    <td>John doe</td>
                    <td>12:30 pm</td>
                </tr>
            </tbody>
        </table>

        <p class="uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
        </p>
    </div>
</div>

{{-- online users --}}
<div id="onlineusers" class="uk-modal-container" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <table class="uk-table">
            <caption>Online users</caption>
            <thead>
                <tr>
                    <th>Avatar</th>
                    <th>Name</th>
                    <th>Package</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td><img class="uk-border-circle" width="40" height="40" src="{{url('assets\logo.png')}}"></td>
                    <td>John Doe</td>
                    <td>Starter 01</td>
                    <td><span class="uk-label uk-label-success">Online</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

{{-- ChartJS --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

<script>
    // Daily records line graph
    var lchart = document.getElementById("myChart")
        new Chart(lchart, {
            type: 'line',
            data: {
                labels: [1500,1600,1700,1750,1800,1850,1900,1950,1999,2050],
                datasets: [{ 
                    data: [86,114,106,106,107,111,133,221,783,2478],
                    label: "New Reg",
                    borderColor: "#ff9f43",
                    fill: false
                },{ 
                    data: [282,350,411,502,635,809,947,1402,3700,5267],
                    label: "Daily Post",
                    borderColor: "#54a0ff",
                    fill: false
                },{ 
                    data: [211,340,231,342,635,567,947,1402,3778,45],
                    label: "Daily Withd.",
                    borderColor: "#ee5253",
                    fill: false
                }
                ]
            }
        });

    // Daily withdrawal record donut chart
    var dchart =document.getElementById("doughnut-chart")
        new Chart(dchart, {
            type: 'doughnut',
            data: {
            labels: ["Pending", "Withdrawad"],
            datasets: [
                {
                label: "Population (millions)",
                backgroundColor: ["#ff9f43", "#ee5253"],
                data: [2478,5267]
                }
            ]
            }
        });
</script>
@endsection