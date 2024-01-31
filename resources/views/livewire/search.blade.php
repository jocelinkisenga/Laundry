<div>

    {{-- modal des users --}}
    <div wire:ignore.self class="modal fade" id="customer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter un role?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">

                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>nom</th>
                                    <th>cambre</th>
                                    <th>actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @empty($records)
                                    Aucunne donnee
                                @else
                                    @foreach ($records as $key => $record)

                                            <tr>

                                                <td>{{ $record->name }}</td>
                                                <td>{{ $record->room_name }}</td>

                                                <td>
                                                    <button class="btn btn-success p1 text-white" wire:click ="order({{ $record->id }})"
                                                        >selectioner</button>
                                                </td>
                                            </tr>

                                    @endforeach

                                @endempty
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
