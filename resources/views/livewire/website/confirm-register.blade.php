<div class="container my-5">
    <div class="">
        <h4 style="color: #1F1F39;"><b>{{ __('Confirm Register') }}</b></h4>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-floating mt-3">
                <div class="col-12">
                    <div class="shadow-lg border-1 rounded-lg" style="border-radius: 20px;">
                        <div class="card-content">
                            <div class="card-body">
                                <form wire:submit.prevent="confirm">
                                    {{-- <div class="results">
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
                                    </div> --}}
                                    <div class="m-5">
                                        <div class="row">
                                            <div class="col-12">
                                                <label for="code">{{ __('Code') }} <span
                                                        class="text-danger">*</span></label>
                                                <div class="mb-1">
                                                    <input class="form-control" id="inputcode" type="text"
                                                        autocomplete="off" wire:model="code" />
                                                    <span class="text-danger">
                                                        @error('code')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="d-flex justify-content-center mb-2">
                                        <button type="submit"
                                            class="mt-3 btn btn-dark w-25">{{ __('Confirm') }}</button><br />
                                    </div>
                                    <div class="d-flex justify-content-center">

                                        <h6>{{ __('Do You Have An Account?') }}</h6><br />
                                        <h6><a
                                                href="{{ route('website.login', app()->getLocale()) }}">{{ __('Login') }}</a>
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
