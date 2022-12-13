@extends('layouts.livewireLayout')

@section('tableName', __('Web/App Personal Users'))
@section('searchOptions')
    <option value="first_name">{{ __('First Name') }}</option>
    <option value="last_name">{{ __('Last Name') }}</option>
    <option value="phone_number">{{ __('Phone Number') }}</option>
    <option value="email">{{ __('Email') }}</option>
    <option value="is_personal">{{ __('Account Type') }}</option>
    <option value="birth_date">{{ __('Birth Date') }}</option>
@endsection
@section('table-head-names')
    <th>{{ __('First Name') }}</th>
    <th>{{ __('Last Name') }}</th>
    <th>{{ __('Phone Number') }}</th>
    <th>{{ __('Email') }}</th>
    <th>{{ __('Active') }}</th>
    <th>{{ __('Created At') }}</th>
    <th>{{ __('Birth Date') }}</th>
    <th>{{ __('Action') }}</th>
@endsection
@section('table-body')
    @forelse($Users as $data)
        <tbody>
            <tr>
                <td>{{ $data->first_name ?? '' }}
                </td>
                <td>{{ $data->last_name ?? '' }}
                </td>
                <td>{{ $data->phone_number ?? '' }}
                </td>
                <td>{{ $data->email ?? '' }}
                </td>
                <td>{{ $data->is_active == 1 ? __('Yes') : __('No') }}
                </td>
                <td>{{ $data->created_at ?? __('Empty') }}
                </td>
                <td>{{ $data->birth_date ?? __('Empty') }}
                </td>
                @role('Super-Admin')
                    <td>
                        @if ($data->hasRole('Super-Admin') == 0)
                            @if ($data->is_active == 1)
                                <button type="button"
                                    class="btn {{ $data->is_active == 1 ? 'btn-outline-danger' : 'btn-outline-success' }}"
                                    wire:click.prevent="disable({{ $data->user_id }})">{{ $data->is_active == 1 ? __('Disable') : __('Enable') }}</button>
                            @else
                                <button type="button"
                                    class="btn {{ $data->is_active == 1 ? 'btn-outline-danger' : 'btn-outline-success' }}"
                                    wire:click.prevent="active({{ $data->user_id }})">{{ $data->is_active == 1 ? __('Disable') : __('Enable') }}</button>
                            @endif
                            @if ($data->unlimited == 1)
                                <button type="button"
                                    class="btn {{ $data->unlimited == 1 ? 'btn-outline-danger' : 'btn-outline-success' }}"
                                    wire:click.prevent="cancelunlimited({{ $data->user_id }})">{{ $data->unlimited == 1 ? __('Limited') : __('Unlimited') }}</button>
                            @else
                                <button type="button"
                                    class="btn {{ $data->unlimited == 1 ? 'btn-outline-danger' : 'btn-outline-success' }}"
                                    wire:click.prevent="makeunlimited({{ $data->user_id }})">{{ $data->unlimited == 1 ? __('Limited') : __('Unlimited') }}</button>
                            @endif
                        @endif
                    </td>
                @endrole
            </tr>
        </tbody>
    @empty
        {{-- <tr>
            <td colspan="100">
                <h5 class="text-center">
                    <i>{{ __('Empty') }} <button type="button" class="btn btn-outline-success mb-2"
                            data-bs-toggle="modal" data-bs-target="#CreateModal"><i
                                class="bi bi-plus-square"></i></button></i>
                </h5>
            </td>
        </tr> --}}
    @endforelse
@endsection
{{-- @section('create-model-body')
    @if (Session()->has('WrongUser'))
        <div class="alert alert-danger">
            {{ Session('WrongUser') }}
        </div>
    @endif
    @if (!Session()->has('WrongUser'))
        <div class="card-body">
            <form autocomplete="off" method="POST">
                @csrf
                <div class="results">
                    @if (Session()->has('message'))
                        <div class="alert alert-success">
                            {{ Session('message') }}
                        </div>
                    @endif
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputname" type="text" name="first_name" autocomplete="off"
                                wire:model="first_name" />
                            <label for="inputfirst_name">{{ __('First Name') }}
                            </label>
                            <span class="text-danger">
                                @error('first_name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputname" type="text" name="last_name" autocomplete="off"
                                wire:model="last_name" />
                            <label for="inputlast_name">{{ __('Last Name') }}
                            </label>
                            <span class="text-danger">
                                @error('last_name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputname" type="text" name="phone_number" autocomplete="off"
                                wire:model="phone_number" />
                            <label for="inputphone_number">{{ __('Phone Number') }}
                            </label>
                            <span class="text-danger">
                                @error('phone_number')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputname" type="text" name="email" autocomplete="off"
                                wire:model="email" />
                            <label for="inputemail">{{ __('Email') }}
                            </label>
                            <span class="text-danger">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <select class="form-control" name="is_personal" wire:model="is_personal" id="">
                                <option value="0">{{ __('No') }}</option>
                                <option value="1">{{ __('Yes') }}</option>
                            </select>
                            <label for="inputemail">{{ __('Account Type') }}
                            </label>
                            <span class="text-danger">
                                @error('is_personal')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    @endif
@endsection --}}
{{-- <div wire:ignore.self class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModallabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalText">{{ __('Edit') }}
                    {{ __('Admin Users') }}
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    wire:click.prevent="clear()"></button>
            </div>
            <div class="modal-body">
                @if (Session()->has('WrongUser'))
                    <div class="alert alert-danger">
                        {{ Session('WrongUser') }}
                    </div>
                @endif
                @if (!Session()->has('WrongUser'))
                    <div class="card-body">
                        <form autocomplete="off" method="POST">
                            @csrf
                            <input type="hidden" name="user_id" wire:model="user_id">
                            <div class="results">
                                @if (Session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ Session('message') }}
                                    </div>
                                @endif
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputname" type="text" name="first_name"
                                            autocomplete="off" wire:model="first_name" />
                                        <label for="inputfirst_name">{{ __('First Name') }}
                                        </label>
                                        <span class="text-danger">
                                            @error('first_name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputname" type="text" name="last_name"
                                            autocomplete="off" wire:model="last_name" />
                                        <label for="inputlast_name">{{ __('Last Name') }}
                                        </label>
                                        <span class="text-danger">
                                            @error('last_name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputname" type="text" name="phone_number"
                                            autocomplete="off" wire:model="phone_number" />
                                        <label for="inputphone_number">{{ __('Phone Number') }}
                                        </label>
                                        <span class="text-danger">
                                            @error('phone_number')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputname" type="text" name="email"
                                            autocomplete="off" wire:model="email" />
                                        <label for="inputemail">{{ __('Email') }}
                                        </label>
                                        <span class="text-danger">
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal"
                    wire:click.prevent="clear()">{{ __('Close') }}</button>
                <button type="button" class="btn btn-outline-danger"
                    wire:click.prevent="disable()">{{ __('Disable') }}</button>
                <button type="submit" class="btn btn-outline-primary"
                    wire:click.prevent="update()">{{ __('Save Changes') }}</button>
            </div>
        </div>
    </div>
</div> --}}

@section('linksOfPaganation')
    {!! $Users->links() !!}
@endsection
