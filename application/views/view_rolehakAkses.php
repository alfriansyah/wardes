<div class="containre">
    <div class="row">
    <div class="col-md-6">
    &nbsp &nbsp Role = <?= $role['menu'] ?> &nbsp  Role menu = <?= $role['role_menu'] ?> 
    <table class="table">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Hak Akses</th>
            <th scope="col">**</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            $i = 1;
            foreach($menu as $menu) : ?>
            <tr>
            <th scope="row"><?= $i++ ?></th>
            <td><?= $menu['menu'] ?></td>
            <td>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="access" <?= rolechecked($role['role_menu'],$menu['role_menu']) ?> data-role="<?= $role['role_menu']?>" data-menu="<?= $menu['role_menu']?>">
                    <!-- data-role="" dan data-menu="" untuk menangkap multiple value dari <input> -->
                    </label>
                </div>
            </td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
    </div>
</div></div>

<!-- ajax untuk mengirim role_menu  -->

<script>
    $(document).ready(function(){
        $('.form-check-input').change(function(){
            // e.preventDefault();
            // tangkap value dari <input> dan masukkan dalam variabel
            var role_menu = $(this).attr('data-role');
            var menu      = $(this).attr('data-menu');

            // jalankan ajax
            $.ajax({
                // alamat data di proses
                url : "<?= base_url('sekdes/ubahaksesmenu')?>",
                type:"POST",
                data:{
                    role_menu :role_menu,
                    menu:menu
                },
                // jika ajax sukses maka
                success: function(data){
                    document.location.href="<?= base_url('sekdes/rolehakakses/')?>" + role_menu;
                },
            });
        })
    })
</script>