@if($sertifikat->status == 'pending')
<td>
	<span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-yellow-50 c-yellow-700">{{$sertifikat->status}}</span>
</td>
@endif

@if($sertifikat->status == 'approved')
<td>
	<span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500">{{$sertifikat->status}}</span>
</td>
@endif

@if($sertifikat->status == 'rejected')
<td>
	<span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-red-50 c-red-500">{{$sertifikat->status}}</span>
</td>
@endif