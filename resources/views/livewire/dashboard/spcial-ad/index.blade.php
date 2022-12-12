@extends('layouts.livewireLayout')

@section('tableName', __('Admin Ads'))
@section('searchOptions')
    <option value="en_title">{{ __('English Title') }}</option>
    <option value="ar_title">{{ __('Arabic Title') }}</option>
    <option value="en_desc">{{ __('English Description') }}</option>
    <option value="ar_desc">{{ __('Arabic Description') }}</option>
    <option value="is_golden">{{ __('Golden Status') }}</option>
    <option value="user_id">{{ __('User') }}</option>
@endsection
@section('createButton')
    <a href="{{ route('web.crud.create.spcialAd', app()->getLocale()) }}"
        class="justify-content-left btn btn-outline-success w-100 mt-2"><i class="bi bi-plus-square"></i></a>
@endsection
@section('table-head-names')
    <th>{{ __('English Title') }}</th>
    <th>{{ __('Arabic Title') }}</th>
    <th>{{ __('English Description') }}</th>
    <th>{{ __('Arabic Description') }}</th>
    <th>{{ __('Picture') }}</th>
    <th>{{ __('Golden Status') }}</th>
    <th>{{ __('User') }}</th>
    <th>{{ __('Action') }}</th>
@endsection
@section('table-body')
    @forelse($SA as $data)
        <tbody>
            <tr>
                <td>{{ $data->en_title }}
                </td>
                <td>{{ $data->ar_title }}
                </td>
                <td>{{ $data->en_desc }}
                </td>
                <td>{{ $data->ar_desc }}
                </td>
                <td>
                    @if ($data->picture)
                        <a
                            href="{{ route('web.crud.edit.spcialadPicture', [app()->getLocale(), 'id' => $data->spcial_ad_id]) }}"><img
                                src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $data->picture)) !!}" width="75px"
                                alt="Ad Picture"></a>
                    @else
                        {{ __('Empty') }}
                    @endif
                </td>
                <td>
                    @if ($data->is_golden == 1)
                        <span style="color: rgb(255, 204, 0)">{{ __('Golden') }}</span>
                    @else
                        <span style="color: rgb(165, 165, 165)">{{ __('Normal') }}</span>
                    @endif
                </td>
                <td>
                    {{ __('Created By') }} <span
                        class="text-muted">{{ $data->user->first_name ?? __('Empty') }}</span>
                    {{ __('Email') }} <span class="text-muted">{{ $data->user->email ?? __('Empty') }}</span>
                </td>
                <td>
                    <a href="{{ route('web.crud.edit.spcialAd', ['id' => $data->spcial_ad_id, app()->getLocale()]) }}"
                        class="btn btn-outline-primary mb-2"><i class="bi bi-pen"></i></a>
                    @if ($data->is_golden != 1)
                        <button class="btn btn-outline-warning mb-2"
                            wire:click.prevent="makeGolden({{ $data->spcial_ad_id }})"><i
                                class="bi bi-bookmark-star"></i></button>
                    @else
                    @endif
                </td>
            </tr>
        </tbody>
    @empty
        <tr>
            <td colspan="100">
                <h5 class="text-center">
                    <i>{{ __('Empty') }}</i>
                </h5>
            </td>
        </tr>
    @endforelse
@endsection
@section('linksOfPaganation')
    {!! $SA->links() !!}
@endsection
