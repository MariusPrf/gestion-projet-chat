document.getElementById('loginForm').addEventListener('submit', function (event) {
    event.preventDefault();

    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    if (email && password) {
        alert(`Connexion réussie avec l'email : ${email}`);
    } else {
        alert('Veuillez remplir tous les champs.');
    }
});
