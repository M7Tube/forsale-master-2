<div class="container-fluid my-5">
    <div class="mx-5">
        <h4 style="color: #1F1F39;"><b>{{ __('Spcial Ad') }}</b></h4>
    </div>
    @forelse ($ad as $data)
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="col-md-12 mx-5">
                    <div class="form-floating mt-3">
                        <div class="col-12">
                            <div class="shadow-lg border-1 rounded-lg" style="border-radius: 20px;">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media-body">
                                            <img class="spcialAdImage" src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_exists('../storage/app/img/' . $data->picture) ? file_get_contents('../storage/app/img/' . $data->picture) : file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                width="100%" height="100%" alt="Spcial Ad Picture"
                                               >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mt-5">
                <div class="row mx-5">
                    <div class="col-12">
                        <h4 style="color: #1F1F39;">
                            <b>{{ app()->getLocale() == 'en' ? $data->en_title ?? '' : $data->ar_title ?? '' }}</b>
                            @if ($data->is_golden == 1)
                                <i class="text-warning bi bi-star"></i>
                            @else
                            @endif
                        </h4>
                    </div>
                    <div class="col-12">
                        <p style="color: #1F1F39;">
                            {{ app()->getLocale() == 'en' ? $data->en_desc ?? '' : $data->ar_desc ?? '' }}</p>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <h4 class="text-center text-muted mt-5">{{ __('This Ad is Not Available ') }}<i class="bi bi-emoji-dizzy"></i></h4>
    @endforelse
</div>
