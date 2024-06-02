<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <title>WhatsApp Message Form</title>

  <?php
  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Website RidhoFarm</title>
    <link rel="shortcut icon" href="./image/logoridhofarm-removebg-preview.png">
    <!-- Style -->
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/about.css">
    <!-- ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@4.0.8/css/line.min.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- SWIPER JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <body>
    <!-- END NAVBAR -->
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

      :root {
        --color-primary: #6f6af8;
        --color-primary-light: hsl(242, 91%, 69%, 18%);
        --color-primary-variant: #5854c7;
        --color-red: #da0f3f;
        --color-red-light: hsl(346, 87%, 46%, 15%);
        --color-green: #00c476;
        --color-green-light: hsl(156, 100%, 38%, 15%);
        --color-gray-900: #1e1e66;
        --color-gray-700: #2d2b7c;
        --color-gray-300: rgba(242, 242, 254, 0.3);
        --color-gray-200: rgba(242, 242, 254, 0.7);
        --color-white: #f2f2fe;
        --color-bg: #0f0f3e;
        --transition: all 300ms ease;
        --container-width-lg: 74%;
        --container-width-md: 88%;
        --form-width: 40%;
        --card-border-radius-1: 0.3rem;
        --card-border-radius-2: 0.5rem;
        --card-border-radius-3: 0.8rem;
        --card-border-radius-4: 2rem;
        --card-border-radius-5: 5rem;
      }

      /* ============================================================================= */

      body {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: var(--color-bg);
      }

      .container {
        background-color: var(--color-white);
        display: flex;
        flex-direction: row;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: var(--card-border-radius-3);
        width: 90%;
        max-width: 800px;
        overflow: hidden;
      }

      .image-container {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: var(--color-green);
      }

      .image-container img {
        max-width: 100%;
        height: auto;
      }

      .form-container {
        flex: 1;
        padding: 20px;
        background-color: var(--color-gray-200);
      }

      h2 {
        text-align: center;
        color: var(--color-green);
        margin-bottom: 20px;
      }

      .form-group {
        margin-bottom: 15px;
      }

      label {
        display: block;
        margin-bottom: 5px;
        color: var(--color-gray-900);
      }

      input,
      textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid var(--color-gray-300);
        border-radius: var(--card-border-radius-1);
        font-size: 16px;
      }

      textarea {
        resize: vertical;
      }

      button {
        width: 100%;
        padding: 12px;
        background-color: var(--color-green);
        color: var(--color-white);
        border: none;
        border-radius: var(--card-border-radius-2);
        font-size: 16px;
        cursor: pointer;
        transition: var(--transition);
      }

      button:hover {
        background-color: var(--color-primary);
      }

      @media (max-width: 900px) {
        .container {
          flex-direction: column;
        }

        .image-container {
          height: 200px;
        }
      }

      @media (max-width: 600px) {
        .form-container {
          padding: 15px;
        }

        input,
        textarea,
        button {
          font-size: 14px;
        }
      }
    </style>
</head>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kirim Pesan Melalui WhatsApp</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <div class="container">
    <div class="image-container">
      <img src="./image/wa.svg" alt="Image">
    </div>
    <div class="form-container">
      <form id="waForm" autocomplete="off">
        <h2>Kirim Pesan Melalui WhatsApp</h2>
        <div class="form-group">
          <label for="name">Nama Anda:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="message">Pesan Anda:</label>
          <textarea id="message" name="message" rows="4" required></textarea>
        </div>
        <button type="submit"><i class="fab fa-whatsapp"></i> Kirim Pesan Anda</button>
      </form>
      <div id="notification" style="display: none; color: var(--color-green); margin-top: 20px;">Pesan Anda telah dikirim!</div>
    </div>
  </div>
  <script src="script.js"></script>

  <script>
    document.getElementById('waForm').addEventListener('submit', function(event) {
      event.preventDefault();

      const name = document.getElementById('name').value;
      const message = document.getElementById('message').value;

      const whatsappURL = `https://api.whatsapp.com/send?phone=62882015503236&text=${encodeURIComponent('Hallo, Perkenalkan, ' + name +  '. ' + message)}`;

      window.open(whatsappURL, '_blank');

      // Clear the form fields
      document.getElementById('name').value = '';
      document.getElementById('message').value = '';

      // Show the notification
      const notification = document.getElementById('notification');
      notification.style.display = 'block';

      // Hide the notification after 3 seconds
      setTimeout(() => {
        notification.style.display = 'none';
      }, 3000);
    });
  </script>
</body>

</html>


</html>