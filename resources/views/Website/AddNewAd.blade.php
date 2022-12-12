@extends('Website.layout')

@section('title', __('Add New Ad'))

@section('head')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@endsection

@section('body')
    <div style="margin-top: 100px"></div>
    @livewire('website.add-new-ad')
@endsection

@section('scripts')
    <script>
        $("#picture").on("change", function() {
            if ($("#picture")[0].files.length > 8) {
                $("#picture").val(null);
                alert("You can select only 8 images");
            } else {

                $("#imageUploadForm").submit();
            }
        });
    </script>
@endsection
