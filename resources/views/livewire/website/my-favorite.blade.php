<div>
    <h4 class="p-3">{{ __('My Favorite') }}</h4>
    <div class="d-flex justify-content-center">
        <div wire:loading>

            <div class="lds-roller mx-auto">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <div class="row" id="ads" wire:init="loadData" wire:loading.remove>
        @if ($data)
            @forelse ($data as $ad)
                @if ($ad->car_id)
                    <div class="col-6 col-sm-4 col-md-3 mb-5">
                        <a href="{{ route('website.ad', [app()->getLocale(), 'category' => 1, 'id' => $ad->car->car_id]) }}"
                            style="text-decoration: none; color:black;">
                            <div class="card">
                                <div class="card-image">
                                    <span class="card-notify-badge">{{ $ad->car->price ?? 0 }}
                                        {{ __('SYP') }}</span>
                                    @if (file_exists('../storage/app/img/' . array_values(json_decode($ad->car->picture))[0]))
                                        <img class="img-fluid img"
                                            src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . array_values(json_decode($ad->car->picture))[0])) !!}"
                                            alt="Alternate Text" />
                                    @else
                                        <img class="img-fluid img"
                                            src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                            alt="Alternate Text" />
                                    @endif
                                </div>
                                <div class="card-body">
                                    <span>{{ app()->getLocale() == 'ar' ? $ad->car->ar_title ?? $ad->car->en_title : $ad->car->en_title ?? $ad->car->ar_title }}</span>
                                </div>
                                <div class="card-image-overlay p-1">
                                    @if (\Carbon\Carbon::parse($ad->car->created_at)->diffInDays() > 0)
                                        <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                            {{ \Carbon\Carbon::parse($ad->car->created_at)->diffInDays() . __(' Days') }}
                                            | <i class="bi bi-geo-alt-fill"></i>
                                            {{ app()->getLocale() == 'ar' ? $ad->car->governorate->ar_name ?? '' : $ad->car->governorate->en_name ?? '' }}
                                        </span>
                                    @elseif(\Carbon\Carbon::parse($ad->car->created_at)->addDays(\Carbon\Carbon::parse($ad->car->created_at)->diffInDays())->diffInHours() > 0)
                                        <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                            {{ \Carbon\Carbon::parse($ad->car->created_at)->addDays(\Carbon\Carbon::parse($ad->car->created_at)->diffInDays())->diffInHours() . __(' Hours') }}
                                            | <i class="bi bi-geo-alt-fill"></i>
                                            {{ app()->getLocale() == 'ar' ? $ad->car->governorate->ar_name ?? '' : $ad->car->governorate->en_name ?? '' }}
                                        </span>
                                    @elseif(\Carbon\Carbon::parse($ad->car->created_at)->addDays(\Carbon\Carbon::parse($ad->car->created_at)->diffInDays())->diffInMinutes() > 0)
                                        <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                            {{ \Carbon\Carbon::parse($ad->car->created_at)->addDays(\Carbon\Carbon::parse($ad->car->created_at)->diffInDays())->diffInMinutes() . __(' Minute') }}
                                            | <i class="bi bi-geo-alt-fill"></i>
                                            {{ app()->getLocale() == 'ar' ? $ad->car->governorate->ar_name ?? '' : $ad->car->governorate->en_name ?? '' }}
                                        </span>
                                    @elseif(\Carbon\Carbon::parse($ad->car->created_at)->addDays(\Carbon\Carbon::parse($ad->car->created_at)->diffInDays())->diffInSeconds() >= 0)
                                        <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                            {{ \Carbon\Carbon::parse($ad->car->created_at)->addDays(\Carbon\Carbon::parse($ad->car->created_at)->diffInDays())->diffInSeconds() . __(' Seconds') }}
                                            | <i class="bi bi-geo-alt-fill"></i>
                                            {{ app()->getLocale() == 'ar' ? $ad->car->governorate->ar_name ?? '' : $ad->car->governorate->en_name ?? '' }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                @elseif($ad->real_estate_id)
                    <div class="col-6 col-sm-4 col-md-3 mb-5">
                        <a href="{{ route('website.ad', [app()->getLocale(), 'category' => 2, 'id' => $ad->real_estate->real_estate_id]) }}"
                            style="text-decoration: none; color:black;">
                            <div class="card">
                                <div class="card-image">
                                    <span class="card-notify-badge">{{ $ad->real_estate->price ?? 0 }}
                                        {{ __('SYP') }}</span>
                                    @if (file_exists('../storage/app/img/' . array_values(json_decode($ad->real_estate->picture))[0]))
                                        <img class="img-fluid img"
                                            src="data:image/png|jpg|jpeg;base64, {!! base64_encode(
                                                file_get_contents('../storage/app/img/' . array_values(json_decode($ad->real_estate->picture))[0]),
                                            ) !!}"
                                            alt="Alternate Text" />
                                    @else
                                        <img class="img-fluid img"
                                            src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                            alt="Alternate Text" />
                                    @endif
                                </div>
                                <div class="card-body">
                                    <span>{{ app()->getLocale() == 'ar' ? $ad->real_estate->ar_title ?? $ad->real_estate->en_title : $ad->real_estate->en_title ?? $ad->real_estate->ar_title }}</span>
                                </div>
                                <div class="card-image-overlay p-1">
                                    @if (\Carbon\Carbon::parse($ad->real_estate->created_at)->diffInDays() > 0)
                                        <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                            {{ \Carbon\Carbon::parse($ad->real_estate->created_at)->diffInDays() . __(' Days') }}
                                            | <i class="bi bi-geo-alt-fill"></i>
                                            {{ app()->getLocale() == 'ar' ? $ad->real_estate->governorate->ar_name ?? '' : $ad->real_estate->governorate->en_name ?? '' }}
                                        </span>
                                    @elseif(\Carbon\Carbon::parse($ad->real_estate->created_at)->addDays(\Carbon\Carbon::parse($ad->real_estate->created_at)->diffInDays())->diffInHours() > 0)
                                        <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                            {{ \Carbon\Carbon::parse($ad->real_estate->created_at)->addDays(\Carbon\Carbon::parse($ad->real_estate->created_at)->diffInDays())->diffInHours() . __(' Hours') }}
                                            | <i class="bi bi-geo-alt-fill"></i>
                                            {{ app()->getLocale() == 'ar' ? $ad->real_estate->governorate->ar_name ?? '' : $ad->real_estate->governorate->en_name ?? '' }}
                                        </span>
                                    @elseif(\Carbon\Carbon::parse($ad->real_estate->created_at)->addDays(\Carbon\Carbon::parse($ad->real_estate->created_at)->diffInDays())->diffInMinutes() > 0)
                                        <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                            {{ \Carbon\Carbon::parse($ad->real_estate->created_at)->addDays(\Carbon\Carbon::parse($ad->real_estate->created_at)->diffInDays())->diffInMinutes() . __(' Minute') }}
                                            | <i class="bi bi-geo-alt-fill"></i>
                                            {{ app()->getLocale() == 'ar' ? $ad->real_estate->governorate->ar_name ?? '' : $ad->real_estate->governorate->en_name ?? '' }}
                                        </span>
                                    @elseif(\Carbon\Carbon::parse($ad->real_estate->created_at)->addDays(\Carbon\Carbon::parse($ad->real_estate->created_at)->diffInDays())->diffInSeconds() >= 0)
                                        <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                            {{ \Carbon\Carbon::parse($ad->real_estate->created_at)->addDays(\Carbon\Carbon::parse($ad->real_estate->created_at)->diffInDays())->diffInSeconds() . __(' Seconds') }}
                                            | <i class="bi bi-geo-alt-fill"></i>
                                            {{ app()->getLocale() == 'ar' ? $ad->real_estate->governorate->ar_name ?? '' : $ad->real_estate->governorate->en_name ?? '' }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                @elseif($ad->job_id)
                    <div class="col-6 col-sm-4 col-md-3 mb-5">
                        <a href="{{ route('website.ad', [app()->getLocale(), 'category' => 3, 'id' => $ad->job->job_id]) }}"
                            style="text-decoration: none; color:black;">
                            <div class="card">
                                <div class="card-image">
                                    <span class="card-notify-badge">{{ $ad->job->salary ?? 0 }}
                                        {{ __('SYP') }}</span>
                                    @if (file_exists('../storage/app/img/' . array_values(json_decode($ad->job->picture))[0]))
                                        <img class="img-fluid img"
                                            src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . array_values(json_decode($ad->job->picture))[0])) !!}"
                                            alt="Alternate Text" />
                                    @else
                                        <img class="img-fluid img"
                                            src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                            alt="Alternate Text" />
                                    @endif
                                </div>
                                <div class="card-body">
                                    <span>{{ app()->getLocale() == 'ar' ? $ad->job->ar_title ?? $ad->job->en_title : $ad->job->en_title ?? $ad->job->ar_title }}</span>
                                </div>
                                <div class="card-image-overlay p-1">
                                    @if (\Carbon\Carbon::parse($ad->job->created_at)->diffInDays() > 0)
                                        <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                            {{ \Carbon\Carbon::parse($ad->job->created_at)->diffInDays() . __(' Days') }}
                                            | <i class="bi bi-geo-alt-fill"></i>
                                            {{ app()->getLocale() == 'ar' ? $ad->job->governorate->ar_name ?? '' : $ad->job->governorate->en_name ?? '' }}
                                        </span>
                                    @elseif(\Carbon\Carbon::parse($ad->job->created_at)->addDays(\Carbon\Carbon::parse($ad->job->created_at)->diffInDays())->diffInHours() > 0)
                                        <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                            {{ \Carbon\Carbon::parse($ad->job->created_at)->addDays(\Carbon\Carbon::parse($ad->job->created_at)->diffInDays())->diffInHours() . __(' Hours') }}
                                            | <i class="bi bi-geo-alt-fill"></i>
                                            {{ app()->getLocale() == 'ar' ? $ad->job->governorate->ar_name ?? '' : $ad->job->governorate->en_name ?? '' }}
                                        </span>
                                    @elseif(\Carbon\Carbon::parse($ad->job->created_at)->addDays(\Carbon\Carbon::parse($ad->job->created_at)->diffInDays())->diffInMinutes() > 0)
                                        <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                            {{ \Carbon\Carbon::parse($ad->job->created_at)->addDays(\Carbon\Carbon::parse($ad->job->created_at)->diffInDays())->diffInMinutes() . __(' Minute') }}
                                            | <i class="bi bi-geo-alt-fill"></i>
                                            {{ app()->getLocale() == 'ar' ? $ad->job->governorate->ar_name ?? '' : $ad->job->governorate->en_name ?? '' }}
                                        </span>
                                    @elseif(\Carbon\Carbon::parse($ad->job->created_at)->addDays(\Carbon\Carbon::parse($ad->job->created_at)->diffInDays())->diffInSeconds() >= 0)
                                        <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                            {{ \Carbon\Carbon::parse($ad->job->created_at)->addDays(\Carbon\Carbon::parse($ad->job->created_at)->diffInDays())->diffInSeconds() . __(' Seconds') }}
                                            | <i class="bi bi-geo-alt-fill"></i>
                                            {{ app()->getLocale() == 'ar' ? $ad->job->governorate->ar_name ?? '' : $ad->job->governorate->en_name ?? '' }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                @elseif($ad->mobile_id)
                    <div class="col-6 col-sm-4 col-md-3 mb-5">
                        <a href="{{ route('website.ad', [app()->getLocale(), 'category' => 4, 'id' => $ad->mobile->mobile_id]) }}"
                            style="text-decoration: none; color:black;">
                            <div class="card">
                                <div class="card-image">
                                    <span class="card-notify-badge">{{ $ad->mobile->price ?? 0 }}
                                        {{ __('SYP') }}</span>
                                    @if (file_exists('../storage/app/img/' . array_values(json_decode($ad->mobile->picture))[0]))
                                        <img class="img-fluid img"
                                            src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . array_values(json_decode($ad->mobile->picture))[0])) !!}"
                                            alt="Alternate Text" />
                                    @else
                                        <img class="img-fluid img"
                                            src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                            alt="Alternate Text" />
                                    @endif
                                </div>
                                <div class="card-body">
                                    <span>{{ app()->getLocale() == 'ar' ? $ad->mobile->ar_title ?? $ad->mobile->en_title : $ad->mobile->en_title ?? $ad->mobile->ar_title }}</span>
                                </div>
                                <div class="card-image-overlay p-1">
                                    @if (\Carbon\Carbon::parse($ad->mobile->created_at)->diffInDays() > 0)
                                        <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                            {{ \Carbon\Carbon::parse($ad->mobile->created_at)->diffInDays() . __(' Days') }}
                                            | <i class="bi bi-geo-alt-fill"></i>
                                            {{ app()->getLocale() == 'ar' ? $ad->mobile->governorate->ar_name ?? '' : $ad->mobile->governorate->en_name ?? '' }}
                                        </span>
                                    @elseif(\Carbon\Carbon::parse($ad->mobile->created_at)->addDays(\Carbon\Carbon::parse($ad->mobile->created_at)->diffInDays())->diffInHours() > 0)
                                        <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                            {{ \Carbon\Carbon::parse($ad->mobile->created_at)->addDays(\Carbon\Carbon::parse($ad->mobile->created_at)->diffInDays())->diffInHours() . __(' Hours') }}
                                            | <i class="bi bi-geo-alt-fill"></i>
                                            {{ app()->getLocale() == 'ar' ? $ad->mobile->governorate->ar_name ?? '' : $ad->mobile->governorate->en_name ?? '' }}
                                        </span>
                                    @elseif(\Carbon\Carbon::parse($ad->mobile->created_at)->addDays(\Carbon\Carbon::parse($ad->mobile->created_at)->diffInDays())->diffInMinutes() > 0)
                                        <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                            {{ \Carbon\Carbon::parse($ad->mobile->created_at)->addDays(\Carbon\Carbon::parse($ad->mobile->created_at)->diffInDays())->diffInMinutes() . __(' Minute') }}
                                            | <i class="bi bi-geo-alt-fill"></i>
                                            {{ app()->getLocale() == 'ar' ? $ad->mobile->governorate->ar_name ?? '' : $ad->mobile->governorate->en_name ?? '' }}
                                        </span>
                                    @elseif(\Carbon\Carbon::parse($ad->mobile->created_at)->addDays(\Carbon\Carbon::parse($ad->mobile->created_at)->diffInDays())->diffInSeconds() >= 0)
                                        <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                            {{ \Carbon\Carbon::parse($ad->mobile->created_at)->addDays(\Carbon\Carbon::parse($ad->mobile->created_at)->diffInDays())->diffInSeconds() . __(' Seconds') }}
                                            | <i class="bi bi-geo-alt-fill"></i>
                                            {{ app()->getLocale() == 'ar' ? $ad->mobile->governorate->ar_name ?? '' : $ad->mobile->governorate->en_name ?? '' }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                @endif
            @empty
                <h4 class="text-center text-secondary">{{ __('Empty') }}</h4>
            @endforelse
            {{ $data->links() }}
        @else
        @endif
    </div>
</div>
