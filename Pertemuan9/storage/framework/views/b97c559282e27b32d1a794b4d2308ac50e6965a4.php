<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
</head>
<body>
    <div class="container">

        <?php if(session('pesan')): ?>
            <div class="alert alert-success">
                <?php echo e(session('pesan')); ?>

            </div>
        <?php endif; ?>

        <h4>Data Mahasiswa</h4>

        <hr>

        <h5>
            Tabel Biasa
        </h5>
        <table class="table">
            <tr>
                <td>
                    #
                </td>
                <td>
                    NIM
                </td>
                <td>
                    Name
                </td>
                <td>
                    Gender
                </td>
                <td>
                    Jurusan
                </td>
                <td>
                    Alamat
                </td>
                <td>
                    Aksi
                </td>
            </tr>

            <?php
                $no = 1
            ?>

            <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <?php echo e($no++); ?>

                    </td>
                    <td>
                        <?php echo e($s->nim); ?>

                    </td>
                    <td>
                        <?php echo e($s->name); ?>

                    </td>
                    <td>
                        <?php echo e($s->gender); ?>

                    </td>
                    <td>
                        <?php echo e($s->departement); ?>

                    </td>
                    <td>
                        <?php echo e($s->address); ?>

                    </td>
                    <td>
                        <a href="<?php echo e(url('/mahasiswa/'.$s->id.'/edit')); ?>" class="btn btn-warning">Edit</a>
                        <form action="<?php echo e(url('/mahasiswa/hapus/'.$s->id)); ?>" method="post" class="d-inline">
                            <?php echo method_field('delete'); ?>
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>

        <hr>

        <h5>
            Menggunakan Datatables
        </h5>

        <table id="myTable" class="table">
            <thead>
                <tr>
                    <td>
                        #
                    </td>
                    <td>
                        NIM
                    </td>
                    <td>
                        Name
                    </td>
                    <td>
                        Gender
                    </td>
                    <td>
                        Jurusan
                    </td>
                    <td>
                        Alamat
                    </td>
                    <td>
                        Aksi
                    </td>
                </tr>
            </thead>

            <?php
                $no = 1
            ?>

            <tbody>
                <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <?php echo e($no++); ?>

                        </td>
                        <td>
                            <?php echo e($s->nim); ?>

                        </td>
                        <td>
                            <?php echo e($s->name); ?>

                        </td>
                        <td>
                            <?php echo e($s->gender); ?>

                        </td>
                        <td>
                            <?php echo e($s->departement); ?>

                        </td>
                        <td>
                            <?php echo e($s->address); ?>

                        </td>
                        <td>
                            <a href="<?php echo e(url('/mahasiswa/'.$s->id.'/edit')); ?>" class="btn btn-warning">Edit</a>
                            <form action="<?php echo e(url('/mahasiswa/hapus/'.$s->id)); ?>" method="post" class="d-inline">
                                <?php echo method_field('delete'); ?>
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
</body>
</html>
<?php /**PATH C:\Users\ASUS\Desktop\Praktikum DPW\Pertemuan9\resources\views/student.blade.php ENDPATH**/ ?>