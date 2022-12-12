<div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">{{ __('App Settings') }}</h3>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent="edit">
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
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <div class="my-2 col-12">
                                            <div class="Scard card shadow-lg border-2 rounded-lg">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media">
                                                            <div class="media-body text-right">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        {{ __('English Terms') }}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-floating mb-1">
                                                                            <textarea class="form-control" id="en_terms" type="text" wire:model="en_terms" autocomplete="off" rows="10"
                                                                                cols="10"></textarea>
                                                                            <span class="text-danger">
                                                                                @error('en_terms')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                            <label
                                                                                for="date">{{ __('Write English Terms') }}
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
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <div class="my-2 col-12">
                                            <div class="Scard card shadow-lg border-2 rounded-lg">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media">
                                                            <div class="media-body text-right">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        {{ __('Arabic Terms') }}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-floating mb-1">
                                                                            <textarea class="form-control" id="ar_terms" type="text" wire:model="ar_terms" autocomplete="off" rows="10"
                                                                                cols="10"></textarea>
                                                                            <span class="text-danger">
                                                                                @error('ar_terms')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                            <label
                                                                                for="date">{{ __('Write Arabic Terms') }}
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
                                <div class="col-12 col-md-6">
                                    <div class="form-floating mb-3">
                                        <div class="my-2 col-12">
                                            <div class="Scard card shadow-lg border-2 rounded-lg">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media">
                                                            <div class="media-body text-right">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        {{ __('Manger Accept') }}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-floating mb-1">
                                                                            <select wire:model="manger_accept"
                                                                                class="form-control" id="">
                                                                                <option value="0">
                                                                                    {{ __('Rejected') }}</option>
                                                                                <option value="1">
                                                                                    {{ __('Need Approval') }}</option>
                                                                                <option value="2">
                                                                                    {{ __('Accepted') }}</option>
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('ar_terms')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                            <label
                                                                                for="date">{{ __('Defualt Manger Accept') }}
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
                                <div class="col-12 col-md-6">
                                    <div class="form-floating mb-3">
                                        <div class="my-2 col-12">
                                            <div class="Scard card shadow-lg border-2 rounded-lg">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media">
                                                            <div class="media-body text-right">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        {{ __('Defualt Wallet Balance') }}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-floating mb-1">
                                                                            <input class="form-control"
                                                                                id="wallet_defualt_balance"
                                                                                type="text"
                                                                                wire:model="wallet_defualt_balance"
                                                                                autocomplete="off"/>
                                                                            <span class="text-danger">
                                                                                @error('wallet_defualt_balance')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                            <label
                                                                                for="date">{{ __('Defualt Wallet Balance') }}
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
                                <div class="col-12 col-md-6">
                                    <div class="form-floating mb-3">
                                        <div class="my-2 col-12">
                                            <div class="Scard card shadow-lg border-2 rounded-lg">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media">
                                                            <div class="media-body text-right">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        {{ __('Instagram') }}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-floating mb-1">
                                                                            <input class="form-control"
                                                                                id="instagram"
                                                                                type="text"
                                                                                wire:model="instagram"
                                                                                autocomplete="off"/>
                                                                            <span class="text-danger">
                                                                                @error('instagram')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                            <label
                                                                                for="date">{{ __('Instagram') }}
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
                                <div class="col-12 col-md-6">
                                    <div class="form-floating mb-3">
                                        <div class="my-2 col-12">
                                            <div class="Scard card shadow-lg border-2 rounded-lg">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media">
                                                            <div class="media-body text-right">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        {{ __('Facebook') }}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-floating mb-1">
                                                                            <input class="form-control"
                                                                                id="facebook"
                                                                                type="text"
                                                                                wire:model="facebook"
                                                                                autocomplete="off"/>
                                                                            <span class="text-danger">
                                                                                @error('facebook')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                            <label
                                                                                for="date">{{ __('Facebook') }}
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
                                <div class="col-12 col-md-6">
                                    <div class="form-floating mb-3">
                                        <div class="my-2 col-12">
                                            <div class="Scard card shadow-lg border-2 rounded-lg">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media">
                                                            <div class="media-body text-right">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        {{ __('Twitter') }}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-floating mb-1">
                                                                            <input class="form-control"
                                                                                id="twitter"
                                                                                type="text"
                                                                                wire:model="twitter"
                                                                                autocomplete="off"/>
                                                                            <span class="text-danger">
                                                                                @error('twitter')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                            <label
                                                                                for="date">{{ __('Twitter') }}
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
                                <div class="col-12 col-md-6">
                                    <div class="form-floating mb-3">
                                        <div class="my-2 col-12">
                                            <div class="Scard card shadow-lg border-2 rounded-lg">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media">
                                                            <div class="media-body text-right">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        {{ __('Email') }}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-floating mb-1">
                                                                            <input class="form-control"
                                                                                id="email"
                                                                                type="text"
                                                                                wire:model="email"
                                                                                autocomplete="off"/>
                                                                            <span class="text-danger">
                                                                                @error('email')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                            <label
                                                                                for="date">{{ __('Email') }}
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
                                <div class="col-12 col-md-6">
                                    <div class="form-floating mb-3">
                                        <div class="my-2 col-12">
                                            <div class="Scard card shadow-lg border-2 rounded-lg">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media">
                                                            <div class="media-body text-right">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        {{ __('Phone Number') }}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-floating mb-1">
                                                                            <input class="form-control"
                                                                                id="phone_number"
                                                                                type="text"
                                                                                wire:model="phone_number"
                                                                                autocomplete="off"/>
                                                                            <span class="text-danger">
                                                                                @error('phone_number')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                            <label
                                                                                for="date">{{ __('Phone Number') }}
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
                                <div class="col-12 col-md-6">
                                    <div class="form-floating mb-3">
                                        <div class="my-2 col-12">
                                            <div class="Scard card shadow-lg border-2 rounded-lg">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media">
                                                            <div class="media-body text-right">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        {{ __('Fax') }}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-floating mb-1">
                                                                            <input class="form-control"
                                                                                id="fax"
                                                                                type="text"
                                                                                wire:model="fax"
                                                                                autocomplete="off"/>
                                                                            <span class="text-danger">
                                                                                @error('fax')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                            <label
                                                                                for="date">{{ __('Fax') }}
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
                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                <button type="submit"
                                    class="mx-auto w-100 btn btn-block btn-outline-primary">{{ __('Save') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
