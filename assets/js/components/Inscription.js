// noprotect
import React, { Component } from "react";
import { Button, Form, FormGroup, Label, Input } from "reactstrap";
import axios from "axios";

class Inscription extends Component {
  constructor(props) {
    super(props);
    this.state = {
      mail: "",
      mdp: "",
      age: "",
      sexe: "",
      desobeissant: "",
      mdpErreur: "",
      mailErreur: "",
      ageErreur: "",
      sexeErreur: "",
      desobeissantErreur: "",
    };
  }

  createUser() {
    const userObject = {
      mdp: this.state.mdp,
      mail: this.state.mail,
      age: this.state.age,
      sexe: this.state.sexe,
      desobeissant: this.state.desobeissant,
    };
    axios
      .post("/api/users/add/", userObject)
      .then((response) => {
        console.log(response.data);
      })
      .catch((error) => {
        console.log(error);
      });
  }

  handleChange(item, champ) {
    let itemValue = item.target.value;
    switch (champ) {
      case "mdp": {
        this.setState({ mdp: itemValue });
        break;
      }
      case "mail": {
        this.setState({ mail: itemValue });
        break;
      }
      case "age": {
        this.setState({ age: itemValue });
        break;
      }
      case "sexe": {
        this.setState({ sexe: itemValue });
        break;
      }
      case "desobeissant": {
        this.setState({ desobeissant: itemValue });
        break;
      }
    }
  }

  validate() {
    var validator = require("email-validator");
    let email = this.state.mail; //change form to id or containment selector
    let mdpErreur = "";
    let mailErreur = "";
    let ageErreur = "";
    let sexeErreur = "";
    let desobeissantErreur = "";

    if (this.state.mdp.length < 8) {
      mdpErreur = "le champ doit être plus long";
    }

    if(!validator.validate(email)){
      mailErreur = "Veuillez entrer une adresse valide";
    }

    if (!this.state.age) {
      ageErreur = "le champ doit être rempli";
    }

    if (!this.state.sexe) {
      sexeErreur = "le champ doit être rempli";
    }

    if (!this.state.desobeissant) {
      desobeissantErreur = "le champ doit être rempli";
    }

    if (
      mailErreur ||
      mdpErreur ||
      ageErreur ||
      sexeErreur ||
      desobeissantErreur
    ) {
      this.setState({
        mailErreur,
        mdpErreur,
        ageErreur,
        sexeErreur,
        desobeissantErreur,
      });
      return false;
    }

    return true;
  }

  handleSubmit() {
    const isValid = this.validate();
    let obj = {};
    obj.mdp = this.state.mdp;
    obj.mail = this.state.mail;
    obj.age = this.state.age;
    obj.sexe = this.state.sexe;
    obj.desobeissant = this.state.desobeissant;
    obj.commentaire = this.state.commentaire;

    if (isValid) {
      console.warn("données envoyées", obj);
      this.props.history.push("/quizz");
      this.createUser();
    }
  }

  render() {
    return (
      <div className="container center">
        <div className="row justify-content-md-center">
          <Form className="cadreSombre" method="POST">
            <h1 className="formTitle text-center">Inscription</h1>
            <FormGroup>
              <h3>Adresse Mail</h3>
              <Input
                type="email"
                name="email"
                id="email"
                placeholder=""
                onChange={(item) => this.handleChange(item, "mail")}
                required
              />
              <div className="erreur">{this.state.mailErreur}</div>
            </FormGroup>
            <FormGroup>
              <h3>Mot de passe</h3>
              <Input
                type="password"
                name="mdp"
                id="mdp"
                placeholder=""
                onChange={(item) => this.handleChange(item, "mdp")}
                required
              />
              <div className="erreur">{this.state.mdpErreur}</div>
            </FormGroup>
            <FormGroup>
              <h3>Age</h3>
              <FormGroup className="radio">
                <Input
                  type="radio"
                  name="radioAge"
                  id="16"
                  value="16"
                  onChange={(item) => this.handleChange(item, "age")}
                />
                <Label>16-18</Label>
              </FormGroup>
              <FormGroup className="radio">
                <Input
                  type="radio"
                  name="radioAge"
                  id="19"
                  value="19"
                  onChange={(item) => this.handleChange(item, "age")}
                />
                <Label>19-21</Label>
              </FormGroup>
              <FormGroup className="radio">
                <Input
                  type="radio"
                  name="radioAge"
                  id="22"
                  value="22"
                  onChange={(item) => this.handleChange(item, "age")}
                />
                <Label>22-25</Label>
              </FormGroup>
              <FormGroup className="radio">
                <Input
                  type="radio"
                  name="radioAge"
                  id="26"
                  value="26"
                  onChange={(item) => this.handleChange(item, "age")}
                />
                <Label>26-29</Label>
              </FormGroup>
              <FormGroup className="radio">
                <Input
                  type="radio"
                  name="radioAge"
                  id="30"
                  value="30"
                  onChange={(item) => this.handleChange(item, "mail")}
                />
                <Label>+ 30</Label>
              </FormGroup>
              <div className="erreur">{this.state.ageErreur}</div>
            </FormGroup>
            <FormGroup>
              <h3>Sexe</h3>
              <FormGroup className="radio">
                <Label>
                  <Input
                    type="radio"
                    name="sexe"
                    id="homme"
                    value="homme"
                    data-testid="homme"
                    onChange={(item) => this.handleChange(item, "sexe")}
                  />
                  homme
                </Label>
              </FormGroup>
              <FormGroup className="radio">
                <Label>
                  <Input
                    type="radio"
                    name="sexe"
                    id="femme"
                    value="femme"
                    data-testid="femme"
                    onChange={(item) => this.handleChange(item, "sexe")}
                  />
                  femme
                </Label>
              </FormGroup>
              <FormGroup className="radio">
                <Label>
                  <Input
                    type="radio"
                    name="sexe"
                    id="autre"
                    value="autre"
                    data-testid="autre"
                    onChange={(item) => this.handleChange(item, "sexe")}
                  />
                  autre
                </Label>
              </FormGroup>
              <div className="erreur">{this.state.sexeErreur}</div>
            </FormGroup>
            <FormGroup>
              <h3>Est-ce que vous vous considérez comme «désobéissant» ?</h3>
              <FormGroup className="radio">
                <Input
                  type="radio"
                  name="desobei"
                  id="oui"
                  value="oui"
                  onChange={(item) => this.handleChange(item, "desobeissant")}
                />
                <Label>oui</Label>
              </FormGroup>
              <FormGroup className="radio">
                <Input
                  type="radio"
                  name="desobei"
                  id="unPeu"
                  value="un peu"
                  onChange={(item) => this.handleChange(item, "desobeissant")}
                />
                <Label>un peu</Label>
              </FormGroup>
              <FormGroup className="radio">
                <Input
                  type="radio"
                  name="desobei"
                  id="non"
                  value="non"
                  onChange={(item) => this.handleChange(item, "desobeissant")}
                />
                <Label>non</Label>
              </FormGroup>
              <div className="erreur">{this.state.desobeissantErreur}</div>
            </FormGroup>
            <br></br>
            <FormGroup className="wrapper">
              <Button className="btnLogin" onClick={() => this.handleSubmit()}>
                <label>S'inscrire</label>
              </Button>
            </FormGroup>
          </Form>
        </div>
      </div>
    );
  }
}

export default Inscription;
