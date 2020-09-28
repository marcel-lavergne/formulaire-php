<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php int</title>
</head>
<body>
    <form  action="thanks.php"  method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name">
    </div>
    <div>
        <label for="firstName">Prénom :</label>
        <input type="text" id="prénom" name="user_firstName">
</div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
        <label for= "phone">téléphone  : </label>
        <input type= "text" id="phoneNumber" name="user_phone">
    </div>
    <div>
    <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
</div>
    <div>
        <label for="select">sujet </label>
        <select name = "select" id= "select">
            <option> Demande de financement
            <option> Demande de remboursement
    </div>
    <div  class="button">
    <form>
        <button>Cliquez Ici</button>      
    </div>
  </form>
</body>
</html>