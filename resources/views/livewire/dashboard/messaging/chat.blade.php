<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">Chat
                        With<strong>{{ $messages[0]->user->phone_number ?? '' }}</strong></h3>
                </div>
                <div class="card-body">
                    <div class="results">
                        @if (Session()->has('WrongChat'))
                            <div class="alert alert-danger">
                                {{ Session('WrongChat') }}
                            </div>
                        @endif
                    </div>
                    @if (!Session()->has('WrongChat'))
                        <div wire:poll class="row">
                            <ul class="list-unstyled" style="height: 300px; overflow-y: scroll">
                                <li class="p-2">
                                    @forelse ($messages as $message)
                                        @if ($message->is_admin == 1)
                                            <p class="text-left"><b>Admin Message :</b> {{ $message->message }}
                                            </p>
                                        @endif
                                        @if ($message->is_admin == 0)
                                            <p class="text-right">{{ $message->message }} :
                                                <b>{{ $message->user->phone_number }}</b>
                                            </p>
                                        @endif
                                    @empty
                                        No Message Yet
                                    @endforelse
                                </li>
                            </ul>
                        </div>
                        <div class="row">
                            <div class="col-10">
                                <input wire:model.defer="messageText" id="myInput" type="text" name="message"
                                    placeholder="Enter Your Message..." class="form-control" />
                            </div>
                            <div class="col-2">
                                <button class="btn btn-block btn-success w-100" id="myBtn" type="submit"
                                    wire:click="sendMessage">Send</button>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
