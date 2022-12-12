<div class="container my-5">
    <div class="">
        <h4 style="color: #1F1F39;"><b>{{ __('Forget Password') }}</b></h4>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-floating mt-3">
                <div class="col-12">
                    <div class="shadow-lg border-1 rounded-lg" style="border-radius: 20px;">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="m-5">
                                    @if ($status == 0)
                                        <form wire:submit.prevent="confirm_email">
                                            <div class="results">
                                                @if (Session::get('emailSent'))
                                                    <div class="alert alert-success">
                                                        {{ Session::get('emailSent') }}
                                                    </div>
                                                @endif
                                                @if (Session::get('fail'))
                                                    <div class="alert alert-danger">
                                                        {{ Session::get('fail') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="row mb-1">
                                                <div class="col-12 col-md-8">
                                                    <label for="email">{{ __('Email') }} <span
                                                            class="text-danger">*</span></label>
                                                    <div>
                                                        <input class="form-control" id="inputemail" type="text"
                                                            autocomplete="off" wire:model="email"
                                                            {{ $status == 1 ? 'disabled' : '' }} />
                                                        <span class="text-danger">
                                                            @error('email')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <div class="d-flex justify-content-center">
                                                        <button type="submit" class="mt-4 btn btn-dark w-100"
                                                            {{ $status == 1 ? 'disabled' : '' }}>{{ __('Confirm') }}</button><br />
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    @endif
                                    @if ($status == 1)
                                        <form wire:submit.prevent="confirm_code">
                                            <div class="results">
                                                @if (Session::get('succes_code'))
                                                    <div class="alert alert-success">
                                                        {{ Session::get('succes_code') }}
                                                    </div>
                                                @endif
                                                @if (Session::get('fail'))
                                                    <div class="alert alert-danger">
                                                        {{ Session::get('fail') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="row mb-1">
                                                <div class="col-12 col-md-8">
                                                    <label for="code">{{ __('Code') }} <span
                                                            class="text-danger">*</span></label>
                                                    <div>
                                                        <input class="form-control" id="inputcode" type="text"
                                                            autocomplete="off" wire:model="code"
                                                            {{ $status == 2 ? 'disabled' : '' }} />
                                                        <span class="text-danger">
                                                            @error('code')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <div class="d-flex justify-content-center">
                                                        <button type="submit" class="mt-4 btn btn-dark w-100"
                                                            {{ $status == 2 ? 'disabled' : '' }}>{{ __('Confirm') }}</button><br />
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    @endif
                                    @if ($status == 2)
                                        <form wire:submit.prevent="confirm_pass">
                                            <div class="results">
                                                @if (Session::get('confirm_pass'))
                                                    <div class="alert alert-success">
                                                        {{ Session::get('confirm_pass') }}
                                                    </div>
                                                @endif
                                                @if (Session::get('fail'))
                                                    <div class="alert alert-danger">
                                                        {{ Session::get('fail') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="row mb-1">
                                                <div class="col-12">
                                                    <label for="password">{{ __('Password') }} <span
                                                            class="text-danger">*</span></label>
                                                    <div class="mb-1">
                                                        <input class="form-control" id="inputpassword" type="password"
                                                            autocomplete="off" wire:model="password"
                                                            {{ $status == 3 ? 'disabled' : '' }} />
                                                        <span class="text-danger">
                                                            @error('password')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <label for="password">{{ __('Password Confirmation') }} <span
                                                            class="text-danger">*</span></label>
                                                    <div class="mb-1">
                                                        <input class="form-control" id="inputpasswordconfirmation"
                                                            type="password" autocomplete="off"
                                                            wire:model="password_confirmation"
                                                            {{ $status == 3 ? 'disabled' : '' }} />
                                                        <span class="text-danger">
                                                            @error('password_confirmation')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-center">
                                                    <button type="submit" class="mt-4 btn btn-dark w-100"
                                                        {{ $status == 3 ? 'disabled' : '' }}>{{ __('Confirm') }}</button><br />
                                                </div>
                                            </div>
                                        </form>
                                    @endif
                                </div>
                                {{-- <div class="d-flex justify-content-center mb-2">
                                        <button type="submit"
                                            class="mt-3 btn btn-dark w-25">{{ __('Confirm') }}</button><br />
                                    </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
