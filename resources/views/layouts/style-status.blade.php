@if($sertifikat->status == 'pending')
<td class="table-warning">{{$sertifikat->status}}</td>
@endif

@if($sertifikat->status == 'approved')
<td class="table-success">{{$sertifikat->status}}</td>
@endif

@if($sertifikat->status == 'rejected')
<td class="table-danger">{{$sertifikat->status}}</td>
@endif