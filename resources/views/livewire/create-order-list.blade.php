<div>
    {{-- commande modal --}}
    <!-- Logout Modal-->
    <div wire:ignore.self class="modal fade" id="product" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter un article?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="post" action="">
                        <div class="form-group">
                            <label for=""></label>
                            <input type="text" wire:model="name" class="form-control" name="" id=""
                                aria-describedby="helpId" value="">
                            <small id="helpId" class="form-text text-muted">nom de l'article</small>
                        </div>
                        <div class="form-group">
                            <label for=""></label>
                            <input type="text" wire:model="description" class="form-control" name="" id=""
                                aria-describedby="helpId" value="">
                            <small id="helpId" class="form-text text-muted">couleur</small>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                    <button class="btn btn-primary" type="submit" wire:click.prevent="store()" >Creer</button>
                </div>
            </div>
        </div>
    </div>
</div>
