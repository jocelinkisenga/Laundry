<div>
    <!-- Page Heading -->
    <div class="mb-4 d-sm-flex align-items-center justify-content-between">
        <h1 class="mb-0 text-gray-800 h3">liste des commandes</h1>
        <a data-toggle="modal" data-target="#order" class="shadow-sm d-none d-sm-inline-block btn btn-sm btn-primary"><i
                class="fas fa-download fa-sm text-white-50"></i> Creer une commande</a>
    </div>


    <!-- DataTales Example -->
    <div wire:ignore.self class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>status</th>
                            <th>client</th>
                            <th>chambre</th>
                            <th>prix</th>
                            <th>Qty produit</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    </tfoot>
                    <tbody>
                        @empty($orders)
                            Aucunne donnee
                        @else
                            @foreach ($orders as $item)
                                <tr wire:key="{{ $item->id }}">
                                    @if ($item->status == false)
                                        <td>
                                            <span class="text-danger p-1"><i class="fa fa-circle"></i></span>
                                        </td>
                                    @else
                                        <td>
                                            <span class="text-success p-1"><i class="fa fa-circle"></i></span>
                                        </td>
                                    @endif
                                    <td>{{ $item->client_name }}</td>
                                    <td>{{ $item->room_name }}</td>
                                    <td>{{ $item->price }}</td>

                                    <td>{{ $item->products_count }}</td>
                                    <td>
                                        <a href="{{ route('admin.product.create', ['id' => $item->id]) }}"
                                            class="btn btn-primary btn-sm " title="ajouter des produits"> <i
                                                class="fa fa-plus" aria-hidden="true"></i></a>
                                        <button type="button" wire:click="openConfirmModal({{ $item->id }})"
                                            class="btn btn-success btn-sm " title="confirmer la commande"> <i
                                                class="fa fa-check" aria-hidden="true"></i></button>
                                        <a href="{{ route('admin.product.create', ['id' => $item->id]) }}"
                                            class="btn btn-warning btn-sm " title="modifier la commande"> <i
                                                class="fa fa-edit" aria-hidden="true"></i></a>
                                        <a href="{{ route('admin.product.create', ['id' => $item->id]) }}"
                                            class="btn btn-primary btn-sm " title="voir les details"> <i
                                                class="fa fa-eye" aria-hidden="true"></i></a>

                                        <a href="{{ route('admin.product.create', ['id' => $item->id]) }}"
                                            class="btn btn-danger btn-sm " title="supprimer la commande"> <i
                                                class="fa fa-window-close" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        @endempty
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- commande modal --}}
    <!-- Logout Modal-->
    <div wire:ignore.self class="modal fade" id="order" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter une commande?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="post" action="">
                        <div class="form-group">
                            <label for=""></label>
                            <input type="text" class="form-control" wire:model="client_name" name=""
                                id="" aria-describedby="helpId">
                            <small id="helpId" class="form-text text-muted">nom du client</small>
                        </div>
                        <div class="form-group">
                            <label for=""></label>
                            <input type="text" class="form-control" wire:model="room_name" name=""
                                id="" aria-describedby="helpId">
                            <small id="helpId" class="form-text text-muted">chambre du client</small>
                        </div>
                        <div class="form-group">
                            <label for=""></label>
                            <input type="text" class="form-control" wire:model="phone" name="" id=""
                                aria-describedby="helpId">
                            <small id="helpId" class="form-text text-muted">Telephone du client</small>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="submit" wire:click.prevent="store()">Creer</button>
                </div>
            </div>
        </div>
    </div>


        {{-- commande modal --}}
    <!-- Logout Modal-->
    <div wire:ignore.self class="modal fade" id="confirm" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">confirmer commande?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">× {{ $orderId }}</span>
                    </button>
                </div>

                <div class="modal-body">

                    <form method="post" action="">
                        <div class="form-group">
                            <label for=""></label>
                            <input type="text" class="form-control" wire:model="client_name" name=""
                                id="" aria-describedby="helpId">
                            <small id="helpId" class="form-text text-muted">nom du client</small>
                        </div>
                        <div class="form-group">
                            <label for=""></label>
                            <input type="text" class="form-control" wire:model="room_name" name=""
                                id="" aria-describedby="helpId">
                            <small id="helpId" class="form-text text-muted">chambre du client</small>
                        </div>
                        <div class="form-group">
                            <label for=""></label>
                            <input type="text" class="form-control" wire:model="phone" name="" id=""
                                aria-describedby="helpId">
                            <small id="helpId" class="form-text text-muted">Telephone du client</small>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="submit" wire:click.prevent="store()">Creer</button>
                </div>
            </div>
        </div>
    </div>
</div>
