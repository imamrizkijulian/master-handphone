@extends('layouts.index')
@section('content')
<div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title">Bootstrap dataTables</div>
				</div>
  				<div class="panel-body">
  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<thead>
							<tr>
								<th>Rendering engine</th>
								<th>Browser</th>
								<th>Platform(s)</th>
								<th>Engine version</th>
								<th>CSS grade</th>
							</tr>
						</thead>
						<tbody>
							<tr class="odd gradeX">
								<td>Trident</td>
								<td>Internet
									 Explorer 4.0</td>
								<td>Win 95+</td>
								<td class="center"> 4</td>
								<td class="center">X</td>
							</tr>
							<tr class="even gradeC">
								<td>Trident</td>
								<td>Internet
									 Explorer 5.0</td>
								<td>Win 95+</td>
								<td class="center">5</td>
								<td class="center">C</td>
							</tr>
							<tr class="odd gradeA">
								<td>Trident</td>
								<td>Internet
									 Explorer 5.5</td>
								<td>Win 95+</td>
								<td class="center">5.5</td>
								<td class="center">A</td>
							</tr>
							</tr>
						</tbody>
					</table>
  				</div>
  			</div>
@endsection