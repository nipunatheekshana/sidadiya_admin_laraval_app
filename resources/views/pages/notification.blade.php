@extends('layouts.admin_main')
@section('notification')
<style>
    .uk-button {
        border-radius: 5em
    }

    .editicons {
        transition: 200ms
    }

    .editicons:hover {
        color: black;
        cursor: pointer;
    }
</style>
<div class="uk-container uk-container-medium uk-margin-top uk-margin-bottom">
    <div class="uk-child-width-1-2 uk-grid-small" uk-grid='mansonry:true'>
        <div class="uk-width-1-4@m">

            <div class="uk-card uk-card-default uk-card-body uk-card-small uk-text-center">
                <h3 class="uk-card-title">Menu</h3>
                <div> <span>Total notification : </span><span class="uk-text-large">12</span></div>
                <div class="uk-margin-small-top"><button class="uk-button uk-button-default "
                        uk-toggle='target:#addnotification'>Add notification</button>
                </div>
            </div>
        </div>

        <div class="uk-width-expand@m">
            {{-- Noti 01 --}}
            <div class="uk-card uk-card-default uk-card-body uk-card-small uk-text-center uk-margin-small-bottom">
                <h3 class="uk-card-title">Maintains break</h3>
                <p>Lorem ipsum sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua.
                </p>

                <p class="uk-text-right">
                    <button class="uk-button uk-button-small editicons"><i class="fa fa-trash"></i></button>
                    <button class="uk-button uk-button-small editicons" uk-toggle='target:#editnotification'><i
                            class="fa fa-pencil-alt"></i></button>
                </p>
                {{-- Button --}}
                <div></div>
            </div>
        </div>

    </div>
</div>

{{-- Popup modal section --}}
<!-- Add notification -->
<div id="addnotification" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <h2 class="uk-modal-title">Add Notification</h2>

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
            <button class="uk-button uk-button-danger uk-modal-close" type="button" onclick="discard()"> <i
                    class="fa fa-trash"></i> Discard</button>
            <button class="uk-button uk-button-primary uk-modal-close" type="button" onclick="added()"> <i
                    class="fa fa-plus-circle"></i>
                Add</button>
        </p>
    </div>
</div>
<!-- Edit notification -->
<div id="editnotification" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <h2 class="uk-modal-title"> <i class="fa fa-pencil-alt uk-margin-small-right"></i> Add Notification</h2>

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
            <button class="uk-button uk-button-primary uk-modal-close" type="button" onclick="added()">
                <i class="fa fa-plus-circle"></i>Save</button>
        </p>
    </div>
</div>

<script>
    // Tost message
    // Add notification
      function added(){
        iziToast.success({
            title: 'Added !',
            message:'Notification has been added',
            position:'bottomRight',
        });
    }
    function discard(){
        iziToast.error({
            title: 'Discarded !',
            message:'Notification discarded',
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
</script>

@endsection