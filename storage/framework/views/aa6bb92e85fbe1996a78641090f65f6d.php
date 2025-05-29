<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Daftar Pendaftar OSIS</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: url('/image/download (1).jpeg') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.95);
            max-width: 960px;
            margin: 0 auto;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.2);
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo img {
            max-width: 120px;
        }
        h2 {
            color: #222;
            text-align: center;
            margin-bottom: 25px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            background: white;
            border-radius: 8px;
            overflow: hidden;
        }
        thead {
            background-color: #0066cc;
            color: white;
        }
        th, td {
            padding: 12px 18px;
            border-bottom: 1px solid #ddd;
            text-align: left;
            font-size: 15px;
        }
        tbody tr:hover {
            background-color: #f1f7ff;
        }
        .no-data {
            text-align: center;
            padding: 20px;
            font-size: 16px;
            color: #666;
        }
        .back-link {
            display: block;
            margin-top: 25px;
            text-align: center;
            text-decoration: none;
            color: #0066cc;
            font-weight: 600;
            font-size: 16px;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="logo">
        <img src="/image/logo.jpeg" alt="Logo OSIS">
    </div>

    <h2>Daftar Pendaftar OSIS</h2>

    <?php if(count($pendaftars) > 0): ?>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>No HP</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $pendaftars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pendaftar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($pendaftar->nama); ?></td>
                    <td><?php echo e($pendaftar->kelas); ?></td>
                    <td><?php echo e($pendaftar->alamat); ?></td>
                    <td><?php echo e($pendaftar->no_hp); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php else: ?>
        <p class="no-data">Belum ada pendaftar.</p>
    <?php endif; ?>

    <a href="/" class="back-link">← Kembali ke form pendaftaran</a>
</div>

</body>
</html>
<?php /**PATH D:\xampp\htdocs\projek_laravel\osis-app\resources\views/daftar_pendaftar.blade.php ENDPATH**/ ?>