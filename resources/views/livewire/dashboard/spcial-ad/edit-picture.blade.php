<div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        @if (app()->getLocale() == 'en')
                            <h3 class="text-center font-weight-light my-4">{{ __('Edit Admin Ad Picture') }}
                                </b><i class="bi bi-badge-ad-fill"></i></h3>
                        @else
                            <h3 class="text-center font-weight-light my-4">{{ __('Edit Admin Ad Picture') }}
                                </b><i class="bi bi-badge-ad-fill"></i></h3>
                        @endif
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent="update">
                            @csrf
                            <div class="results">
                                @if (Session::get('fail'))
                                    <div class="alert alert-danger">
                                        {{ Session::get('fail') }}
                                    </div>
                                @endif
                            </div>
                            <div class="results">
                                @if (Session::get('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <div class="my-2 col-12">
                                        <div class="Scard card shadow-lg border-2 rounded-lg">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body text-right">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    {{ __('Picture') }} <span class="text-danger">*</span>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="col-md-12">
                                                                        <div class="form-floating mb-3">
                                                                            <div class="my-2 col-12">
                                                                                <div
                                                                                    class="Scard card shadow-lg border-2 rounded-lg">
                                                                                    <div class="card-content">
                                                                                        <div class="card-body">
                                                                                            {{ __('Picture Preview:') }}
                                                                                            <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $Oldpicture)) !!}"
                                                                                                style="height: auto; width: 250px;">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-floating mb-1">
                                                                        <input class="form-control" id="picture"
                                                                            type="file" wire:model="picture"
                                                                            autocomplete="off" />
                                                                        <span class="text-danger">
                                                                            @error('picture')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                        <label for="picture">{{ __('Picture Of The Ad') }}
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    @if ($picture)
                                                                        <div class="col-md-12">
                                                                            <div class="form-floating mb-3">
                                                                                <div class="my-2 col-12">
                                                                                    <div
                                                                                        class="Scard card shadow-lg border-2 rounded-lg">
                                                                                        <div class="card-content">
                                                                                            <div
                                                                                                class="card-body">
                                                                                                {{ __('Picture Preview:') }}
                                                                                                <img src="{{ $picture->temporaryUrl() }}"
                                                                                                    width="250x">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" wire:model="user_id" value="{{ auth()->user()['user_id'] }}">
                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                <button type="submit" class="mx-auto w-50 btn btn-block btn-outline-success"><i
                                        class="bi bi-pen-fill"></i> {{ __('Edit') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
