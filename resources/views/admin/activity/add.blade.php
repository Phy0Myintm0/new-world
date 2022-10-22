@extends('crudbooster::admin_template')
@section('content')
<style>
    .select2-container--default .select2-selection--single {
        border-radius: 0px !important
    }
    .select2-container .select2-selection--single {
        height: 35px
    }
    .select2-container--default .select2-selection--multiple .select2-selection__choice {
        background-color: #3c8dbc !important;
        border-color: #367fa9 !important;
        color: #fff !important;
    }
    .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
        color: #fff !important;
    }
    .spin {
        display: none;
    }
</style>

<p><a title='Return' href="{{ crudbooster::adminPath('pedagang_pangans') }}"><i class='fa fa-chevron-circle-left '></i>
        &nbsp; Kembali</a></p>

<div class="panel panel-default">
    <div class="panel-heading">
        <strong><i class="fa fa-road"></i> Tambah Pedagang Pangan</strong>
    </div>

    <form class="form-horizontal" method="post" id="form" enctype="multipart/form-data"
        action="{{ crudbooster::mainpath('add-save') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="panel-body">
            {{ form_start_combobox("Pedagang", "pedagang_id", 6, "", "required", "select2") }}
            
            {{ form_end_combobox() }}
            <hr>

            <div class="form-group">
                <label for="pedagang_id" class="col-sm-2 control-label"></label>
                <div class="col-md-10">
                    <ul id="pedagang_pangan"></ul>
                </div>
            </div>

            {{ form_start_combobox("Tambah Pangan", "pangan_id[]", 6, "", "required multiple='multiple'", "select2", false) }}
            
            {{ form_end_combobox() }}
            <div class="form-group">
                <div class="col-md-offset-2 col-md-6">
                    <div class="callout callout-primary">
                        <h4><i class="fa fa-exclamation-circle"></i> Catatan</h4>
                        <p>Anda dapat memilih lebih dari satu jenis pangan.</p>
                    </div>
                    <br>
                </div>
            </div>

        </div>
        <div class="panel-footer">
            <input type="submit" name="submit" value="{{trans('crudbooster.button_save_more')}}"
                class='btn btn-success'>
            <input type="submit" name="submit" class="btn btn-primary" value="Save Data">
        </div>
    </form>
</div>
@endsection