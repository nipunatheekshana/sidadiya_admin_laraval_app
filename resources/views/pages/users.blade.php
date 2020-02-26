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
                                    {{-- User control button --}}
                                    <button onclick="confirm()" type="submit"
                                        class="uk-button uk-button-small uk-button-danger" uk-tooltip="Deactive user">
                                        <i class="fa fa-user-times"></i>
                                    </button>

                                    <button uk-toggle='target:#sendmsg' type="submit"
                                        class="uk-button uk-button-small uk-button-default" uk-tooltip="Send message">
                                        <i class="fas fa-comment-alt"></i>
                                    </button>

                                    <button type="submit" class="uk-button uk-button-small uk-button-default"
                                        uk-tooltip="View user">
                                        <i class="fas fa-eye"></i>
                                    </button>

                                    <button type="submit" class="uk-button uk-button-small uk-button-primary"
                                        uk-tooltip="Edit user" uk-toggle='target:#edituser'>
                                        <i class="fa fa-pencil-alt"></i>
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

{{-- Edit user --}}
<div id="edituser" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-text-large uk-small-bottom"> <i class="fa fa-user-edit uk-margin-small-right"></i> Edit user
        </div>

        <form method="POST" action="#">
            {{-- Wallet --}}
            <div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Wallet</label>
                    <div class="uk-form-controls">
                        <div class="uk-margin">
                            <input class="uk-input uk-form-large uk-text-cenetr" id="form-horizontal-text" type="number" step="0.01"
                                placeholder="Title">
                        </div>
                    </div>
                </div>
            </div>
            {{-- Name --}}
            <div class="uk-child-width-1-2@s" uk-grid>



                {{-- Fname --}}
                <div>
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-horizontal-text">First name</label>
                        <div class="uk-form-controls">
                            <input class="uk-input uk-form-small" id="form-horizontal-text" type="text"
                                placeholder="First name">
                        </div>
                    </div>
                </div>

                {{-- Lname --}}
                <div>
                    <div>
                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-horizontal-text">Last name</label>
                            <div class="uk-form-controls">
                                <input class="uk-input uk-form-small" id="form-horizontal-text" type="text"
                                    placeholder="Last name">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Package --}}
            <div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Package</label>
                    <div class="uk-form-controls">
                        <div class="uk-margin">
                            <select class="uk-select">
                                <option>Starter 01</option>
                                <option>Starter 02</option>
                                <option>Starter 03</option>
                                <option>Starter 04</option>
                                <option>Starter 05</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Gender --}}
            <div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Gender</label>
                    <div class="uk-form-controls">
                        <div class="uk-margin">
                            <select class="uk-select">
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Id --}}
            <div>
                <div>
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-horizontal-text">ID</label>
                        <div class="uk-form-controls">
                            <input class="uk-input uk-form-small" id="form-horizontal-text" type="number"
                                placeholder="ID">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Name --}}
            <div>
                <div>
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-horizontal-text">Date of birth</label>
                        <div class="uk-form-controls">
                            <input class="uk-input uk-form-small" id="form-horizontal-text" type="date"
                                placeholder="Last name">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Email --}}
            <div>
                <div>
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-horizontal-text">Email</label>
                        <div class="uk-form-controls">
                            <input class="uk-input uk-form-small" id="form-horizontal-text" type="email"
                                placeholder="Email">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Phone --}}
            <div>
                <div>
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-horizontal-text">Phone</label>
                        <div class="uk-form-controls">
                            <input class="uk-input uk-form-small" id="form-horizontal-text" type="number"
                                placeholder="Phone">
                        </div>
                    </div>
                </div>
            </div>

            {{-- NIC number--}}
            <div>
                <div>
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-horizontal-text">NIC number</label>
                        <div class="uk-form-controls">
                            <input class="uk-input uk-form-small" id="form-horizontal-text" type="number"
                                placeholder="NIC number">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Registration date --}}
            <div>
                <div>
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-horizontal-text">Registration date</label>
                        <div class="uk-form-controls">
                            <input class="uk-input uk-form-small" id="form-horizontal-text" type="date"
                                placeholder="Registration date">
                        </div>
                    </div>
                </div>
            </div>

            {{-- User code --}}
            <div>
                <div>
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-horizontal-text">User code</label>
                        <div class="uk-form-controls">
                            <input class="uk-input uk-form-small" id="form-horizontal-text" type="text"
                                placeholder="User code">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Sponsor code --}}
            <div>
                <div>
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-horizontal-text">Sponsor code</label>
                        <div class="uk-form-controls">
                            <input class="uk-input uk-form-small" id="form-horizontal-text" type="text"
                                placeholder="Sponsor code">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Submit buttons --}}
            <p class="uk-text-right">
                <button class="uk-button uk-button-danger uk-modal-close"><i class="fa fa-times-circle"></i>
                    Cancel</button>
                <button class="uk-button uk-button-default"><i class="fa fa-check-circle"></i> Update</button>
            </p>
        </form>
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
            position:'topRight',
        });
    }
    function discard(){
        iziToast.error({
            title: 'Discarded !',
            message:'Message discarded',
            position:'topRight',
        });
    }
</script>
@endsection