<div class="container my-5">
    <div class="">
        <h4 style="color: #1F1F39;"><b>{{ __('Login') }}</b></h4>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-floating mt-3">
                <div class="col-12">
                    <div class="shadow-lg border-1 rounded-lg" style="border-radius: 20px;">
                        <div class="card-content">
                            <div class="card-body">
                                <form wire:submit.prevent="login" method="POST">
                                    @csrf
                                    <div class="m-5">
                                        <div class="row">
                                            @if (session()->get('fail'))
                                                <div class="alert alert-danger">
                                                    {{ session()->get('fail') }}
                                                </div>
                                            @endif
                                            <div class="col-12">
                                                <label for="email_phone">{{ __('Email / Phone Number') }} <span
                                                        class="text-danger">*</span></label>
                                                <div class="mb-1">
                                                    <input class="form-control" id="inputemail_phone" type="text"
                                                        autocomplete="off" wire:model="email_phone"
                                                        value="{{ old('email_phone') }}" required />
                                                    <span class="text-danger">
                                                        @error('email_phone')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="password">{{ __('Password') }} <span
                                                        class="text-danger">*</span></label>
                                                <div class="mb-1">
                                                    <input class="form-control" id="inputpassword" type="password"
                                                        autocomplete="off" wire:model="password"
                                                        value="{{ old('password') }}" required />
                                                    <span class="text-danger">
                                                        @error('password')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center mb-2">
                                        <button type="submit"
                                            class="mt-3 btn btn-dark w-50">{{ __('Login') }}</button><br />
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <h6>{{ __('Dont You Have An Account?') }}</h6><br />
                                        <h6><a
                                                href="{{ route('website.register', app()->getLocale()) }}"><u>{{ __('Register') }}</u></a>
                                        </h6><br />
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <h6>{{ __('Forget Password ? ') }}</h6><br />
                                        <h6><a
                                                href="{{ route('website.forget_password', app()->getLocale()) }}"><u>{{ __('Reset') }}</u></a>
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
