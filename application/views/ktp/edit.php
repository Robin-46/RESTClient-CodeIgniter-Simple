<?php echo form_open('ktp/edit');?>
<?php echo form_hidden('id',$dataktp[0]->id);?>

<table>
    <tr><td>ID</td><td><?php echo form_input('',$dataktp[0]->id,"disabled");?></td></tr>
    <tr><td>NAMA</td><td><?php echo form_input('nama',$dataktp[0]->nama);?></td></tr>
    <tr><td>NOMOR</td><td><?php echo form_input('nomor',$dataktp[0]->nomor);?></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('ktp','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>