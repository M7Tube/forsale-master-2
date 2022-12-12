<div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">Craete New Category<i class="bi bi-tags-fill"></i>
                        </h3>
                        {{-- <h5 class="text-center font-weight-light my-4 text-capitalize text-danger">this page for admins and workers only :-)</h5> --}}
                    </div>
                    <div class="card-body">
                        <form>
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
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <div class="my-2 col-12">
                                            <div class="Scard card shadow-lg border-2 rounded-lg">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media">
                                                            <div class="media-body text-right">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        Name <span class="text-danger">*</span>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-floating mb-3">
                                                                            <input class="form-control"
                                                                                id="inputen_name" type="text"
                                                                                name="en_name" autocomplete="off"
                                                                                wire:model="en_name" />
                                                                            <label for="inputen_name">English
                                                                                Name</label>
                                                                            <span class="text-danger">
                                                                                @error('en_name')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-floating mb-3">
                                                                            <input class="form-control"
                                                                                id="inputar_name" type="text"
                                                                                name="ar_name" autocomplete="off"
                                                                                wire:model="ar_name" />
                                                                            <label for="inputar_name">الأسم
                                                                                بالعربي</label>
                                                                            <span class="text-danger">
                                                                                @error('ar_name')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
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
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <div class="my-2 col-12">
                                            <div class="Scard card shadow-lg border-2 rounded-lg">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media">
                                                            <div class="media-body text-right">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        Icon <span class="text-danger">*</span>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-floating mb-1">
                                                                            <input class="form-control" id="icon"
                                                                                type="file" wire:model="icon"
                                                                                autocomplete="off" />
                                                                            <span class="text-danger">
                                                                                @error('icon')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                            <label for="date">Icon
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        @if ($icon && !$errors->has('icon'))
                                                                            <div class="col-md-12">
                                                                                <div class="form-floating mb-3">
                                                                                    <div class="my-2 col-12">
                                                                                        <div
                                                                                            class="Scard card shadow-lg border-2 rounded-lg">
                                                                                            <div class="card-content">
                                                                                                <div
                                                                                                    class="card-body">
                                                                                                    Icon Preview:
                                                                                                    <img src="{{ $icon->temporaryUrl() }}"
                                                                                                        width="250x">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif
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
                                <button wire:click.prevent="Create()"
                                    class="mx-auto w-50 btn btn-block btn-outline-success">Create <i
                                        class="bi bi-file-earmark-plus"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
