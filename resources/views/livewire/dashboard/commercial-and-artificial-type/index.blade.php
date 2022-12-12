@extends('layouts.livewireLayout')

@section('tableName', __('Commercial And Artificial Type'))
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
    <th>{{ __('Real Estate Main Category') }}</th>
    <th>{{ __('Action') }}</th>
@endsection
@section('table-body')
    @forelse($CAAT as $data)
        <tbody>
            <tr>
                <td>{{ $data->en_name }}
                </td>
                <td>{{ $data->ar_name }}
                </td>
                @if (app()->getLocale() == 'en')
                    <td>{{ $data->RealEstateMainCategory->en_name }}
                    </td>
                @else
                    <td>{{ $data->RealEstateMainCategory->ar_name }}
                    </td>
                @endif

                <td>
                    <button type="button" class="btn btn-outline-primary mb-2" data-bs-toggle="modal"
                        data-bs-target="#editModal" wire:click.prevent="edit({{ $data->CAAT_id }})"><i
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
    <h3 class="text-center"></h3>{{ __('You Cant Create New Things Here') }}
@endsection
@section('edit-model-body')
    @if (Session()->has('WrongCommercialAndArtificialType'))
        <div class="alert alert-danger">
            {{ Session('WrongCommercialAndArtificialType') }}
        </div>
    @endif
    @if (!Session()->has('WrongCommercialAndArtificialType'))
        <div class="card-body">
            <form autocomplete="off" method="POST">
                @csrf
                <input type="hidden" name="CAAT_id" wire:model="CAAT_id">
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
    {!! $CAAT->links() !!}
@endsection
