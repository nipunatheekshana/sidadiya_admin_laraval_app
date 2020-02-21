@extends('layouts.admin_main')
@section('packages')
<style>
    .uk-button {
        border-radius: 5em
    }

    .editicons {
        transition: 200ms;
        background-color: transparent;
    }

    .editicons:hover {
        color: black;
        cursor: pointer;
    }
</style>
<div class="uk-container uk-container-medium uk-margin-top uk-margin-bottom">
    <div class="uk-child-width-1-2@m uk-grid-small" uk-grid='mansonry:true'>

        {{-- Left --}}
        <div class="uk-width-1-4@m">

            <div class="uk-card uk-card-default uk-card-body uk-card-small uk-text-center">
                <h3 class="uk-card-title">Menu</h3>
                <div> <span>Total packages : </span><span class="uk-text-large">7</span></div>
                <div class="uk-margin-small-top"><button class="uk-button uk-button-default "
                        uk-toggle='target:#addpkg'>Add package</button>
                </div>
            </div>
        </div>

        {{-- Right --}}
        <div class="uk-width-expand@m">

            <ul class="uk-subnav uk-subnav-pill" uk-switcher="animation: uk-animation-fade">
                <li><a href="#">Active</a></li>
                <li><a href="#">Deactive</a></li>
            </ul>

            <ul class="uk-switcher uk-margin">
                {{-- Active --}}
                <li>
                    {{-- pkg 01 --}}
                    <div
                        class="uk-card uk-card-default uk-card-body uk-card-small uk-text-centcer uk-margin-small-bottom">
                        <h3 class="uk-card-title">Starter 01</h3>
                        <ul class="uk-list uk-margin-left">
                            <li><span class="uk-text-primary">Duration : </span>Lifetime</li>
                            <li><span class="uk-text-primary">Daily earn limit : </span>Rs.123</li>
                            <li><span class="uk-text-primary">Like : </span>Rs.0.12</li>
                            <li><span class="uk-text-primary">Share : </span>Rs.1.00</li>
                            <li><span class="uk-text-primary">Post upload : </span>Rs.1.00</li>
                        </ul>

                        <p class="uk-text-right">
                            {{-- Delete pakage --}}
                            <button class="uk-button uk-button-small editicons"><i class="fa fa-trash"></i><br><span
                                    style="font-size:10px">Delete</span>
                            </button>
                            {{-- Edit package --}}
                            <button class="uk-button uk-button-small editicons" uk-toggle='target:#editpkg'><i
                                    class="fa fa-pencil-alt"></i><br><span style="font-size:10px">Edit</span>
                            </button>
                            {{-- Deactivate --}}
                            <button class="uk-button uk-button-small editicons" onclick="deactivepkg()"><i
                                    class="fas fa-ban"></i><br><span style="font-size:10px">Deactive</span>
                            </button>

                        </p>
                        {{-- Button --}}
                        <div></div>
                    </div>
                </li>

                {{-- Deactivated --}}
                <li>
                    {{-- pkg 01 --}}
                    <div
                        class="uk-card uk-card-default uk-card-body uk-card-small uk-text-centcer uk-margin-small-bottom">
                        <h3 class="uk-card-title">Starter 02</h3>
                        <ul class="uk-list uk-margin-left">
                            <li><span class="uk-text-primary">Duration : </span>Lifetime</li>
                            <li><span class="uk-text-primary">Daily earn limit : </span>Rs.123</li>
                            <li><span class="uk-text-primary">Like : </span>Rs.0.12</li>
                            <li><span class="uk-text-primary">Share : </span>Rs.1.00</li>
                            <li><span class="uk-text-primary">Post upload : </span>Rs.1.00</li>
                        </ul>

                        <p class="uk-text-right">
                            {{-- Delete pakage --}}
                            <button class="uk-button uk-button-small editicons"><i class="fa fa-trash"></i><br><span
                                    style="font-size:10px">Delete</span>
                            </button>
                            {{-- Edit package --}}
                            <button class="uk-button uk-button-small editicons" uk-toggle='target:#editpkg'><i
                                    class="fa fa-pencil-alt"></i><br><span style="font-size:10px">Edit</span>
                            </button>
                            {{-- Deactivate --}}
                            <button class="uk-button uk-button-small editicons" onclick="activepkg()"><i
                                    class="far fa-check-circle"></i><br><span style="font-size:10px">Active</span>
                            </button>

                        </p>
                        {{-- Button --}}
                        <div></div>
                    </div>
                </li>
            </ul>


        </div>

    </div>
</div>

