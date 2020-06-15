import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';

import image from './../../../../../public/img/800x480.png';

export default class WeaponsCreate extends Component {

    constructor(props) {
        super(props);

        this.state = {
            name: '',
            image: [],
            precision: 50,
            scope: 50,
            hurt: 50
        };

        this.handleInputChange = this.handleInputChange.bind(this);
        this.handleInputFile = this.handleInputFile.bind(this);
        this.saveButton = this.saveButton.bind(this);
    }

    handleInputChange(event) {
        const target = event.target;
        const value = target.type === 'checkbox' ? target.checked : target.value ? target.type === 'number' ? parseInt(target.value) : target.value : target.value;
        const name = target.name;

        this.setState({
            [name]: value
        });
    }

    handleInputFile(event) {
        var img = event.target.files[0];
        const fileName = document.querySelector('#file-js-example .file-name');
        fileName.textContent = img.name;
        const image = document.getElementById('image');
        image.src = URL.createObjectURL(img);

        this.setState({
            [event.target.name]: img
        });
    }

    saveButton() {
        const data = new FormData()
        data.append('image', this.state.image);
        data.append('name', this.state.name);
        data.append('precision', this.state.precision);
        data.append('scope', this.state.scope);
        data.append('hurt', this.state.hurt);

        axios.post('http://127.0.0.1:8000/api/weapons', data)
            .then(response => {
                alert('Todo correcto compa!');
                console.log(response);
            }).catch(error => {
                alert('Algo fallo');
                console.error(error);
            });
    }

    render() {
        return (
            <div className="container is-fluid">
                <div className="has-text-right">
                    <a href="/weapons" className="button is-danger is-rounded">
                        <i className="fas fa-chevron-left"></i> Volver
                    </a>
                </div>
                <div className="has-text-centered">
                    <h2 className="title is-2">Crear una nueva arma.</h2>
                </div>
                <form action="#">
                    <div className="field">
                        <label className="label">Nombre</label>
                        <div className="control">
                            <input className="input is-success" type="text" name="name" value={this.state.name} onChange={this.handleInputChange} />
                        </div>
                    </div>

                    <div className="columns">
                        <div className="column">
                            <figure className="image is-5by3">
                                <img id="image" src={image} />
                            </figure>
                        </div>

                        <div className="column">
                            <div id="file-js-example" className="file is-primary has-name">
                                <label className="file-label">
                                    <input className="file-input" type="file" accept="image/x-png,image/jpeg" name="image" onChange={this.handleInputFile} />
                                    <span className="file-cta">
                                        <span className="file-icon"><i className="fas fa-upload"></i></span>
                                        <span className="file-label">Agrega una imagen</span>
                                    </span>
                                    <span className="file-name">No hay archivo</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div className="columns">
                        <div className="column">
                            <div className="field">
                                <label className="label">Precisión.</label>
                                <div className="control">
                                    <input className="input is-success" type="number" max="100" min="0" name="precision" value={this.state.precision} onChange={this.handleInputChange} />
                                </div>
                            </div>
                        </div>
                        <div className="column">
                            <div className="field">
                                <label className="label">Alcance.</label>
                                <div className="control">
                                    <input className="input is-success" type="number" max="100" min="0" name="scope" value={this.state.scope} onChange={this.handleInputChange} />
                                </div>
                            </div>
                        </div>
                        <div className="column">
                            <div className="field">
                                <label className="label">Daño.</label>
                                <div className="control">
                                    <input className="input is-success" type="number" max="100" min="0" name="hurt" value={this.state.hurt} onChange={this.handleInputChange} />
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div className="control has-text-centered">
                    <button className="button is-primary m-5" type="button" onClick={this.saveButton}>Guardar</button>
                </div>
            </div>
        );
    }
}

if (document.getElementById('weaponsCreate')) {
    ReactDOM.render(<WeaponsCreate />, document.getElementById('weaponsCreate'));
}
