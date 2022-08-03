  <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Mobile No.</th>
                                            <th>Facility</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                                @foreach ($providers as $providers)
                                                    <tr>
                                                        <td>{{ $providers->firstname.' '.$providers->middlename.' '.$providers->lastname }}</td>
                                                        <td>{{ $providers->msisdn }}</td>
                                                        <td>{{ $providers->facility }}</td>
                                                        <td>
                                                            <a href="#" class="text-success mr-2">
                                                                <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                            </a>
                                                            <a href="#" class="text-danger mr-2">
                                                                <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Mobile No.</th>
                                            <th>Facility</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