{{-- Popup modal section --}}
<!-- Add package -->
<div id="addpkg" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <h2 class="uk-modal-title">Add Package</h2>

        {{-- Package name --}}
        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">Package Name</label>
            <div class="uk-form-controls">
                <input class="uk-input uk-form-small" id="form-horizontal-text" type="text" placeholder="Package name">
            </div>
        </div>

        {{-- Package Duration --}}
        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">Package Duration</label>
            <div class="uk-form-controls">
                <input class="uk-input uk-form-small" id="form-horizontal-text" type="text"
                    placeholder="Package duration">
            </div>
        </div>

        {{-- Package Daily earn limit --}}
        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">Daily earn limit</label>
            <div class="uk-form-controls">
                <input class="uk-input uk-form-small" id="form-horizontal-text" type="number" step="0.01"
                    placeholder="Daily earn ">
            </div>
        </div>

        {{-- Package Like value --}}
        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">Like value</label>
            <div class="uk-form-controls">
                <input class="uk-input uk-form-small" id="form-horizontal-text" type="number" step="0.01"
                    placeholder="Like value">
            </div>
        </div>

        {{-- Package Share value --}}
        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">Share value</label>
            <div class="uk-form-controls">
                <input class="uk-input uk-form-small" id="form-horizontal-text" type="number" step="0.01"
                    placeholder="Share value">
            </div>
        </div>

        {{-- Package Post upload --}}
        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">Post upload value</label>
            <div class="uk-form-controls">
                <input class="uk-input uk-form-small" id="form-horizontal-text" type="number" step="0.01"
                    placeholder="Post upload">
            </div>
        </div>

        {{-- Package payhere link --}}
        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">Payhere link</label>
            <div class="uk-form-controls">
                <input class="uk-input uk-form-small" id="form-horizontal-text" type="url" placeholder="Payhere link">
            </div>
        </div>


        <p class="uk-text-right">
            <button class="uk-button uk-button-danger uk-modal-close" type="button" onclick="discard()"> <i
                    class="fa fa-trash"></i> Discard</button>
            <button class="uk-button uk-button-primary uk-modal-close" type="button" onclick="added()"> <i
                    class="fa fa-plus-circle"></i>
                Add</button>
        </p>
    </div>
</div>

<!-- Add package -->
<div id="editpkg" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <h2 class="uk-modal-title">Edit Package</h2>

        {{-- Package name --}}
        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">Package Name</label>
            <div class="uk-form-controls">
                <input class="uk-input uk-form-small" id="form-horizontal-text" type="text" placeholder="Package name">
            </div>
        </div>

        {{-- Package Duration --}}
        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">Package Duration</label>
            <div class="uk-form-controls">
                <input class="uk-input uk-form-small" id="form-horizontal-text" type="text"
                    placeholder="Package duration">
            </div>
        </div>

        {{-- Package Daily earn limit --}}
        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">Daily earn limit</label>
            <div class="uk-form-controls">
                <input class="uk-input uk-form-small" id="form-horizontal-text" type="number" step="0.01"
                    placeholder="Daily earn ">
            </div>
        </div>

        {{-- Package Like value --}}
        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">Like value</label>
            <div class="uk-form-controls">
                <input class="uk-input uk-form-small" id="form-horizontal-text" type="number" step="0.01"
                    placeholder="Like value">
            </div>
        </div>

        {{-- Package Share value --}}
        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">Share value</label>
            <div class="uk-form-controls">
                <input class="uk-input uk-form-small" id="form-horizontal-text" type="number" step="0.01"
                    placeholder="Share value">
            </div>
        </div>

        {{-- Package Post upload --}}
        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">Post upload value</label>
            <div class="uk-form-controls">
                <input class="uk-input uk-form-small" id="form-horizontal-text" type="number" step="0.01"
                    placeholder="Post upload">
            </div>
        </div>

        {{-- Package payhere link --}}
        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">Payhere link</label>
            <div class="uk-form-controls">
                <input class="uk-input uk-form-small" id="form-horizontal-text" type="url" placeholder="Payhere link">
            </div>
        </div>


        <p class="uk-text-right">
            <button class="uk-button uk-button-danger uk-modal-close" type="button" onclick="discard()"> <i
                    class="fa fa-trash"></i> Discard</button>
            <button class="uk-button uk-button-primary uk-modal-close" type="button" onclick="added()"> <i
                    class="fa fa-plus-circle"></i>
                Add</button>
        </p>
    </div>
</div>

<script>
    // Tost message
    // Add notification
    function added(){
        iziToast.success({
            title: 'Added !',
            message:'Package has been added',
            position:'bottomRight',
        });
        }
   
    // Discard
    function discard(){
            iziToast.error({
                title: 'Discarded !',
                message:'Package discarded',
                position:'bottomRight',
            });
        }
    // Saved
    function save(){
        iziToast.error({
            title: 'Saved !',
            message:'Notification save',
            position:'bottomRight',
        });
      }
 // Confirm  deactivate package
 function deactivepkg(){
        iziToast.question({
            timeout: 0,
            close: false,
            overlay: true,
            displayMode: 'once',
            id: 'question',
            zindex: 999,
            title: 'Confirm',
            backgroundColor:'#ffc9c9',
            message: 'Deactive package?',
            position: 'center',
            buttons: [
                ['<button><b>YES</b></button>', function (instance, toast) {
        
                    instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
        
                    iziToast.success({
                        title: 'Done',
                        message: 'Package deactivated',
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
 
 // Confirm  activate package
 function activepkg(){
        iziToast.question({
            timeout: 0,
            close: false,
            overlay: true,
            displayMode: 'once',
            id: 'question',
            zindex: 999,
            title: 'Confirm',
            backgroundColor:'#c9ffe9',
            message: 'Active package?',
            position: 'center',
            buttons: [
                ['<button><b>YES</b></button>', function (instance, toast) {
        
                    instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
        
                    iziToast.success({
                        title: 'Done',
                        message: 'Package Activated',
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
</script>
@endsection