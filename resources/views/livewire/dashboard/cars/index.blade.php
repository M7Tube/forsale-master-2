@extends('layouts.livewireLayout')

@section('tableName', __('Cars'))
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
    @forelse($Cars as $data)
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
                                    {{ __('Kilometrag') }}</div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        {{ $data->kilometrag ?? '' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    {{ __('Manufacturing Year') }}</div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        {{ $data->manufacturing_year ?? '' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    {{ __('Price') }}</div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        {{ $data->price ?? '' }}
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
                                    {{ __('Car Type') }}</div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        {{ app()->getLocale() == 'ar' ? $data->CarType->ar_name ?? '' : $data->CarType->en_name ?? '' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    {{ __('Car Status') }}</div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        {{ app()->getLocale() == 'ar' ? $data->CarStatus->ar_name ?? '' : $data->CarStatus->en_name ?? '' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    {{ __('Rent Or Sale') }}</div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        {{ app()->getLocale() == 'ar' ? $data->RentOrSale->ar_name ?? '' : $data->RentOrSale->en_name ?? '' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    {{ __('Motion Vector') }}</div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        {{ app()->getLocale() == 'ar' ? $data->MotionVector->ar_name ?? '' : $data->MotionVector->en_name ?? '' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    {{ __('Country Of Manufacture') }}</div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        {{ app()->getLocale() == 'ar' ? $data->CountryOfManufacture->ar_name ?? '' : $data->CountryOfManufacture->en_name ?? '' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    {{ __('Continent Of Origin') }}</div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        {{ app()->getLocale() == 'ar' ? $data->ContinentOfOrigins->ar_name ?? '' : $data->ContinentOfOrigins->en_name ?? '' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    {{ __('Color') }}</div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        {{ app()->getLocale() == 'ar' ? $data->Color->ar_name ?? '' : $data->Color->en_name ?? '' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    {{ __('Rental Time') }}</div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        {{ app()->getLocale() == 'ar' ? $data->RentalTime->ar_rent_name ?? '' : $data->RentalTime->en_rent_name ?? '' }}
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
    @endforelse
@endsection
@section('linksOfPaganation')
    {!! $Cars->links() !!}
@endsection
