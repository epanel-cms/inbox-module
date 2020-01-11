<style type="text/css">
    .mfp-auto-cursor .mfp-content {
        margin-top: -20%;
    }
    .mfp-close-btn-in .mfp-close {
        margin-top: 7px;
    }
</style>
<div class="card" style="width: 50%;margin: 0 auto;border-color: #383838;">
    <div class="card-block" style="padding: 0px 0 15px!important;">
        <div class="modal-header" style="background: #ffffff;color: #5e5c5c;border-bottom:0;border-radius: 5px;">
            <h4 class="modal-title"><i class="fa fa-search"></i> {{ @trans('inbox::general.detail') }}</h4>
        </div>
        <div class="modal-body">
            {!! $data->isi !!}
        </div>
    </div>
</div>