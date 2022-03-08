<div class="page-content">
    <div class="container-fluid">

        <div class="row">
        </div>
         <!-- end row -->

        <div class="row">
            <style>
                nav svg{
                    height: 20px;
                }
                {
                    nav .hidden{
                        display: block !important;
                    }
                }
            </style>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
    
                        <h4 class="card-title">Users Details</h4>
                        <p class="card-title-desc"><code>The list of all users in MendSwap system</code>.
                        </p>
    
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Wallet Address</th>
                                    <th>Token</th>
                                    <th>Account Status</th>
                                    <th>Reg. Date</th>
                                    <th></th>
                                </tr>
                            </thead>
    
                            <tbody>
                                @foreach ($users as $user )
                                <tr>
                                    <td>{{ $user->ms_user_wallet }}</td>
                                    <td>{{ $user->ms_token }}</td>
                                    <td>{{ $user->ms_status }}</td>
                                    <td>{{ $user->ms_date }}</td>
                                    <th></th>
                                   </tr>
                                @endforeach
                               </tbody>
                        </table>
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        </div>
        <!-- end row -->

    </div> <!-- container-fluid -->
</div>


