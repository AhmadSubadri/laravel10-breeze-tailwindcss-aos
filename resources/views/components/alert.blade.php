@if (session('msg'))
    <div class="flash-data" id="flash-data" data-flashdata="{{ session('msg') }}" data-alerttype="{{ session('alert_type') }}">
    </div>
@endif
