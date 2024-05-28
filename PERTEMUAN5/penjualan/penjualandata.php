<div class="container mt-3">

  <div class="card">
  <div class="card-header">
  <button type="button" id="tambahpenjualan" class="btn btn-success"> + </button> <b>PENJUALAN</b>
</div>
  <div class="card-body">
  <table class="table" id="tabelpenjualan">
    <thead>
      <tr>
        <th>invoice</th>
        <th>tanggal</th>
        <th>konsumen</th>
        <th>telp</th>
        <th>total</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>TD232135123</td>
        <td>28-05-2024</td>
        <td>John Doe</td>
        <td>081876543212</td>
        <td>20000</td>
        <td><button type="button" class="btn btn-success">V</button></td>
      </tr>
      <tr>
        <td>TD232135124</td>
        <td>28-05-2024</td>
        <td>John Doe</td>
        <td>081876543212</td>
        <td>20000</td>
        <td><button type="button" class="btn btn-success">V</button></td>
      </tr>
      <tr>
        <td>TD232135125</td>
        <td>28-05-2024</td>
        <td>John Doe</td>
        <td>081876543212</td>
        <td>20000</td>
        <td><button type="button" class="btn btn-success">V</button></td>
      </tr>

    </tbody>
    <tfood>
        <tr><td colspan="4">TOTAL</td><td>300000</td></tr>
    </tfood>
  </table>
</div>
        
</div>
</div>
</div>

</div>
</div>

  
<script>
    $(document).ready(function(){
    $("#tabelpenjualan").dataTable();});

    $("#tambahpenjualan").click(function()
{   $('#isiutama').load('penjualan/tambahpenjualan.php');});
</script>