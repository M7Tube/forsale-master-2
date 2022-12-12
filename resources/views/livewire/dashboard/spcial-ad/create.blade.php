<div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">{{ __('Craete Admin Ad') }} <i
                                class="bi bi-badge-ad-fill"></i></h3>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent="Create">
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
                                                                                    {{ __('Choose The Golden Status Of The Ad') }}
                                                                                </option>
                                                                                <option value="2">{{ __('Normal') }}
                                                                                </option>
                                                                                <option value="1">{{ __('Golden') }}
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
                                                                    {{ __('Picture') }} <span
                                                                        class="text-danger">*</span>
                                                                </div>
                                                            </div>
                                                            <div class="row">
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
                                                                        <label
                                                                            for="picture">{{ __('Picture Of The Ad') }}
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
                                <button type="submit"
                                    class="mx-auto w-100 btn btn-block btn-outline-success">{{ __('Create') }}
                                    <i class="bi bi-file-earmark-plus"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
