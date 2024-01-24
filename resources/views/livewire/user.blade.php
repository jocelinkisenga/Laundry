<div>

    <!-- Page Heading -->
    <div class="mb-4 d-sm-flex align-items-center justify-content-between">
        <h1 class="mb-0 text-gray-800 h3">liste des utilisateurs</h1>
        <a href="#" data-toggle="modal" data-target="#order"
            class="shadow-sm d-none d-sm-inline-block btn btn-sm btn-primary p-2"><i
                class="fas fa-plus fa-sm text-white-50"></i> ajouter un utilisateur</a>
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
                            <th>couleur</th>
                            <th>actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @empty($users)
                            Aucunne donnee
                        @else
                            @foreach ($users as $key => $user)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td></td>

                                    <td>
                                        <a href=""></a>

                                        <button type="submit" wire:click =""
                                            class="btn btn-danger p1 text-white">X</button>
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
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter un utilisateur?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="post" action="">
                        <div class="form-group">
                            <label for=""></label>
                            <input type="text" wire:model="name" class="form-control" id=""
                                aria-describedby="helpId" value="">
                            <small id="helpId" class="form-text text-muted">noms de l'utilisateur</small>
                        </div>
                        <div class="form-group">
                            <label for=""></label>
                            <input type="text" wire:model="email" class="form-control" id=""
                                aria-describedby="helpId" value="">
                            <small id="helpId" class="form-text text-muted">email</small>
                        </div>
                        <div class="form-group">
                            <label for=""></label>
                            <input type="text" wire:model="phone" class="form-control" id=""
                                aria-describedby="helpId" value="">
                            <small id="helpId" class="form-text text-muted">Telephone</small>
                        </div>
                        <div class="form-group">
                            <select wire:model="role_id" class="form-control">
                                <option selected>Selectionner le role</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                        </div>

                        <div class="form-group">
                          <label for=""></label>
                          <select class="form-control" name="" id="">
                            <option></option>
                            <option></option>
                            <option></option>
                          </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer mt-4">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                    <button class="btn btn-primary" type="submit" wire:click.prevent="store()">Creer</button>
                </div>
            </div>
        </div>
    </div>
</div>
