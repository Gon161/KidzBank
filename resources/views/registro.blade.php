<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/x-icon" href="assets/icons/KidzBank.ico">

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-y: auto;
            min-height: 100vh;
        }


        #particles-js {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, #4a1a7d 0%, #6b2d9e 50%, #8b4db8 100%);
            z-index: 1;
        }

        .login-container {
            position: relative;
            z-index: 10;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .login-card {
            backdrop-filter: blur(0.5vh);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            padding: 40px 35px;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        }

        .login-title {
            color: white;
            text-align: center;
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 30px;
            text-transform: capitalize;
        }

        .form-label {
            color: white;
            font-weight: 500;
            margin-bottom: 8px;
            font-size: 0.95rem;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .form-control {
            background: rgba(139, 77, 184, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 12px;
            color: white;
            padding: 12px 45px 12px 15px;
            font-size: 0.95rem;
        }

        .form-control:focus {
            background: rgba(139, 77, 184, 0.4);
            border-color: rgba(255, 255, 255, 0.5);
            color: white;
            box-shadow: 0 0 0 0.25rem rgba(255, 255, 255, 0.15);
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }

        .input-icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: rgba(255, 255, 255, 0.7);
            font-size: 1rem;
        }

        .form-check {
            margin-bottom: 20px;
        }

        .form-check-input {
            background-color: rgba(139, 77, 184, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.3);
            cursor: pointer;
        }

        .form-check-input:checked {
            background-color: #8b4db8;
            border-color: #8b4db8;
        }

        .form-check-label {
            color: white;
            cursor: pointer;
            font-size: 0.9rem;
        }

        .forgot-password {
            color: white;
            text-decoration: none;
            font-size: 0.9rem;
            float: right;
        }

        .forgot-password:hover {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: underline;
        }

        .btn-login {
            width: 100%;
            background: white;
            color: #6b2d9e;
            border: none;
            border-radius: 12px;
            padding: 12px;
            font-weight: 600;
            font-size: 1rem;
            margin-top: 10px;
            transition: all 0.3s ease;
        }

        .btn-login:hover {
            background: rgba(255, 255, 255, 0.9);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .register-link {
            text-align: center;
            color: white;
            margin-top: 20px;
            font-size: 0.9rem;
        }

        .register-link a {
            color: white;
            font-weight: 600;
            text-decoration: none;
            border-bottom: 1px solid white;
        }

        .register-link a:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
<div id="particles-js"></div>

<div class="login-container">
    <div class="login-card">
        <h2 class="login-title">Registro</h2>

        <form action="" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nombre(s):</label>
                <div class="position-relative">
                    <input type="text" name="nombre" class="form-control" placeholder="Ingresa tu nombre" required>
                    <i class="fas fa-user input-icon"></i>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Apellido(s):</label>
                <div class="position-relative">
                    <input type="text" name="apellidos" class="form-control" placeholder="Ingresa tus apellidos" required>
                    <i class="fas fa-user input-icon"></i>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Usuario:</label>
                <div class="position-relative">
                    <input type="text" name="usuario" class="form-control" placeholder="Elige un nombre de usuario" required>
                    <i class="fas fa-user-circle input-icon"></i>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Correo electrónico:</label>
                <div class="position-relative">
                    <input type="email" name="email" class="form-control" placeholder="Ingresa tu correo" required>
                    <i class="fas fa-envelope input-icon"></i>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Contraseña:</label>
                <div class="position-relative">
                    <input type="password" name="password" class="form-control" placeholder="Crea una contraseña" required>
                    <i class="fas fa-lock input-icon"></i>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Confirmar contraseña:</label>
                <div class="position-relative">
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Repite tu contraseña" required>
                    <i class="fas fa-lock input-icon"></i>
                </div>
            </div>

            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="terms" required>
                <label class="form-check-label" for="terms">
                    Acepto los términos y condiciones
                </label>
            </div>

            <button type="submit" class="btn btn-login">Registrarse</button>

            <div class="register-link">
                ¿Ya tienes una cuenta? <a href="{{ route('login') }}">Inicia sesión</a>
            </div>
        </form>

    </div>
</div>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/particles/particles.min.js"></script>

<script>
    // Particles.js Snow Configuration
    particlesJS('particles-js', {
        particles: {
            number: {
                value: 400,
                density: {
                    enable: true,
                    value_area: 800
                }
            },
            color: {
                value: '#ffffff'
            },
            shape: {
                type: 'circle',
                stroke: {
                    width: 0,
                    color: '#000000'
                }
            },
            opacity: {
                value: 0.5,
                random: true,
                anim: {
                    enable: false
                }
            },
            size: {
                value: 5,
                random: true,
                anim: {
                    enable: false
                }
            },
            line_linked: {
                enable: false
            },
            move: {
                enable: true,
                speed: .5,
                direction: 'bottom',
                random: false,
                straight: false,
                out_mode: 'out',
                bounce: false,
                attract: {
                    enable: false,
                    rotateX: 600,
                    rotateY: 1200
                }
            }
        },
        interactivity: {
            detect_on: 'canvas',
            events: {
                onhover: {
                    enable: false
                },
                onclick: {
                    enable: false
                },
                resize: true
            }
        },
        retina_detect: true
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
</html>

