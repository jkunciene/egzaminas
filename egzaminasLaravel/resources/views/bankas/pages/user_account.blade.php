@extends('bankas/main')
@section('content')
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">Overview</span>
            <h3 class="page-title">Data Tables</h3>
        </div>
    </div>
    <!-- End Page Header -->
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card card-small mb-4">
                    <div class="card-header border-bottom">
                        <h6 class="m-0">Active Users</h6>
                    </div>
                    <div class="card-body p-0 pb-3 text-center">
                        <table class="table mb-0">
                            <thead class="bg-light">
                            <tr>

                                <th scope="col" class="border-0">Account Number</th>
                                <th scope="col" class="border-0">Pradinis likutis</th>
                                <th scope="col" class="border-0">Pajamos</th>
                                <th scope="col" class="border-0">Islaidos</th>
                                <th scope="col" class="border-0">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($accounts as $account)
                                @can('user_account', $account)
                                    <tr>

                                        <th>{{ $account->nr_account }}</th>
                                        <th>{{ $account->balance }}</th>
                                        <th>{{ $account->plius }}</th>
                                        <th>{{ $account->minus }}</th>
                                        @if( $account->attribute == 1)

                                        <th>Pagrindine</th> @else
                                        <th>Korteles saskaita</th>
                                    </tr>
                                            @endif

                                @endcan
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
