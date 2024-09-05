<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Master List</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Address</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Birthdate</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Sex</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Representative</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Status</th>
                               
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>

                          @foreach($data as $res)
                          <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('images/default-avatar.png') }}" class="avatar avatar-sm me-3"
                                            alt="user1">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">{{ $res->last_name . ', ' . $res->first_name . ' ' .  substr($res->middle_name,0,1) . '. ' . $res->ext_name }}</h6>
                                        <p class="text-xs text-secondary mb-0">Created at: {{ \Carbon\Carbon::parse($res->created_at)->format('F d, Y h:i:jA') }}</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">{{ $res->address }}</p> 
                            </td>
                            <td class="text-xs font-weight-normal mb-0">{{ \Carbon\Carbon::parse($res->birthdate)->format('M d, Y') }}</td>
                            <td class="text-xs font-weight-normal mb-0">{{ Str::title($res->sex) }}</td>
                            <td class="text-xs font-weight-normal mb-0">{{ $res->representative }}</td>
                            <td class="align-middle text-center text-sm">
                                <span class="badge badge-sm bg-gradient-success">Online</span>
                            </td>
                            <td class="align-left">
                                <a href="javascript:;" class="badge badge-sm bg-gradient-primary" >
                                    Edit
                                </a>
                                @if($res->certification!=null)
                                <a target="_blank" href='{{ route('certification.show',[Str::slug($res->last_name .' '. $res->first_name) , $res->certification->uid ?? '#']) }}' class="badge badge-sm bg-gradient-secondary"> <i class="fa fa-qrcode"></i> QR</a>
                                @endif
                            </td>
                        </tr>
                          @endforeach
                             
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>