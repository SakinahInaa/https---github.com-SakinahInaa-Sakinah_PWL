<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - {{ $nama }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;1,500&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #fce7f3 0%, #f3e8ff 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .profile-card {
            background: #ffffff;
            width: 100%;
            max-width: 420px;
            border-radius: 24px;
            box-shadow: 0 18px 35px rgba(244, 114, 182, 0.18);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
        }

        .profile-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 22px 45px rgba(244, 114, 182, 0.25);
        }

        .card-header-banner {
            background: linear-gradient(90deg, #e370a9 0%, #84e2fc 100%);
            height: 120px;
            width: 100%;
            position: relative;
        }

        .sparkle-icon {
            position: absolute;
            color: rgba(255, 255, 255, 0.8);
            font-size: 1.2rem;
        }
        .sparkle-1 { top: 20px; left: 25px; }
        .sparkle-2 { top: 35px; right: 30px; font-size: 1.4rem; }

        .card-body {
            padding: 0 28px 32px 28px;
            text-align: center;
            margin-top: -65px;
        }

        .avatar-wrapper {
            width: 130px;
            height: 130px;
            margin: 0 auto 16px;
            position: relative;
        }

        .avatar-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top;
            border-radius: 50%;
            border: 4px solid #ffffff;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            font-weight: 700;
            color: #831843;
            margin-bottom: 20px;
        }

        .info-container {
            background-color: #fff5f8;
            border-radius: 18px;
            padding: 16px 20px;
            display: flex;
            flex-direction: column;
            gap: 14px;
            border: 1px solid #fce7f3;
        }

        .info-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-bottom: 10px;
            border-bottom: 1px dashed #fbcfe8;
        }

        .info-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .label-group {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #9d174d;
            font-weight: 600;
            font-size: 0.92rem;
        }

        .label-group svg {
            width: 18px;
            height: 18px;
            fill: #db2777;
        }

        .info-value {
            font-weight: 700;
            font-size: 0.98rem;
            color: #831843;
        }
    </style>
</head>
<body>

    <div class="profile-card">
        <div class="card-header-banner">
            <span class="sparkle-icon sparkle-1">✨</span>
            <span class="sparkle-icon sparkle-2">✦</span>
        </div>

        <div class="card-body">
            <div class="avatar-wrapper">
                <img src="{{ $foto }}" alt="Foto Profile {{ $nama }}">
            </div>

            <h2 class="card-title">Profile</h2>

            <div class="info-container">
                <div class="info-item">
                    <div class="label-group">
                        <svg viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                        <span>Nama</span>
                    </div>
                    <span class="info-value">{{ $nama }}</span>
                </div>

                <div class="info-item">
                    <div class="label-group">
                        <svg viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm6 12H6v-1c0-2 4-3.1 6-3.1s6 1.1 6 3.1v1z"/></svg>
                        <span>NPM</span>
                    </div>
                    <span class="info-value">{{ $npm }}</span>
                </div>

                <div class="info-item">
                    <div class="label-group">
                        <svg viewBox="0 0 24 24"><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/></svg>
                        <span>Kelas</span>
                    </div>
                    <span class="info-value">{{ $kelas }}</span>
                </div>
            </div>
        </div>
    </div>

</body>
</html>