<!DOCTYPE html>
<html>
<head>
    <title>Vehicle Booking Notification</title>
</head>
<body>
    <h1>Hello, there</h1>
    <p>Your vehicle booking notification was successful</p>

    <table class="table no-border">
									<thead>
										<tr class="text-uppercase bg-lightest">
											<th style="min-width: 150px"><span class="text-white">Name</span></th>
											<th style="min-width: 100px"><span class="text-fade">Number</span></th>
											<th style="min-width: 100px"><span class="text-fade">Driver Name</span></th>
											<th style="min-width: 150px"><span class="text-fade">Booked By</span></th>
											<th style="min-width: 130px"><span class="text-fade">Designation</span></th>
											<th style="min-width: 120px"><span class="text-fade">From Date</span></th>
                                            <th style="min-width: 120px"><span class="text-fade">To Date</span></th>
                                            <th style="min-width: 120px"><span class="text-fade">Contact No</span></th>
                                            <th style="min-width: 120px"><span class="text-fade">Department</span></th>
										</tr>
									</thead>
									<tbody>
                                        <tr>
											<td>{{ App\Models\Vehicle::find($vehicle_booking->bookable_id)->name }} </td>
											<td>{{ App\Models\Vehicle::find($vehicle_booking->bookable_id)->number }} </td>
                                            <td>{{ App\Models\Vehicle::find($vehicle_booking->bookable_id)->user->name }} </td>
                                            <td>{{ App\Models\User::find($vehicle_booking->user_id)->name }} </td>
                                            <td>{{ App\Models\User::find($vehicle_booking->user_id)->designation }} </td>
                                            <td>{{ gmdate("Y-m-d\TH:i:s\Z", $vehicle_booking->from_timestamp) }} </td>
                                            <td>{{ gmdate("Y-m-d\TH:i:s\Z", $vehicle_booking->to_timestamp) }} </td>
                                            <td>{{ App\Models\User::find($vehicle_booking->user_id)->contactnumber }} </td>
                                            <td>{{ App\Models\User::find($vehicle_booking->user_id)->department }} </td>
                                        </tr>
                                    </tbody>
								</table>

    <p>Thank you</p>
</body>
</html>
