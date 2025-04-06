<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio - Issam</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <nav>
      <ul>
        <a href="#accueil">Accueil</a>
        <a href="#a-propos">À propos</a>
        <a href="#competences">Mes compétences</a>
        <a href="#formation">Mes Formation</a>
      </ul>
    </nav>
  </header>

  <main>
    <section id="accueil" class="intro">
      <div class="intro-text">
        <h2>Bonjour, je m'appelle</h2>
        <h1>ISSAM MOUSSI</h1>
      </div>
      <div class="intro-photo">
        <img src="./img/id.png" alt="Photo d'Issam">
        <p>Étudiant en informatique.</p>
      </div>
    </section>

    <section id="a-propos">
      <h2>À propos</h2>
      <p class="italic">
        Je m'appelle Issam Moussi, étudiant en informatique spécialisé en SLAM dans le cadre de mon BTS SIO. Passionné par la programmation,
        mon travail m'amène sur des compétences solides en Java, Python, HTML et SQL. Mon enthousiasme et ma rigueur technique me permettent d'analyser les problèmes,
        de garantir des réponses, d'optimiser les traitements et de faire preuve de créativité et de curiosité.
        En constante recherche de nouvelles opportunités pour approfondir mes connaissances,
        je suis déterminé à contribuer au monde de l'informatique de manière significative.
      </p>
    </section>

    <section id="competences" class="grid">
      <div>
        <h3>Development</h3>
        <ul>
          <li>java</li>
          <li>Python</li>
          <li>HTML</li>
          <li>SQL</li>
        </ul>
      </div>
      <div>
        <h3>Réseaux / Infrastructure</h3>
        <ul>
          <li>IP</li>
          <li>ARP</li>
          <li>DNS</li>
          <li>Ethernet</li>
          <li>DHCP</li>
          <li>ICMP</li>
          <li>FTP</li>
          <li>HTTP/S</li>
          <li>TCP/IP</li>
          <li>UDP</li>
        </ul>
      </div>
    </section>

    <section id="formation">
      <h3>Mes Formation</h3>
      <ul>
        (2021 - 2023) BAC Technologique au lycée Algoud Laffemas<br>
        (2023 - 2025) BTS SIO SLAM au lycée Algoud Laffemas
      </ul>
    </section>

    <section id="objectif">
      <h3>Mon objectif</h3>
      <p>Devenir développeur.</p>
    </section>

    <section id="contact">
        <h3>Contactez-moi</h3>
        <form action="contact.php" method="post">
            <input type="text" name="nom" placeholder="Votre nom" required>
            <input type="email" name="email" placeholder="Votre email" required>
            <textarea name="message" rows="5" placeholder="Votre message" required></textarea>
            <input type="submit" value="Envoyer">
          </form>          
      </section>
    </main>

  <footer>
    <p>&copy; 2025 Issam Mnoussi</p>
  </footer>
</body>
</html>
