<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="ldp.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="LearnVerse_logo.png" />
    <title>contact</title>
</head>
<body>
    <header>
        <div class="logo-container">
          <a href="index.html"><img  src="LearnVerse_logo.png" alt="LearnVerse Logo" /></a>
          <a href="index.html"><span>LearnVerse</span></a>
        </div>
        <nav>
          <ul>
            <li><a href="#services">Services</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#try-it-out" class="TIO">Try It Out</a></li>
          </ul>
        </nav>
      </header>
        <section class="section">
            <div>
                <h1>Contact</h1>
                <div>
                  <input type="email" name="" id="">
                  <input type="text" name="" id="">
                  <textarea name="" id="" cols="30" rows="10"></textarea>
                  <input type="button" value="">
                </div>
                <?php
                  include 'connexion.php';

                  $email = $_POST['email'];
                  $objet = $_POST['objet'];
                  $contenu = $_POST['contenu'];

                  try {
                      $conn = dataconnect();

                      $stmt = $conn->prepare("INSERT INTO ContactClient (email, objet, contenu) VALUES (:email, :objet, :contenu)");

                      $stmt->bindParam(':email', $email);
                      $stmt->bindParam(':objet', $objet);
                      $stmt->bindParam(':contenu', $contenu);

                      $stmt->execute();

                      echo "Enregistrement réussi !";
                  } catch (PDOException $e) {
                      echo "Erreur lors de l'enregistrement : " . $e->getMessage();
                  } finally {
                      $conn = null;
                  }
                  ?>
            </div>
        </section>
      <footer>
        <div class="logo-container">
            <img src="LearnVerse_logo.png" alt="Learnverse">
            <nav>
              <ul>
                <li><a href="https://fr.wikipedia.org/wiki/Copyright">LearnVerse &copy;</a></li>
                <li><a href="CGU.html">CGU</a></li>
                <li><a href="PC.html">Confidentialité</a></li>
              </ul>
            </nav>
        </div>    
    </footer>
</body>
</html>