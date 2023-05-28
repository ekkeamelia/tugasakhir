
<?php $__env->startSection('content'); ?>
 <div class="row">
    <div class="col-lg-12 margin-tb">
    <div class="pull-left">
    <h2>Laravel 8 CRUD Example from scratch - ItSolutionStuff.com</h2>
   </div>
    <div class="pull-right">
    <a class="btn btn-success" href="<?php echo e(route('pegawais.create')); ?>"> Create New Pegawai</a>
    </div>
    </div>
    </div>
 
 <?php if($message = Session::get('success')): ?>
 <div class="alert alert-success">
 <p><?php echo e($message); ?></p>
 </div>
 <?php endif; ?>
 
 <table class="table table-bordered">
 <tr>
 <th>No</th>
 <th>nip</th>
 <th>nama</th>
 <th>jenis_kelamin</th>
 <th>nohp</th>
 <th>jabatan</th>
 <th>alamat</th>
 <th width="280px">Action</th>
 </tr>
 <?php $__currentLoopData = $pegawais; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pegawai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <tr>
 <td><?php echo e(++$i); ?></td>
 <td><?php echo e($pegawai->nip); ?></td>
 <td><?php echo e($pegawai->nama); ?></td>
 <td><?php echo e($pegawai->jenis_kelamin); ?></td>
 <td><?php echo e($pegawai->nohp); ?></td>
 <td><?php echo e($pegawai->jabatan); ?></td>
 <td><?php echo e($pegawai->alamat); ?></td>
 <td>
 <form action="<?php echo e(route('pegawais.destroy',$pegawai->id)); ?>" 
method="POST">
 
 <a class="btn btn-info" href="<?php echo e(route('pegawais.show',$pegawai->id)); ?>">Show</a>
 
 <a class="btn btn-primary" href="<?php echo e(route('pegawais.edit',$pegawai->id)); ?>">Edit</a>
 
 <?php echo csrf_field(); ?>
 <?php echo method_field('DELETE'); ?>
 
 <button type="submit" class="btn btndanger">Delete</button>
 </form>
 </td>
 </tr>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </table>
 
 <?php echo $pegawai->links(); ?>

 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pegawais.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laporan_ta\resources\views/pegawais/index.blade.php ENDPATH**/ ?>