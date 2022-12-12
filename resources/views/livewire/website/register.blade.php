<div class="container my-5">
    <div class="">
        <h4 style="color: #1F1F39;"><b>{{ __('Register') }}</b></h4>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-floating mt-3">
                <div class="col-12">
                    <div class="shadow-lg border-1 rounded-lg" style="border-radius: 20px;">
                        <div class="card-content">
                            <div class="card-body">
                                <form wire:submit.prevent="create">
                                    <div class="m-5">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <label for="first_name">{{ __('First Name') }} <span
                                                        class="text-danger">*</span></label>
                                                <div class="mb-1">
                                                    <input class="form-control" id="inputfirst_name" type="text"
                                                        autocomplete="off" wire:model="first_name" />
                                                    <span class="text-danger">
                                                        @error('first_name')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label for="last_name">{{ __('Last Name') }}</label>
                                                <div class="mb-1">
                                                    <input class="form-control" id="inputlast_name" type="text"
                                                        autocomplete="off" wire:model="last_name" />
                                                    <span class="text-danger">
                                                        @error('last_name')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <label for="email">{{ __('Email') }} <span
                                                        class="text-danger">*</span></label>
                                                <div class="mb-1">
                                                    <input class="form-control" id="inputemail" type="text"
                                                        autocomplete="off" wire:model="email" />
                                                    <span class="text-danger">
                                                        @error('email')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label for="phone_number">{{ __('Phone Number') }}</label>
                                                <div class="mb-1">
                                                    <input class="form-control" id="inputphone_number" type="text"
                                                        autocomplete="off" wire:model="phone_number" />
                                                    <span class="text-danger">
                                                        @error('phone_number')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <label for="password">{{ __('Password') }} <span
                                                        class="text-danger">*</span></label>
                                                <div class="mb-1">
                                                    <input class="form-control" id="inputpassword" type="password"
                                                        autocomplete="off" wire:model.lazy="password" />
                                                    <span class="text-danger">
                                                        @error('password')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label for="password_confirmation">{{ __('Password Confirmation') }}
                                                    <span class="text-danger">*</span></label>
                                                <div class="mb-1">
                                                    <input class="form-control" id="inputpassword_confirmation"
                                                        type="password" autocomplete="off"
                                                        wire:model.lazy="password_confirmation" />
                                                    <span class="text-danger">
                                                        @error('password_confirmation')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <label for="birth_date">{{ __('Birth Date') }}</label>
                                                <div class="mb-1">
                                                    <input class="form-control" id="inputbirth_date" type="date"
                                                        autocomplete="off" wire:model="birth_date" />
                                                    <span class="text-danger">
                                                        @error('birth_date')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label for="last_name">{{ __('Advertiser type') }} <span
                                                        class="text-danger">*</span></label>
                                                <div class="mb-1">
                                                    <div class="btn-group" role="group"
                                                        aria-label="Basic radio toggle button group">
                                                        <input type="radio" class="btn-check w-50"
                                                            wire:model="is_personal" id="is_personal1"
                                                            autocomplete="off" value="0" checked>
                                                        <label class="btn btn-outline-secondary"
                                                            for="is_personal1">{{ __('Personal') }}
                                                        </label>
                                                        <input type="radio" class="btn-check w-50"
                                                            wire:model="is_personal" id="is_personal2"
                                                            autocomplete="off" value="1">
                                                        <label class="btn btn-outline-secondary"
                                                            for="is_personal2">{{ __('Commercial') }}
                                                        </label>
                                                    </div>
                                                    <span class="text-danger">
                                                        @error('is_personal')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center mb-2">
                                        <button type="submit"
                                            class="mt-3 btn btn-dark w-50">{{ __('Register') }}</button><br />
                                    </div>
                                    <div class="d-flex justify-content-center">

                                        <h6>{{ __('Do You Have An Account?') }}</h6><br />
                                        <h6><a
                                                href="{{ route('website.login', app()->getLocale()) }}"><u>{{ __('Login') }}</u></a>
                                        </h6><br />
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
