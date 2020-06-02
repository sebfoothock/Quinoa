import React from "react";
import axios from "axios";

class Quizz extends React.Component {
  constructor(props) {
    super(props);

    this.state = {
      bonnesReponses: [],
      mesReponses: [],
      listQuestion: [],
      currentQuestion: 0,
      myAnswer: null,
      score: 0,
      disabled: true,
      isEnd: false,
      items: [],
      quizzdata: [],
    };
  }

  /**
   * Cette fonction initialise la page avec un array de question aléatoire
   */
  componentDidMount() {
    axios.get(`/api/startQuizz/`).then((res) => {
      this.setState({ listQuestion: res.data });
    });
    setTimeout(() => {
      this.getQuestion();
    }, 1500);
  }

  /**
   * cette fonction récupère les informations de la question en cours
   */
  getQuestion = () => {
    let event = this.state.listQuestion[this.state.currentQuestion];
    axios.get(`/api/quizz/${event}`).then((res) => {
      //console.log(res.data);
      let data = [
        {
          id: res.data.id,
          nom: res.data.nom,
          question: res.data.question,
          options: [
            res.data.reponse1,
            res.data.reponse2,
            res.data.reponse3,
          ].sort(function () {
            return 0.5 - Math.random();
          }),
          answer: res.data.reponse1,
        },
      ];
      //console.log(data);
      this.setState({ quizzdata: data });
    });
  };

  saveQuestionHandler = () => {
    const { myAnswer, quizzdata } = this.state;
    let joinedUserAnswer = this.state.mesReponses.concat(myAnswer);
    this.setState({ mesReponses: joinedUserAnswer });
    let joinedCorrectAnswer = this.state.bonnesReponses.concat(
      quizzdata[0].answer
    );
    this.setState({ bonnesReponses: joinedCorrectAnswer });
  };

  /**
   * Cette fonction permet de passer à la question suivante en enregistrant la bonne réponse ainsi que la réponse
   * de l'utilisateur et augmente le score si la réponse est correcte
   */
  nextQuestionHandler = () => {
    // console.log('test')
    const { myAnswer, quizzdata, score } = this.state;
    this.saveQuestionHandler();
    if (myAnswer === quizzdata[0].answer) {
      this.setState({
        score: score + 1,
      });
    }
    this.setState({
      currentQuestion: this.state.currentQuestion + 1,
      disabled: true,
    });

  };

  /**
   * Cette fonction vérifie si la question actuelle à bien changer.
   */
  componentDidUpdate(prevProps, prevState) {
    if (this.state.currentQuestion !== prevState.currentQuestion) {
      this.getQuestion();
    }
  }

  /**
   * Cette fonction réagit à la selection d'une réponse dans le quizz
   */
  //check answer
  checkAnswer = (answer) => {
    this.setState({ myAnswer: answer, disabled: false });
  };

  /**
   * Cette fonction permet la fin du quizz
   */

  finishHandler = () => {
    if (this.state.currentQuestion == 19) {
      this.setState({ isEnd: true });
    }
    this.saveQuestionHandler();
    //création d'un localStorage
    localStorage.setItem(
      "listeQuestion",
      JSON.stringify(this.state.listQuestion)
    );
    localStorage.setItem(
      "bonnesReponses",
      JSON.stringify(this.state.bonnesReponses)
    );
    localStorage.setItem("reponse", JSON.stringify(this.state.mesReponses));
    localStorage.setItem("score", this.state.score);
  };

  render() {
    const {
      myAnswer,
      currentQuestion,
      isEnd,
      quizzdata,
      bonnesReponses,
    } = this.state;

    if (isEnd) {
      return (
        <div className="result cadreSombre">
          <h3>Votre score final est : {this.state.score} points sur 20</h3>
          <p>
            Les réponses correctes aux questions étaient :
            <ul>
              {bonnesReponses.map((item, index) => (
                <li className="ui floating message options" key={index}>
                  {item}
                </li>
              ))}
            </ul>
          </p>
        </div>
      );
    } else {
      return (
        <div className="App cadreSombre">
          {quizzdata.map((item, index) => (
            <div key={index}>
              <h2>
                Sujet de la question :{" "}
                <label className="sujet">
                  <b>{item.nom}</b>
                </label>
              </h2>
              <br />
              <h3 className="question">{item.question}</h3>
              <br />
              <span>
                Questions {20 - currentQuestion} sur 20 restantes
                <br />
              </span>
            </div>
          ))}
          {quizzdata.map((item, index) => (
            <div key={index}>
              {item.options.map((option, index) => (
                <p
                  key={index}
                  className={`ui floating message options ${
                    myAnswer === option ? "selected" : null
                  }`}
                  onClick={() => this.checkAnswer(option)}
                >
                  {option}
                </p>
              ))}
            </div>
          ))}
          <br />
          {currentQuestion < 19 && (
            <button
              className="ui inverted button"
              disabled={this.state.disabled}
              onClick={this.nextQuestionHandler}
            >
              Next
            </button>
          )}
          {/* //adding a finish button */}
          {currentQuestion === 19 && (
            <button className="ui inverted button" onClick={this.finishHandler}>
              Finish
            </button>
          )}
        </div>
      );
    }
  }
}

export default Quizz;
