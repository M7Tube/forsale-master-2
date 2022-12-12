@extends('layouts.livewireLayout')

@section('tableName', __('Jobs'))
@section('searchOptions')
    <option value="ar_title">{{ __('Arabic Title') }}</option>
    <option value="en_title">{{ __('English Title') }}</option>
    <option value="ar_desc">{{ __('Arabic Descriptions') }}</option>
    <option value="en_desc">{{ __('English Descriptions') }}</option>
    <option value="phone_number">{{ __('Phone Number') }}</option>
    <option value="manger_accept">{{ __('Manger Accept') }}</option>
@endsection
@section('table-head-names')
    <th>{{ __('English Title') }}</th>
    <th>{{ __('Arabic Title') }}</th>
    <th>{{ __('English Descriptions') }}</th>
    <th>{{ __('Arabic Descriptions') }}</th>
    <th>{{ __('Phone Number') }}</th>
    <th>{{ __('Manger Accept') }}</th>
    <th>{{ __('Picture') }}</th>
    <th>{{ __('Ad Info') }}</th>
@endsection
@section('table-body')
    @forelse($Jobs as $data)
        <tbody>
            <tr>
                <td>{{ $data->en_title ?? '' }}
                </td>
                <td>{{ $data->ar_title ?? '' }}
                </td>
                <td>{{ $data->en_desc ?? '' }}
                </td>
                <td>{{ $data->ar_desc ?? '' }}
                </td>
                <td>{{ $data->phone_number ?? '' }}
                </td>
                @if ($data->manger_accept == 0)
                    <td>{{ __('Rejcted') }}
                    </td>
                @elseif($data->manger_accept == 1)
                    <td>{{ __('Need Approvoel') }}
                    </td>
                @elseif($data->manger_accept == 2)
                    <td>{{ __('Accepted') }}
                    </td>
                @endif
                <td>
                    <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#picModel">
                        {{ __('View Ad Pictures') }}
                    </button>
                </td>

                <td>
                    <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#InfoModel">
                        {{ __('Ad Info') }}
                    </button>
                </td>
                {{-- <td>
                    <button type="button" class="btn btn-outline-primary mb-2" data-bs-toggle="modal"
                        data-bs-target="#editModal" wire:click.prevent="edit({{ $data->job_id }})"><i
                            class="bi bi-pen"></i></button>
                </td> --}}
            </tr>
        </tbody>

        <!-- Ad Picture Modal -->
        <div class="modal fade" id="picModel" tabindex="-1" aria-labelledby="picModelLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="picModelLabel">{{ __('Ad Pictures') }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @foreach (json_decode($data->picture) as $pic)
                            @if (file_exists('../storage/app/img/' . $pic))
                                <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $pic)) !!}" alt="job picture"
                                    width="200px">
                            @endif
                        @endforeach
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">{{ __('Close') }}</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ad Info Modal -->
        <div class="modal fade" id="InfoModel" tabindex="-1" aria-labelledby="InfoModelLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="InfoModelLabel">{{ __('Ad Pictures') }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    {{ __('is Phone Visable') }}</div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        {{ $data->isPhone_visable == 1 ? __('Yes') : __('No') ?? '' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    {{ __('Qualification') }}</div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        {{ $data->qualification ?? '' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    {{ __('Age') }}</div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        {{ $data->age ?? '' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    {{ __('Salary') }}</div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        {{ $data->salary ?? '' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    {{ __('Work Hour') }}</div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        {{ $data->work_hour ?? '' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    {{ __('Extra Work Hour') }}</div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        {{ $data->extra_work_hour ?? '' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    {{ __('Work Hour Rent') }}</div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        {{ $data->work_hour_rent ?? '' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    {{ __('Driving License') }}</div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        {{ $data->driving_license == 1 ? __('Yes') : __('No') ?? '' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    {{ __('Is Special') }}</div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        {{ $data->is_special == 1 ? __('Yes') : __('No') ?? '' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    {{ __('Watch Count') }}</div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        {{ $data->watch_count ?? 0 }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    {{ __('User') }}</div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        {{ ($data->User->first_name ?? '') . ' ' . ($data->User->last_name ?? '') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    {{ __('Governorate') }}</div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        {{ app()->getLocale() == 'ar' ? $data->governorate->ar_name ?? '' : $data->governorate->en_name ?? '' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    {{ __('Area') }}</div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        {{ app()->getLocale() == 'ar' ? $data->Area->ar_name ?? '' : $data->Area->en_name ?? '' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    {{ __('Job Category') }}</div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        {{ app()->getLocale() == 'ar' ? $data->JobCategory->ar_name ?? '' : $data->JobCategory->en_name ?? '' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    {{ __('Person Langueges') }}</div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        {{ app()->getLocale() == 'ar' ? $data->PersonLanguage->ar_name ?? '' : $data->PersonLanguage->en_name ?? '' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    {{ __('Years Of Experience') }}</div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        {{ app()->getLocale() == 'ar' ? $data->YearsOfExperience->ar_name ?? '' : $data->YearsOfExperience->en_name ?? '' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    {{ __('Ad Type') }}</div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        {{ app()->getLocale() == 'ar' ? $data->AdType->ar_name ?? '' : $data->AdType->en_name ?? '' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    {{ __('Ad Status') }}</div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        {{ app()->getLocale() == 'ar' ? $data->AdStatus->ar_name ?? '' : $data->AdStatus->en_name ?? '' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">{{ __('Close') }}</button>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <tr>
            <td colspan="100">
                <h5 class="text-center">
                    <i>{{ __('Empty') }} <button type="button" class="btn btn-outline-success mb-2"
                            data-bs-toggle="modal" data-bs-target="#CreateModal"><i
                                class="bi bi-plus-square"></i></button></i>
                </h5>
            </td>
        </tr>
    @endforelse
@endsection
@section('create-model-body')
    @if (Session()->has('WrongJob'))
        <div class="alert alert-danger">
            {{ Session('WrongJob') }}
        </div>
    @endif
    @if (!Session()->has('WrongJob'))
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
                            <input class="form-control" id="inputname" type="text" name="en_title"
                                autocomplete="off" wire:model="en_title" />
                            <label for="inputen_title">{{ __('English Name') }}
                            </label>
                            <span class="text-danger">
                                @error('en_title')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputname" type="text" name="ar_title"
                                autocomplete="off" wire:model="ar_title" />
                            <label for="inputar_title">{{ __('Arabic Name') }}
                            </label>
                            <span class="text-danger">
                                @error('ar_title')
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
    @if (Session()->has('WrongJob'))
        <div class="alert alert-danger">
            {{ Session('WrongJob') }}
        </div>
    @endif
    @if (!Session()->has('WrongJob'))
        <div class="card-body">
            <form autocomplete="off" method="POST">
                @csrf
                <input type="hidden" name="job_id" wire:model="job_id">
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
                            <input class="form-control" id="inputname" type="text" name="en_title"
                                autocomplete="off" wire:model="en_title" />
                            <label for="inputen_title">{{ __('English Name') }}
                            </label>
                            <span class="text-danger">
                                @error('en_title')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputname" type="text" name="ar_title"
                                autocomplete="off" wire:model="ar_title" />
                            <label for="inputar_title">{{ __('Arabic Name') }}
                            </label>
                            <span class="text-danger">
                                @error('ar_title')
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
    {!! $Jobs->links() !!}
@endsection
