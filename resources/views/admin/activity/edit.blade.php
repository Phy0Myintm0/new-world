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

<p><a title='Return' href="{{ crudbooster::adminPath('activities') }}"><i class='fa fa-chevron-circle-left '></i>
        &nbsp; Kembali</a></p>

<div class="panel panel-default">
    <div class="panel-heading">
        <strong><i class="fa fa-tasks"></i> Add Activity</strong>
    </div>

    <form class="form-horizontal" method="post" id="form" enctype="multipart/form-data"
        action="{{ crudbooster::mainpath('add-save') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="panel-body">
            {{ form_input("Title EN", "title_en", "text", 10, "", "required value='$row->title_en'") }}
            {{ form_input("Title JP", "title_jp", "text", 10, "", "required value='$row->title_jp'") }}

            {{ form_textarea("Desc EN", "desc_en", "textarea", "required", $row->desc_en) }}
            {{ form_textarea("Desc JP", "desc_jp", "textarea", "required", $row->desc_jp) }}

            {{ form_input("Youtube URL", "youtube", "text", 10, "", "") }}

            <hr>
        
            {{ form_start_combobox("Country", "id_country", 6, "", "required", "select2") }}
                @foreach ($countries as $item)
                <option value="{!! $item->id !!}" @if($row->id_country==$item->id) {{ "selected='selected'" }} @endif>{!! $item->val !!}</option>
                @endforeach
            {{ form_end_combobox() }}

            {{ form_start_combobox("Action", "id_action", 6, "", "required", "select2") }}
                @foreach ($actions as $item)
                <option value="{!! $item->id !!}" @if($row->id_action==$item->id) {{ "selected='selected'" }} @endif>{!! $item->val !!}</option>
                @endforeach
            {{ form_end_combobox() }}

            <hr>

            {{ form_start_combobox("Keywords", "id_keyword[]", 6, "", "required multiple='multiple'", "select2", false) }}
                @php $keywordnya = unserialize($row->id_keyword) @endphp
                @foreach ($keywords as $key => $item)
                    <option value="{!! $item->id !!}" @if(in_array($item->id, $keywordnya)) {{ "selected='selected'" }} @endif>{!! $item->val !!}</option>
                @endforeach
            {{ form_end_combobox() }}

            <!-- <div class="form-group">
                <label for="id_keyword" class="col-sm-2 control-label"></label>
                <div class="col-md-10">
                    <ul id="keyword_activities"></ul>
                </div>
            </div> -->

            <div class="form-group">
                <div class="col-md-offset-2 col-md-6">
                    <div class="callout callout-info">
                        <h4><i class="fa fa-exclamation-circle"></i> Note:</h4>
                        <p>You could add more than one keyword.</p>
                    </div>
                    <br>
                </div>
            </div>

            {{ form_mediapicker("Photo Cover", "photo_cover", 10, "", '') }}

        </div>
        <div class="panel-footer">
            <input type="submit" name="submit" value="Save & Add More"
                class='btn btn-success'>
            <input type="submit" name="submit" class="btn btn-primary" value="Save Data">
        </div>
    </form>
</div>
@endsection