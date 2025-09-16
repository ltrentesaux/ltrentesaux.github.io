        // Tableau des compétences et de leurs niveaux
        const skills = [
            { name: "PHP/Symfony", value: 80 },
            { name: "JavaScript", value: 40 },
            { name: "Angular", value: 70 },
            { name: "Node.JS", value: 70 },
            { name: "Vue.JS", value: 70 },
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

        // Tableau des compétences et de leurs niveaux
        const skills4 = [

            { name: "Unity", value: 40 },
        ];

        const skills4Container = document.getElementById("skills-jv");

        skills4.forEach(skill => {
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
            skills4Container.appendChild(skillDiv);
        });

        // Tableau des compétences et de leurs niveaux
        const skills5 = [

            { name: "Ios", value: 50 },
            { name: "Android", value: 50 }
        ];

        const skills5Container = document.getElementById("skills-mobile");

        skills5.forEach(skill => {
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
            skills5Container.appendChild(skillDiv);
        });

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