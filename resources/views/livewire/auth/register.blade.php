<div id="app">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    {{-- @if ($errors->any())
                        <div class="col-lg-4">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-body">
                                    <div>
                                        <h5 class="text-muted">{{ __('Some Field Need To be Fixed') }}</h5>
                                        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                                            @foreach ($errors->all() as $error)
                                                <li class="text-danger"><span
                                                        class="text-muted">{{ $error }}</span></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif --}}
                    <div class="col-lg-8">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">{{ __('Create New Admin') }} <i
                                        class="bi bi-person-plus-fill"></i></h3>
                            </div>
                            <div class="card-body">
                                <form wire:submit.prevent="create">
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
                                        <div class="col-12 col-md-6">
                                            <div class="form-floating mb-1">
                                                <input class="form-control" id="inputfirst_name" type="text"
                                                    placeholder="Mahmoud" autocomplete="off" wire:model="first_name" />
                                                <label for="inputfirst_name">{{ __('First Name') }} <span
                                                        class="text-danger">*</span></label>
                                                <span class="text-danger">
                                                    @error('first_name')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-floating mb-1">
                                                <input class="form-control" id="inputlast_name" type="text"
                                                    placeholder="Mahmoud" autocomplete="off" wire:model="last_name" />
                                                <label for="inputlast_name">{{ __('Last Name') }} </label>
                                                <span class="text-danger">
                                                    @error('last_name')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-floating mb-1">
                                                <input class="form-control" id="inputphone_number" type="text"
                                                    placeholder="Mahmoud" autocomplete="off"
                                                    wire:model="phone_number" />
                                                <label for="inputphone_number">{{ __('Phone Number') }} <span
                                                        class="text-danger">*</span></label>
                                                <span class="text-danger">
                                                    @error('phone_number')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-floating mb-1">
                                                <input class="form-control" id="inputemail" type="text"
                                                    placeholder="Mahmoud" autocomplete="off" wire:model="email" />
                                                <label for="inputemail">{{ __('Email') }} <i
                                                        class="bi bi-envelope-fill"></i> <span
                                                        class="text-danger">*</span></label>
                                                <span class="text-danger">
                                                    @error('email')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-floating mb-1">
                                                <input class="form-control" id="inputpassword" type="password"
                                                    autocomplete="off" wire:model="password" />
                                                <label for="inputpassword">{{ __('Password') }}<span
                                                        class="text-danger">*</span>
                                                    <i class="bi bi-key-fill"></i></label>
                                                <span class="text-danger">
                                                    @error('password')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-floating mb-1">
                                                <input class="form-control" id="inputpassword_confirmation"
                                                    type="password" autocomplete="off"
                                                    wire:model="password_confirmation" />
                                                <label
                                                    for="inputpassword_confirmation">{{ __('Confirm Password') }}<span
                                                        class="text-danger">*</span> <i
                                                        class="bi bi-key-fill"></i></label>
                                                <span class="text-danger">
                                                    @error('password_confirmation')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-floating mb-1">
                                                <input class="form-control" id="inputbirth_date" type="date"
                                                    placeholder="Mahmoud" autocomplete="off" wire:model="birth_date" />
                                                <label for="inputbirth_date">{{ __('Birth Date') }}</label>
                                                <span class="text-danger">
                                                    @error('birth_date')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <input class="form-check-input" type="checkbox" wire:model="select_all"
                                        id="chkall">
                                    <label class="form-check-label" for="chkall">
                                        {{ $select_all == false ? __('Check All') : __('UnCheck All') }}
                                    </label>
                                    <div class="row">
                                        @foreach ($allPermissions as $key => $p)
                                            <div class="col-12 col-md-6 mb-2">
                                                <div class="accordion" id="accordionExample{{ $key }}">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header"
                                                            id="headingOne{{ $key }}">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseOne{{ $key }}"
                                                                aria-expanded="true"
                                                                aria-controls="collapseOne{{ $key }}">
                                                                {{ __($p) }}
                                                            </button>
                                                        </h2>
                                                        <div id="collapseOne{{ $key }}"
                                                            class="accordion-collapse collapse show"
                                                            aria-labelledby="headingOne{{ $key }}"
                                                            data-bs-parent="#accordionExample{{ $key }}">
                                                            <div class="accordion-body">
                                                                <div class="form-check">
                                                                    <input wire:model="permission"
                                                                        class="form-check-input" type="checkbox"
                                                                        value="create_{{ $p }}"
                                                                        id="flexCheckDefaultC{{ $key }}">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefaultC{{ $key }}">
                                                                        {{ __('Create') }}
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input wire:model="permission"
                                                                        class="form-check-input" type="checkbox"
                                                                        value="read_{{ $p }}"
                                                                        id="flexCheckCheckedR{{ $key }}">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckCheckedR{{ $key }}">
                                                                        {{ __('Read') }}
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input wire:model="permission"
                                                                        class="form-check-input" type="checkbox"
                                                                        value="delete_{{ $p }}"
                                                                        id="flexCheckCheckedD{{ $key }}">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckCheckedD{{ $key }}">
                                                                        {{ __('Delete') }}
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input wire:model="permission"
                                                                        class="form-check-input" type="checkbox"
                                                                        value="edit_{{ $p }}"
                                                                        id="flexCheckCheckedU{{ $key }}">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckCheckedU{{ $key }}">
                                                                        {{ __('Update') }}
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        <span class="text-danger">
                                            @error('permission')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <hr>
                                    @if (!$errors->any())
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button type="submit"
                                                class="mx-auto w-100 btn btn-block btn-outline-success">{{ __('Create') }}
                                                <i class="bi bi-plus-square"></i></button>
                                        </div>
                                    @else
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button type="submit"
                                                class="mx-auto w-100 btn btn-block btn-outline-success"
                                                disabled>{{ __('Create') }}
                                                <i class="bi bi-plus-square"></i></button>
                                        </div>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
