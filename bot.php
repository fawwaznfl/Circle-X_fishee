<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <meta name="description" content="Fishee - Pasar Ikan Modern">
        <link href="assets_guests/images/favicon/logo-profil.png" rel="icon">
        <title>Fishee - Pasar Ikan Modern</title>
        <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Rubik:400,500,600,700%7cRoboto:400,500,700&display=swap">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
        <link rel="stylesheet" href="assets_guests/css/libraries.css">
        <link rel="stylesheet" href="assets_guests/css/style.css">
      </head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #333;;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .chat-container {
            width: auto;
            height: auto;
            background-color: #202123;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            overflow: hidden;
        }

        .chat-header {
            background-color: #333;
            padding: 10px;
            text-align: center;
        }

        .chat-messages {
            height: 280px;
            width: 1080px;
            overflow-y: auto;
            padding: 10px;
            background-color: #353434;
        }

        .blank-messages {
            height: 80px;
            width: 1080px;
            overflow-y: auto;
            padding: 10px;
            background-color: #535353;
        }

        .message {
            margin-bottom: 10px;
        }

        .user-message {
            text-align: right;
        }

        .user-message .message-bubble {
            background-color: #007bff;
            color: #fff;
        }

        .bot-message {
            text-align: left;
        }

        .bot-message .message-bubble {
            background-color: #333;
            color: #fff;
        }

        .input-container {
            background-color: #535353;
            padding: 10px;
        }

        input[type="text"] {
            width: 90%;
            padding: 10px;
            border: none;
            border-radius: 5px;
        }

        .send-button {
            background-color: #007dab;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="chat-container">
        <div class="chat-header">
            FISHEE BOT
        </div>
        <div class="chat-messages">
          <img src="assets_guests/images/logo/logo-profil.png" style="width: 50px; vertical-align: middle; margin-right: 10px;">
          <span style="vertical-align: middle;">Selamat datang di FISHEE BOT, ada yang bisa saya bantu?</span>
          <!-- Pesan-pesan akan ditampilkan di sini -->
        </div>
        <div class="blank-messages">
        </div>        
        <div class="input-container">
            <input type="text" placeholder="Ketik pesan Anda">
            <button class="send-button">Kirim</button>
        </div>
    </div>
</body>
</html>
