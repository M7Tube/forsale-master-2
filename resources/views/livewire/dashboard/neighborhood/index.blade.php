@extends('layouts.livewireLayout')

@section('tableName', __('Neighborhoods'))
@section('searchOptions')
    <option value="en_name">{{ __('English Name') }}</option>
    <option value="ar_name">{{ __('Arabic Name') }}</option>
    <option value="governorate_id">{{ __('Governorates') }}</option>
    <option value="area_id">{{ __('Areas') }}</option>
@endsection
@section('createButton')
    <button type="button" class="justify-content-left btn btn-outline-success w-100 mt-2" data-bs-toggle="modal"
        data-bs-target="#CreateModal"><i class="bi bi-plus-square"></i></button>
@endsection
@section('table-head-names')
    <th>{{ __('English Name') }}</th>
    <th>{{ __('Arabic Name') }}</th>
    <th>{{ __('Governorates') }}</th>
    <th>{{ __('Areas') }}</th>
    <th>{{ __('Action') }}</th>
@endsection
@section('table-body')
    @forelse($neighborhoods as $data)
        <tbody>
            <tr>
                <td>{{ $data->en_name }}
                </td>
                <td>{{ $data->ar_name }}
                </td>
                @if (app()->getLocale() == 'en')
                    <td>{{ $data->governorate->en_name ?? 'Empty' }}
                    </td>
                @else
                    <td>{{ $data->governorate->ar_name ?? 'Empty' }}
                    </td>
                @endif
                @if (app()->getLocale() == 'en')
                    <td>{{ $data->area->en_name ?? 'Empty' }}
                    </td>
                @else
                    <td>{{ $data->area->ar_name ?? 'Empty' }}
                    </td>
                @endif

                <td>
                    <button type="button" class="btn btn-outline-primary mb-2" data-bs-toggle="modal"
                        data-bs-target="#editModal" wire:click.prevent="edit({{ $data->neighborhood_id }})"><i
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
    @if (Session()->has('WrongNeighborhood'))
        <div class="alert alert-danger">
            {{ Session('WrongNeighborhood') }}
        </div>
    @endif
    @if (!Session()->has('WrongNeighborhood'))
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
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <select class="form-control" wire:model="governorate_id" id="inputGovenorate">
                                <option selected>{{ __('Choose Govenorate') }}
                                </option>
                                @forelse ($govenorates as $gov)
                                    @if (app()->getLocale() == 'en')
                                        <option value="{{ $gov->governorate_id }}">
                                            {{ $gov->en_name }}
                                        </option>
                                    @else
                                        <option value="{{ $gov->governorate_id }}">
                                            {{ $gov->ar_name }}
                                        </option>
                                    @endif
                                @empty
                                @endforelse
                            </select>
                            <label for="inputGovenorate">{{ __('Govenorate') }}</label>
                            <span class="text-danger">
                                @error('governorate_id')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <select class="form-control" wire:model="area_id" id="inputArea">
                                <option selected>{{ __('Choose Area') }}
                                </option>
                                @forelse ($areas as $are)
                                    @if (app()->getLocale() == 'en')
                                        <option value="{{ $are->area_id }}">
                                            {{ $are->en_name }}
                                        </option>
                                    @else
                                        <option value="{{ $are->area_id }}">
                                            {{ $are->ar_name }}
                                        </option>
                                    @endif
                                @empty
                                @endforelse
                            </select>
                            <label for="inputArea">{{ __('Area') }}</label>
                            <span class="text-danger">
                                @error('area_id')
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
    @if (Session()->has('WrongNeighborhood'))
        <div class="alert alert-danger">
            {{ Session('WrongNeighborhood') }}
        </div>
    @endif
    @if (!Session()->has('WrongNeighborhood'))
        <div class="card-body">
            <form autocomplete="off" method="POST">
                @csrf
                <input type="hidden" name="neighborhood_id" wire:model="neighborhood_id">
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
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <select class="form-control" wire:model="governorate_id" id="inputGovenorate">
                                <option selected>{{ __('Choose Govenorate') }}
                                </option>
                                @forelse ($govenorates as $gov)
                                    @if (app()->getLocale() == 'en')
                                        <option value="{{ $gov->governorate_id }}">
                                            {{ $gov->en_name }}
                                        </option>
                                    @else
                                        <option value="{{ $gov->governorate_id }}">
                                            {{ $gov->ar_name }}
                                        </option>
                                    @endif
                                @empty
                                @endforelse
                            </select>
                            <label for="inputGovenorate">{{ __('Govenorate') }}</label>
                            <span class="text-danger">
                                @error('governorate_id')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <select class="form-control" wire:model="area_id" id="inputArea">
                                <option selected>{{ __('Choose Area') }}
                                </option>
                                @forelse ($areas as $are)
                                    @if (app()->getLocale() == 'en')
                                        <option value="{{ $are->area_id }}">
                                            {{ $are->en_name }}
                                        </option>
                                    @else
                                        <option value="{{ $are->area_id }}">
                                            {{ $are->ar_name }}
                                        </option>
                                    @endif
                                @empty
                                @endforelse
                            </select>
                            <label for="inputArea">{{ __('Area') }}</label>
                            <span class="text-danger">
                                @error('area_id')
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
    {!! $neighborhoods->links() !!}
@endsection
