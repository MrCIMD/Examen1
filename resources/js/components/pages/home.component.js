import React from 'react';
import ReactDOM from 'react-dom';

function Home() {
    return (
        <section className="container">
            <div className="hero-body">
                <div className="container">
                    <h1 className="title">Hola mundo desde React</h1>
                    <h2 className="subtitle">Soy un componente de React</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore quibusdam, nesciunt vitae repudiandae, harum velit non dicta est facilis provident amet ratione iure facere natus culpa eveniet, quisquam quos unde.
                </p>
                </div>
            </div>
        </section>
    );
}

export default Home;

if (document.getElementById('home')) {
    ReactDOM.render(<Home />, document.getElementById('home'));
}
