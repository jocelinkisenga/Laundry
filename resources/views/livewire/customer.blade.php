<div>

    <!-- Page Heading -->
    <div class="mb-4 d-sm-flex align-items-center justify-content-between">
        <h1 class="mb-0 text-gray-800 h3">liste des commandes</h1>
        <a href="#" data-toggle="modal" data-target="#order"
            class="shadow-sm d-none d-sm-inline-block btn btn-sm btn-primary"><i
                class="fas fa-plus fa-sm text-white-50"></i> ajouter un article</a>
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
                            <th>N.</th>
                            <th>nom</th>
                            <th>chambre</th>
                            <th>id societe</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($clients as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->room_name }}</td>
                                <td>{{ $item->company_id }}</td>

                                <td>
                                    <a href=""></a>

                                    <button type="submit" wire:click =""
                                        class="btn btn-danger p1 text-white">X</button>
                                </td>
                            </tr>
                        @endforeach

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
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter un role?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">


                    <div class="form-group">
                        <label for=""></label>
                        <input type="file" wire:model="file_name" class="form-control" id=""
                            aria-describedby="helpId" value="">
                        <small id="helpId" class="form-text text-muted">nom du role</small>
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                    <button class="btn btn-primary" type="submit" wire:click.prevent="store()">Creer</button>
                </div>
            </div>
        </div>
    </div>
</div>
