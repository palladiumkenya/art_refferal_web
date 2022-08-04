  <thead>
                                        <tr>
                                            <th>CCC No.</th>
                                            <th>Name</th>
                                            <th>Mobile No.</th>
                                            <th>UPI</th>
                                            <th>Facility</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                                @foreach ($patients as $patient)
                                                    <tr>
                                                        <td>{{ $patient->ccc_no }}</td>
                                                        <td>{{ $patient->firstname.' '.$patient->middlename.' '.$patient->lastname }}</td>
                                                        <td>{{ $patient->msidn }}</td>
                                                        <td>{{ $patient->upi }}</td>
                                                        <td>{{ $patient->facility }}</td>
                                                        <td>
                                                            <button  data-toggle="modal" data-target="#editUser" type="button" class="btn btn-primary btn-sm">Edit</button>
                                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                        </tr>
                                    </tbody>
