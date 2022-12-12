<div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        @if (app()->getLocale() == 'en')
                            <h3 class="text-center font-weight-light my-4">{{ __('Edit') }} <b>{{ $en_title }}
                                </b><i class="bi bi-badge-ad-fill"></i></h3>
                        @else
                            <h3 class="text-center font-weight-light my-4">{{ __('Edit') }} <b>{{ $ar_title }}
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
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <div class="my-2 col-12">
                                            <div class="Scard card shadow-lg border-2 rounded-lg">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media">
                                                            <div class="media-body text-right">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        {{ __('English Title') }} <span
                                                                            class="text-danger">*</span>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-floating mb-1">
                                                                            <input class="form-control" id="en_title"
                                                                                type="text" wire:model="en_title"
                                                                                autocomplete="off" />
                                                                            <span class="text-danger">
                                                                                @error('en_title')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                            <label
                                                                                for="date">{{ __('Write English Title Of The Ad') }}
                                                                            </label>
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
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <div class="my-2 col-12">
                                            <div class="Scard card shadow-lg border-2 rounded-lg">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media">
                                                            <div class="media-body text-right">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        {{ __('Arabic Title') }} <span
                                                                            class="text-danger">*</span>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-floating mb-1">
                                                                            <input class="form-control" id="ar_title"
                                                                                type="text" wire:model="ar_title"
                                                                                autocomplete="off" />
                                                                            <span class="text-danger">
                                                                                @error('ar_title')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                            <label
                                                                                for="date">{{ __('Write Arabic Title Of The Ad') }}
                                                                            </label>
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
                                </div>
                                {{-- <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <div class="my-2 col-12">
                                            <div class="Scard card shadow-lg border-2 rounded-lg">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media">
                                                            <div class="media-body text-right">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        {{ __('Golden Status') }} <span
                                                                            class="text-danger">*</span>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-floating mb-1">
                                                                            <select class="form-control"
                                                                                wire:model="is_golden">
                                                                                <option>
                                                                                    {{ __('Choose The Status Of The Ad') }}
                                                                                </option>
                                                                                <option value="2">{{ __('No') }}
                                                                                </option>
                                                                                <option value="1">{{ __('Yes') }}
                                                                                </option>
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('is_golden')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                            <label>{{ __('Golden Status') }}
                                                                            </label>
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
                                </div> --}}
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
                                                                    {{ __('English Description') }} <span
                                                                        class="text-danger">*</span>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-floating mb-1">
                                                                        <textarea class="form-control" id="en_desc" type="text" wire:model="en_desc" autocomplete="off" rows="50"></textarea>
                                                                        <span class="text-danger">
                                                                            @error('en_desc')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                        <label
                                                                            for="date">{{ __('Write English Description Of The Ad') }}
                                                                        </label>
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
                                                                    {{ __('Arabic Description') }} <span
                                                                        class="text-danger">*</span>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-floating mb-1">
                                                                        <textarea class="form-control" id="ar_desc" type="text" wire:model="ar_desc" autocomplete="off" rows="50"></textarea>
                                                                        <span class="text-danger">
                                                                            @error('ar_desc')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                        <label
                                                                            for="date">{{ __('Write Arabic Description Of The Ad') }}
                                                                        </label>
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
                            </div>
                            <input type="hidden" wire:model="user_id" value="{{ auth()->user()['user_id'] }}">
                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                <button type="submit" class="mx-auto w-50 btn btn-block btn-outline-success"><i
                                        class="bi bi-pen-fill"></i> {{ __('Edit') }}</button>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                @if (app()->getLocale() == 'en')
                                    <button class="mx-auto w-50 btn btn-block btn-outline-danger"
                                        wire:click.prevent="delete()"><i class="bi bi-trash-fill"></i>
                                        {{ __('Delete') }} <b>{{ $en_title }}</button>
                                @else
                                    <button class="mx-auto w-50 btn btn-block btn-outline-danger"
                                        wire:click.prevent="delete()"><i class="bi bi-trash-fill"></i>
                                        {{ __('Delete') }} <b>{{ $ar_title }}</button>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
