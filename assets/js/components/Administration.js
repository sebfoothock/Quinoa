// noprotect
import React, { Component } from "react";
import { Button, Form, FormGroup, Label, Input } from "reactstrap";
import axios from "axios";

/**
 * Cette classe permet l'affichage d'une page d'ajout et de modification des evenement pour le quizz
 */

class Administration extends Component{
	constructor(props) {
		super(props);
		this.state = {
			selectEvent : true,
		}

		this.handleChange = this.handleChange.bind(this);
		//this.handleSubmit = this.handleSubmit.bind(this);
	}

	/**
	 * Cette fonction permet de mettre a jour la page suite à un evenement
	 * @param event un evenement sur l'affichage
	 */
	handleChange(event) {
		const target = event.target;
		const value = target.value;
		const name = target.name;
		this.setState({[name]: value});
		if(this.state.nom !== undefined && this.state.method === "get") {
			let nom = this.state.nom;
			axios
				.get(`/api/evenements/${nom}`)
				.then((res) => {
					//console.log(res);
					this.setState({
							periode: res.data.periode,
							lieu: res.data.lieu,
							lutte: res.data.lutte,
							strategie: res.data.strategie,
							action: res.data.action,
							victoire: res.data.victoire,
							anecdote: res.data.anecdote,
							citation: res.data.citation,
							question: res.data.question,
							reponse1: res.data.reponse1,
							reponse2: res.data.reponse2,
							reponse3: res.data.reponse3,
							video: res.data.video,
							article: res.data.article
						}
					);
					//console.log(res.data);
				});
		}
	}

	/**
	 * cette fonction permet l'envoi de données vers la base de données.
	 */
	handleSubmit() {
		let nom = this.state.nom;
		const eventObject = {
			nom: this.state.nom,
			periode: this.state.periode,
			lieu: this.state.lieu,
			lutte: this.state.lutte,
			strategie: this.state.strategie,
			action: this.state.action,
			victoire: this.state.victoire,
			anecdote: this.state.anecdote,
			citation: this.state.citation,
			question: this.state.question,
			reponse1: this.state.reponse1,
			reponse2: this.state.reponse2,
			reponse3: this.state.reponse3,
			video: this.state.video,
			article: this.state.article,
		};

		switch (method) {
			case "post":
				axios
					.post("/api/evenements/add/", eventObject)
					.then((response) => {
						console.log(response.data);
					})
					.catch((error) => {
						console.log(error);
					});
				break;
			case "put":
				axios
					.put(`/api/evenements/update/${nom}`, eventObject)
					.then((response) => {
						//console.log(response.data);
					})
					.catch((error) => {
						console.log(error);
					});
				break;
			case "delete":
				axios
					.delete(`/api/evenements/delete/${nom}`, eventObject)
					.then((response) => {
						//console.log(response.data);
					})
					.catch((error) => {
						console.log(error);
					});
				break;
			default: alert('Une erreur est survenue');
				/*axios
					.get(`/api/evenements/${nom}`, eventObject)
					.then((res) => {
						console.log(res);
						this.setState({
							periode: res.data.periode,
							lieu: res.data.lieu,
							lutte: res.data.lutte,
							strategie: res.data.strategie,
							action: res.data.action,
							victoire: res.data.victoire,
							anecdote: res.data.anecdote,
							citation: res.data.citation,
							question: res.data.question,
							reponse1: res.data.reponse1,
							reponse2: res.data.reponse2,
							reponse3: res.data.reponse3,
							video: res.data.video,
							article: res.data.article}
						);
						//console.log(res.data);
					});*/
		}
	}

	handleClick = () => {
		let enteredName = prompt('Entrez votre mot de passe')
		if(enteredName === "Quinoa2020"){
			this.handleSubmit();
		}
	}

