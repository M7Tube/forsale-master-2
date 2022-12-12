<div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-4">
                                <a href="{{ route('web.crud.filters', app()->getLocale()) }}"
                                class="btn btn-outline-secondary mx-auto w-100"><i
                                    class="bi bi-skip-backward-fill"></i></a>
                            </div>
                            <div class="col-4">
                                <h3 class="text-center font-weight-light my-4">Craete New Filter<i
                                    class="bi bi-funnel-fill"></i>
                            </h3>
                            </div>
                            <div class="col-4">

                            </div>
                        </div>
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
                                                                        Name <span class="text-danger">*</span>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-floating mb-3">
                                                                            <input class="form-control" id="inputname"
                                                                                type="text" name="name"
                                                                                autocomplete="off" wire:model="name" />
                                                                            <label for="inputname">Name</label>
                                                                            <span class="text-danger">
                                                                                @error('name')
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
                                                                        Filter Type <span
                                                                            class="text-danger">*</span>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-floating mb-3">
                                                                            <select wire:model="filter_type_id"
                                                                                class="form-control">
                                                                                <option value="0" selected>Choose The
                                                                                    Filter Type</option>
                                                                                @foreach ($filterTypes as $type)
                                                                                    <option
                                                                                        value="{{ $type->$filter_type_id }}">
                                                                                        {{ $type->name }}
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('filter_type_id')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                            <label for="inputUserDepartment">Choose The
                                                                                Filter Type</label>
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
                                                                        Category <span class="text-danger">*</span>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-floating mb-3">
                                                                            <select wire:model="main_categorie_id"
                                                                                class="form-control">
                                                                                <option value="0" selected>Choose The
                                                                                    Category</option>
                                                                                @foreach ($categoris as $category)
                                                                                    <option
                                                                                        value="{{ $category->main_categorie_id }}">
                                                                                        {{ $category->name }}
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('main_categorie_id')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                            <label for="inputUserDeparftment">Choose The
                                                                                Category</label>
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
                                                                        Modal <span class="text-danger">*</span>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-floating mb-3">
                                                                            <select wire:model="main_categorie_id"
                                                                                class="form-control">
                                                                                <option value="0" selected>Choose The
                                                                                    Modal</option>
                                                                                @foreach ($modals as $key => $modal)
                                                                                    <option value="">
                                                                                        {{ $modal }}
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('main_categorie_id')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                            <label for="inputUserDeparftment">Choose The
                                                                                Modal</label>
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
                            <input type="hidden" wire:model="user_id"
                                value="{{ session()->get('LoggedAccount')['user_id'] }}">
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
{{-- Create Model --}}
{{-- <div wire:ignore.self class="modal fade" id="CreateFilterModal" tabindex="-1"
    aria-labelledby="CreateFilterModallabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="CreateFilterModalText">Create New
                    Filter
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close" wire:click.prevent="clear()"></button>
            </div>
            <div class="modal-body">
                @if (Session()->has('WrongFilter'))
                    <div class="alert alert-danger">
                        {{ Session('WrongFilter') }}
                    </div>
                @endif
                @if (!Session()->has('WrongFilter'))
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
                                        <input class="form-control" id="inputname"
                                            type="text" name="name"
                                            autocomplete="off" wire:model="name" />
                                        <label for="inputname">Name</label>
                                        <span class="text-danger">
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input class="form-control"
                                            id="inputvalues" type="text"
                                            name="values" autocomplete="off"
                                            wire:model="values" />
                                        <label for="inputvalues">Values</label>
                                        <span class="text-danger">
                                            @error('Values')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <select wire:model="main_categorie_id"
                                            class="form-control">
                                            <option value="0" selected>Choose The
                                                Category</option>
                                            @foreach ($categoris as $category)
                                                <option
                                                    value="{{ $category->main_categorie_id }}">
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger">
                                            @error('main_categorie_id')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                        <label for="inputUserDeparftment">Choose The
                                            Category</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <select wire:model="filter_type_id"
                                            class="form-control">
                                            <option value="0" selected>Choose The
                                                Filter Type</option>
                                            @foreach ($filterTypes as $type)
                                                <option
                                                    value="{{ $type->$filter_type_id }}">
                                                    {{ $type->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger">
                                            @error('filter_type_id')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                        <label for="inputUserDepartment">Choose The
                                            Filter Type</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                @endif
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary"
                    wire:click.prevent="Create()">Create</button>
            </div>
        </div>
    </div>
</div> --}}
