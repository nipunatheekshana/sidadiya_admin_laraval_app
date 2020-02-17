@extends('layouts.admin_main')
@section('adminwall')

{{-- Custom style --}}
<link rel="stylesheet" href="{{url('css\adminwall.css')}}">
{{-- Chart js --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
{{-- Owl carousel --}}
<link rel="stylesheet" href="{{url('css\owl.carousel.min.css')}}">
{{-- Shorten css --}}
<link rel="stylesheet" href="{{url('css\shorten.min.css')}}">


{{-- Main container --}}
<div class="uk-container uk-container-medium uk-margin-top uk-margin-bottom">
    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid='masonry:true;'>

        {{-- left --}}
        <div class="uk-width-1-4@m">
            <div class="uk-card uk-card-default uk-card-small uk-card-body uk-text-center">
                <div>Total pending posts</div>
                <div class="uk-text-large uk-text-warning">125</div>
                <div>Daily accepted posts</div>
                <div class="uk-text-large uk-text-success">45</div>
                <div>Daily rejected posts</div>
                <div class="uk-text-large uk-text-danger">13</div>

                <h3 class="uk-card-title">Review</h3>
                <div> <button class="uk-button uk-button-primary uk-text-nowrap">View rejected</button> </div>
            </div>
        </div>

        {{-- center --}}
        <div class="uk-width-expand">
            <div class="uk-card uk-card-default uk-card-small uk-card-body">
                {{-- User details --}}
                <div class="uk-margin-small-bottom">
                    <img class="uk-border-circle" width="40" height="40" src="{{url('assets\logo.png')}}">
                    <span class="uk-margin-small-left">John doe</span>
                </div>
                {{-- Post images --}}
                <div class="uk-flex uk-flex-center">

                    {{-- Carousel --}}
                    <div class="owl-carousel owl-theme">
                        <div><img src="{{url('assets\login.svg')}}" alt=""> </div>
                        <div><img src="{{url('assets\logo.png')}}" alt=""> </div>
                        <div><img src="{{url('assets\loginbak.jpg')}}" alt=""> </div>
                        <div><img src="{{url('assets\loginbak2.jpg')}}" alt=""> </div>
                    </div>
                </div>
                {{-- Post details --}}
                <ul class="uk-list">
                    <li> <span class="uk-text-primary">Title</span> : <span class="uk-text-bold">Post title</span> </li>
                    <li> <span class="uk-text-primary">ID</span> : <span>123456</span> </li>
                    <li> <span class="uk-text-primary">Created at</span> : <span>12/03/19</span> </li>
                    <li> <span class="uk-text-primary">Contact</span> : <span>070 000 0000</span> </li>
                    <li> <span class="uk-text-primary ">Description</span> : <span class="short">Description sdfsdf
                            Description
                            sdfsdf
                            Description sdfsdf Description sdfsdf Description sdfsdf
                            Description sdfsdf Description sdfsdf Description sdfsdf
                            Description sdfsdf Description sdfsdf Description sdfsdf
                            Description sdfsdf Description sdfsdf Description sdfsdf
                            Description sdfsdf Description sdfsdf Description sdfsdf
                        </span> </li>
                </ul>
                {{-- Footer --}}
                <div class="uk-card-footer">
                    {{-- Button section --}}
                    <div class="uk-child-width-1-2@m uk-text-center" uk-grid>
                        {{-- Reject --}}
                        <div>
                            <div onclick="rejected()"
                                class="uk-button uk-width-1-1 uk-button-small@m uk-text-nowrap uk-button-danger"><i
                                    class="fa fa-times"></i>
                                Reject
                            </div>
                        </div>
                        {{-- Accept --}}
                        <div>
                            <div onclick="accepted()"
                                class="uk-button uk-width-1-1 uk-button-small@m uk-text-nowrap uk-button-primary"><i
                                    class="fa fa-check"></i> Accept
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- right --}}
        <div class="uk-width-1-4@m" style="order:">
        </div>

    </div>
</div>

{{-- Popup modal section --}}

{{-- ChartJS --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

{{-- Owl carousel --}}
<script src="{{url('js\owl.carousel.min.js')}}"></script>

{{-- Shorten js --}}
<script src="{{url('js\jquery-shorten.min.js')}}"></script>

<script>
    // Tost message
    function accepted(){
        iziToast.success({
            title: 'Accepted !',
            position:'bottomRight',
            timeout:2000
        });
    }
    function rejected(){
        iziToast.error({
            title: 'Rejected !',
            position:'bottomRight',
            timeout:2000
        });
    }
    // Owl carousel
    $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
            dots: false,
            items: 1,
            margin: 10,
            autoHeight: true,
            video: true,
            lazyLoad: true,
            center: true,
            nav: true,
            navText: ["<i class='fa fa-chevron-circle-left fa-2x uk-position-center-left'></i>", "<i class='fa fa-chevron-circle-right fa-2x uk-position-center-right'></i>"]
        });
     });
    // Shorten Plugin
    $(document).ready(function () {
      $(".short").shorten();
     });
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