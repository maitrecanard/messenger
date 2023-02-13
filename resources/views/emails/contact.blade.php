<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        h2 {
            width: 100%;
            text-align: center;
        }
        .content
        {
            width: 100%;
            display: flex;
            justify-content: center;
        }
        ul {
            margin-left: auto;
            margin-right: auto;
        }
        li {
            max-width: 400px;
            list-style: none;
        }
        .inline {
            margin-left: auto;
            margin-right: auto;
            width: 80%;
            border-bottom: 1px solid black;
        }
        .provenance {
            width: 90%;
            text-align: center;
            display: flex;
            flex-direction: column;
            margin-top: 20px;
            margin-left: auto;
            margin-right: auto;
        }
        button {
            margin-top: 20px;
            margin-left: auto;
            margin-right: auto;
            width: 60%;
            height: 30px;
            cursor: pointer;
        }
        table {
            top:0;
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
    <table>
        <tbody>
            <tr>
                <td>
                    <img src="https://{{ $data['url'] }}/assets/images/logo.png" >
                </td>
            </tr>
            <tr>
                <td>
                    <h2>Réception d'un nouveau mail</h2>
                </td>
            </tr>
            <tr>
                <td>
                <ul>
            <li>Nom : {{ $data['name'] }}</li>
            <li>Email : {{ $data['email'] }}</li>
            <li>Message : {{ $data['message'] }}</li>
        </ul>
        </td>
            </tr>
            <tr>
                <td>
                    Message reçue depuis votre site {{ $data['url'] }}
                    </td>
            </tr>
        </tbody>
    </table>
</body>
</html>