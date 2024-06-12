<div>
    <div id="socialAccountsSection" class="card">
        <div class="card-header">
            <h4 class="card-title">Social accounts</h4>
        </div>

        <div class="card-body">

            @if (session()->has('message'))
            <div class="alert alert-success mt-3">
                {{ session('message') }}
            </div>
            @endif

            <form>
                <div class="list-group list-group-lg list-group-flush list-group-no-gutters">
                    @foreach ($socialAccounts as $account => $link)
                        <div class="list-group-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <i class="bi-{{ $account }} list-group-icon"></i>
                                </div>

                                <div class="flex-grow-1">
                                    <div class="row align-items-center">
                                        <div class="col-sm mb-2 mb-sm-0">
                                            <h4 class="mb-0">{{ ucfirst($account) }}</h4>
                                            @if ($editMode[$account])
                                                <input type="text" class="form-control" wire:model.defer="socialAccounts.{{ $account }}" placeholder="Enter {{ $account }} link">
                                            @else
                                                <a class="fs-5" href="{{ $link }}" target="_blank">{{ $link ?: 'Not connected' }}</a>
                                            @endif
                                        </div>
                                        <!-- End Col -->

                                        <div class="col-sm-auto mt-3">
                                            @if ($editMode[$account])
                                                <button type="button" class="btn btn-primary btn-sm" wire:click="save('{{ $account }}')">Save</button>
                                            @else
                                                <button type="button" class="btn btn-white btn-sm" wire:click="toggleEdit('{{ $account }}')">Edit</button>
                                            @endif
                                        </div>
                                        <!-- End Col -->
                                    </div>
                                    <!-- End Row -->
                                </div>
                            </div>
                        </div>
                        <!-- End Item -->
                    @endforeach
                </div>
            </form>


        </div>
    </div>

</div>
