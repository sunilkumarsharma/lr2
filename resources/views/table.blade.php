<div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2> <strong>Users</strong></h2>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Sr.no</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Description </th>
                                <th>Role</th>
                                <th>Photo </th>
                                <th>Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($data)>0)
                                @foreach($data as $datas)
                                <tr>
                                    <td scope="row">{{ ($data->currentPage()-1) * $data->perPage() + $loop->index + 1 }}</td>
                                    <td>{{ $datas->name }}</td>
                                    <td>{{ $datas->email }}</td>                                    
                                    <td >{{ $datas->phone }}</td>
                                    <td>{{ $datas->description }}</td>                                    
                                    <td >{{ $datas->phone }}</td>                                    
                                    <td ><img src="uploads/users/{{ $datas->photo }}" width="100" /></td>
                                    <td >{{ $datas->created_at }}</td>
                                </tr>
                                @endforeach
                                @else
                                <tr><td colspan="9">No records found.</td></tr>
                            @endif  
                            </tbody>
                        </table>
                    </div>
                </div>
                {!! $data->appends(\Request::except('page'))->render() !!}
            </div>