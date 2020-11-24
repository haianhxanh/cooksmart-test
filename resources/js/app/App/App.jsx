import React from 'react';
import Banner from '../Banner/Banner.jsx';
import {BrowserRouter as Router, Route, Switch, Link} from "react-router-dom";
import Search from '../Search/Search.jsx';
import About from '../About/About.jsx';


function App() {
    return (

        <Router>
            <Switch>
                <Route exact path="/" children={<Banner />}/>
                <Route path="/search" > 
                    <Search />
                </Route>
                <Route path="/about" >
                    <About />
                </Route>
            </Switch>
        </Router>

    )
}
export default App