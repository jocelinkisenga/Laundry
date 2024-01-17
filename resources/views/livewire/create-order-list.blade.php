<div>

    <!-- Page Heading -->
    <div class="mb-4 d-sm-flex align-items-center justify-content-between">
        <h1 class="mb-0 text-gray-800 h3">liste des commandes</h1>
        <a href="#"  data-toggle="modal" data-target="#order"
            class="shadow-sm d-none d-sm-inline-block btn btn-sm btn-primary"><i
                class="fas fa-download fa-sm text-white-50"></i> Creer une commande</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>code</th>
                            <th>prix</th>
                            <th>Qty produit</th>
                            <th>date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>code</th>
                            <th>prix</th>
                            <th>Qty produit</th>
                            <th>date</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @empty($products)
                            Aucunne donnee
                        @else

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Edinburgh</td>
                                    <td></td>
                                    <td>2011/04/25</td>
                                </tr>

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
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="post" action="">
                        <div class="form-group">
                            <label for=""></label>
                            <input type="text" class="form-control" name="" id=""
                                aria-describedby="helpId" value="">
                            <small id="helpId" class="form-text text-muted">code de la commande</small>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="submit" wire:click.prevent="" >Creer</button>
                </div>
            </div>
        </div>
    </div>
</div>
