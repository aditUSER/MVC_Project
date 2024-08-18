<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pengguna</title>
    <!-- Tambahkan Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Karla', sans-serif;
            margin: 0;
            padding: 0;
            height: 100%;
            /* Ganti dengan URL GIF dari Giphy */
            background: url('https://media.giphy.com/media/6LoYq47yg73FsDYFHA/giphy.gif') no-repeat center center fixed !important;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .container-center {
            text-align: center;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            width: 80%;
            max-width: 600px;
        }
        .chat-container {
            width: 400px;
            max-width: 100%;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: column;
            margin-bottom: 30px;
        }
        .chat-title {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }
        .user-list {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        .user-item {
            display: flex;
            align-items: center;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #f1f1f1;
            border-radius: 8px;
        }
        .user-item:nth-child(odd) {
            background-color: #e2e2e2;
        }
        .user-avatar {
            width: 40px;
            height: 40px;
            background-color: #ccc;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-size: 20px;
            color: white;
        }
        .user-name {
            font-size: 16px;
            color: #555;
        }
        .laragon-info {
            margin-top: 30px;
            font-size: 18px;
            color: #666;
        }
        .laragon-info span {
            display: block;
            margin-top: 10px;
        }
        .laragon-opt a {
            text-decoration: none;
            font-size: 20px;
            color: #3498db;
        }
        .laragon-opt a:hover {
            color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="container-center">
        <div class="chat-container">
            <div class="chat-title">Daftar Pengguna</div>
            <ul class="user-list">
                <?php if (!empty($users)): ?>
                    <?php foreach ($users as $user): ?>
                        <li class="user-item">
                            <div class="user-avatar">
                                <?php echo strtoupper($user['name'][0]); ?> <!-- Inisial Nama -->
                            </div>
                            <div class="user-name">
                                <?php echo htmlspecialchars($user['name']); ?>
                            </div>
                        </li>
                    <?php endforeach; ?>
                <?php else: ?>
                    <li class="user-item">Data pengguna tidak tersedia.</li>
                <?php endif; ?>
            </ul>
        </div>

        <!-- Informasi Laragon diposisikan di tengah halaman -->
        <div class="laragon-info">
            <?php print($_SERVER['SERVER_SOFTWARE']); ?><br />
            PHP version: <?php print phpversion(); ?>  
            <span><a title="phpinfo()" href="/?q=info">info</a></span><br />
            Document Root: <?php print ($_SERVER['DOCUMENT_ROOT']); ?><br />
        </div>
        <div class="laragon-opt">
            <div><a title="Getting Started" href="https://laragon.org/docs">Getting Started</a></div>
        </div>
    </div>

    <!-- Tambahkan Bootstrap JS dan jQuery (opsional, jika dibutuhkan) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
