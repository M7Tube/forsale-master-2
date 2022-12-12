@extends('layouts.livewireLayout')

@section('tableName', __('Areas'))
@section('searchOptions')
    <option value="en_name">{{ __('English Name') }}</option>
    <option value="ar_name">{{ __('Arabic Name') }}</option>
    <option value="governorate_id">{{ __('Governorate') }}</option>
@endsection
@section('createButton')
    <button type="button" class="justify-content-left btn btn-outline-success w-100 mt-2" data-bs-toggle="modal"
        data-bs-target="#CreateModal"><i class="bi bi-plus-square"></i></button>
@endsection
@section('table-head-names')
    <th>{{ __('English Name') }}</th>
    <th>{{ __('Arabic Name') }}</th>
    <th>{{ __('Governorate') }}</th>
    <th>{{ __('Action') }}</th>
@endsection
@section('table-body')
    @forelse($areas as $data)
        <tbody>
            <tr>
                <td>{{ $data->en_name }}
                </td>
                <td>{{ $data->ar_name }}
                </td>
                @if (app()->getLocale() == 'en')
                    <td>{{ $data->governorate->en_name }}
                    </td>
                @else
                    <td>{{ $data->governorate->ar_name }}
                    </td>
                @endif

                <td>
                    <button type="button" class="btn btn-outline-primary mb-2" data-bs-toggle="modal"
                        data-bs-target="#editModal" wire:click.prevent="edit({{ $data->area_id }})"><i
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
    @if (Session()->has('WrongArea'))
        <div class="alert alert-danger">
            {{ Session('WrongArea') }}
        </div>
    @endif
    @if (!Session()->has('WrongArea'))
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
                            <select class="form-control" name="governorate_id" wire:model="governorate_id" id="">
                                @forelse ($governorate as $data)
                                    @if (app()->getLocale() == 'en')
                                        <option value="{{ $data->governorate_id }}">{{ $data->en_name }}</option>
                                    @else
                                        <option value="{{ $data->governorate_id }}">{{ $data->ar_name }}</option>
                                    @endif
                                @empty
                                    <option value="0">{{ __('Empty') }}</option>
                                @endforelse
                            </select>
                            <label for="inputar_name">{{ __('Governorate') }}
                            </label>
                            <span class="text-danger">
                                @error('governorate_id')
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
    @if (Session()->has('WrongArea'))
        <div class="alert alert-danger">
            {{ Session('WrongArea') }}
        </div>
    @endif
    @if (!Session()->has('WrongArea'))
        <div class="card-body">
            <form autocomplete="off" method="POST">
                @csrf
                <input type="hidden" name="area_id" wire:model="area_id">
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
                            <select class="form-control" name="governorate_id" wire:model="governorate_id" id="">
                                @forelse ($governorate as $data)
                                    @if (app()->getLocale() == 'en')
                                        <option value="{{ $data->governorate_id }}">{{ $data->en_name }}</option>
                                    @else
                                        <option value="{{ $data->governorate_id }}">{{ $data->ar_name }}</option>
                                    @endif
                                @empty
                                    <option value="0">{{ __('Empty') }}</option>
                                @endforelse
                            </select>
                            <label for="inputar_name">{{ __('Governorate') }}
                            </label>
                            <span class="text-danger">
                                @error('governorate_id')
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
    {!! $areas->links() !!}
@endsection
