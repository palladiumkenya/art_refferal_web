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
                                            <th>CCC No.</th>
                                            <th>Name</th>
                                            <th>Mobile No.</th>
                                            <th>UPI</th>
                                            <th>Facility</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
