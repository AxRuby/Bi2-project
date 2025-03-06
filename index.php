<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Web</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- En-tête -->
    <header>
        <div class="top-bar">
            <span>Tel: 02 / 395 65 23</span>
            <span>Email: info@epse.be</span>
            <span class="social-icons">Social media icons</span>
        </div>
        <nav class="navbar">
            <h1 class="site-name">Site Name</h1>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">School</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Section Principale -->
    <section class="main-section">
        <div class="main-content"></div>
    </section>

    <!-- Section des Établissements -->
    <section class="etablissement">
        <h2>Etablissement</h2>
        <div class="cards">
            <?php
            // Dynamically create cards
            for ($i = 1; $i <= 5; $i++) {
                echo '
                <div class="card">
                    <img src="images/image' . $i . '.jpg" alt="Etablissement ' . $i . '">
                    <h3>Etablissement ' . $i . '</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent accumsan ipsum non eros...</p>
                    <a href="#" class="btn">En savoir plus</a>
                </div>';
            }
            ?>
        </div>
    </section>

    <!-- Section Contact -->
    <section class="contact">
        <div class="contact-container">
            <div class="contact-info">
                <h3>Contactez-nous</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit...</p>
                <div class="social-media">
                    <span>social media</span>
                    <div class="icons">
                        <span>□</span> <span>□</span> <span>□</span>
                    </div>
                </div>
            </div>
            <form action="submit.php" method="post" class="contact-form">
                <input type="text" name="lastname" placeholder="Last Name" required>
                <input type="text" name="firstname" placeholder="First Name" required>
                <input type="email" name="email" placeholder="E-mail Adress" required>
                <textarea name="message" placeholder="Message" required></textarea>
                <button type="submit">Envoyer</button>
            </form>
        </div>
    </section>

    <!-- Pied de page -->
    <footer>
        <p>&copy; copyright EPSE</p>
    </footer>
</body>
</html>