	/**
	 * cette fonction permets le rendu visuel de la page
	 * @returns {*}
	 */
	render() {
		if(this.state.selectEvent){
			return(
				<div className="container center">
					<div className="cadreSombre">
						<h1>Page d'ajout ou de modification d'un évenement</h1>

						<form onSubmit={this.handleClick}>
							<label>
								Que voulez vous faire ? <span>   </span>
								<select value={this.state.method} name="method" onChange={this.handleChange}>
									<option value="">--</option>
									<option value="get">Verifier</option>
									<option value="post">Ajouter</option>
									<option value="put">Modifier</option>
									<option value="delete">Supprimer</option>
								</select>
							</label>
							<br/>
							<label>
								Nom :<span>  </span>
								<input
								name="nom"
								type="text"
								placeholder="nom"
								value={this.state.nom}
								onChange={this.handleChange}/>
							</label><span>  </span>
							<label>
								Année :<span>  </span>
								<input
								name="periode"
								type="number"
								size="5"
								placeholder="Année"
								value={this.state.periode}
								onChange={this.handleChange}/>
							</label><br/>
							<label className='adminLabel'>
								Lieu :<br/>
								<textarea
								name="lieu"
								rows="1"
								cols="95"
								placeholder="lieu"
								value={this.state.lieu}
								onChange={this.handleChange}/>
							</label><br/>
							<label className='adminLabel'>
								Lutte :<br/>
								<textarea
								name="lutte"
								placeholder="lutte"
								rows="1"
								cols="95"
								value={this.state.lutte}
								onChange={this.handleChange}/>
							</label><br/>
							<label className='adminLabel'>
								Strategie :<br/>
								<textarea
								placeholder="strategie"
								name="strategie"
								rows="1"
								cols="95"
								value={this.state.strategie}
								onChange={this.handleChange}/>
							</label><br/>
							<label className='adminLabel'>
								Action :<br/>
								<textarea
								placeholder="action"
								name="action"
								rows="1"
								cols="95"
								value={this.state.action}
								onChange={this.handleChange}/>
							</label><br/>
							<label className='adminLabel'>
								Victoire :<br/>
								<textarea
								placeholder="victoire"
								name="victoire"
								rows="1"
								cols="95"
								value={this.state.victoire}
								onChange={this.handleChange}/>
							</label><br/>
							<label className='adminLabel'>
								Anecdote :<br/>
								<textarea
								placeholder="anecdote"
								name="anecdote"
								rows="1"
								cols="95"
								value={this.state.anecdote}
								onChange={this.handleChange}/>
							</label><br/>
							<label className='adminLabel'>
								Citation :<br/>
								<textarea
								placeholder="citation"
								name="citation"
								rows="1"
								cols="95"
								value={this.state.citation}
								onChange={this.handleChange}/>
							</label><br/>
							<label className='adminLabel'>
								Question :<br/>
								<textarea
								placeholder="question"
								name="question"
								rows="1"
								cols="95"
								value={this.state.question}
								onChange={this.handleChange}/>
							</label><br/>
							<label className='adminLabel'>
								Première réponse (la réponse correcte) :<br/>
								<textarea
								placeholder="réponse 1"
								name="reponse1"
								rows="1"
								cols="95"
								value={this.state.reponse1}
								onChange={this.handleChange}/>
							</label><br/>
							<label className='adminLabel'>
								Deuxième réponse :<br/>
								<textarea
								placeholder="réponse 2"
								name="reponse2"
								rows="1"
								cols="95"
								value={this.state.reponse2}
								onChange={this.handleChange}/>
							</label><br/>
							<label className='adminLabel'> 
								Troisième réponse :<br/>
								<textarea
								placeholder="réponse 3"
								name="reponse3"
								rows="1"
								cols="95"
								value={this.state.reponse3}
								onChange={this.handleChange}/>
							</label><br/>
							<label className='adminLabel'>
								Video :<br/>
								<textarea
								placeholder="vidéo"
								name="video"
								rows="1"
								cols="95"
								value={this.state.video}
								onChange={this.handleChange}/>
							</label><br/>
							<label className='adminLabel'>
								Article :<br/>
								<textarea
								placeholder="article"
								name="article"
								rows="1"
								cols="95"
								value={this.state.article}
								onChange={this.handleChange}/>
							</label><br/>
							<input type="submit" className="btnLogin" value="Enregistrer" />
						</form>
					</div>
				</div>
			)
		} else {
		}
	}
}

export default Administration;
