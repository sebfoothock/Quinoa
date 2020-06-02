import React, { Component, useState, useEffect } from "react";
import { Button, FormGroup, Input } from "reactstrap";
import { Alert } from "reactstrap";

const SeConnecter = () => {
  const [erreur, setErreur] = useState(true); //si true disparait

  const login = (event) => {
    //change l'état de erreur
    setErreur(event.target.erreur);
  };

  return (
    <div className="container center">
      <div className="row justify-content-md-center">
        <form className="cadreSombre">
          <h1 className="formTitle text-center">Se Connecter</h1>
          <FormGroup>
            <h3>Adresse mail</h3>
            <Input
              type="email"
              name="email"
              id="Email"
              placeholder=""
              required
            />
          </FormGroup>
          <FormGroup>
            <h3>Mot de passe</h3>
            <Input
              type="password"
              name="mdp"
              id="mdp"
              placeholder=""
              required
            />
          </FormGroup>
          <FormGroup className="wrapper">
            <Button className="btnLogin" onClick={login}>
              Se Connect
            </Button>
          </FormGroup>
        </form>
        <Alert color="warning" style={erreur ? { display: "none" } : {}}>
          Votre adresse mail ou votre mot passe est incorrect
        </Alert>
      </div>
    </div>
  );
};

export default SeConnecter;
