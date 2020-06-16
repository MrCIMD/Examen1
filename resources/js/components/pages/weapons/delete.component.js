import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import axios from 'axios';

export default class WeaponsDelete extends Component {

    constructor(props) {
        super(props);

        this.state = {
            name: '',
            url: '',
            precision: 50,
            scope: 50,
            hurt: 50
        };

        this.getData = this.getData.bind(this);

        this.getData();
    }

    getData() {
        axios.get(`http://127.0.0.1:8000/api/weapons/${id_weapon}`)
            .then(response => {
                var weapon = response.data.content;
                this.setState({
                    name: weapon.name,
                    url: `http://127.0.0.1:8000/uploads/images/${weapon.image}`,
                    precision: weapon.precision,
                    scope: weapon.scope,
                    hurt: weapon.hurt
                });
            }).catch(error => {
                console.error(error);
            });
    }

    deleteButton() {
        console.log(id_weapon);
        axios.delete(`http://127.0.0.1:8000/api/weapons/${id_weapon}`)
            .then(response => {
                alert('!Eliminado¡');
                window.location.href = 'http://127.0.0.1:8000/weapons/';
            })
            .catch(error => {
                console.error(error);
            })
    }

    render() {
        return (
            <div className="container is-fluid">
                <div className="has-text-centered">
                    <h2 className="title is-2">¿Quieres eliminar {this.state.name}?</h2>
                </div>
                <div className="columns">
                    <div className="column">
                        <figure className="image is-5by3">
                            <img id="image" src={this.state.url} />
                        </figure>
                    </div>
                    <div className="column">
                        <label>Precisión</label>
                        <progress className="progress is-success" value={this.state.precision} max="100">{this.state.precision}%</progress>
                        <label>Alcance</label>
                        <progress className="progress is-warning" value={this.state.scope} max="100">{this.state.scope}%</progress>
                        <label>Daño</label>
                        <progress className="progress is-danger" value={this.state.hurt} max="100">{this.state.hurt}%</progress>
                    </div>
                </div>
                <div className="has-text-centered">
                    <a href="/weapons" className="button is-dark is-rounded">
                        ¡No, Volver!
                    </a>
                    <a className="button is-danger is-rounded" onClick={this.deleteButton}>
                        ¡Si, Eliminalo!
                    </a>
                </div>
            </div>
            // <div className="container is-fluid">
            //     <div className="has-text-right">
            //         <a href="/weapons" className="button is-danger is-rounded">
            //             <i className="fas fa-chevron-left"></i> Volver
            //         </a>
            //     </div>
            //     <div className="has-text-centered">
            //         <h2 className="title is-2">Editar arma.</h2>
            //     </div>
            //     <form action="#">
            //         <div className="field">
            //             <label className="label">Nombre</label>
            //             <div className="control">
            //                 <input className="input is-success" type="text" name="name" value={this.state.name} onChange={this.handleInputChange} />
            //             </div>
            //         </div>

            //         <div className="columns">
            //             <div className="column">
            //                 <figure className="image is-5by3">
            //                     <img id="image" src={this.state.url} />
            //                 </figure>
            //             </div>

            //             <div className="column">
            //                 <div id="file-js-example" className="file is-primary has-name">
            //                     <label className="file-label">
            //                         <input className="file-input" type="file" accept="image/x-png,image/jpeg" name="image" onChange={this.handleInputFile} />
            //                         <span className="file-cta">
            //                             <span className="file-icon"><i className="fas fa-upload"></i></span>
            //                             <span className="file-label">Agrega una imagen</span>
            //                         </span>
            //                         <span className="file-name">No hay archivo</span>
            //                     </label>
            //                 </div>
            //             </div>
            //         </div>

            //         <div className="columns">
            //             <div className="column">
            //                 <div className="field">
            //                     <label className="label">Precisión.</label>
            //                     <div className="control">
            //                         <input className="input is-success" type="number" max="100" min="0" name="precision" value={this.state.precision} onChange={this.handleInputChange} />
            //                     </div>
            //                 </div>
            //             </div>
            //             <div className="column">
            //                 <div className="field">
            //                     <label className="label">Alcance.</label>
            //                     <div className="control">
            //                         <input className="input is-success" type="number" max="100" min="0" name="scope" value={this.state.scope} onChange={this.handleInputChange} />
            //                     </div>
            //                 </div>
            //             </div>
            //             <div className="column">
            //                 <div className="field">
            //                     <label className="label">Daño.</label>
            //                     <div className="control">
            //                         <input className="input is-success" type="number" max="100" min="0" name="hurt" value={this.state.hurt} onChange={this.handleInputChange} />
            //                     </div>
            //                 </div>
            //             </div>
            //         </div>
            //     </form>
            //     <div className="control has-text-centered">
            //         <button className="button is-primary m-5" type="button" onClick={this.saveButton}>Guardar</button>
            //     </div>
            // </div>
        );
    }
}

if (document.getElementById('weaponsDelete')) {
    ReactDOM.render(<WeaponsDelete />, document.getElementById('weaponsDelete'));
}
