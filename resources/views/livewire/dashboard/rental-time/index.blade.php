<div id="app">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-4">
                                        <a href="{{ route('web.crud.dashboard', app()->getLocale()) }}"
                                            class="btn btn-outline-secondary mx-auto w-100"><i
                                                class="bi bi-skip-backward-fill"></i></a>
                                    </div>
                                    <div class="col-4">
                                        <h3 class="text-center font-weight-light my-4">Renatl Time Table </h3>
                                    </div>
                                    <div class="col-4">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="mb-4">
                                    <div class="row">
                                        <div class="col-12">
                                            <input wire:model.debounce.300ms="search" type="text"
                                                class="form-control form-control-lg mb-3" placeholder="Search Here">
                                        </div>
                                        <div class="col-6 col-md-6">
                                            <div class="form-floating mb-3">
                                                <select class="form-control" wire:model="orderBy">
                                                    <option value="en_rent_name">En Name</option>
                                                    <option value="ar_rent_name">Ar Name</option>
                                                </select>
                                                <label for="ChooseOrderCoulmn">Order By Coulmn</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-6">
                                            <div class="form-floating mb-3">
                                                <select class="form-control" wire:model="orderAsc">
                                                    <option value="1">Ascending</option>
                                                    <option value="0">Descending</option>
                                                </select>
                                                <label for="ChooseOrderType">Order Type</label>
                                                <div class="col-6 col-md-6 mx-auto">
                                                    <button type="button"
                                                        class="justify-content-left btn btn-outline-success w-100 mt-2"
                                                        data-bs-toggle="modal" data-bs-target="#CreateRMModal"><i
                                                            class="bi bi-plus-square"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <div class=" col-12">
                                                <div class="Scard card shadow-lg border-2 rounded-lg">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body text-right">
                                                                    <div class="card-body table-responsive">
                                                                        <table class="table table-bordered">
                                                                            <thead class="thead-dark">
                                                                                <tr>
                                                                                    <th>English Name</th>
                                                                                    <th>Arabic Name</th>
                                                                                    <th>Action</th>
                                                                                </tr>
                                                                            </thead>
                                                                            @forelse($RM as $data)
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>{{ $data->en_rent_name }}
                                                                                        </td>
                                                                                        <td>{{ $data->ar_rent_name }}
                                                                                        </td>
                                                                                        <td>
                                                                                            <button type="button"
                                                                                                class="btn btn-outline-primary mb-2"
                                                                                                data-bs-toggle="modal"
                                                                                                data-bs-target="#editRMModal"
                                                                                                wire:click.prevent="edit({{ $data->rental_time_id }})"><i
                                                                                                    class="bi bi-pen"></i></button>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            @empty
                                                                                <tr>
                                                                                    <td colspan="100">
                                                                                        <h5 class="text-center">
                                                                                            <i>Empty <button
                                                                                                    type="button"
                                                                                                    class="btn btn-outline-success mb-2"
                                                                                                    data-bs-toggle="modal"
                                                                                                    data-bs-target="#CreateRMModal"><i
                                                                                                        class="bi bi-plus-square"></i></button></i>
                                                                                        </h5>
                                                                                    </td>
                                                                                </tr>
                                                                            @endforelse
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Create Model --}}
                                    <div wire:ignore.self class="modal fade" id="CreateRMModal" tabindex="-1"
                                        aria-labelledby="CreateRMModallabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="CreateRMModalText">Create New
                                                        Renatl Time
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close" wire:click.prevent="clear()"></button>
                                                </div>
                                                <div class="modal-body">
                                                    @if (Session()->has('WrongRentalTime'))
                                                        <div class="alert alert-danger">
                                                            {{ Session('WrongRentalTime') }}
                                                        </div>
                                                    @endif
                                                    @if (!Session()->has('WrongRentalTime'))
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
                                                                                type="text" name="en_rent_name"
                                                                                autocomplete="off"
                                                                                wire:model="en_rent_name" />
                                                                            <label for="inputen_rent_name">English Name
                                                                            </label>
                                                                            <span class="text-danger">
                                                                                @error('en_rent_name')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-floating mb-3">
                                                                            <input class="form-control" id="inputname"
                                                                                type="text" name="ar_rent_name"
                                                                                autocomplete="off"
                                                                                wire:model="ar_rent_name" />
                                                                            <label for="inputar_rent_name">Arabic Name
                                                                            </label>
                                                                            <span class="text-danger">
                                                                                @error('ar_rent_name')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit"
                                                        class="btn btn-block w-100 btn-outline-success"
                                                        wire:click.prevent="Create()">Create <i
                                                            class="bi bi-file-plus"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Edit Model --}}
                                    <div wire:ignore.self class="modal fade" id="editRMModal" tabindex="-1"
                                        aria-labelledby="editRMModallabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editRMModalText">Edit Rental Time
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close" wire:click.prevent="clear()"></button>
                                                </div>
                                                <div class="modal-body">
                                                    @if (Session()->has('WrongRentalTime'))
                                                        <div class="alert alert-danger">
                                                            {{ Session('WrongRentalTime') }}
                                                        </div>
                                                    @endif
                                                    @if (!Session()->has('WrongRentalTime'))
                                                        <div class="card-body">
                                                            <form autocomplete="off" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="rental_time_id"
                                                                    wire:model="rental_time_id">
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
                                                                                type="text" name="en_rent_name"
                                                                                autocomplete="off"
                                                                                wire:model="en_rent_name" />
                                                                            <label for="inputen_rent_name">English Name
                                                                            </label>
                                                                            <span class="text-danger">
                                                                                @error('en_rent_name')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-floating mb-3">
                                                                            <input class="form-control" id="inputname"
                                                                                type="text" name="ar_rent_name"
                                                                                autocomplete="off"
                                                                                wire:model="ar_rent_name" />
                                                                            <label for="inputar_rent_name">Arabic Name
                                                                            </label>
                                                                            <span class="text-danger">
                                                                                @error('ar_rent_name')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal"
                                                        wire:click.prevent="clear()">Close</button>
                                                    <button type="button" class="btn btn-danger"
                                                        wire:click.prevent="delete()">Delete</button>
                                                    <button type="submit" class="btn btn-primary"
                                                        wire:click.prevent="update()">Save
                                                        Changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {!! $RM->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
