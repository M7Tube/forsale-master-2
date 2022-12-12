<div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">Send General Notification <i
                                class="bi bi-badge-ad-fill"></i></h3>
                        {{-- <h5 class="text-center font-weight-light my-4 text-capitalize text-danger">this page for admins and workers only :-)</h5> --}}
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent="Send">
                            @csrf
                            <div class="results">
                                @if (Session::get('fail'))
                                    <div class="alert alert-danger">
                                        {{ Session::get('fail') }}
                                    </div>
                                @endif
                            </div>
                            <div class="results">
                                @if (Session::get('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <div class="my-2 col-12">
                                            <div class="Scard card shadow-lg border-2 rounded-lg">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media">
                                                            <div class="media-body text-right">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        Title <span class="text-danger">*</span>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-floating mb-1">
                                                                            <input class="form-control" id="title"
                                                                                type="text" wire:model="title"
                                                                                autocomplete="off" />
                                                                            <span class="text-danger">
                                                                                @error('title')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                            <label for="date">Title
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <div class="my-2 col-12">
                                            <div class="Scard card shadow-lg border-2 rounded-lg">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media">
                                                            <div class="media-body text-right">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        Body <span class="text-danger">*</span>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-floating mb-1">
                                                                            <input class="form-control" id="Body"
                                                                                type="text" wire:model="Body"
                                                                                autocomplete="off" />
                                                                            <span class="text-danger">
                                                                                @error('Body')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                            <label for="date">Body
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                <button type="submit" class="mx-auto w-50 btn btn-block btn-outline-primary">Send <i
                                        class="bi bi-arrow-bar-right"></i></button>
                            </div>
                        </form>
                        {{$message}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
