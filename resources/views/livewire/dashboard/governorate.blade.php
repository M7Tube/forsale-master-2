@extends('layouts.livewireLayout')

@section('tableName', __('Governorate Table'))
@section('searchOptions')
    <option value="en_name">{{ __('English Name') }}</option>
    <option value="ar_name">{{ __('Arabic Name') }}</option>
@endsection
@section('createButton')
    <button type="button" class="justify-content-left btn btn-outline-success w-100 mt-2" data-bs-toggle="modal"
        data-bs-target="#CreateModal"><i class="bi bi-plus-square"></i></button>
@endsection
@section('table-head-names')
    <th>{{ __('English Name') }}</th>
    <th>{{ __('Arabic Name') }}</th>
    @if ($governorates)
        <th>{{ __('Areas Count') }}</th>
    @else
    @endif
    @if ($governorates)
        <th>{{ __('Neighborhood Count') }}</th>
    @else
    @endif
    <th>{{ __('Action') }}</th>
@endsection
@section('table-body')
    @forelse($governorates as $governorate)
        <tbody>
            <tr>
                <td>{{ $governorate->en_name }}
                </td>
                <td>{{ $governorate->ar_name }}
                </td>
                <td>
                    <span class="text-muted"><u>{{ count($governorate->areas) ?? '!!!' }}</u></span>
                </td>
                <td>
                    <span class="text-muted"><u>{{ count($governorate->neighborhood) ?? '!!!' }}</u></span>
                </td>
                <td>
                    <button type="button" class="btn btn-outline-primary mb-2" data-bs-toggle="modal"
                        data-bs-target="#editModal" wire:click.prevent="edit({{ $governorate->governorate_id }})"><i
                            class="bi bi-pen"></i></button>
                </td>
            </tr>
        </tbody>
    @empty
        <tr>
            <td colspan="100">
                <h5 class="text-center">
                    <i>{{ __('Empty') }} <button type="button" class="btn btn-outline-success mb-2" data-bs-toggle="modal"
                            data-bs-target="#CreateModal"><i class="bi bi-plus-square"></i></button></i>
                </h5>
            </td>
        </tr>
    @endforelse
@endsection
@section('create-model-body')
    @if (Session()->has('WrongGovernorate'))
        <div class="alert alert-danger">
            {{ Session('WrongGovernorate') }}
        </div>
    @endif
    @if (!Session()->has('WrongGovernorate'))
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
                            <input class="form-control" id="inputname" type="text" name="en_name" autocomplete="off"
                                wire:model="en_name" />
                            <label for="inputen_name">{{ __('English Name') }}
                            </label>
                            <span class="text-danger">
                                @error('en_name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputname" type="text" name="ar_name" autocomplete="off"
                                wire:model="ar_name" />
                            <label for="inputar_name">{{ __('Arabic Name') }}
                            </label>
                            <span class="text-danger">
                                @error('ar_name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    @endif
@endsection
@section('edit-model-body')
    @if (Session()->has('WrongGovernorate'))
        <div class="alert alert-danger">
            {{ Session('WrongGovernorate') }}
        </div>
    @endif
    @if (!Session()->has('WrongGovernorate'))
        <div class="card-body">
            <form autocomplete="off" method="POST">
                @csrf
                <input type="hidden" name="governorate_id" wire:model="governorate_id">
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
                            <input class="form-control" id="inputname" type="text" name="en_name" autocomplete="off"
                                wire:model="en_name" />
                            <label for="inputen_name">{{ __('English Name') }}
                            </label>
                            <span class="text-danger">
                                @error('en_name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputname" type="text" name="ar_name" autocomplete="off"
                                wire:model="ar_name" />
                            <label for="inputar_name">{{ __('Arabic Name') }}
                            </label>
                            <span class="text-danger">
                                @error('ar_name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    @endif
@endsection
@section('linksOfPaganation')
    {!! $governorates->links() !!}
@endsection
