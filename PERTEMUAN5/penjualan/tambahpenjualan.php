<div class="container mt-3">

<div class="card">
 <div class="card-header"><b>PEMBELIAN</b></div>
 <div class="card-body">
 <div class="row mb-2 mt-2">
 <div class="col-sm-1">
 <label for="tanggal" class="form-label">Tanggal:</label>
</div>
<div class="col-sm-4">
 <input type="date" class="form-control" id="tanggal" placeholder="Enter Tanggal"
name="tanggal" value="<?php echo date("Y-m-d");?>">
</div>
 </div>

 <div class="row mb-2 mt-2">
 <div class="col-sm-1">
 <label for="konsumen" class="form-label">Konsumen:</label>
</div>
<div class="col-sm-4">
 <input type="text" class="form-control" id="konsumen" placeholder="Enter Konsumen"
name="konsumen">
</div>
 </div>

 <div class="row mb-2 mt-2">
 <div class="col-sm-1">
 <label for="telp" class="form-label">Telp:</label>
</div>
<div class="col-sm-4">
 <input type="text" class="form-control" id="telp" placeholder="Enter Telp" name="telp">
</div>
 </div>

 <div class="row mb-2 mt-2">
 <div class="col-sm-6">
 <label for="keterangan">Keterangan:</label>
 <textarea class="form-control" rows="2" id="keterangan" name="text"></textarea>
 </div>
 </div>

<div class="row mb-2 mt-2">
 <div class="col-sm-2">
 <div class="mb-1 mt-1">
 <label for="kode" class="form-label">Kode:</label>
 <input type="text" class="form-control" id="kode" name="kode" readonly data-bstoggle="modal" data-bs-target="#myModal">
 </div>
 </div>

 <div class="col-sm-3">
 <div class="mb-1 mt-1">
 <label for="nama" class="form-label">Nama:</label>
 <input type="text" class="form-control" id="nama" name="nama" readonly>
 </div>
 </div>

 <div class="col-sm-2">
 <div class="mb-1 mt-1">
 <label for="satuan" class="form-label">Satuan:</label>
 <input type="text" class="form-control" id="satuan" name="satuan" readonly>
 </div>
 </div>

 <div class="col-sm-2">
 <div class="mb-1 mt-1">
 <label for="harga" class="form-label">Harga:</label>
 <input type="number" class="form-control" id="harga" name="harga" readonly>
 </div>
 </div>

 <div class="col-sm-1">
 <div class="mb-1 mt-1">
 <label for="jumlah" class="form-label">Jumlah:</label>
 <input type="number" class="form-control" id="jumlah" name="jumlah" value="0">
 </div>
 </div>

 <div class="col-sm-1">
 <div class="mb-1 mt-3">
<br>
 <button type="button" id="tambah" class="btn btn-primary btn-sm">+</button>
 </div>
 </div>

</div>

<div class="row mb-2 mt-2">
 <table class="table table-bordered" >
 <thead>
 <tr align="center">
 <th>Kode</th>
 <th>Nama</th>
 <th>Satuan</th>
<th>Harga</th>
<th>Jumlah</th>
<th>Total</th>
<th>Action</th>
 </tr>
 </thead>
 <tbody id="tableisi">
</tbody>
</table>
</div>
 <div class="row mb-2 mt-2">
 <div class="col-sm-9" align="right">
 <label for="total" class="form-label">Grand Total:</label>
</div>
<div class="col-sm-3">
 <div class="input-group">
<span class="input-group-text">Rp</span>
 <input type="number" class="form-control" id="grandtotal" name="grandtotal" value="0"
readonly align="right">
</div>
</div>
 </div>

 <div class="row mb-2 mt-2">
 <div class="col-sm-9" align="right">
 <label for="bayar" class="form-label">Bayar:</label>
</div>
<div class="col-sm-3">
 <div class="input-group">
<span class="input-group-text">Rp</span>
 <input type="number" class="form-control" id="bayar" name="bayar" value="0" align="right">
</div>
</div>
 </div>

 <div class="row mb-2 mt-2">
 <div class="col-sm-9" align="right">
 <label for="kembali" class="form-label">Kembali:</label>
</div>
<div class="col-sm-3">
<div class="input-group">
<span class="input-group-text">Rp</span>
 <input type="number" class="form-control" id="kembali" name="kembali" value="0" readonly
align="right">
</div>
</div>
 </div>

 </div> <!-- body-->
 <div class="card-footer">
 <div class="row mb-2 mt-2">
 <div class="col-sm-8">
 </div>
 <div class="col-sm-4">
 <button type="button" id="save" class="btn btn-success btn-sm">SAVE</button>
 <button type="button" id="cancel" class="btn btn-danger btn-sm">CANCEL</button>
 </div>
 </div>
 </div>
</div>
<!-- The Modal -->
<div class="modal" id="myModal">
 <div class="modal-dialog">
 <div class="modal-content">
 <!-- Modal Header -->
 <div class="modal-header">
 <h4 class="modal-title">Barang</h4>
 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
 </div>
 <!-- Modal body -->
 <div class="modal-body">

 <table class="table table-bordered" >
 <thead>
 <tr align="center">
 <th>Kode</th>
 <th>Nama</th>
 <th>Satuan</th>
<th>Harga</th>
<th>Action</th>
 </tr>
 </thead>
 <tbody id="tablebrg">
<tr>
<td>m001</td>
<td>CPU</td>
<td>unit</td>
<td>2000</td>
 <td><button type="button" class="btn btn-success btn-sm" id="pilih" data-bsdismiss="modal">Pilih</button>
</td>
</tr>
 <tr>
<td>m002</td>
<td>VGA</td>
<td>unit</td>
<td>3000</td>
 <td><button type="button" class="btn btn-success btn-sm" id="pilih" data-bsdismiss="modal">Pilih</button>
</td>
</tr>
<tr>
<td>m003</td>
<td>RAM</td>
<td>unit</td>
<td>4000</td>
 <td><button type="button" class="btn btn-success btn-sm" id="pilih" data-bsdismiss="modal">Pilih</button>
</td>
</tr>
</tbody>
</table>
 </div>
 <!-- Modal footer -->
 <div class="modal-footer">
<button type="button" class="btn btn-danger btn-sm" data-bsdismiss="modal">Close</button>
 </div>
 </div>
 </div>
</div>
</div>
</div>
</div>


</div>
