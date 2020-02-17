{{-- Custom style --}}


<nav class="uk-navbar-container uk-margin" uk-navbar="mode: click" style="background-color:#fff;"
    style="margin-bottom: 200px; z-index: 980;"
    uk-sticky="top: 100; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up">
    <div class="uk-navbar-left">
        <ul class="uk-navbar-nav">
            <li class="uk-active" uk-toggle="target: #menu"><a href="#"> <i
                        class="fa fa-bars fa-1x uk-margin-small-right" style="color:#00BFA6;"></i> Menu</a></li>
        </ul>
    </div>
    <div class="uk-navbar-right">
        {{-- Notification --}}
        <div class="uk-navbar-item">
            <i class="fa fa-bell fa-1x"></i>
            <span class="uk-position-right uk-text-primary uk-text-small uk-text-italic"
                style="padding-right:58px;padding-top:12px">12</span>
        </div>

        <div class="uk-navbar-item">
            <i class="fa fa-sign-out-alt fa-1x"></i>
        </div>
    </div>
</nav>


{{-- Side panel --}}
<div id="menu" class="uk-open" uk-offcanvas>
    <div class="uk-offcanvas-bar">

        <button class="uk-offcanvas-close" type="button" uk-close></button>

        <h3>Menu</h3>

        <ul class="uk-margin-left uk-list">
            <li> <a href="{{url('/')}}" style='text-decoration:none'><i
                        class="fas sideicons fa-columns uk-margin-small-right"></i>Dashbord</a></li>

            <li> <a href="{{url('/wall')}}" style='text-decoration:none'><i
                        class="fas sideicons fa-clipboard-check uk-margin-small-right"></i>Post approve</a></li>

            <li> <a href="{{url('/withdrawals')}}" style='text-decoration:none'><i
                        class="fas sideicons fa-coins uk-margin-small-right"></i>Withdrawals</a></li>

            <li> <a href="{{url('/notification')}}" style='text-decoration:none'><i
                        class="fas sideicons fa-bell uk-margin-small-right"></i>Notifications</a></li>

            <hr>
            <li> <a href="{{url('/login')}}" style='text-decoration:none'><i
                        class="fas sideicons fa-sign-out-alt uk-margin-small-right"></i>Logout</a></li>
        </ul>

    </div>
</div>