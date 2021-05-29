
<link rel="stylesheet" href="<?= base_url('assets/plugins/datatables/datatable.min.css') ?>">
<div class="container">
<table id="kartukeluarga" class="table" style="width:100%">
    <thead>
      <tr>
        <th>No</th>
        <th>NIK</th>
        <th>Nama Kepala Keluarga</th>
        <th>Dusun</th>
        <th>Jalan</th>
        <th>Gang</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      </tr>
    </tbody>
  </table>
</div>
 
  <!-- jQuery UI 1.11.4 -->
<script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.js"></script>
 <script>
    $(document).ready(function() {
        $('#kartukeluarga').DataTable( {
            "processing": true,
            "serverSide": true,
            "ajax":{
              "url"  : "<?= base_url('data/get_ajax')?>",
              "type" : "POST"
            },
            "columnDefs":[
              {
                "targets":[0,1,6],
                "orderable":false
              }
            ]
        } );
    } );
</script>
