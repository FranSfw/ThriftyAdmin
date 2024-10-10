const boton_backup = document.getElementById("backup");

boton_backup.addEventListener("click", realizarBackup);

function realizarBackup() {
    const xhr = new XMLHttpRequest();
    xhr.open("GET", "backup.php", true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            alert(xhr.responseText);
        }
    };
    xhr.send();
}

const jwt = require('jsonwebtoken');

function generarToken(user) {
    const payload = {
        id: user.id,
        name: user.name,
        email: user.email
    };

    const token = jwt.sign(payload, 'm4C6n9X!b2v5O*P0K7r8L&cT1xG#QwE');
    return token;
}

async function login() {
    try {
        const response = await fetch('http://localhost/ThriftyAdmin/index.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                email: 'usuario@ejemplo.com',
                password: 'mi_contraseña'
            })
        });

        const data = await response.json();

        if (data.token) {
            sessionStorage.setItem('token', data.token);
            alert('Inicio de sesión exitoso');
            window.location.href = 'pageadmin.php';
        } else {
            alert('Error al iniciar sesión');
        }
    } catch {
        console.error('Error en la solicitud:', error);
        alert('Hubo un problema con la conexión. Inténtalo de nuevo.');
    }
}

async function checkAuth() {
    const token = sessionStorage.getItem('token');

    if (!token) {
        window.location.href = 'index.php';
    } else {
        try {
            const response = await fetch('http://localhost/ThriftyAdmin/index.php', {
                method: 'POST',
                headers: {
                    'Authorization': `Bearer ${token}`
                }
            });

            const result = await response.json();

            if (!result.valid) {
                sessionStorage.removeItem('token');
                window.location.href = 'index.php';
            } else {
                console.log('Token válido');
            }
        } catch (error) {
            console.error('Error en la solicitud:', error);
            alert('Hubo un problema con la conexión. Inténtalo de nuevo.');
        }
    }
}


function logout() {
    sessionStorage.removeItem('token');
    alert('Sesión cerrada');
    window.location.href = 'index.php';
}