<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
</head>
<body>

              
    <img src="https://{{ $data['url'] }}/assets/images/logo.png" >
            
    <h2>Votre message sur le site mathieusiaudeau.fr</h2>
    <p>Merci pour votre message</p>
    <ul>
        <li>Nom : {{ $data['name'] }}</li>
        <li>email : {{ $data['email'] }}</li>
        <li>email : {{ $data['message'] }}</li>
    </ul>
</body>
</html>