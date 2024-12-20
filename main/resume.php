<!-- ======= Resume Section ======= -->
<section id="resume" class="resume">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>CV</h2>
      <p></p>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <h3 class="resume-title">Formations</h3>
        <div class="resume-item">
          <h4>Bachelor Informatique option Développement</h4>
          <h5>2024 - 2025</h5>
          <p><em>Sup de Vinci, Rennes</em></p>
        </div>
        <div class="resume-item">
          <h4>BTS SIO option SLAM</h4>
          <h5>2022 - 2024</h5>
          <p><em>Lycée Douanier Rousseau, Laval</em></p>
        </div>
        <div class="resume-item">
          <h4>Baccalauréat général</h4>
          <h5>2019-2021</h5>
          <p><em>Lycée Ambroise Paré, Laval</em></p>
        </div>
      </div>
      <div class="col-lg-6">
        <h3 class="resume-title">Expériences professionnelles</h3>
        
        <div class="resume-item">
          <h4 class="toggle-button">
            Stage de 8 semaines <span class="arrow">▼</span>
          </h4>
          <h5>Février-Mars 2024</h5>
          <p><em>Académie de Nantes</em></p>
          <ul class="toggle-content">
            <li>Refonte d'une plateforme de mini-stages lycéens</li>
            <ul>
              <li>Mise à jour de la BDD existante</li>
              <li>Création et implémentation d'une nouvelle interface graphique avec PHP/Symfony</li>
            </ul>
          </ul>
        </div>
        
        <div class="resume-item">
          <h4 class="toggle-button">
            Stage de 5 semaines <span class="arrow">▼</span>
          </h4>
          <h5>Juin 2023</h5>
          <p><em>Restaurants du Coeur</em></p>
          <ul class="toggle-content">
            <li>Reprise d'un projet de gestionnaire de fiches fiscales</li>
            <ul>
              <li>Mise à jour de la base de données</li>
              <li>Création d’une nouvelle interface web ajoutant plusieurs fonctionnalités supplémentaires</li>
            </ul>
            <li>Déploiement d’un réseau sur un autre centre des restos du coeur</li>
          </ul>
        </div>
        
        <div class="resume-item">
          <h4 class="toggle-button">
            Stage de 5 semaines <span class="arrow">▼</span>
          </h4>
          <h5>Juin 2022</h5>
          <p><em>XEFI</em></p>
          <ul class="toggle-content">
            <li>Introduction à SharePoint</li>
            <li>Configuration d’un NAS</li>
            <li>Configuration d’un accès SMDB</li>
          </ul>
        </div>
      </div>
    </div>

  </div>
</section>
<!-- End Resume Section -->

<style>
  .toggle-content {
    display: none;
  }
  .toggle-button {
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .arrow {
    font-size: 0.9rem;
    margin-left: 10px;
  }
</style>

<script>
  // Cacher les listes au chargement de la page
  document.querySelectorAll('.toggle-content').forEach(ul => ul.style.display = 'none');

  // Ajouter l'interactivité aux titres
  document.querySelectorAll('.toggle-button').forEach(button => {
    button.addEventListener('click', () => {
      const ul = button.parentElement.querySelector('.toggle-content'); // La liste associée
      const arrow = button.querySelector('.arrow'); // La flèche associée

      if (ul) {
        if (ul.style.display === 'none') {
          ul.style.display = 'block';
          arrow.textContent = '▲'; // Flèche vers le haut
        } else {
          ul.style.display = 'none';
          arrow.textContent = '▼'; // Flèche vers le bas
        }
      }
    });
  });
</script>
