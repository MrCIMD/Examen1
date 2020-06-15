import React from 'react';
import ReactDOM from 'react-dom';
import image from './../../../../public/img/gta-online.png';

function LayoutHeader() {
    return (
        <nav className="navbar" role="navigation" aria-label="main navigation">
            <div className="navbar-brand">
                <a className="navbar-item" href="https://bulma.io">
                    <img src={image} width="28" height="28" />
                </a>
                <a role="button" className="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>
            <div id="navbarBasicExample" className="navbar-menu">
                <div className="navbar-start">
                    <a className="navbar-item" href="/">Home</a>
                    <a className="navbar-item" href="/weapons">Weapons</a>
                </div>
                <div className="navbar-end">
                    <div className="navbar-item">
                        <div className="buttons">
                            <a className="button is-primary"><strong>Sign up</strong></a>
                            <a className="button is-light">Log in</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    );
}

export default LayoutHeader;

if (document.getElementById('layoutHeader')) {
    ReactDOM.render(<LayoutHeader />, document.getElementById('layoutHeader'));
}
