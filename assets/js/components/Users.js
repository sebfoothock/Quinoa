import React, {Component} from 'react';
import axios from 'axios';

class Users extends Component {
	state = {
		persons: []
	}

	componentDidMount() {
		axios.get(`/api/users/`)
			.then(res => {
				const persons = res.data;
				this.setState({ persons });
			})
	}

	render() {
		return (
			<ul>
				{ this.state.persons.map(person => <li>{person.pseudo}</li>)}
			</ul>
		)
	}
}

export default Users;