<div>
    <div id="layoutSidenav">
        <main>
            <div class="container-fluid px-4">
                <!-- Begin Of Create Pages Card -->
                <h3 class="mt-4 text-center text-muted">Wallet System</h3>
                <a href="{{ route('web.crud.dashboard', app()->getLocale()) }}" class="btn btn-outline-secondary"><i
                        class="bi bi-skip-backward-fill"></i></a>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"></li>
                </ol>
                {{-- THE BEGIN OF THE STATICATION SECTIONS --}}
                <div class="card shadow-lg border-2 rounded-lg" style=".Scard {
                    box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
                    transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
                    cursor: pointer;
                }
                .Scard:hover {
                    transform: scale(0.7);
                    box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
                }">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="text-center">
                                <h4>General Stats</h4>
                            </div>
                            <div class="media">
                                <div class="media-body">
                                    <div class="row">
                                        <div class="my-2 col-xl-3 col-sm-6 col-6 Scard">
                                            <div class="text-center">
                                                <img src="{{ asset('img/money-svgrepo-com.svg') }}" alt="users"
                                                    width="75px">
                                                <h5>Total Users Points: <span
                                                        class="text-muted">{{ $totalPoints }}</span>
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="my-2 col-xl-3 col-sm-6 col-6 Scard">
                                            <div class="text-center">
                                                <img src="{{ asset('img/wallet-svgrepo-com.svg') }}" alt="users"
                                                    width="75px">
                                                <h5>Users Have Points: <span
                                                        class="text-muted">{{ $totalUsers }}</span>
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="my-2 col-xl-3 col-sm-6 col-6 Scard">
                                            <div class="text-center">
                                                <img src="{{ asset('img/wallet-svgrepo-com(1).svg') }}" alt="users"
                                                    width="75px">
                                                <h5>Users With Empty Points: <span
                                                        class="text-muted">{{ $totalEmptyUsers }}</span>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- THE END OF THE STATICATION SECTIONS --}}
                @can('edit_wallet')
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3 class="text-center font-weight-light my-4 text-capitalize">wallet</h3>
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
                                                                                            <th>Owner Id</th>
                                                                                            <th>Balance</th>
                                                                                            <th>Owner</th>
                                                                                            <th>Action</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    @forelse($wallets as $key=> $wallet)
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>{{ $wallet->user_id }}
                                                                                                </td>
                                                                                                <td>{{ $wallet->balance }}
                                                                                                </td>
                                                                                                <td>This Wallet Belong To
                                                                                                    <span
                                                                                                        class="text-muted">{{ $wallet->user->first_name ?? 'Empty !!!' }}</span>
                                                                                                    With Phone Number <span
                                                                                                        class="text-muted">{{ $wallet->user->phone_number ?? 'Empty !!!' }}</span>
                                                                                                    With Email <span
                                                                                                        class="text-muted">{{ $wallet->user->email ?? 'Empty !!!' }}</span>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <button type="button"
                                                                                                        class="btn btn-outline-primary mb-2"
                                                                                                        data-bs-toggle="modal"
                                                                                                        data-bs-target="#editWalletModal"
                                                                                                        wire:click.prevent="edit({{ $wallet->wallet_id }})"><i
                                                                                                            class="bi bi-pen"></i></button>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    @empty
                                                                                        <td colspan="4"
                                                                                            class="text-center">
                                                                                            Empty
                                                                                        </td>
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
                                            <div wire:ignore.self class="modal fade" id="editWalletModal" tabindex="-1"
                                                aria-labelledby="editWalletModallabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editWalletModalText">Edit Wallet
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"
                                                                wire:click.prevent="clear()"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            @if (Session()->has('WrongUser'))
                                                                <div class="alert alert-danger">
                                                                    {{ Session('WrongUser') }}
                                                                </div>
                                                            @endif
                                                            @if (!Session()->has('WrongUser'))
                                                                <div class="card-body">
                                                                    <form autocomplete="off" method="POST">
                                                                        @csrf
                                                                        <input type="hidden" name="wallet_id"
                                                                            wire:model="wallet_id">
                                                                        <div class="results">
                                                                            @if (Session()->has('message'))
                                                                                <div class="alert alert-success">
                                                                                    {{ Session('message') }}
                                                                                </div>
                                                                            @endif
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <div class="col-md-12">
                                                                                <div class="form-floating mb-3">
                                                                                    <input class="form-control"
                                                                                        id="inputbalance" type="number"
                                                                                        name="balance" autocomplete="off"
                                                                                        min="5000" max="500000" step="5000"
                                                                                        wire:model="balance" />
                                                                                    <label for="inputbalance">User
                                                                                        Balance</label>
                                                                                    <span class="text-danger">
                                                                                        @error('balance')
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
                                                            <button type="submit" class="btn btn-primary"
                                                                wire:click.prevent="update()">Save
                                                                Changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {!! $wallets->links() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endcan

        </main>
    </div>
</div>
</div>
