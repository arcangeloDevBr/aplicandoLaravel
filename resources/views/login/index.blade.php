<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - Freelarc</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    html, body {
      height: 100%;
      margin: 0;
      background-color: #000;
      color: #f1f1f1;
      font-family: 'Segoe UI', sans-serif;
      overflow: hidden;
    }
    #particles-js {
      position: absolute;
      width: 100%;
      height: 100%;
      z-index: 0;
    }
    .login-box {
      position: relative;
      z-index: 1;
      background-color: rgba(30, 30, 30, 0.9);
      padding: 2rem;
      border-radius: 1rem;
      box-shadow: 0 0 15px rgba(0,0,0,0.8);
      width: 100%;
      max-width: 400px;
      margin: auto;
      top: 50%;
      transform: translateY(-50%);
    }
    .form-control {
      background-color: #2a2a2a;
      border: 1px solid #444;
      color: #fff;
    }
    .form-control:focus {
      background-color: #2a2a2a;
      color: #fff;
      border-color: #0d6efd;
      box-shadow: none;
    }
    .btn-light {
      color: #000;
      background-color: #f8f9fa;
      border: none;
      font-weight: bold;
    }
    .btn-light:hover {
      background-color: #e2e6ea;
    }
    .form-icon {
      position: absolute;
      left: 10px;
      top: 50%;
      transform: translateY(-50%);
      color: #aaa;
    }
    .input-group {
      position: relative;
    }
    .input-group input {
      padding-left: 2.2rem;
    }
  </style>
</head>
<body>

  <div id="particles-js"></div>

  <div class="login-box">
    <h2 class="text-center mb-4">Freelarc</h2>
    <form action="entrou" method="get">
      <div class="mb-3 input-group">
        <i class="bi bi-person-fill form-icon"></i>
        <input type="text" class="form-control" name="usuario" placeholder="Usuário" required>
      </div>
      <div class="mb-4 input-group">
        <i class="bi bi-lock-fill form-icon"></i>
        <input type="password" class="form-control" name="senha" placeholder="Senha" required>
      </div>
      <button type="submit" class="btn btn-light w-100">Entrar</button>
    </form>
  </div>

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
  <script>
    particlesJS("particles-js", {
      "particles": {
        "number": { "value": 80 },
        "color": { "value": "#ffffff" },
        "shape": {
          "type": "circle",
          "stroke": { "width": 0, "color": "#000000" }
        },
        "opacity": {
          "value": 0.5,
          "random": false
        },
        "size": {
          "value": 3,
          "random": true
        },
        "line_linked": {
          "enable": true,
          "distance": 150,
          "color": "#ffffff",
          "opacity": 0.3,
          "width": 1
        },
        "move": {
          "enable": true,
          "speed": 1,
          "direction": "none",
          "random": false,
          "straight": false,
          "out_mode": "out"
        }
      },
      "interactivity": {
        "events": {
          "onhover": { "enable": true, "mode": "repulse" }
        },
        "modes": {
          "repulse": { "distance": 100, "duration": 0.4 }
        }
      },
      "retina_detect": true
    });
  </script>

</body>
</html>
