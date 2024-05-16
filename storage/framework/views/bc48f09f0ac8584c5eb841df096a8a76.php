<?php $__env->startSection('content'); ?>

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Informasi Produk
                </div>
                <div class="float-end">
                    <a href="<?php echo e(route('products.index')); ?>" class="btn btn-primary btn-sm">&larr; Kembali</a>
                </div>
            </div>
            <div class="card-body">

                    <div class="row">
                        <label for="code" class="col-md-4 col-form-label text-md-end text-start"><strong>Kode:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            <?php echo e($product->code); ?>

                        </div>
                    </div>

                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Nama:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            <?php echo e($product->name); ?>

                        </div>
                    </div>

                    <div class="row">
                        <label for="quantity" class="col-md-4 col-form-label text-md-end text-start"><strong>Kuantitas:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            <?php echo e($product->quantity); ?>

                        </div>
                    </div>

                    <div class="row">
                        <label for="price" class="col-md-4 col-form-label text-md-end text-start"><strong>Harga ($):</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            <?php echo e($product->price); ?>

                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Deskripsi:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            <?php echo e($product->description); ?>

                        </div>
                    </div>

            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('products.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Webdevplatform\Laragon\www\laravel10crudmaster\resources\views/products/show.blade.php ENDPATH**/ ?>