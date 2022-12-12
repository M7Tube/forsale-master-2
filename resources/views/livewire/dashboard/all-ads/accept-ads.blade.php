<div>
    <h4 class="p-3 text-center">{{ __('Ads Need Approval') }}</h4>
    {{-- <div class="container text-center mb-2">
        <div class="row card p-3 bg-white rounded-lg border-0 ">
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check w-100" wire:model="manger_accept" id="manger_accept1"
                    autocomplete="off" value="2" checked>
                <label class="mx-1 btn btn-outline-dark" for="manger_accept1">{{ __('Accepted') }}
                </label>
                <input type="radio" class="btn-check w-100" wire:model="manger_accept" id="manger_accept2"
                    autocomplete="off" value="1">
                <label class="mx-1 btn btn-outline-dark" for="manger_accept2">{{ __('Need Approvoel') }}
                </label>
                <input type="radio" class="btn-check w-100" wire:model="manger_accept" id="manger_accept3"
                    autocomplete="off" value="0">
                <label class="mx-1 btn btn-outline-dark" for="manger_accept3">{{ __('Rejected') }}
                </label>
            </div>
        </div>
    </div> --}}
    <div class="container text-center mb-2">
        <div class="row card p-3 bg-white rounded-lg border-0 ">
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check w-100" wire:model="category" id="category1" autocomplete="off"
                    value="App\Models\Cars" checked>
                <label class="mx-1 btn btn-outline-dark" for="category1">{{ __('Cars') }}
                </label>
                <input type="radio" class="btn-check w-100" wire:model="category" id="category2" autocomplete="off"
                    value="App\Models\RealEstate">
                <label class="mx-1 btn btn-outline-dark" for="category2">{{ __('Real Estate') }}
                </label>
                <input type="radio" class="btn-check w-100" wire:model="category" id="category3" autocomplete="off"
                    value="App\Models\Jobs">
                <label class="mx-1 btn btn-outline-dark" for="category3">{{ __('Jobs') }}
                </label>
            </div>
        </div>
    </div>
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
    <hr>
    <div class="row" id="ads" wire:init="loadData" wire:loading.remove>
        @if ($data)
            @if ($data['cars'])
                <h4>{{ __('Cars Ads') }}</h4>
                @forelse ($data['cars'] as $car)
                    <div class="col-6 col-sm-4 col-md-3 mb-5">
                        <a href="{{ route('website.ad', [app()->getLocale(), 'category' => 1, 'id' => $car->car_id]) }}"
                            style="text-decoration: none; color:black;">
                            <div class="card">
                                <div class="card-image">
                                    <span class="card-notify-badge">{{ $car->price ?? 0 }}
                                        {{ __('SYP') }}</span>
                                    <img class="img-fluid img"
                                        src="data:image/png|jpg|jpeg;base64, {!! base64_encode(
                                            file_exists('../storage/app/img/' . array_values(json_decode($car->picture))[0])
                                                ? file_get_contents('../storage/app/img/' . array_values(json_decode($car->picture))[0])
                                                : file_get_contents('../storage/app/img/defualt.png'),
                                        ) !!}"
                                        alt="Alternate Text" />
                                </div>
                                <div class="card-body">
                                    <span>{{ app()->getLocale() == 'ar' ? $car->ar_title ?? $car->en_title : $car->en_title ?? $car->ar_title }}</span>
                                </div>
                                <div class="card-image-overlay p-1">
                                    @if (\Carbon\Carbon::parse($car->created_at)->diffInDays() > 0)
                                        <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                            {{ \Carbon\Carbon::parse($car->created_at)->diffInDays() . __(' Days') }}
                                            | <i class="bi bi-geo-alt-fill"></i>
                                            {{ app()->getLocale() == 'ar' ? $car->governorate->ar_name ?? '' : $car->governorate->en_name ?? '' }}
                                        </span>
                                    @elseif(\Carbon\Carbon::parse($car->created_at)->addDays(\Carbon\Carbon::parse($car->created_at)->diffInDays())->diffInHours() > 0)
                                        <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                            {{ \Carbon\Carbon::parse($car->created_at)->addDays(\Carbon\Carbon::parse($car->created_at)->diffInDays())->diffInHours() . __(' Hours') }}
                                            | <i class="bi bi-geo-alt-fill"></i>
                                            {{ app()->getLocale() == 'ar' ? $car->governorate->ar_name ?? '' : $car->governorate->en_name ?? '' }}
                                        </span>
                                    @elseif(\Carbon\Carbon::parse($car->created_at)->addDays(\Carbon\Carbon::parse($car->created_at)->diffInDays())->diffInMinutes() > 0)
                                        <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                            {{ \Carbon\Carbon::parse($car->created_at)->addDays(\Carbon\Carbon::parse($car->created_at)->diffInDays())->diffInMinutes() . __(' Minute') }}
                                            | <i class="bi bi-geo-alt-fill"></i>
                                            {{ app()->getLocale() == 'ar' ? $car->governorate->ar_name ?? '' : $car->governorate->en_name ?? '' }}
                                        </span>
                                    @elseif(\Carbon\Carbon::parse($car->created_at)->addDays(\Carbon\Carbon::parse($car->created_at)->diffInDays())->diffInSeconds() >= 0)
                                        <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                            {{ \Carbon\Carbon::parse($car->created_at)->addDays(\Carbon\Carbon::parse($car->created_at)->diffInDays())->diffInSeconds() . __(' Seconds') }}
                                            | <i class="bi bi-geo-alt-fill"></i>
                                            {{ app()->getLocale() == 'ar' ? $car->governorate->ar_name ?? '' : $car->governorate->en_name ?? '' }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </a>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-block w-50 mt-2 btn-outline-dark mx-1"
                                wire:click.prevent="accept(1,{{ $car->car_id }})">{{ __('Accept') }}</button>
                            <button class="btn btn-block w-50 mt-2 btn-outline-danger mx-1" data-bs-toggle="modal"
                                data-bs-target="#exampleModal1{{ $car->car_id }}">{{ __('Reject') }}</button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal1{{ $car->car_id }}" tabindex="-1"
                                aria-labelledby="exampleModal1{{ $car->car_id }}Label" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModal1{{ $car->car_id }}Label">
                                                {{ __('Rejected Reason') }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <textarea wire:model.defer="rejected_reason" id="" cols="30" rows="10" class="form-control"
                                                placeholder="{{ __('Rejected Reason') }}"></textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary"
                                                data-bs-dismiss="modal">{{ __('Close') }}</button>
                                            <button type="button" class="btn btn-outline-danger"
                                                wire:click.prevent="reject(1,{{ $car->car_id }})">{{ __('Reject') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <h4 class="text-center text-secondary">{{ __('Empty') }}</h4>
                @endforelse
                <div class="d-flex justify-content-center">
                    {{ $data['cars']->links() }}
                </div>
            @endif
            @if ($data['real_estate'])
                <h4>{{ __('Real Estate Ads') }}</h4>
                @forelse ($data['real_estate'] as $real_estate)
                    <div class="col-6 col-sm-4 col-md-3 mb-5">
                        <a href="{{ route('website.ad', [app()->getLocale(), 'category' => 2, 'id' => $real_estate->real_estate_id]) }}"
                            style="text-decoration: none; color:black;">
                            <div class="card">
                                <div class="card-image">
                                    <span class="card-notify-badge">{{ $real_estate->price ?? 0 }}
                                        {{ __('SYP') }}</span>
                                    <img class="img-fluid img"
                                        src="data:image/png|jpg|jpeg;base64, {!! base64_encode(
                                            file_exists('../storage/app/img/' . array_values(json_decode($real_estate->picture))[0])
                                                ? file_get_contents('../storage/app/img/' . array_values(json_decode($real_estate->picture))[0])
                                                : file_get_contents('../storage/app/img/defualt.png'),
                                        ) !!}"
                                        alt="Alternate Text" />
                                </div>
                                <div class="card-body">
                                    <span>{{ app()->getLocale() == 'ar' ? $real_estate->ar_title ?? $real_estate->en_title : $real_estate->en_title ?? $real_estate->ar_title }}</span>
                                </div>
                                <div class="card-image-overlay p-1">
                                    @if (\Carbon\Carbon::parse($real_estate->created_at)->diffInDays() > 0)
                                        <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                            {{ \Carbon\Carbon::parse($real_estate->created_at)->diffInDays() . __(' Days') }}
                                            | <i class="bi bi-geo-alt-fill"></i>
                                            {{ app()->getLocale() == 'ar' ? $real_estate->governorate->ar_name ?? '' : $real_estate->governorate->en_name ?? '' }}
                                        </span>
                                    @elseif(\Carbon\Carbon::parse($real_estate->created_at)->addDays(\Carbon\Carbon::parse($real_estate->created_at)->diffInDays())->diffInHours() > 0)
                                        <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                            {{ \Carbon\Carbon::parse($real_estate->created_at)->addDays(\Carbon\Carbon::parse($real_estate->created_at)->diffInDays())->diffInHours() . __(' Hours') }}
                                            | <i class="bi bi-geo-alt-fill"></i>
                                            {{ app()->getLocale() == 'ar' ? $real_estate->governorate->ar_name ?? '' : $real_estate->governorate->en_name ?? '' }}
                                        </span>
                                    @elseif(\Carbon\Carbon::parse($real_estate->created_at)->addDays(\Carbon\Carbon::parse($real_estate->created_at)->diffInDays())->diffInMinutes() > 0)
                                        <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                            {{ \Carbon\Carbon::parse($real_estate->created_at)->addDays(\Carbon\Carbon::parse($real_estate->created_at)->diffInDays())->diffInMinutes() . __(' Minute') }}
                                            | <i class="bi bi-geo-alt-fill"></i>
                                            {{ app()->getLocale() == 'ar' ? $real_estate->governorate->ar_name ?? '' : $real_estate->governorate->en_name ?? '' }}
                                        </span>
                                    @elseif(\Carbon\Carbon::parse($real_estate->created_at)->addDays(\Carbon\Carbon::parse($real_estate->created_at)->diffInDays())->diffInSeconds() >= 0)
                                        <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                            {{ \Carbon\Carbon::parse($real_estate->created_at)->addDays(\Carbon\Carbon::parse($real_estate->created_at)->diffInDays())->diffInSeconds() . __(' Seconds') }}
                                            | <i class="bi bi-geo-alt-fill"></i>
                                            {{ app()->getLocale() == 'ar' ? $real_estate->governorate->ar_name ?? '' : $real_estate->governorate->en_name ?? '' }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </a>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-block w-50 mt-2 btn-outline-dark mx-1"
                                wire:click.prevent="accept(2,{{ $real_estate->real_estate_id }})">{{ __('Accept') }}</button>
                            <button class="btn btn-block w-50 mt-2 btn-outline-danger mx-1" data-bs-toggle="modal"
                                data-bs-target="#exampleModal2{{ $real_estate->real_estate_id }}">{{ __('Reject') }}</button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal2{{ $real_estate->real_estate_id }}"
                                tabindex="-1"
                                aria-labelledby="exampleModal2{{ $real_estate->real_estate_id }}Label"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title"
                                                id="exampleModal2{{ $real_estate->real_estate_id }}Label">
                                                {{ __('Rejected Reason') }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <textarea wire:model.defer="rejected_reason" id="" cols="30" rows="10" class="form-control"
                                                placeholder="{{ __('Rejected Reason') }}"></textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary"
                                                data-bs-dismiss="modal">{{ __('Close') }}</button>
                                            <button type="button" class="btn btn-outline-danger"
                                                wire:click.prevent="reject(2,{{ $real_estate->real_estate_id }})">{{ __('Reject') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <h4 class="text-center text-secondary">{{ __('Empty') }}</h4>
                @endforelse
                <div class="d-flex justify-content-center">
                    {{ $data['real_estate']->links() }}
                </div>
            @endif
            @if ($data['jobs'])
                <h4>{{ __('Jobs Ads') }}</h4>
                @forelse ($data['jobs'] as $job)
                    <div class="col-6 col-sm-4 col-md-3 mb-5">
                        <a href="{{ route('website.ad', [app()->getLocale(), 'category' => 3, 'id' => $job->job_id]) }}"
                            style="text-decoration: none; color:black;">
                            <div class="card">
                                <div class="card-image">
                                    <span class="card-notify-badge">{{ $job->salary ?? 0 }}
                                        {{ __('SYP') }}</span>
                                    <img class="img-fluid img"
                                        src="data:image/png|jpg|jpeg;base64, {!! base64_encode(
                                            file_exists('../storage/app/img/' . array_values(json_decode($job->picture))[0])
                                                ? file_get_contents('../storage/app/img/' . array_values(json_decode($job->picture))[0])
                                                : file_get_contents('../storage/app/img/defualt.png'),
                                        ) !!}"
                                        alt="Alternate Text" />
                                </div>
                                <div class="card-body">
                                    <span>{{ app()->getLocale() == 'ar' ? $job->ar_title ?? $job->en_title : $job->en_title ?? $job->ar_title }}</span>
                                </div>
                                <div class="card-image-overlay p-1">
                                    @if (\Carbon\Carbon::parse($job->created_at)->diffInDays() > 0)
                                        <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                            {{ \Carbon\Carbon::parse($job->created_at)->diffInDays() . __(' Days') }}
                                            | <i class="bi bi-geo-alt-fill"></i>
                                            {{ app()->getLocale() == 'ar' ? $job->governorate->ar_name ?? '' : $job->governorate->en_name ?? '' }}
                                        </span>
                                    @elseif(\Carbon\Carbon::parse($job->created_at)->addDays(\Carbon\Carbon::parse($job->created_at)->diffInDays())->diffInHours() > 0)
                                        <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                            {{ \Carbon\Carbon::parse($job->created_at)->addDays(\Carbon\Carbon::parse($job->created_at)->diffInDays())->diffInHours() . __(' Hours') }}
                                            | <i class="bi bi-geo-alt-fill"></i>
                                            {{ app()->getLocale() == 'ar' ? $job->governorate->ar_name ?? '' : $job->governorate->en_name ?? '' }}
                                        </span>
                                    @elseif(\Carbon\Carbon::parse($job->created_at)->addDays(\Carbon\Carbon::parse($job->created_at)->diffInDays())->diffInMinutes() > 0)
                                        <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                            {{ \Carbon\Carbon::parse($job->created_at)->addDays(\Carbon\Carbon::parse($job->created_at)->diffInDays())->diffInMinutes() . __(' Minute') }}
                                            | <i class="bi bi-geo-alt-fill"></i>
                                            {{ app()->getLocale() == 'ar' ? $job->governorate->ar_name ?? '' : $job->governorate->en_name ?? '' }}
                                        </span>
                                    @elseif(\Carbon\Carbon::parse($job->created_at)->addDays(\Carbon\Carbon::parse($job->created_at)->diffInDays())->diffInSeconds() >= 0)
                                        <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                            {{ \Carbon\Carbon::parse($job->created_at)->addDays(\Carbon\Carbon::parse($job->created_at)->diffInDays())->diffInSeconds() . __(' Seconds') }}
                                            | <i class="bi bi-geo-alt-fill"></i>
                                            {{ app()->getLocale() == 'ar' ? $job->governorate->ar_name ?? '' : $job->governorate->en_name ?? '' }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </a>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-block w-50 mt-2 btn-outline-dark mx-1"
                                wire:click.prevent="accept(3,{{ $job->job_id }})">{{ __('Accept') }}</button>
                            <button class="btn btn-block w-50 mt-2 btn-outline-danger mx-1" data-bs-toggle="modal"
                                data-bs-target="#exampleModal3{{ $job->job_id }}">{{ __('Reject') }}</button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal3{{ $job->job_id }}" tabindex="-1"
                                aria-labelledby="exampleModal3{{ $job->job_id }}Label" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModal3{{ $job->job_id }}Label">
                                                {{ __('Rejected Reason') }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <textarea wire:model.defer="rejected_reason" id="" cols="30" rows="10" class="form-control"
                                                placeholder="{{ __('Rejected Reason') }}"></textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary"
                                                data-bs-dismiss="modal">{{ __('Close') }}</button>
                                            <button type="button" class="btn btn-outline-danger"
                                                wire:click.prevent="reject(3,{{ $job->job_id }})">{{ __('Reject') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <h4 class="text-center text-secondary">{{ __('Empty') }}</h4>
                @endforelse
                <div class="d-flex justify-content-center">
                    {{ $data['jobs']->links() }}
                </div>
            @endif
        @else
        @endif
    </div>
</div>
