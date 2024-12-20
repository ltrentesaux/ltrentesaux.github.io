<!-- ======= Skills Section ======= -->
<section id="skills" class="skills section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Skills</h2>
      <p>Ici, vous trouverez mes compétences principales.</p>
    </div>

    <!-- Conteneur des compétences -->
    <ul>
      <li> Web </li>    
      <div class="row skills-content" id="skills-web"></div>
     
     <li> BDD </li>  
     <div class="row skills-content" id="skills-bdd"></div>
     
     <li> Riche </li>  
     <div class="row skills-content" id="skills-appli"></div>
    </ul>


  </div>
</section><!-- End Skills Section -->

<script>
  // Tableau des compétences et de leurs niveaux
  const skills = [
    { name: "HTML", value: 90 },
    { name: "CSS/SCSS", value: 65 },
    { name: "JavaScript", value: 40 },
    { name: "PHP", value: 80 },
    { name: "Symfony", value: 70 },
  ];

  const skillsContainer = document.getElementById("skills-web");

  // Générer les divs automatiquement
  skills.forEach(skill => {
    // Ajouter une nouvelle colonne pour chaque compétence
    const skillDiv = document.createElement("div");
    skillDiv.className = "col-lg-6";

    skillDiv.innerHTML = `
      <div class="progress">
        <span class="skill">${skill.name} <i class="val">${skill.value}%</i></span>
        <div class="progress-bar-wrap">
          <div class="progress-bar" role="progressbar" aria-valuenow="${skill.value}" aria-valuemin="0" aria-valuemax="100" style="width: ${skill.value}%;"></div>
        </div>
      </div>
    `;

    // Ajouter les divs dans le container
    skillsContainer.appendChild(skillDiv);
  });

  
  // Tableau des compétences et de leurs niveaux
  const skills2 = [
    
    { name: "MySQL", value: 50 },
    { name: "Merise (1&2)", value: 50 }
  ];

  const skills2Container = document.getElementById("skills-bdd");

  skills2.forEach(skill => {
    // Ajouter une nouvelle colonne pour chaque compétence
    const skillDiv = document.createElement("div");
    skillDiv.className = "col-lg-6";

    skillDiv.innerHTML = `
      <div class="progress">
        <span class="skill">${skill.name} <i class="val">${skill.value}%</i></span>
        <div class="progress-bar-wrap">
          <div class="progress-bar" role="progressbar" aria-valuenow="${skill.value}" aria-valuemin="0" aria-valuemax="100" style="width: ${skill.value}%;"></div>
        </div>
      </div>
    `;

    // Ajouter les divs dans le container
    skills2Container.appendChild(skillDiv);
  });
  
  // Tableau des compétences et de leurs niveaux
  const skills3 = [
    
    { name: "C#", value: 50 },
    { name: "Java", value: 50 }
  ];

  const skills3Container = document.getElementById("skills-appli");

  skills3.forEach(skill => {
    // Ajouter une nouvelle colonne pour chaque compétence
    const skillDiv = document.createElement("div");
    skillDiv.className = "col-lg-6";

    skillDiv.innerHTML = `
      <div class="progress">
        <span class="skill">${skill.name} <i class="val">${skill.value}%</i></span>
        <div class="progress-bar-wrap">
          <div class="progress-bar" role="progressbar" aria-valuenow="${skill.value}" aria-valuemin="0" aria-valuemax="100" style="width: ${skill.value}%;"></div>
        </div>
      </div>
    `;

    // Ajouter les divs dans le container
    skills3Container.appendChild(skillDiv);
  });
</script>
