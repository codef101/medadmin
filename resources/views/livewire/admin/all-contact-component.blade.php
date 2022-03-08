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
    
                        <h4 class="card-title">All User Request Message</h4>
                        <p class="card-title-desc"><code>View and manage all user's request message in the system here.</code>.
                        </p>
    
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email Address</th>
                                    <th>Message</th>
                                    <th>Account Status</th>
                                    <th>TID</th>
                                    <th>Reg. Date</th>
                                    <th></th>
                                </tr>
                            </thead>
    
                            <tbody>
                                @foreach ($contact_details as $user )
                                <tr>
                                    <td>{{ $user->msg_fname }}</td>
                                    <td>{{ $user->msg_email }}</td>
                                    <td>{{ $user->msg_mesage }}</td>
                                    <td>{{ $user->msg_status }}</td>
                                    <td>{{ $user->msg_trac }}</td>
                                    <td>{{ $user->msg_date }}</td>
                                    <th></th>
                                   </tr>
                                @endforeach
                               </tbody>
                        </table>
                        {{ $contact_details->links() }}
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        </div>
        <!-- end row -->

    </div> <!-- container-fluid -->
</div>


