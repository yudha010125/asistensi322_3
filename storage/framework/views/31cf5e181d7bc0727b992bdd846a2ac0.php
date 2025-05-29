<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Form Pendaftaran OSIS</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

    body {
        font-family: 'Poppins', sans-serif;
        background: url('/image/download (1).jpeg') no-repeat center center fixed;
        background-size: cover;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        position: relative;
    }

    body::before {
        content: "";
        position: absolute;
        inset: 0;
        background: rgba(0,0,0,0.5);
        backdrop-filter: blur(2px);
        z-index: 0;
    }

    .container {
        background: rgba(255, 255, 255, 0.85);
        backdrop-filter: blur(12px);
        padding: 40px;
        border-radius: 20px;
        box-shadow: 0 10px 35px rgba(0, 0, 0, 0.3);
        width: 100%;
        max-width: 420px;
        position: relative;
        z-index: 1;
        animation: fadeIn 0.7s ease;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    h2 {
        text-align: center;
        color: #222;
        margin-bottom: 25px;
        font-weight: 600;
        font-size: 1.6rem;
    }

    form label {
        font-weight: 500;
        color: #333;
        margin-bottom: 6px;
        display: block;
    }

    form input[type="text"], form input[type="tel"] {
        width: 100%;
        padding: 12px 15px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
        background-color: #f1f3f5;
        font-size: 15px;
        transition: 0.3s ease;
    }

    form input[type="text"]:focus,
    form input[type="tel"]:focus {
        background: #fff;
        outline: none;
        border-color: #339af0;
        box-shadow: 0 0 0 3px rgba(51, 154, 240, 0.3);
    }

    button, .lihat-daftar {
        display: block;
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 10px;
        font-weight: 600;
        font-size: 16px;
        background: linear-gradient(to right, #1e90ff, #0066cc);
        color: #fff;
        cursor: pointer;
        transition: all 0.3s ease;
        text-align: center;
        margin-top: 10px;
        text-decoration: none;
    }

    button:hover, .lihat-daftar:hover {
        transform: scale(1.03);
        box-shadow: 0 6px 15px rgba(0, 102, 204, 0.3);
    }

    .message {
        padding: 12px 15px;
        margin-bottom: 20px;
        border-radius: 10px;
        font-weight: 500;
        text-align: center;
    }

    .success {
        background: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }

    .error {
        background: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
    }

    ul {
        padding-left: 20px;
        margin: 0;
    }

    @media (max-width: 480px) {
        .container {
            padding: 30px 25px;
            border-radius: 16px;
        }
    }
</style>
</head>
<body>

<div class="container">
     <img src="/image/logo.jpeg" alt="Logo OSIS" style="display:block; margin: 0 auto 20px; max-width: 100px;">
    <h2>Form Pendaftaran OSIS</h2>

    <?php if(session('success')): ?>
        <div class="message success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <?php if(session('error')): ?>
        <div class="message error"><?php echo e(session('error')); ?></div>
    <?php endif; ?>

    <?php if($errors->any()): ?>
        <div class="message error">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="/pendaftaran" method="POST">
        <?php echo csrf_field(); ?>
        <label for="nama">Nama Lengkap</label>
        <input type="text" name="nama" id="nama" value="<?php echo e(old('nama')); ?>" required />

        <label for="kelas">Kelas</label>
        <input type="text" name="kelas" id="kelas" value="<?php echo e(old('kelas')); ?>" required />

        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat" value="<?php echo e(old('alamat')); ?>" required />

        <label for="no_hp">No. HP</label>
        <input type="tel" name="no_hp" id="no_hp" value="<?php echo e(old('no_hp')); ?>" required />

        <button type="submit">Daftar Sekarang</button>
    </form>

    <a href="/daftar-pendaftar" class="lihat-daftar">📋 Lihat Daftar Pendaftar</a>
</div>

</body>
</html>
<?php /**PATH D:\xampp\htdocs\projek_laravel\osis-app\resources\views/pendaftaran.blade.php ENDPATH**/ ?>