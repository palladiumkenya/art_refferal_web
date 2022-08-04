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
                                                            <button  data-toggle="modal" data-target="#editUser" type="button" class="btn btn-primary btn-sm">Edit</button>
                                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                        </tr>
                                    </tbody>
