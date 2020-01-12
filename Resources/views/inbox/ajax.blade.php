<style type="text/css">
    .card {
        width: 50%;
        margin: 0 auto;
        border-color: #383838;
    }
    .card .card-block {
        padding: 0px 0 15px!important;
    }
    .card .card-block .modal-header {
        background: #ffffff;
        color: #5e5c5c;
        border-bottom:0;
        border-radius: 5px;
    }
    .mfp-auto-cursor .mfp-content {
        margin-top: -20%;
    }
    .mfp-close-btn-in .mfp-close {
        margin-top: 7px;
    }
</style>

<div class="card">
    <div class="card-block">
        <div class="modal-header">
            <h4 class="modal-title"><i class="fa fa-search"></i> {{ __('inbox::table.rows.detail') }}</h4>
        </div>
        <div class="modal-body">
            {!! $data->isi !!}
        </div>
    </div>
</div>