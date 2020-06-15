import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';

export default class WeaponsIndex extends Component {

    constructor(props) {
        super(props);

        this.state = {
            list: []
        };
        this.getList();
    }

    getList() {
        axios.get('http://127.0.0.1:8000/api/weapons')
            .then(response => {
                this.setState({
                    list: response.data.content
                });
            }).catch(error => {
                alert('Algo fallo');
                console.error(error);
            });
    }

    render() {
        return (
            <div className="container is-fluid">
                <div className="has-text-right">
                    <a href="/weapons/create" className="button is-success is-rounded">
                        <i className="fas fa-plus"></i> Nuevo
                    </a>
                </div>
                <div className="notification">
                    <div className="table-container">
                        <table className="table">
                            <thead>
                                <tr>
                                    <th>Orden</th>
                                    <th>Imagen</th>
                                    <th>Nombre</th>
                                    <th>Caracteristicas</th>
                                    <th>Fecha</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                {this.state.list.map((weapon, i) =>
                                    <tr key={weapon.id}>
                                        <td>{i + 1}</td>
                                        <td>
                                            <figure className="image is-5by3">
                                                <img id="image" src={'http://127.0.0.1:8000/uploads/images/' + weapon.image} />
                                            </figure>
                                        </td>
                                        <td>{weapon.name}</td>
                                        <td>
                                            <label>Precisión</label>
                                            <progress className="progress is-success" value={weapon.precision} max="100">{weapon.precision}%</progress>
                                            <label>Alcance</label>
                                            <progress className="progress is-warning" value={weapon.scope} max="100">{weapon.scope}%</progress>
                                            <label>Daño</label>
                                            <progress className="progress is-danger" value={weapon.hurt} max="100">{weapon.hurt}%</progress>
                                        </td>
                                        <td>
                                            <p><b>Creado el:</b>{weapon.created_at}</p>
                                            <p><b>Actualizado el:</b>{weapon.updated_at}</p>
                                        </td>
                                        <td>
                                            <a href={'weapons/edit/' + weapon.id} className="button is-warning">Editar</a>
                                            <a href={'weapons/delete/' + weapon.id} className="button is-danger">Eliminar</a>
                                        </td>
                                    </tr>
                                )}

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        );
    }
}

if (document.getElementById('weaponsIndex')) {
    ReactDOM.render(<WeaponsIndex />, document.getElementById('weaponsIndex'));
}
