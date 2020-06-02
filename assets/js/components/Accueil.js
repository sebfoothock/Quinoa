import React, { Component } from "react";
import dezobey from "../../img/dezobey.jpg";

class Accueil extends Component {
  render() {
    return (
      <div className="container center">
        <div className="row justify-content-md-center">
          <div className="cadreSombre">
            <h1 className="accueilTitre">Le Jeu Dezobeyi</h1>
            <div className="accueilContenu">
              <span>
                <h4>
                  <u>
                    <b>Présentation de l'ASBL :</b>
                  </u>
                </h4>
                <p>
                  Quinoa est une ONG d'éducation à la citoyenneté mondiale et
                  solidaire (ECMS). <br></br> L'ECMS est un processus qui vise à
                  provoquer des changements de valeur et de comportement sur le
                  plan individuel et collectif en vue d'un monde plus juste dans
                  lequel ressources et pouvoirs sont équitablement répartis dans
                  le respect de la dignité humaine.
                </p>
                <p>
                  Ses actions : projets internationaux (aussi scolaires, maison
                  de jeunes, scouts en Amérique de sud, Afrique et Asie). Projet
                  alternative locales. Animations pédagogiques (Jeu de la
                  ficelle, Potentia, Jeu des chaises, Dezobeyi...).
                  Mobilisations.
                </p>
                <h4>
                  <u>
                    <b>Jeu Dezobeyi :</b>
                  </u>
                </h4>
                <p>
                  Et toi, as-tu déjà desobéi ? Face à l'intimidation, à
                  l'injustice comment réagir ? Faut-il parfois désobéir ? Quinoa
                  asbl propose un outil pédagogique autour de l'action directe
                  non-violente et de la désobéissance civile : du Nord au Sud,
                  l'action directe non-violente est (et a toujours été) un
                  levier de changement social. Droit de vote des femmes,
                  abolition de la ségrégation, récupération de terres... : tous
                  ont été obtenus notamment par des actions de "désobéissance".
                </p>
                <p>
                  Le jeu entend partir du vécu des participan•t•e•s pour mieux
                  toucher au coeur des causes qui les animent et les inspirent.
                  L'outil se développe en une ligne du temps sur laquelle le•la
                  participant•e, en plusieurs phase ludiques, peut tester ses
                  connaissances et affuter sa vision du monde en voyageant dans
                  une "autre" Histoire que celle récontée par les "dominants".
                  <br></br>L'outil laisse aussi la place aux échanges et à
                  l'action avec des mises en situation et débats mouvants.
                </p>
                <p>
                  Explorez les luttes (et les victoires) de ces femmes et hommes
                  qui ont désobéi.
                </p>
              </span>
              <img className="imgAccueil" src={dezobey} alt="image jeu" />
            </div>
          </div>
        </div>
      </div>
    );
  }
}

export default Accueil;
