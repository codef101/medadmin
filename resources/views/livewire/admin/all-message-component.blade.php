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
    
                        <h4 class="card-title">All User Mailing List</h4>
                        <p class="card-title-desc"><code>View and manage all user's mailing list details in the system</code>.
                        </p>
    
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Email Address</th>
                                    <th>Account Status</th>
                                    <th>Reg. Date</th>
                                    <th></th>
                                </tr>
                            </thead>
    
                            <tbody>
                                @foreach ($mails_details as $user )
                                <tr>
                                    <td>{{ $user->mail_name }}</td>
                                    <td>{{ $user->mail_status }}</td>
                                    <td>{{ $user->mail_date }}</td>
                                    <th></th>
                                   </tr>
                                @endforeach
                               </tbody>
                        </table>
                        {{ $mails_details->links() }}
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        </div>
        <!-- end row -->

    </div> <!-- container-fluid -->
</div>


