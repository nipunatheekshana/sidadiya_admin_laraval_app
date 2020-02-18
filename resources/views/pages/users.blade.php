@extends('layouts.admin_main')
@section('users')
<style>
    .uk-button {
        border-radius: 5em;
    }
</style>
<div class="uk-container uk-container-medium">
    <div class="uk-child-width-1-2@m uk-grid-small" uk-grid>
        {{-- left --}}
        <div class="uk-width-1-4@m">
            <div class="uk-card uk-card-default uk-card-body">
                <h3 class="uk-card-title">Users</h3>
                <ul class="uk-list">
                    <li> <span class="uk-text-primary">All users</span> : 34,960</li>
                    <li> <span class="uk-text-primary">Deactivated</span> : 123</li>
                    <li> <span class="uk-text-primary">Free : </span>10,945</li>
                    <li> <span class="uk-text-primary">Starter 01 : </span>10,945</li>
                    <li> <span class="uk-text-primary">Starter 02 : </span>10,945</li>
                    <li> <span class="uk-text-primary">Starter 03 : </span>10,945</li>
                    <li> <span class="uk-text-primary">Starter 04 : </span>10,945</li>
                    <li> <span class="uk-text-primary">Starter 05 : </span>10,945</li>
                    <li> <span class="uk-text-primary">Starter 05 : </span>10,945</li>
                </ul>
            </div>
        </div>
        {{-- right --}}
        <div class="uk-width-expand@m">

            {{-- Search --}}
            <div class="uk-card uk-card-default uk-card-body uk-card-small uk-margin-small-bottom uk-text-center">
                <form>
                    <div class="uk-child-width-1-4@m uk-grid-small" uk-grid>
                        <div>
                            <input class="uk-input  uk-form-small" type="text" placeholder="ID">
                        </div>
                        <div>
                            <input class="uk-input  uk-form-small" type="text" placeholder="Email">
                        </div>
                        <div>
                            <input class="uk-input  uk-form-small" type="text" placeholder="Name">
                        </div>
                        <div>
                            <button type="submit" class="uk-button uk-button-default uk-button-small uk-width-1-1@m">
                                <i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>

            {{-- users table --}}
            <div class="uk-card uk-card-default uk-card-small uk-card-body">

                {{-- users table --}}
                <div class="uk-overflow-auto">
                    <table class="uk-table">
                        <thead>
                            <tr>
                                <th>Avatar</th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Package</th>
                                <th>Wallet</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img class="uk-border-circle uk-align-center" width="30" height="30"
                                        src="{{url('assets\logo.png')}}">
                                </td>
                                <td>8723791</td>
                                <td>John</td>
                                <td>Starten 01</td>
                                <td>4000</td>
                                <td>Active</td>
                                <td>

                                    <button onclick="confirm()" type="submit"
                                        class="uk-button uk-button-small uk-button-default" uk-tooltip="Deactive user">
                                        <i class="fa fa-user-times"></i>
                                    </button>

                                    <button uk-toggle='target:#sendmsg' type="submit" class="uk-button uk-button-small uk-button-default"
                                        uk-tooltip="Send message">
                                        <i class="fas fa-comment-alt"></i>
                                    </button>

                                    <button type="submit" class="uk-button uk-button-small uk-button-default"
                                        uk-tooltip="View user">
                                        <i class="fas fa-eye"></i>
                                    </button>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

{{-- Popup modal section --}}
<!-- Send message -->
<div id="sendmsg" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <h2 class="uk-modal-title"> <i class="fa fa-comment-alt uk-margin-small-right"></i> Send message</h2>

        {{-- Title --}}
        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">Title</label>
            <div class="uk-form-controls">
                <input class="uk-input uk-form-small" id="form-horizontal-text" type="text" placeholder="Title">
            </div>
        </div>

        {{-- Message --}}
        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">Message</label>
            <textarea class="uk-textarea" rows="5" placeholder="Textarea"></textarea>
        </div>

        <p class="uk-text-right">
            <button class="uk-button uk-button-danger uk-modal-close" type="button" onclick="discard()">
                <i class="fa fa-trash"></i> Discard</button>
            <button class="uk-button uk-button-default uk-modal-close" type="button" onclick="send()">
                <i class="fas fa-paper-plane"></i>Send</button>
        </p>
    </div>
</div>

<script>
    // Confirm  deactivate user
    function confirm(){
        iziToast.question({
            timeout: 0,
            close: false,
            overlay: true,
            displayMode: 'once',
            id: 'question',
            zindex: 999,
            title: 'Confirm',
            backgroundColor:'#ffc9c9',
            message: 'Deactive user?',
            position: 'center',
            buttons: [
                ['<button><b>YES</b></button>', function (instance, toast) {
        
                    instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
        
                    iziToast.success({
                        title: 'Done',
                        message: 'User deactivated',
                    });

                }, true],
                ['<button>NO</button>', function (instance, toast) {
        
                    instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
        
                }],
            ],
            onClosing: function(instance, toast, closedBy){
                console.info('Closing | closedBy: ' + closedBy);
            },
            onClosed: function(instance, toast, closedBy){
                console.info('Closed | closedBy: ' + closedBy);
            }
        });
    };
    // Message status
     function send(){
        iziToast.success({
            title: 'Send !',
            message:'Message has been sent',
            position:'bottomRight',
        });
    }
    function discard(){
        iziToast.error({
            title: 'Discarded !',
            message:'Message discarded',
            position:'bottomRight',
        });
    }
</script>
@endsection