<div class="container">
    <div class="row">
        <h3>{{ __('Contact With Manger') }}</h3>
    </div>
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="card shadow-lg border-0 rounded-lg mt-2" style="background-color: #E8E8E8;">
                    <div class="card-body">
                        <div class="row" wire:poll.10000ms>
                            <ul class="list-unstyled" style="height: 300px; overflow-y: scroll">
                                @forelse ($messages as $message)
                                    @if ($message['is_admin'] == 1)
                                        <div class="col-12">
                                            <li class="d-flex justify-content-left">
                                                <h6 class="p-2 card border-0 rounded-lg"
                                                    style="background-color: #6F6F6F; color:white">
                                                    {{ __('Admin Message : ') }} {{ $message['message'] }}
                                                </h6>
                                            </li>

                                        </div>
                                        @if (\Carbon\Carbon::parse($message->created_at)->diffInDays() > 0)
                                            <i class="bi bi-clock"></i> <span class="since m-0 p-0">{{ __('Since ') }}
                                                {{ \Carbon\Carbon::parse($message->created_at)->diffInDays() . __(' Days') }}
                                            </span>
                                        @else
                                            <i class="bi bi-clock"></i> <span class="since m-0 p-0">{{ __('Since ') }}
                                                {{ \Carbon\Carbon::parse($message->created_at)->addDays(\Carbon\Carbon::parse($message->created_at)->diffInDays())->diffInHours() . __(' Hours') }}
                                            </span>
                                        @endif
                                    @endif
                                    @if ($message['is_admin'] == 0)
                                        <div class="col-12">
                                            <li class="d-flex justify-content-right">
                                                <h6 class="p-2 card border-0 rounded-lg"
                                                    style="background-color: #ffffff; color:rgb(0, 0, 0)">
                                                    {{ $message['message'] }} :
                                                    <b>{{ $message->user->phone_number ?? $message->user->first_name }}</b>
                                                </h6>
                                            </li>
                                        </div>
                                        @if (\Carbon\Carbon::parse($message->created_at)->diffInDays() > 0)
                                            <i class="bi bi-clock"></i> <span class="since m-0 p-0">{{ __('Since ') }}
                                                {{ \Carbon\Carbon::parse($message->created_at)->diffInDays() . __(' Days') }}
                                            </span>
                                        @else
                                            <i class="bi bi-clock"></i> <span
                                                class="since m-0 p-0">{{ __('Since ') }}
                                                {{ \Carbon\Carbon::parse($message->created_at)->addDays(\Carbon\Carbon::parse($message->created_at)->diffInDays())->diffInHours() . __(' Hours') }}
                                            </span>
                                        @endif
                                    @endif
                                    </li>
                                @empty
                                    {{ __('No Message Yet') }}
                                @endforelse
                            </ul>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-8 mt-2">
                                <input wire:model.defer="messageText" id="myInput" type="text" name="message"
                                    placeholder="{{ __('Enter Your Message...') }}" class="form-control" />
                            </div>
                            <div class="col-12 col-md-4 mt-2">
                                <button class="btn btn-block btn-outline-success w-100" id="myBtn" type="submit"
                                    wire:click="sendMessage">{{ __('Send') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
